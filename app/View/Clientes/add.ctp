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

<div class="clientes form" align="center">

	<div class="container">

	<div class="row">
		<div class="col-md-9">

			<span><h2 >Manutenção de Cadastros</h2></span>
 				<table cellspacing="2" cellpadding="2" style="border: 2px solid #ddd;" ><tr><td width="15px"></td><td  align="center">

                    <table cellspacing="2" cellpadding="2" width="100%">
 						<tr>
							<td colspan="2"><p class="text-left"><h3>&nbsp;&nbsp;<?php echo __('Clientes'); ?></h3></p></td>
						</tr>
						<tr><td colspan="2">&nbsp;</td></tr>
                        <tr><td colspan="2">
                        	<?php echo $this->Form->create('cliente',array('class' => 'form-inline')); ?>

	                    	<table style="border: 2px solid #ddd;">
	                    		<tr>
	                    			<?php if(isset($id)) {
	                    				echo "<td width='15px'></td>";
	                    				echo "<td><div class='form-group'>";
	                    				echo $this->Form->input('id_cliente', array('class' => 'form-control', 'label' => 'Código', 'placeholder' => 'Código'));
	                    				echo "</div></td>";
	                    				echo "<td><div class='form-group'>";
	                    				$options = array('' => 'Selecione uma situação','A' => 'Ativo', 'I' => 'Inativo');
									 	echo $this->Form->input('tp_status', array('class' => 'form-control', 'label' => 'Situação', 'type' => 'select', 'options' => $options, 'value' => ''));
									 	echo "</div></td>";
	                    			}else{
	                    				echo "<td width='15px'></td>";
	                    				echo "<td><div class='form-group'>";
	                    				$options = array('' => 'Selecione uma situação', 'A' => 'Ativo', 'I' => 'Inativo');
									 	echo $this->Form->input('tp_status', array('class' => 'form-control', 'label' => 'Situação', 'type' => 'select', 'options' => $options));
									 	echo "</div></td>";
	                    			} ?>
									<td><div class="form-group"><?php echo $this->Form->input('nr_cnpj_pai', array('class' => 'form-control', 'label' => 'Cnpj Matriz', 'placeholder' => 'Cnpj Matriz'));?></div></td>
									<td><div class="form-group"><?php echo $this->Form->input('tp_nivel', array('class' => 'form-control', 'label' => 'Nivel', 'placeholder' => 'Nivel','size' => '50px'));?></div></td>
									<?php if(!isset($id)) {
										echo "<td>&nbsp;</td>";
	                    			} ?>
	                    			<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<td><div class="form-group">
										<?php 
										$options = array('' => 'Selecione um tipo...', 'F' => 'Pessoa Física', 'J' => 'Pessoa Jurídica');
									 	echo $this->Form->input('tp_tipo', array('class' => 'form-control', 'label' => 'Tipo', 'type' => 'select', 'options' => $options));
									 	echo "</div></td>";
									 	?>
									<td><div class="form-group"><?php echo $this->Form->input('nr_cpf_cnpj', array('class' => 'form-control', 'label' => 'Cpf/Cnpj', 'placeholder' => 'Cpf/Cnpj'));?></div></td>
									<td><div class="form-group"><?php echo $this->Form->input('nr_ie_rg', array('class' => 'form-control', 'label' => 'Ie/Rg', 'placeholder' => 'Ie/Rg'));?></div></td>
									<td><div class="form-group"><?php echo $this->Form->input('nr_imunic', array('class' => 'form-control', 'label' => 'Insc.Munic.', 'placeholder' => 'Insc.Munic'));?></div></td>
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
									<td><div class="form-group"><?php echo $this->Form->input('nr_telefone03', array('class' => 'form-control', 'label' => 'Telefone03', 'placeholder' => 'Telefone03'));?></div></td>
									<td><div class="form-group"><?php echo $this->Form->input('nr_telefonefax', array('class' => 'form-control', 'label' => 'Telefone/fax', 'placeholder' => 'Telefone/fax'));?></div></td>
									<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<td colspan="4"><div class="form-group"><b>Observação</b><br><?php echo $this->Form->textarea('tx_observacao', array('class' => 'form-control', 'label' => 'Observação', 'placeholder' => 'Observação','style' => 'width:800px'));?></div></td>
									<td width="15px"></td>
								</tr>
								<tr>
									<?php
									$date = date('Y-m-d H:i:s');
									?>
									<td width="15px"></td>
									<td colspan="4"><div class="form-group"><?php echo $this->Form->input('dt_inclui', array('class' => 'form-control', 'type' => 'hidden', 'value' => $date));?></div></td>
									<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<td colspan="4">
									<?php
										$usuario = "";
									?>
										<div class="form-group"><?php echo $this->Form->input('id_usuario_altera', array('class' => 'form-control', 'type' => 'hidden', 'value' => $usuario));?></div>
									</td>
									<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<td colspan="4" align="center"><input type="submit" value="Salvar" class="btn btn-default">&nbsp;&nbsp;<input type="button" value="Cancelar" onclick="javascript:window.location = '../Clientes';" class="btn btn-default"></td>
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
