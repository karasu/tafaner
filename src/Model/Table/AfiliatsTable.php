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

        return $validator;
    }
}
