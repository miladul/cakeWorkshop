<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Services Controller
 *
 * @property \App\Model\Table\ServicesTable $Services
 *
 * @method \App\Model\Entity\Service[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ServicesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $user = $this->Auth->user();

        if($user['role']=='user'){
            $services = $this->paginate($this->Services->find()->where(['user_id'=>$user['id']]));
        }else{
            $services = $this->paginate($this->Services->find());
        }




        $this->set(compact('services'));
    }

    /**
     * View method
     *
     * @param string|null $id Service id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $service = $this->Services->get($id, [
            'contain' => ['Users']
        ]);

        $authUser = $this->Auth->user();

        if(!empty($service)){
            $createdBy = $service['user_id'];
            //echo $authUser['role'];

            if(!($authUser['id']==$createdBy OR $authUser['role']=='admin')){
                $this->Flash->error(__('You have no permission to view this place'));
                return $this->redirect(['controller'=>'Users','action' => 'user-dashboard']);
            }
        }else{
            //$this->Flash->error(__('Data not found'));
            //return $this->redirect(['controller'=>'Users','action' => 'user-dashboard']);
        }

        $this->loadModel('Organizations');
        $organizations = $this->Organizations->find()->where(['user_id'=>$service['user_id']])->first();

        $this->set('service', $service);
        $this->set(compact('authUser','organizations'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $service = $this->Services->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Auth->user();
            $data = $this->request->getData();
            //pr($data);die;
            $data['user_id'] = $user['id'];

            if(!empty($data['type'])){
                $type = implode(",",$data['type']);
                $data['type']=$type;
            }else{
                $this->Flash->error(__('Please select service type'));
                return $this->redirect(['controller'=>'services','action' => 'add']);
            }

            if(!empty($data['technology'])){
                $technology = implode(",",$data['technology']);
                $data['technology']=$technology;
            }

            if(!empty($data['access_point'])){
                $access_point = implode(",",$data['access_point']);
                $data['access_point']=$access_point;
            }


            if(!empty($data['payment'])){
                $payment = implode(",",$data['payment']);
                $data['payment']=$payment;
            }else{
                $this->Flash->error(__('Please select payment method'));
                return $this->redirect(['controller'=>'services','action' => 'add']);
            }



            //pr($data);die;
            $service = $this->Services->patchEntity($service, $data);
            if ($this->Services->save($service)) {
                $this->Flash->success(__('The new service has been added.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The service could not be saved. Please, try again.'));
        }
        $users = $this->Services->Users->find('list', ['limit' => 200]);
        $this->set(compact('service', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Service id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $service = $this->Services->get($id, [
            'contain' => []
        ]);

        $authUser = $this->Auth->user();
        $createdBy = $service['user_id'];

        if($authUser['id']!=$createdBy){
            $this->Flash->error(__('You have no permission to edit this place'));
            return $this->redirect(['controller'=>'Users','action' => 'user-dashboard']);
        }

        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            //pr($data);die;
            $data['updated_by'] = $authUser['id'];

            if(!empty($data['type'])){
                $type = implode(",",$data['type']);
                $data['type']=$type;
            }else{
                $this->Flash->error(__('Please select service type'));
                return $this->redirect(['controller'=>'services','action' => 'user-dashboard']);
            }
            if($data['eservice']=='yes'){
                echo 'E service yes';
            }else{
                $data['access_url']='';
                $data['technology']='';
                $data['no_of_user']='';
                $data['major_features']='';
                $data['access_point']='';
            }



            if(!empty($data['technology'])){
                $technology = implode(",",$data['technology']);
                $data['technology']=$technology;
            }

            if(!empty($data['access_point'])){
                $access_point = implode(",",$data['access_point']);
                $data['access_point']=$access_point;
            }


            if(!empty($data['payment'])){
                $payment = implode(",",$data['payment']);
                $data['payment']=$payment;
            }else{
                $this->Flash->error(__('Please select payment method'));
                return $this->redirect(['controller'=>'users','action' => 'user-dashboard']);
            }

            $data['updated_at']=date('y-m-d h:i:s');
            //pr($data);die;
            $service = $this->Services->patchEntity($service, $data);
            //pr($service);die;
            if ($this->Services->save($service)) {
                $this->Flash->success(__('The service has been saved.'));

                return $this->redirect(['controller'=>'users','action' => 'user-dashboard']);
            }
            $this->Flash->error(__('The service could not be saved. Please, try again.'));
        }
        $users = $this->Services->Users->find('list', ['limit' => 200]);
        $this->set(compact('service', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Service id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $service = $this->Services->get($id);
        if ($this->Services->delete($service)) {
            $this->Flash->success(__('The service has been deleted.'));
        } else {
            $this->Flash->error(__('The service could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
