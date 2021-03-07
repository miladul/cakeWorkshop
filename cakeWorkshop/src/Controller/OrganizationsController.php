<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Organizations Controller
 *
 * @property \App\Model\Table\OrganizationsTable $Organizations
 *
 * @method \App\Model\Entity\Organization[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrganizationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {

        $user = $this->Auth->user();
        if(!($user['role']=='admin')){
            $this->Flash->error(__('You have no permission to access this page'));
            return $this->redirect(array('controller' => 'users', 'action' => 'user_dashboard' ));
        }


        $this->paginate = [
            'contain' => ['Users']
        ];
        $organizations = $this->paginate($this->Organizations);

        $this->set(compact('organizations'));
    }

    /**
     * View method
     *
     * @param string|null $id Organization id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->layout="default2";
        //deny normal user for view
        $user = $this->Auth->user();
        if(!($user['role']=='admin')){
            $this->Flash->error(__('You have no permission to access this page'));
            return $this->redirect(array('controller' => 'users', 'action' => 'user_dashboard' ));
        }

        //allow admin for view
        $organization = $this->Organizations->get($id, [
            'contain' => ['Users']
        ]);
        $organization['user_id'];
        //pr($organization);die;


        $this->loadModel('Services');
        $services = $this->paginate($this->Services->find()->where(['user_id'=>$organization['user_id']]));
        //$services = $this->Services->find()->where(['user_id'=>$organization['user_id']]);
        //pr($services);die;


        $this->set('organization', $organization);
        $this->set(compact('services'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        //deny normal user for add
        $user = $this->Auth->user();
        if(!($user['role']=='admin')){
            $this->Flash->error(__('You have no permission to access this page'));
            return $this->redirect(array('controller' => 'users', 'action' => 'user_dashboard' ));
        }

        //allow admin for edit
        $this->loadModel('Users');
        $organization = $this->Organizations->newEntity();
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            //pr($data);die;
            $data['username'] = $data['focal_person_email'];
            $data['password'] = $data['focal_person_phone'];
            if(!$data['organization_type']){
                $org_type_error = $this->Flash->error(__('Please select organization type'));
                return $this->redirect(['action' => 'add']);
            }




            //pr($data);die;
            $user = $this->Users->patchEntity($user, $data);
            //pr($user);die;
            if ($this->Users->save($user)) {
                $lastUserId = $this->Users->find('all', array( 'limit' => 1, 'order' => 'id DESC'))->first();
                $data['user_id'] = $lastUserId['id'];
                $organization = $this->Organizations->patchEntity($organization, $data);
                //pr($organization);die;
                if ($this->Organizations->save($organization)) {
                    $this->Flash->success(__('The organization has been saved. Also a new user created'));
                    return $this->redirect(['action' => 'index']);
                }
            }
            $this->Flash->error(__('The organization could not be saved. Please, try again.'));
        }
        $users = $this->Organizations->Users->find('list', ['limit' => 200]);
        $this->set(compact('organization', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Organization id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        //deny normal user for edit
        $user = $this->Auth->user();
        if(!($user['role']=='admin')){
            $this->Flash->error(__('You have no permission to access this page'));
            return $this->redirect(array('controller' => 'users', 'action' => 'user_dashboard' ));
        }

        //allow admin for edit
        $organization = $this->Organizations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $data['updated_at'] = date('y-m-d H:i:s');
            $organization = $this->Organizations->patchEntity($organization, $data);
            if ($this->Organizations->save($organization)) {
                $this->Flash->success(__('The organization has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organization could not be saved. Please, try again.'));
        }
        $users = $this->Organizations->Users->find('list', ['limit' => 200]);
        $this->set(compact('organization', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Organization id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $organization = $this->Organizations->get($id);
        if ($this->Organizations->delete($organization)) {
            $this->Flash->success(__('The organization has been deleted.'));
        } else {
            $this->Flash->error(__('The organization could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
