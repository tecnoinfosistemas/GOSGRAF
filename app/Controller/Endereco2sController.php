<?php
App::uses('AppController', 'Controller');
/**
 * Clientes Controller
 */
class Endereco2sController extends AppController {
	//public $helpers = array('Html', 'Form', 'Flash');
	public $helpers = array('Html', 'Form');
	//public $components = array('Flash');

	public $name = 'endereco2s';

	public function index() {

		if (!empty($_POST['id'])) {
			$id = $_POST['id'];
			$this->paginate = array('conditions' => array('endereco2.id_pessoa' => $id), 'order' => array('endereco2.id_pessoa' => 'asc'), 'limit' => 10);
			$data = $this->paginate('endereco2');
			$this->set(compact('data'));
		}else{
			$this->paginate = array('order' => array('endereco2.id_pessoa' => 'asc'), 'limit' => 10);
			$data = $this->paginate('endereco2');
			$this->set(compact('data'));
		}

		if($this->request->is('ajax')){
			$this->layout='ajax';
		}

	}

	public function add() {
		$this->set('title', 'Adicionar Endereco Fornecedor');
		$id = $_GET['id'];

		if ($this->request->is("post")) {
			$this->endereco2->create();

			if ($this->endereco2->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__("<br>Registro salvo com sucesso."));
				$endereco_temp = "../Endereco2s/edit/".$id;
				$this->redirect(array("action" => $endereco_temp));
			} else {
				$this->Session->setFlash(__("<br>Erro: não foi possível salvar o novo registro."));
				$endereco_temp = "../Endereco2s/add?id=".$id;
				$this->redirect(array("action" => $endereco_temp));
			}
		}
	}

	public function view($id_= NULL) {
		$this->endereco2->create();
		$this->endereco2->id_pessoa = $id;

		if ($this->request->is('get')) {
			$this->request->data = $this->endereco2->find('first',array('conditions'=>array('endereco2.id_pessoa'=>$id)));
		} else {

		}

	}

	public function edit() {
		$id = $this->request->params['pass'][0];
		$this->endereco2->id = $id; //set the user id
		if( $this->endereco2->exists() ){  //check if a user with this id really exists
			if( $this->request->is( 'post' ) || $this->request->is( 'put' ) ){
				if( $this->endereco2->save( $this->request->data ) ){ //save user
					$this->Session->setFlash('<br>Registro alterado com sucesso.');  //set to user's screen
					$endereco_temp = "../Endereco2s/Edit/".$id;
					$this->redirect(array('action' => $endereco_temp)); //redirect to user's list
				}else{
					$this->Session->setFlash('<br>Registro não pode ser alterado. Por favor, tente novamente.');
				}
			}else{
				$this->request->data = $this->endereco2->read(); //we will read the user data  /so it will fill up our html form automatically
			}

		}else{
			//$this->Session->setFlash('Item selecionado selecionado para alteração não existe.'); //if not found, we will tell the user that user does not exist
			$endereco_temp = "../Endereco2s/Add?id=".$id;
			$this->redirect(array('action' => $endereco_temp));
		}

	}

	public function delete($id = NULL) {

		$this->endereco2->create();
		$this->endereco2->id = $id;

		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		if ($this->endereco2->delete($id)) {
			$this->Session->setFlash(__('<br>Registro excluído com sucesso.'));
			$endereco_temp = "../Endereco2s/Edit/".$id;
			$this->redirect(array('action' => $endereco_temp));
		}

	}

}