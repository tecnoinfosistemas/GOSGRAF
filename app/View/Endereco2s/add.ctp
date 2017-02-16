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

<div class="endereco2s form">

	<div class="container">
		<?php
			$numero = $_GET['id'];
			$caminho = "add?id=".$numero;
		?>
		<div class="row">
			<div class="col-md-9">
				<?php echo $this->Form->create('endereco2', array('action' => $caminho)); ?>
				<span><h2 >Manutenção de Cadastros</h2></span>
				<table cellspacing="2" cellpadding="2" style="border: 2px solid #ddd;" ><tr><td width="15px"></td><td  align="center">




							<table cellspacing="2" cellpadding="2" width="100%">
								<tr>
									<td colspan="2"><p class="text-left">
										<table>
											<tr>
												<td style="border-top: 2px solid #ddd;border-left: 2px solid #ddd;border-right: 2px solid #ddd;width: 120px; text-align: center;"><h4><b>
													<?php echo $this->Html->link('Fornecedor', array('action' => '../Fornecedors/edit', $numero), array('escape' => false)); ?>
												</b></h4></td>
												<td style="border: 2px solid #ddd;width: 120px; text-align: center;"><h4><b>Endereço</b></h4></td>
											</tr>
										</table>

										</p></td>
								</tr>
								<tr><td colspan="2">
										<table style="border: 2px solid #ddd;">
											<tr>
												<td colspan="5">&nbsp;</td>
											</tr>
											<tr>
												<td width="15px">&nbsp;</td>
												<td width="300px"><div class="form-group">
														<?php echo $this->Form->input('id_pessoa', array('class' => 'form-control', 'type' => 'hidden', 'placeholder' => 'Código', 'value' => $numero));?>
														<?php echo $this->Form->input('tx_endereco', array('class' => 'form-control', 'label' => 'Endereço'));?></div></td>
												<td><div class="form-group"><?php echo $this->Form->input('nr_numero_end', array('class' => 'form-control', 'label' => 'Número'));?></div></td>
												<td width="250px"><div class="form-group"><?php echo $this->Form->input('tx_complem_end', array('class' => 'form-control', 'label' => 'Complemento'));?></div></td>
												<td width="15px">&nbsp;</td>
											</tr>
											<tr>
												<td></td>
												<td><div class="form-group"><?php echo $this->Form->input('tx_bairro', array('class' => 'form-control', 'label' => 'Bairro'));?></div></td>
												<td><div class="form-group"><?php echo $this->Form->input('nr_cep', array('class' => 'form-control', 'label' => 'CEP'));?></div></td>
												<td><div class="form-group"><?php echo $this->Form->input('tx_cidade', array('class' => 'form-control', 'label' => 'Cidade'));?></div></td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td><div class="form-group">
														<?php
														$options = array('AC' => 'Acre', 'AL' => 'Alagoas', 'AP' => 'Amapá', 'AM' => 'Amazonas', 'BA' => 'Bahia', 'CE' => 'Ceará', 'DF' => 'Distrito Federal', 'ES' => 'Espírito Santo', 'GO' => 'Goiás', 'MA' => 'Maranhão', 'MT' => 'Mato Grosso', 'MS' => 'Mato Grosso do Sul', 'MG' => 'Minas Gerais', 'PA' => 'Pará', 'PB' => 'Paraíba', 'PR' => 'Paraná', 'PE' => 'Pernambuco', 'PI' => 'Piauí', 'RJ' => 'Rio de Janeiro', 'RN' => 'Rio Grande do Norte', 'RS' => 'Rio Grande do Sul', 'RO' => 'Rondônia', 'RR' => 'Roraima', 'SC' => 'Santa Catarina', 'SP' => 'São Paulo', 'SE' => 'Sergipe', 'TO' => 'Tocantins');
														echo $this->Form->input('tx_uf', array('class' => 'form-control', 'label' => 'UF', 'type' => 'select', 'options' => $options)); ?>
													</div></td>
												<td><div class="form-group"><?php echo $this->Form->input('tx_pais', array('class' => 'form-control', 'label' => 'País'));?></div></td>
												<td><div class="form-group">&nbsp;</div></td>
												<td></td>
											</tr>
											</tr>
											<tr>
												<td></td>
												<td align="right"><?php echo $this->Form->submit(__('Salvar'), array('class' => 'btn btn-default')); ?></td>
												<td colspan="2" align="center"><?php echo $this->Form->postLink('<input type="button" value="Excluir" class="btn btn-default">&nbsp;&nbsp;', array('action' => 'delete', $this->Form->value('endereco2.id_pessoa')), array('escape' => false), __('Você realmente deseja excluir definitivamente esse endereço?', $this->Form->value('endereco2.'))); ?></td>
												<!--<td align="left"><input type="button" value="Cancelar" onclick="javascript:window.location = '../../Clientes';" class="btn btn-default"></td>-->
												<td></td>
											</tr>
											<tr>
												<td></td><td colspan="3">&nbsp;</td><td></td>
											</tr>

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
