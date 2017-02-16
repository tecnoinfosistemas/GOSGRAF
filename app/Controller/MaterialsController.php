<?php
App::uses('AppController', 'Controller');
/**
 * Clientes Controller
 */
class MaterialsController extends AppController {
	//public $helpers = array('Html', 'Form', 'Flash');
    public $helpers = array('Html', 'Form');
    //public $components = array('Flash');

    public $name = 'materials';

    public function index() {

        if (!empty($_POST['tx_nome'])) {
            $tx_nome_razao = $_POST['tx_nome'];
            $this->paginate = array('conditions' => array('material.tx_descricao LIKE' => '%'.$tx_nome_razao.'%'), 'order' => array('material.descricao' => 'asc'), 'limit' => 10);
            $data = $this->paginate('material');
            $this->set(compact('data'));
        }else{
            $this->paginate = array('order' => array('material.descricao' => 'asc'), 'limit' => 10);
            $data = $this->paginate('material');
            $this->set(compact('data'));
        }

        if($this->request->is('ajax')){
            $this->layout='ajax';
        }

    }

    public function add() {
        $this->set('title', 'Adicionar Material');

        if ($this->request->is("post")) {
            $this->material->create();

            if ($this->material->saveAssociated($this->request->data)) {
                $this->Session->setFlash(__("Registro salvo com sucesso."));
                $this->redirect(array("action" => '../Materials/'));
            } else {
                $this->Session->setFlash(__("Erro: não foi possível salvar o novo registro."));
                $this->redirect(array("action" => '/add/'));
            }
        }
    }

    public function view($id_= NULL) {
        $this->material->create();
        $this->material->id_material = $id;

        if ($this->request->is('get')) {
            $this->request->data = $this->material->find('first',array('conditions'=>array('material.id_material'=>$id)));
        } else {

        }

    }

    public function edit() {
        $id = $this->request->params['pass'][0];
        $this->material->id = $id; //set the user id
        if( $this->material->exists() ){  //check if a user with this id really exists
            if( $this->request->is( 'post' ) || $this->request->is( 'put' ) ){
                if( $this->material->save( $this->request->data ) ){ //save user
                    //$this->Session->setFlash('Registro alterado com sucesso.');  //set to user's screen
                    $this->Session->setFlash('Registro alterado com sucesso.');
                    $this->redirect(array('action' => '../Materials/')); //redirect to user's list
                }else{
                    //$this->Session->setFlash('Registro não pode ser alterado. Por favor, tente novamente.');
                    $this->Session->setFlash('Registro não pode ser alterado. Por favor, tente novamente.');
                }
            }else{
                $this->request->data = $this->material->read(); //we will read the user data  /so it will fill up our html form automatically
            }
            
        }else{
            //$this->Session->setFlash('Item selecionado selecionado para alteração não existe.'); //if not found, we will tell the user that user does not exist
            $this->Session->setFlash('Item selecionado selecionado para alteração não existe.');
            $this->redirect(array('action' => 'index'));
        }
        
    }

    public function delete($id = NULL) {

        $this->material->create();
        $this->material->id = $id;

        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->material->delete($id)) {
            $this->Session->setFlash(__('Registro excluído com sucesso.'));
            $this->redirect(array("action" => '../Materials/'));
        }


    }

    	
}