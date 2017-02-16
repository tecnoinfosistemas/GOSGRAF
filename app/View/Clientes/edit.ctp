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

<div class="clientes form">

	<div class="container">

		<div class="row">

			<div class="col-md-9">
				<?php echo $this->Form->create('cliente', array('action' => 'edit')); ?>
				<span><h2 >Manutenção de Cadastros</h2></span>
 				<table cellspacing="2" cellpadding="2" style="border: 2px solid #ddd;" ><tr><td width="15px"></td><td  align="center">
					<?php
						$numero = $this->Form->value('cliente.id_cliente');
					    $caminho_end = "../Endereco1s/edit/".$numero;
					?>
                    <table cellspacing="2" cellpadding="2" width="100%">
 						<tr>
							<td colspan="2"><p class="text-left">
									<table>
										<tr>
											<td style="border-top: 2px solid #ddd;border-left: 2px solid #ddd;border-right: 2px solid #ddd;width: 120px; text-align: center;"><h4><b>Cliente</b></h4></td>
											<td style="border: 2px solid #ddd;width: 120px; text-align: center;"><h4><b>
												<!--<a href=""><h4><b>Endereço</b></h4></a>-->
												<?php echo $this->Html->link('Endereço', array('action' => '../Endereco1s/edit', $numero), array('escape' => false)); ?>
													</b></h4></td>
										</tr>
								</table>

								</p></td>
						</tr>
                        <tr><td colspan="2">
	                    	<table style="border: 2px solid #ddd;">
	                    		<tr>
	                    			<td width="15px"></td>
	                    			<td><div class="form-group"><?php echo $this->Form->input('id_cliente', array('class' => 'form-control', 'placeholder' => 'Id Cliente', 'style' => 'width:350px'));?>
	                    			
	                    			<?php 
	                    				$options1 = array('' => 'Selecione uma situação','A' => 'Ativo', 'I' => 'Inativo');
									 	echo $this->Form->input('tp_status', array('class' => 'form-control', 'label' => 'Situação', 'type' => 'select', 'options' => $options1)); ?>
									</div></td>
									<td><div class="form-group"><?php echo $this->Form->input('nr_cnpj_pai', array('class' => 'form-control', 'label' => 'Cnpj Matriz'));?></div></td>
									<td><div class="form-group"><?php echo $this->Form->input('tp_nivel', array('class' => 'form-control', 'label' => 'Nivel', 'size' => '50px'));?></div></td>
									<?php if(!isset($id)) {
										echo "<td>&nbsp;</td>";
	                    			} ?>
	                    			<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<td><div class="form-group">
										<?php 
										$options2 = array('' => 'Selecione um tipo...', 'F' => 'Pessoa Física', 'J' => 'Pessoa Jurídica');
									 	echo $this->Form->input('tp_tipo', array('class' => 'form-control', 'label' => 'Tipo', 'type' => 'select', 'options' => $options2));
									 	echo "</div></td>";
									 	?>
									<td><div class="form-group"><?php echo $this->Form->input('nr_cpf_cnpj', array('class' => 'form-control', 'label' => 'Cpf/Cnpj'));?></div></td>
									<td><div class="form-group"><?php echo $this->Form->input('nr_ie_rg', array('class' => 'form-control', 'label' => 'Ie/Rg'));?></div></td>
									<td><div class="form-group"><?php echo $this->Form->input('nr_imunic', array('class' => 'form-control', 'label' => 'Insc.Munic.'));?></div></td>
									<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<td colspan="2"><div class="form-group"><?php echo $this->Form->input('tx_nome_razao', array('class' => 'form-control', 'label' => 'Nome/Razão', 'style' => 'width:395px'));?></div></td>
									<td colspan="2"><div class="form-group"><?php echo $this->Form->input('tx_fantasia_setor', array('class' => 'form-control', 'label' => 'Fantasia/Setor',  'style' => 'width:395px'));?></div></td>
									<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<td colspan="2"><div class="form-group"><?php echo $this->Form->input('tx_nome_contato', array('class' => 'form-control', 'label' => 'Nome Contato', 'style' => 'width:395px'));?></div></td>
									<td colspan="2"><div class="form-group"><?php echo $this->Form->input('tx_contato_cargo', array('class' => 'form-control', 'label' => 'Contato Cargo', 'style' => 'width:395px'));?></div></td>
									<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<td><div class="form-group"><?php echo $this->Form->input('nr_telefone01', array('class' => 'form-control', 'label' => 'Telefone01'));?></div></td>
									<td><div class="form-group"><?php echo $this->Form->input('nr_telefone02', array('class' => 'form-control', 'label' => 'Telefone02'));?></div></td>
									<td><div class="form-group"><?php echo $this->Form->input('nr_telefone03', array('class' => 'form-control', 'label' => 'Telefone03'));?></div></td>
									<td><div class="form-group"><?php echo $this->Form->input('nr_telefonefax', array('class' => 'form-control', 'label' => 'Telefone/fax'));?></div></td>
									<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<td colspan="4"><div class="form-group"><b>Observação</b><br><?php echo $this->Form->textarea('tx_observacao', array('class' => 'form-control', 'label' => 'Observação', 'style' => 'width:800px'));?></div></td>
									<td width="15px"></td>
								</tr>
								<tr>
									<?php
									$date = date('Y-m-d H:i:s');
									?>
									<td width="15px"></td>
									<td colspan="4"><div class="form-group"><?php echo $this->Form->input('dt_altera', array('class' => 'form-control', 'type' => 'hidden', 'value' => $date));?></div></td>
									<td width="15px"></td>
								</tr>
								</tr>
								<tr>
									<?php
									$usuario = "";
									?>
									<td width="15px"></td>
									<td colspan="4"><div class="form-group"><?php echo $this->Form->input('id_usuario_altera', array('class' => 'form-control', 'type' => 'hidden', 'value' => $usuario));?></div></td>
									<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<td align="right">
										<?php echo $this->Form->submit(__('Salvar'), array('class' => 'btn btn-default')); ?>
									</td>
									<td colspan="2" align="center">
										<?php echo $this->Form->postLink('<input type="button" value="Excluir" class="btn btn-default">&nbsp;&nbsp;', array('action' => 'delete', $this->Form->value('Cliente.id_cliente')), array('escape' => false), __('Você realmente deseja excluir definitivamente o cliente %s?', $this->Form->value('Cliente.'))); ?>
									</td>
									<td align="left">
										<input type="button" value="Cancelar" onclick="javascript:window.location = '../../Clientes';" class="btn btn-default">
									</td>
									<td width="15px"></td>
								</tr>
								<tr><td width="15px"></td><td colspan="4">&nbsp;</td><td width="15px"></td></tr>

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
