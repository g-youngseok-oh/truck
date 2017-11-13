<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MCategory Controller
 *
 * @property \App\Model\Table\MCategoryTable $MCategory
 *
 * @method \App\Model\Entity\MCategory[] paginate($object = null, array $settings = [])
 */
class MCategoryController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $mCategory = $this->paginate($this->MCategory);

        $this->set(compact('mCategory'));
        $this->set('_serialize', ['mCategory']);
    }

    /**
     * View method
     *
     * @param string|null $id M Category id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mCategory = $this->MCategory->get($id, [
            'contain' => []
        ]);

        $this->set('mCategory', $mCategory);
        $this->set('_serialize', ['mCategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mCategory = $this->MCategory->newEntity();
        if ($this->request->is('post')) {
            $mCategory = $this->MCategory->patchEntity($mCategory, $this->request->getData());
            if ($this->MCategory->save($mCategory)) {
                $this->Flash->success(__('The m category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The m category could not be saved. Please, try again.'));
        }
        $this->set(compact('mCategory'));
        $this->set('_serialize', ['mCategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id M Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mCategory = $this->MCategory->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mCategory = $this->MCategory->patchEntity($mCategory, $this->request->getData());
            if ($this->MCategory->save($mCategory)) {
                $this->Flash->success(__('The m category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The m category could not be saved. Please, try again.'));
        }
        $this->set(compact('mCategory'));
        $this->set('_serialize', ['mCategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id M Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mCategory = $this->MCategory->get($id);
        if ($this->MCategory->delete($mCategory)) {
            $this->Flash->success(__('The m category has been deleted.'));
        } else {
            $this->Flash->error(__('The m category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
