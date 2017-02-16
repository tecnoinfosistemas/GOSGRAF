<?php
App::uses('AppController', 'Controller');
/**
 * Clientes Controller
 */
class Endereco1sController extends AppController {
	//public $helpers = array('Html', 'Form', 'Flash');
	public $helpers = array('Html', 'Form');
	//public $components = array('Flash');

	public $name = 'endereco1s';

	public function index() {

		if (!empty($_POST['id'])) {
			$id = $_POST['id'];
			$this->paginate = array('conditions' => array('endereco1.id_pessoa' => $id), 'order' => array('endereco1.id_pessoa' => 'asc'), 'limit' => 10);
			$data = $this->paginate('endereco1');
			$this->set(compact('data'));
		}else{
			$this->paginate = array('order' => array('endereco1.id_pessoa' => 'asc'), 'limit' => 10);
			$data = $this->paginate('endereco1');
			$this->set(compact('data'));
		}

		if($this->request->is('ajax')){
			$this->layout='ajax';
		}

	}

	public function add() {
		$this->set('title', 'Adicionar Endereco Cliente');
		$id = $_GET['id'];

		if ($this->request->is("post")) {
			$this->endereco1->create();

			if ($this->endereco1->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__("<br>Registro salvo com sucesso."));
				$endereco_temp = "../Endereco1s/edit/".$id;
				$this->redirect(array("action" => $endereco_temp));
			} else {
				$this->Session->setFlash(__("<br>Erro: não foi possível salvar o novo registro."));
				$endereco_temp = "../Endereco1s/add?id=".$id;
				$this->redirect(array("action" => $endereco_temp));
			}
		}
	}

	public function view($id_= NULL) {
		$this->endereco1->create();
		$this->endereco1->id_pessoa = $id;

		if ($this->request->is('get')) {
			$this->request->data = $this->endereco1->find('first',array('conditions'=>array('endereco1.id_pessoa'=>$id)));
		} else {

		}

	}

	public function edit() {
		$id = $this->request->params['pass'][0];
		$this->endereco1->id = $id; //set the user id
		if( $this->endereco1->exists() ){  //check if a user with this id really exists
			if( $this->request->is( 'post' ) || $this->request->is( 'put' ) ){
				if( $this->endereco1->save( $this->request->data ) ){ //save user
					$this->Session->setFlash('<br>Registro alterado com sucesso.');  //set to user's screen
					$endereco_temp = "../Endereco1s/Edit/".$id;
					$this->redirect(array('action' => $endereco_temp)); //redirect to user's list
				}else{
					$this->Session->setFlash('<br>Registro não pode ser alterado. Por favor, tente novamente.');
				}
			}else{
				$this->request->data = $this->endereco1->read(); //we will read the user data  /so it will fill up our html form automatically
			}

		}else{
			//$this->Session->setFlash('Item selecionado selecionado para alteração não existe.'); //if not found, we will tell the user that user does not exist
			$endereco_temp = "../Endereco1s/Add?id=".$id;
			$this->redirect(array('action' => $endereco_temp));
		}

	}

	public function delete($id = NULL) {

		$this->endereco1->create();
		$this->endereco1->id = $id;

		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		if ($this->endereco1->delete($id)) {
			$this->Session->setFlash(__('<br>Registro excluído com sucesso.'));
			$endereco_temp = "../Endereco1s/Edit/".$id;
			$this->redirect(array('action' => $endereco_temp));
		}

	}

}