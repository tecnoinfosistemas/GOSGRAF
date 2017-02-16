<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" type="../css/cake.generic.css" href="">
<link rel="stylesheet" href="../css/signin.css">
<link rel="stylesheet" href="../css/stylelogin.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<!--<script src="js/jquery.min.js"></script>-->
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/ie-emulation-modes-warning.js"></script>
<script src="../js/ie10-viewport-bug-workaround.js"></script>
<script src="../js/bootstrap.min.js"></script>

<div class="usuarios form" align="center">

	<div class="container">

	<div class="row">
		<div class="col-md-9">

			<span><h2 >Manutenção de Cadastros</h2></span>
 				<table cellspacing="2" cellpadding="2" style="border: 2px solid #ddd;" ><tr><td width="15px"></td><td  align="center">

                    <table cellspacing="2" cellpadding="2" width="100%">
 						<tr>
							<td colspan="2"><p class="text-left"><h3>&nbsp;&nbsp;<?php echo __('Usuários'); ?></h3></p></td>
						</tr>
						<tr><td colspan="2">&nbsp;</td></tr>
                        <tr><td colspan="2">
                        	<?php echo $this->Form->create('usuario',array('class' => 'form-inline')); ?>

	                    	<table style="border: 2px solid #ddd;">
	                    		<tr>
	                    			<?php if(isset($id)) {
	                    				echo "<td width='15px'></td>";
	                    				echo "<td><div class='form-group'>";
	                    				echo $this->Form->input('id', array('class' => 'form-control', 'label' => 'Código', 'placeholder' => 'Código'));
	                    				echo "</div></td>";
	                    				echo "<td><div class='form-group'>";
	                    				$options = array('' => 'Selecione uma situação','0' => 'Ativo', '1' => 'Inativo');
									 	echo $this->Form->input('status', array('class' => 'form-control', 'label' => 'Situação', 'type' => 'select', 'options' => $options, 'value' => '', 'style' => 'width:350px'));
									 	echo "</div></td>";
	                    			}else{
	                    				echo "<td width='15px'></td>";
	                    				echo "<td><div class='form-group'>";
	                    				$options = array('' => 'Selecione uma situação', '0' => 'Ativo', '1' => 'Inativo');
									 	echo $this->Form->input('status', array('class' => 'form-control', 'label' => 'Situação', 'type' => 'select', 'options' => $options, 'style' => 'width:350px'));
									 	echo "</div></td>";
	                    			} ?>
									<?php if(!isset($id)) {
										echo "<td>&nbsp;</td>";
	                    			} ?>
	                    			<td width="15px"></td><td width="15px"></td>
	                    			<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<td colspan="2"><div class="form-group"><?php echo $this->Form->input('nome', array('class' => 'form-control', 'label' => 'Usuário', 'placeholder' => 'Usuário', 'style' => 'width:395px'));?></div></td>
									<td colspan="2"><div class="form-group"><?php echo $this->Form->input('email', array('class' => 'form-control', 'type'=>'text','label' => 'E-mail', 'style' => 'width:395px'));?></div></td>
									<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<td colspan="2"><div class="form-group"><?php echo $this->Form->input('senha', array('class' => 'form-control', 'type'=>'password', 'label' => 'Senha', 'placeholder' => 'Senha', 'style' => 'width:395px'));?></div></td>
									<td colspan="2"><div class="form-group"><?php echo $this->Form->input('nivel', array('class' => 'form-control', 'label' => 'Nível', 'placeholder' => 'Nível', 'style' => 'width:395px'));?></div></td>
									<td width="15px"></td>
								</tr>
								<tr><td width="15px"></td><td colspan="4">&nbsp;</td><td width="15px"></td></tr>
								<tr>
									<td width="15px"></td>
									<td colspan="4" align="center"><input type="submit" value="Salvar" class="btn btn-default">&nbsp;&nbsp;<input type="button" value="Cancelar" onclick="javascript:window.location = '../Usuarios';" class="btn btn-default"></td>
									<td width="15px"></td>
								</tr>
								<tr><td width="15px"></td><td colspan="4">&nbsp;</td><td width="15px"></td></tr>

	                    	</table>
	                    	<?php echo $this->Form->end() ?>
	                    </td></tr>
	                    <tr><td>&nbsp;</td></tr>
					</table>
 				</td>
 				<td width="15px"></td></tr>
                </table>
  		</div>

		</div>

		
	</div><!-- end row -->


</div><!-- end containing of content -->
