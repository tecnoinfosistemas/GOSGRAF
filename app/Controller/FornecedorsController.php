<?php
App::uses('AppController', 'Controller');
/**
 * Fornecedors Controller
 *
 */
class FornecedorsController extends AppController {

	//public $helpers = array('Html', 'Form', 'Flash');
    public $helpers = array('Html', 'Form');
    //public $components = array('Flash');

    public $name = 'fornecedors';

    //public $fornecedor;

    public function index() {
        if (!empty($_POST['tx_nome'])) {
            $tx_nome_razao = $_POST['tx_nome'];
            $this->paginate = array('conditions' => array('fornecedor.tx_nome_razao LIKE' => '%'.$tx_nome_razao.'%'), 'order' => array('fornecedor.tx_nome_contato' => 'asc'), 'limit' => 10);
            $data = $this->paginate('fornecedor');
            $this->set(compact('data'));
        }else{
            $this->paginate = array('order' => array('fornecedor.tx_nome_razao' => 'asc'), 'limit' => 10);
            $data = $this->paginate('fornecedor');
            $this->set(compact('data'));
        }

        if($this->request->is('ajax')){
            $this->layout='ajax';
        }

    }

    public function add() {
        $this->set('title', 'Adicionar Fornecedor');

        if ($this->request->is("post")) {
            $this->fornecedor->create();

            if ($this->fornecedor->saveAssociated($this->request->data)) {
                $this->Session->setFlash(__("Registro salvo com sucesso."));
                $this->redirect(array("action" => '../Fornecedors/'));
            } else {
                $this->Session->setFlash(__("Erro: não foi possível salvar o novo registro."));
                $this->redirect(array("action" => '/add/'));
            }
        }
    }

    public function view($id_= NULL) {
        $this->fornecedor->create();
        $this->fornecedor->id_fornecedor = $id;

        if ($this->request->is('get')) {
            $this->request->data = $this->fornecedor->find('first',array('conditions'=>array('fornecedor.id_fornecedor'=>$id)));
        } else {

        }

    }

    public function edit() {

        $id = $this->request->params['pass'][0];
        $this->fornecedor->id = $id; //set the user id
        if( $this->fornecedor->exists() ){  //check if a user with this id really exists
            if( $this->request->is( 'post' ) || $this->request->is( 'put' ) ){
                if( $this->fornecedor->save( $this->request->data ) ){ //save user
                    $this->Session->setFlash('Registro alterado com sucesso.');  //set to user's screen
                    $this->redirect(array('action' => '../Fornecedors/')); //redirect to user's list
                }else{
                    $this->Session->setFlash('Registro não pode ser alterado. Por favor, tente novamente.');
                }
            }else{
                $this->request->data = $this->fornecedor->read(); //we will read the user data  /so it will fill up our html form automatically
            }
            
        }else{
            $this->Session->setFlash('Item selecionado selecionado para alteração não existe.'); //if not found, we will tell the user that user does not exist
            $this->redirect(array('action' => 'index'));
        }
    }

    public function delete($id = NULL) {

        $this->fornecedor->create();
        $this->fornecedor->id = $id;

        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->fornecedor->delete($id)) {
            $this->Session->setFlash(__('Registro excluído com sucesso.'));
            $this->redirect(array("action" => '../Fornecedors/'));
        }

    }

}
