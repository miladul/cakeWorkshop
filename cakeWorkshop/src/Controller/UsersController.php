<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $user = $this->Auth->user();
        if($user['role']=='admin'){
            $users = $this->paginate($this->Users);

            $this->set(compact('users'));
        }else{
            $this->Flash->error(__('You have no permission to access this page'));
            return $this->redirect(array('controller' => 'users', 'action' => 'user_dashboard' ));
        }
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        //deny user for view other users
        $user = $this->Auth->user();
        if(!($user['id']==$id OR $user['role']=='admin')){
            $this->Flash->error(__('You have no permission to access this page'));
            return $this->redirect(array('controller' => 'users', 'action' => 'user_dashboard' ));
        }

        $user = $this->Users->get($id, [
            'contain' => ['Organizations']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Auth->user();
        if($user['role']=='admin'){
            $user = $this->Users->newEntity();
            if ($this->request->is('post')) {
                $user = $this->Users->patchEntity($user, $this->request->getData());
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('The user has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
            $this->set(compact('user'));
        }else{
            $this->Flash->error(__('You have no permission to access this page'));
            return $this->redirect(array('controller' => 'users', 'action' => 'user_dashboard' ));
        }


    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Auth->user();
        if(!($user['id']==$id OR $user['role']=='admin')){
            $this->Flash->error(__('You have no permission to access this page'));
            return $this->redirect(array('controller' => 'users', 'action' => 'user_dashboard' ));
        }

        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['controller'=>'users','action' => 'admin']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    //login
    public function login()
    {
        $this->viewBuilder()->setLayout('login-layout');
        if($this->request->is('post')){
            $data=$this->request->getData();
            $user = $this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                $authUser = $this->Auth->user();
                if($authUser['role']=='admin'){
                    return $this->redirect(array('controller' => 'users', 'action' => 'admin' ));
                }else{
                    return $this->redirect(array('controller' => 'users', 'action' => 'user_dashboard' ));
                }
            }else{
                $this->Flash->error(__('Something error, try again'));
            }


        }
    }

    //Admin dashboard
    public function admin()
    {
        $user = $this->Auth->user();
        if($user['role']=='admin'){
            $users = $this->paginate($this->Users);
            $this->set(compact('users'));
        }else{
            $this->Flash->error(__('You have no permission to access this page'));
            return $this->redirect(array('controller' => 'users', 'action' => 'user_dashboard' ));

        }
        //pr($user);die;


    }
    //User dashboard
    public function userDashboard()
    {
        $user = $this->Auth->user();
        if($user['role']!='user'){
            $this->Flash->error(__('You have no permission to access this page'));
            return $this->redirect(array('controller' => 'users', 'action' => 'admin' ));
        }

        $this->loadModel('Services');
        $this->paginate = [
            'contain' => ['Users']
        ];
        $user = $this->Auth->user();
        $services = $this->paginate($this->Services->find()->where(['user_id'=>$user['id']]));
        $this->set(compact('services'));

    }
    //logout
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
    public function changeUserPassword()
    {
        if($this->request->is('post')){
            $data = $this->request->getData();
            if($data['password']==$data['cpassword'] AND strlen($data['password'])>=4){
                $userAuth = $this->Auth->user();
                $user = $this->Users->get($userAuth['id'], [
                    'contain' => []
                ]);
                $user = $this->Users->patchEntity($user, $data);
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('Your password has been changed.'));

                    return $this->redirect(['controller'=>'users','action' => 'user-dashboard']);
                }
                $this->Flash->error(__('The user could not be saved. Please, try again.'));

            }else{
                $this->Flash->error(__('Need minimum 4 digit password and Match confirm password'));
            }
        }

    }

    //view-my-profile
    public function viewMyProfile()
    {
        //deny user for view other users
        $user = $this->Auth->user();
        /*if(!($user['id']==$id OR $user['role']=='admin')){
            $this->Flash->error(__('You have no permission to access this page'));
            return $this->redirect(array('controller' => 'users', 'action' => 'user_dashboard' ));
        }*/

        $user = $this->Users->get($user['id'], [
            'contain' => ['Organizations']
        ]);

        $this->set('user', $user);

    }
}
