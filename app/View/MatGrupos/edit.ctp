<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" type="../../css/cake.generic.css" href="">
<link rel="stylesheet" href="../../css/signin.css">
<link rel="stylesheet" href="../../css/stylelogin.css">
<link rel="stylesheet" href="../../css/bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<!--<script src="js/jquery.min.js"></script>-->
<script src="../../js/jquery-3.1.1.min.js"></script>
<script src="../../js/ie-emulation-modes-warning.js"></script>
<script src="../../js/ie10-viewport-bug-workaround.js"></script>
<script src="../../js/bootstrap.min.js"></script>

<div class="matgrupos form">

	<div class="container">

		<div class="row" align="center">
			
			<div class="col-md-9">
				<?php echo $this->Form->create('matgrupo', array('action' => 'edit')); ?>
				<span><h2 >Manutenção de Cadastros</h2></span>
 				<table cellspacing="2" cellpadding="2" style="border: 2px solid #ddd;" ><tr><td width="15px"></td><td  align="center">

                    <table cellspacing="2" cellpadding="2" width="100%">
 						<tr>
							<td colspan="2"><p class="text-left"><h3>&nbsp;&nbsp;<?php echo __('Grupos de Materiais'); ?></h3></p></td>
						</tr>
						<tr><td colspan="2">&nbsp;</td></tr>
                        <tr><td colspan="2">
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
									<td align="center">
										<?php echo $this->Form->submit(__('Salvar'), array('class' => 'btn btn-default')); ?>
									</td>
									<td align="center">&nbsp;
										<?php echo $this->Form->postLink('<input type="button" value="Excluir" class="btn btn-default">&nbsp;&nbsp;', array('action' => 'delete', $this->Form->value('matgrupos.id_grupo')), array('escape' => false), __('Você realmente deseja excluir definitivamente o Gênero?', $this->Form->value('matgrupo.'))); ?>
									</td>
									<td align="center">
										<input type="button" value="Cancelar" onclick="javascript:window.location = '../../matgrupos';" class="btn btn-default">
									</td>
									<td width="15px"></td>
								</tr>
								<tr><td width="15px"></td><td colspan="3">&nbsp;</td><td width="15px"></td></tr>

	                    	</table>
	                    </td></tr>
	                    <tr><td>&nbsp;</td></tr>
					</table>
 				</td>
 				<td width="15px"></td></tr>
                </table>

					
				<?php echo $this->Form->end() ?>

			</div><!-- end col md 12 -->
		</div><!-- end row -->
	</div>
</div>
