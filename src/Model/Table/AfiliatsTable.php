<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Afiliats Model
 *
 * @method \App\Model\Entity\Afiliat newEmptyEntity()
 * @method \App\Model\Entity\Afiliat newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Afiliat[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Afiliat get($primaryKey, $options = [])
 * @method \App\Model\Entity\Afiliat findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Afiliat patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Afiliat[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Afiliat|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Afiliat saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Afiliat[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Afiliat[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Afiliat[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Afiliat[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AfiliatsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('afiliats');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('num')
            ->allowEmptyString('num');

        $validator
            ->scalar('sexe')
            ->maxLength('sexe', 1)
            ->allowEmptyString('sexe');

        $validator
            ->date('data_naixement')
            ->allowEmptyDate('data_naixement');

        $validator
            ->scalar('codi_postal')
            ->maxLength('codi_postal', 6)
            ->allowEmptyString('codi_postal');

        $validator
            ->scalar('poblacio')
            ->maxLength('poblacio', 45)
            ->allowEmptyString('poblacio');

        $validator
            ->scalar('comarca')
            ->maxLength('comarca', 45)
            ->allowEmptyString('comarca');

        $validator
            ->scalar('provincia')
            ->maxLength('provincia', 45)
            ->allowEmptyString('provincia');

        $validator
            ->scalar('pais')
            ->maxLength('pais', 45)
            ->allowEmptyString('pais');

        $validator
            ->date('data_afiliacio')
            ->allowEmptyDate('data_afiliacio');

        $validator
            ->scalar('centre_treball')
            ->maxLength('centre_treball', 255)
            ->allowEmptyString('centre_treball');

        $validator
            ->scalar('federacio')
            ->maxLength('federacio', 45)
            ->allowEmptyString('federacio');

        $validator
            ->scalar('sectorial')
            ->maxLength('sectorial', 45)
            ->allowEmptyString('sectorial');

        $validator
            ->scalar('activitat')
            ->maxLength('activitat', 45)
            ->allowEmptyString('activitat');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('situacio_personal')
            ->maxLength('situacio_personal', 45)
            ->allowEmptyString('situacio_personal');

        $validator
            ->scalar('relacio')
            ->maxLength('relacio', 45)
            ->allowEmptyString('relacio');

        $validator
            ->scalar('grup')
            ->maxLength('grup', 45)
            ->allowEmptyString('grup');

        $validator
            ->scalar('situacio')
            ->maxLength('situacio', 45)
            ->allowEmptyString('situacio');

        $validator
            ->scalar('delegat')
            ->maxLength('delegat', 45)
            ->allowEmptyString('delegat');

        $validator
            ->scalar('empresa')
            ->maxLength('empresa', 45)
            ->allowEmptyString('empresa');

        $validator
            ->scalar('email_professional')
            ->maxLength('email_professional', 45)
            ->allowEmptyString('email_professional');

        $validator
            ->scalar('territorial')
            ->maxLength('territorial', 45)
            ->allowEmptyString('territorial');

        $validator
            ->scalar('ocupacio')
            ->maxLength('ocupacio', 45)
            ->allowEmptyString('ocupacio');

        $validator
            ->scalar('tipus_treballador')
            ->maxLength('tipus_treballador', 45)
            ->allowEmptyString('tipus_treballador');

        $validator
            ->scalar('cos_docent')
            ->maxLength('cos_docent', 45)
            ->allowEmptyString('cos_docent');

        $validator
            ->scalar('seccio_sindical')
            ->maxLength('seccio_sindical', 45)
            ->allowEmptyString('seccio_sindical');

        return $validator;
    }
    
    public function import($uploadedFile) : bool
    {
        // Check that the upload was ok and the uploaded file is a csv one
        if ($uploadedFile->getError() != 0 || $uploadedFile->getClientMediaType() != 'text/csv')
        {
            return false;
        }

        // move file
        $filename = '/tmp/afiliats-import.csv';
        $uploadedFile->moveTo($filename);

        // open file
        $file = new SplFileObject($filename);
        $file->setFlags(SplFileObject::READ_CSV | SplFileObject::READ_AHEAD | SplFileObject::SKIP_EMPTY | SplFileObject::DROP_NEW_LINE);
        $file->setCsvControl(';');

        $header = $file->fgetcsv();

        // Codi centre	Denominació completa	Codi naturalesa	Nom naturalesa	Codi titularitat	Nom titularitat	Adreça	Codi postal
        // Telèfon	FAX	Codi delegació	Nom delegació	Codi comarca	Nom comarca	Codi municipi	Nom municipi	Codi districte municipal
        // Nom DM	Codi localitat	Nom localitat	Zona educativa	Coordenades UTM X	Coordenades UTM Y	Coordenades GEO X	Coordenades GEO Y
        // E-mail centre

        $dat = array();
        while (!$file->eof()) {
            $row = $file->fgetcsv();
            // for each header field
 			foreach ($header as $k=>$head) {
                // $head = mb_convert_encoding($head, "UTF-8", "ISO-8859-1");
                if (isset($row[$k])) {
                    // $value = mb_convert_encoding($row[$k], "UTF-8", "ISO-8859-1");
                    $value = $row[$k];
                    if ($head == 'Id') {
                        // csv should use quotes for this one
                        $dat['id'] = $value;
                    //} else if ($head == 'Nom') {
                    //    $dat['nom'] = $value;
                    } else if ($head == 'Nº afiliat') {
                        $dat['num'] = intval($value);
                    //} else if ($head == 'NIF') {
                    //    $dat['nif'] = intval($value);
                    } else if ($head == 'Sexe') {
                        $dat['sexe'] = $value;
                    } else if ($head == 'Data naixement') {
                        $dat['data_naixement'] = $value;
                    //} else if ($head == 'Adreça') {
                    //    $dat['adreca'] = $value;
                    } else if ($head == 'Codi Postal') {
                        $dat['codi_postal'] = $value;
                    } else if ($head == 'Població') {
                        $dat['poblacio'] = $value;
                    } else if ($head == 'Comarca') {              
                        $dat['comarca'] = $value;
                    } else if ($head == 'Província') {
                        $dat['provincia'] = $value;
                    } else if ($head == 'País') {
                        $dat['pais'] = $value;
                    //} else if ($head == 'Telèfons') {
                    //    $dat['telefons'] = $value;
                    } else if ($head == 'eMail personal') {
                        $dat['email'] = $value;
                    } else if ($head == 'Situació personal') {
                        $dat['situacio_personal'] = $value;
                    //} else if ($head == 'Comentaris') {
                    //    $dat['comentaris'] = $value;
                    } else if ($head == 'Relació') {
                        $dat['relacio'] = $var;
                    } else if ($head == 'Data afiliació') {
                        $dat['data_afiliacio'] = $var;
                    //} else if ($head == 'Forma pagament') {
                    //    $dat['forma_pagament'] = $var;
                    //} else if ($head == 'Número retorns') {
                    //    $dat['numero_retorns'] = $var;
                    //} else if ($head == 'Tipus quota') {
                    //    $dat['tipus_quota'] = $var;
                    //} else if ($head == 'IBAN') {
                    //    $dat['iban'] = $var;
                    //} else if ($head == 'Import quota') {
                    //    $dat['quota'] = $var;
                    } else if ($head == 'Grup de treball') {
                        $dat['grup'] = $var;
                    } else if ($head == 'Situació') {
                        $dat['situacio'] = $var;
                    } else if ($head == 'Delegat') {
                        $dat['delegat'] = $var;
                    } else if ($head == 'Empresa') {
                        $dat['empresa'] = $var;
                    } else if ($head == 'Centre de treball') {
                        $dat['centre_treball'] = $var;
                    } else if ($head == 'eMail professional') {
                        $dat['email_professional'] = $var;
                    } else if ($head == 'Federació') {
                        $dat['federacio'] = $var;
                    } else if ($head == 'Sectorial') {
                        $dat['sectorial'] = $var;
                    } else if ($head == 'Activitat econòmica') {
                        $dat['activitat'] = $var;
                    } else if ($head == 'Territorial') {
                        $dat['territorial'] = $var;
                    } else if ($head == 'Ocupació') {
                        $dat['ocupacio'] = $var;
                    } else if ($head == 'Tipus treballador') {
                        $dat['tipus_treballador'] = $var;
                    } else if ($head == 'Cos docent (EDU)') {
                        $dat['cos_docent'] = $var;
                    } else if ($head == 'Té secció sindical') {
                        $dat['seccio_sindical'] = $var;
                    // } else if ($head == 'Comunicar empresa') {
                    //    $dat['comunicar_empresa'] = $var;
                    //} else if ($head == 'CPI') {
                    //    $dat['cpi'] = $var;
                    //} else if ($head == 'eMail tramesa') {
                    //    $dat['email_tramesa'] = $var;
                    }
                }
            }                

            if (isset($dat['codi'])) {
                try {
                    // Busca el centre de codi $dat['codi']
                    $query = $this->find('all')
                        ->where(['codi =' => $dat['codi']])
                        ->limit(1);
                    // Executem la consulta i passem el resultat a un array
                    $olddata = $query->toArray();
                    // debug($dat['codi']);
                    // debug($olddata);
                    if (!empty($olddata)) {
                        // Obté el centre amb el id que correspon al $dat['codi']
                        $centre = $this->get($olddata[0]['id']);
                        // debug($centre);
                    }
                    else {
                        $centre = $this->newEmptyEntity();
                    }
                } catch (RecordNotFoundException $e) {
                    $centre = $this->newEmptyEntity();
                } catch (InvalidPrimaryKeyException $e) {
                    $centre = $this->newEmptyEntity();
                }

                if (isset($localitat_codi)) {
                    // Obté el id de la localitat (al csv hi ha un codi que no és únic)
                    $localitat_id = $this->getLocalitatId($localitat_codi, $dat['municipi_id']);
                    if ($localitat_id != -1) {
                        $dat['localitat_id'] = $localitat_id;
                        // debug($dat['localitat_id']);
                    }
                }

                // Posem els valors de l'array a la taula
                $centre->set($dat);

                if (!$this->save($centre)) {
                    // No podem guardar el registre. Error!
                    debug($centre->getErrors());
                    $file = null;
                    return false;
                }
            }
            
            $dat = array();
        }
        $file = null;
        return true;
    } 
}
