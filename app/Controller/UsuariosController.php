<?php
App::uses('AppController', 'Controller');
/**
 * Usuarios Controller
 *
 */
class UsuariosController extends AppController {

	//public $helpers = array('Html', 'Form', 'Flash');
    public $helpers = array('Html', 'Form');
    //public $components = array('Flash');

    public $name = 'usuarios';

    //public $fornecedor;

    public function index() {
        if (!empty($_POST['tx_nome'])) {
            $nome = $_POST['tx_nome'];
            $this->paginate = array('conditions' => array('usuario.nome LIKE' => '%'.$nome.'%'), 'order' => array('usuario.nome' => 'asc'), 'limit' => 10);
            $data = $this->paginate('usuario');
            $this->set(compact('data'));
        }else{
            $this->paginate = array('order' => array('usuario.nome' => 'asc'), 'limit' => 10);
            $data = $this->paginate('usuario');
            $this->set(compact('data'));
        }

        if($this->request->is('ajax')){
            $this->layout='ajax';
        }

    }

    public function add() {
        $this->set('title', 'Adicionar Usuário');

        if ($this->request->is("post")) {
            $this->usuario->create();

            if ($this->usuario->saveAssociated($this->request->data)) {
                $this->Session->setFlash(__("Registro salvo com sucesso."));
                $this->redirect(array("action" => '../Usuarios/'));
            } else {
                $this->Session->setFlash(__("Erro: não foi possível salvar o novo registro."));
                $this->redirect(array("action" => '/add/'));
            }
        }
    }

    public function view($id_= NULL) {
        $this->usuario->create();
        $this->usuario->id = $id;

        if ($this->request->is('get')) {
            $this->request->data = $this->usuario->find('first',array('conditions'=>array('usuarios.id'=>$id)));
        } else {

        }

    }

    public function edit() {

        $id = $this->request->params['pass'][0];
        $this->usuario->id = $id; //set the user id
        if( $this->usuario->exists() ){  //check if a user with this id really exists
            if( $this->request->is( 'post' ) || $this->request->is( 'put' ) ){
                if( $this->usuario->save( $this->request->data ) ){ //save user
                    $this->Session->setFlash('Registro alterado com sucesso.');  //set to user's screen
                    $this->redirect(array('action' => '../Usuarios/')); //redirect to user's list
                }else{
                    $this->Session->setFlash('Registro não pode ser alterado. Por favor, tente novamente.');
                }
            }else{
                $this->request->data = $this->usuario->read(); //we will read the user data  /so it will fill up our html form automatically
            }
            
        }else{
            $this->Session->setFlash('Item selecionado selecionado para alteração não existe.'); //if not found, we will tell the user that user does not exist
            $this->redirect(array('action' => 'index'));
        }
    }

    public function delete($id = NULL) {

        $this->usuario->create();
        $this->usuario->id = $id;

        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->usuario->delete($id)) {
            $this->Session->setFlash(__('Registro excluído com sucesso.'));
            $this->redirect(array("action" => '../Usuarios/'));
        }

    }


}
