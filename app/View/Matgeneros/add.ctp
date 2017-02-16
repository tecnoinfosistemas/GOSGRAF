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

<div class="matgeneros form" align="center">

	<div class="container">

	<div class="row" align="center">
		<div class="col-md-9">

			<span><h2 >Manutenção de Cadastros</h2></span>
 				<table cellspacing="2" cellpadding="2" style="border: 2px solid #ddd;" ><tr><td width="15px"></td><td  align="center">

                    <table cellspacing="2" cellpadding="2" width="100%">
 						<tr>
							<td colspan="2"><p class="text-left"><h3>&nbsp;&nbsp;<?php echo __('Gêneros de Materiais'); ?></h3></p></td>
						</tr>
						<tr><td colspan="2">&nbsp;</td></tr>
                        <tr><td colspan="2">
                        	<?php echo $this->Form->create('matgenero',array('action' => 'add')); ?>

	                    	<table style="border: 2px solid #ddd;">
	                    		<tr>
									<td width="15px"></td>
									<td colspan="3"><div class="form-group">
	                    			<?php 
	                    				$options = array('' => 'Selecione uma situação','0' => 'Ativo', '1' => 'Inativo');
									 	echo $this->Form->input('tp_status', array('class' => 'form-control', 'label' => 'Situação', 'type' => 'select', 'options' => $options, 'style' => 'width:350px'));
									 	echo $this->Form->input('id_genero', array('class' => 'form-control', 'label' => 'Código', 'type' => 'hidden', 'placeholder' => 'Código'));
	                    			?>
	                    			</div></td>
	                    			<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<td colspan="3"><div class="form-group"><?php echo $this->Form->input('tx_descricao', array('class' => 'form-control', 'label' => 'Descrição', 'placeholder' => 'Descrição'));?></div></td>
									<td width="15px"></td>
								</tr>
								<tr><td width="15px"></td><td colspan="3">&nbsp;</td><td width="15px"></td></tr>
								<tr>
									<td width="15px"></td>
									<td colspan="3" align="center"><input type="submit" value="Salvar" class="btn btn-default">&nbsp;&nbsp;<input type="button" value="Cancelar" onclick="javascript:window.location = '../MatGeneros';" class="btn btn-default"></td>
									<td width="15px"></td>
								</tr>
								<tr><td width="15px"></td><td colspan="3">&nbsp;</td><td width="15px"></td></tr>

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
