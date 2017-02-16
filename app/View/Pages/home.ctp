<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

App::uses('Debugger', 'Utility');
?>
<p align="center">
	<img src="img/header.jpg" width="800" height="100">
</p>
<h2 class="form-signin-heading text-center">Gestão de Ordens de Serviço e Gráficas</h2>
<p>

<div class="container" width="600">
      <form class="form-signin" method="POST" action="valida_login.php">
        <h3 class="form-signin-heading text-center">Área de Login</h3>
        <label for="inputEmail" class="sr-only">Usuário</label>
		
        <input type="text" name="usuario" class="form-control" placeholder="Digitar o Usuário" required autofocus><br />
		
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Digite a Senha" required >
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
      </form>
		
    </div> <!-- /container -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
</p>
<?php
if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;
?>
<?php
if (file_exists(WWW_ROOT . 'css' . DS . 'cake.generic.css')):
?>
<?php
endif;
?>
<?php
if (isset($filePresent)):
	App::uses('ConnectionManager', 'Model');
	try {
		$connected = ConnectionManager::getDataSource('default');
	} catch (Exception $connectionError) {
		$connected = false;
		$errorMsg = $connectionError->getMessage();
		if (method_exists($connectionError, 'getAttributes')):
			$attributes = $connectionError->getAttributes();
			if (isset($errorMsg['message'])):
				$errorMsg .= '<br />' . $attributes['message'];
			endif;
		endif;
	}
?>
<?php endif; ?>

