<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Afiliats Controller
 *
 * @property \App\Model\Table\AfiliatsTable $Afiliats
 * @method \App\Model\Entity\Afiliat[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AfiliatsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $afiliats = $this->paginate($this->Afiliats);

        $this->set(compact('afiliats'));
    }

    /**
     * View method
     *
     * @param string|null $id Afiliat id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $afiliat = $this->Afiliats->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('afiliat'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $afiliat = $this->Afiliats->newEmptyEntity();
        if ($this->request->is('post')) {
            $afiliat = $this->Afiliats->patchEntity($afiliat, $this->request->getData());
            if ($this->Afiliats->save($afiliat)) {
                $this->Flash->success(__('The afiliat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The afiliat could not be saved. Please, try again.'));
        }
        $this->set(compact('afiliat'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Afiliat id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $afiliat = $this->Afiliats->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $afiliat = $this->Afiliats->patchEntity($afiliat, $this->request->getData());
            if ($this->Afiliats->save($afiliat)) {
                $this->Flash->success(__('The afiliat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The afiliat could not be saved. Please, try again.'));
        }
        $this->set(compact('afiliat'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Afiliat id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $afiliat = $this->Afiliats->get($id);
        if ($this->Afiliats->delete($afiliat)) {
            $this->Flash->success(__('The afiliat has been deleted.'));
        } else {
            $this->Flash->error(__('The afiliat could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
 /**
     * Import method
     *
     * @param string|null $id Afiliat id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function import()
    {
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            if ($this->Centres->import($data['csv']))
            {
                $this->Flash->success(__('All afiliats have been imported.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Afiliats data could not be imported. Please, try again'));
        }
    }

    /**
     * Search method
     *
     * @param string|null $id afiliat id
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function search() {
        if ($this->request->is('post')) {
            $data = $this->request->getData();

            // Remove empty array elements
            $data = array_filter($data, fn($value) => !is_null($value) && $value !== '');
            
            foreach ($data as $k=>$v) {
                $searchFilter['Afiliats.'.$k] = $v;
            }
            
            if ($searchFilter == null || empty($searchFilter)) {
                return $this->redirect(['action' => 'index']);
            }

            $query = $this->Centres->find('all')
                ->where($searchFilter)
                ->limit(100);

            $number = $query->count();

            if ($number <= 0) {
                $this->Flash->error(__('Cannot find any afiliat! Please, try again.'));
            }
            else if ($number == 1) {
                $row = $query->first();
                return $this->redirect(['action' => 'view', $row['id']]);
            }
            else {
                // Show search results
                $session = $this->getRequest()->getSession()->write('SearchFilter', $searchFilter);
                return $this->redirect(['action' => 'index']);
            }
        }
        //$this->set(compact('naturaleses', 'titularitats', 'municipis', 'districtes', 'localitats', 'estudis'));
        $this->set(compact('afiliats'));
    }
}
