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

<div class="fornecedors form">

	<div class="container">

		<div class="row">
			
			<div class="col-md-9">
				<?php echo $this->Form->create('fornecedor', array('action' => 'edit')); ?>
				<span><h2 >Manutenção de Cadastros</h2></span>
 				<table cellspacing="2" cellpadding="2" style="border: 2px solid #ddd;" ><tr><td width="15px"></td><td  align="center">
					<?php
						$numero = $this->Form->value('fornecedor.id_fornecedor');
						$caminho_end = "../Endereco2s/edit/".$numero;
					?>
                    <table cellspacing="2" cellpadding="2" width="100%">
 						<tr>
							<td colspan="2"><p class="text-left">
								<table>
									<tr>
										<td style="border-top: 2px solid #ddd;border-left: 2px solid #ddd;border-right: 2px solid #ddd;width: 120px; text-align: center;"><h4><b>Fornecedor</b></h4></td>
											<td style="border: 2px solid #ddd;width: 120px; text-align: center;"><h4><b>
												<!--<a href=""><h4><b>Endereço</b></h4></a>-->
												<?php echo $this->Html->link('Endereço', array('action' => '../Endereco2s/edit', $numero), array('escape' => false)); ?>
													</b></h4></td>
									</tr>
								</table>

								</p></td>
						</tr>
						<tr><td colspan="2">&nbsp;</td></tr>
                        <tr><td colspan="2">
	                    	<table style="border: 2px solid #ddd;">
								<tr>
	                    			<?php if(isset($id)) {
	                    				echo "<td width='15px'></td>";
	                    				echo "<td><div class='form-group'>";
	                    				echo $this->Form->input('id_forncedor', array('class' => 'form-control', 'label' => 'Código', 'placeholder' => 'Código'));
	                    				echo "</div></td>";
	                    				echo "<td><div class='form-group'>";
	                    				$options = array('' => 'Selecione uma situação','A' => 'Ativo', 'I' => 'Inativo');
									 	echo $this->Form->input('tp_status', array('class' => 'form-control', 'label' => 'Situação', 'type' => 'select', 'options' => $options, 'value' => ''));
									 	echo "</div></td>";
									 	echo "<td><div class='form-group'>";
										$options = array('' => 'Selecione um tipo...', 'F' => 'Pessoa Física', 'J' => 'Pessoa Jurídica');
									 	echo $this->Form->input('tp_tipo', array('class' => 'form-control', 'label' => 'Tipo', 'type' => 'select', 'options' => $options));
									 	echo "</div></td>";
	                    			}else{
	                    				echo "<td width='15px'></td>";
	                    				echo "<td><div class='form-group'>";
	                    				$options = array('' => 'Selecione uma situação', 'A' => 'Ativo', 'I' => 'Inativo');
									 	echo $this->Form->input('tp_status', array('class' => 'form-control', 'label' => 'Situação', 'type' => 'select', 'options' => $options));
									 	echo "</div></td>";
									 	echo "<td><div class='form-group'>";
										$options = array('' => 'Selecione um tipo...', 'F' => 'Pessoa Física', 'J' => 'Pessoa Jurídica');
									 	echo $this->Form->input('tp_tipo', array('class' => 'form-control', 'label' => 'Tipo', 'type' => 'select', 'options' => $options));
									 	echo "</div></td>";
	                    			} ?>
	                    			<?php if(!isset($id)) {
										echo "<td>&nbsp;</td>";
	                    			} ?>
	                    			<td></td>
									<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<td colspan="2"><div class="form-group"><?php echo $this->Form->input('nr_cpf_cnpj', array('class' => 'form-control', 'label' => 'Cpf/Cnpj', 'placeholder' => 'Cpf/Cnpj', 'style' => 'width:395px'));?></div></td>
									<?php
									echo "<td colspan='2'><div class='form-group'>";
										$options = array('' => 'Selecione um tipo...', '0' => 'Insumos Gráficos');
									 	echo $this->Form->input('id_atividade', array('class' => 'form-control', 'label' => 'Ramo Ativ.', 'type' => 'select', 'options' => $options, 'style' => 'width:395px'));
									 	echo "</div></td>";
									?>
									<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<td colspan="2"><div class="form-group"><?php echo $this->Form->input('tx_nome_razao', array('class' => 'form-control', 'label' => 'Nome/Razão', 'placeholder' => 'Nome/Razão', 'style' => 'width:395px'));?></div></td>
									<td colspan="2"><div class="form-group"><?php echo $this->Form->input('tx_fantasia_setor', array('class' => 'form-control', 'label' => 'Fantasia/Setor', 'placeholder' => 'Fantasia/Setor', 'style' => 'width:395px'));?></div></td>
									<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<td colspan="2"><div class="form-group"><?php echo $this->Form->input('tx_nome_contato', array('class' => 'form-control', 'label' => 'Nome Contato', 'placeholder' => 'Nome Contato', 'style' => 'width:395px'));?></div></td>
									<td colspan="2"><div class="form-group"><?php echo $this->Form->input('tx_contato_cargo', array('class' => 'form-control', 'label' => 'Contato Cargo', 'placeholder' => 'Contato Cargo', 'style' => 'width:395px'));?></div></td>
									<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<td><div class="form-group"><?php echo $this->Form->input('nr_telefone01', array('class' => 'form-control', 'label' => 'Telefone01', 'placeholder' => 'Telefone01'));?></div></td>
									<td><div class="form-group"><?php echo $this->Form->input('nr_telefone02', array('class' => 'form-control', 'label' => 'Telefone02', 'placeholder' => 'Telefone02'));?></div></td>
									<td><div class="form-group"><?php echo $this->Form->input('nr_telefonefax', array('class' => 'form-control', 'label' => 'Telefone/fax', 'placeholder' => 'Telefone/fax'));?></div></td>
									<td width="200px"></td>
									<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<?php
									echo "<td colspan='2'><div class='form-group'>";
										$options = array('' => 'Selecione um tipo...', '0' => 'Dinheiro', '1' => 'Débito', '2' => 'Crédito', '3' => 'Fatura/Boleto');
									 	echo $this->Form->input('tp_forma_pagto', array('class' => 'form-control', 'label' => 'Forma Pagto', 'type' => 'select', 'options' => $options, 'style' => 'width:350px'));
									 	echo "</div></td>";
									?>
									<td colspan="2"><div class="form-group"><?php echo $this->Form->input('tx_limite_credito', array('class' => 'form-control', 'label' => 'Limite Crédito?', 'placeholder' => 'Limite Crédito?', 'style' => 'width:395px'));?></div></td>
									<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<?php
									echo "<td colspan='2'><div class='form-group'>";
										$options = array('' => 'Selecione um tipo...', '0' => 'Sim', '1' => 'Não');
									 	echo $this->Form->input('tx_logistica_obs', array('class' => 'form-control', 'label' => 'Logística?', 'type' => 'select', 'options' => $options, 'style' => 'width:350px'));
									 	echo "</div></td>";
									?>
									<td colspan="2"><div class="form-group"><?php echo $this->Form->input('tx_hora_funcionamento', array('class' => 'form-control', 'label' => 'Horário Funcionament.', 'placeholder' => 'Horário de Funcionamento', 'style' => 'width:395px'));?></div></td>
									<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<td colspan="4">
										<div class="form-group"><b>Observação</b><br>
											<?php
											$date = date('Y-m-d H:i:s');
											?>
											<?php echo $this->Form->textarea('tx_observacao', array('class' => 'form-control', 'label' => 'Observação', 'placeholder' => 'Observação','style' => 'width:790px'));?>
											<?php echo $this->Form->input('dt_altera', array('class' => 'form-control', 'type' => 'hidden', 'value' => $date));?>
										</div>
									</td>
									<td width="15px"></td>
								</tr>
								<tr><td width="15px"></td><td colspan="4">&nbsp;</td><td width="15px"></td></tr>
								<tr>
									<td width="15px"></td>
									<td align="right">
										<?php echo $this->Form->submit(__('Salvar'), array('class' => 'btn btn-default')); ?>
									</td>
									<td colspan="2" align="center">
										<?php echo $this->Form->postLink('<input type="button" value="Excluir" class="btn btn-default">&nbsp;&nbsp;', array('action' => 'delete', $this->Form->value('Fornecedor.id_fornecedor')), array('escape' => false), __('Você realmente deseja excluir definitivamente o Fornecedor?', $this->Form->value('Fornecedor.'))); ?>
									</td>
									<td align="left">
										<input type="button" value="Cancelar" onclick="javascript:window.location = '../../Fornecedors';" class="btn btn-default">
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
