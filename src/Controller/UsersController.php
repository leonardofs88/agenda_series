<?php
namespace App\Controller;

class UsersController extends AppController{

	public function index(){
		$lista = $this->Users->find('all')
		                     ->order(['name'=>'ASC'])
		                     ->toArray();

		$this->set(compact('lista'));
    }

    public function add(){
    	if ($this->request->is('POST')) {
    		$save = $this->Users->newEntity();
    		$save = $this->Users->patchEntity($save,$this->request->data);
    		if ($this->Users->save($save)) {
                $this->Flash->success('Registro completado com sucesso.');
                return $this->redirect(['action' => 'index']);
    		}
    		$this->Flash->error('Um erro ocorreu.');
    	}
    }

    public function edit($id) {

    	$user = $this->Users->get($id);

		if ($this->request->is('PUT')) {
       		$user = $this->Users->patchEntity($user,$this->request->data);
    		if ($this->Users->save($user)) {
                $this->Flash->success('Registro editado com sucesso.');
                return $this->redirect(['action' => 'index']);
    		}
    		$this->Flash->error('Um erro ocorreu.');
    	}

		$this->set(compact('user'));
    }

    public function delete($id) {

    	$this->viewBuilder()->layout('ajax');
        $this->request->allowMethod(['post', 'delete']);
    	$user = $this->Users->get($id);

    	if ($this->Users->delete($user)){
			$this->Flash->success('Registro deletado com sucesso.');
			return $this->redirect(['action' => 'index']);
    	}
    	$this->Flash->error('Um erro ocorreu.');
    }
}
?>