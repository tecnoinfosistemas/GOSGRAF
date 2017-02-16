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

<div class="materials form">

	<div class="container">

		<div class="row">
			
			<div class="col-md-9">
				<?php echo $this->Form->create('material', array('action' => 'edit')); ?>
				<span><h2 >Manutenção de Cadastros</h2></span>
 				<table cellspacing="2" cellpadding="2" style="border: 2px solid #ddd;" ><tr><td width="15px"></td><td  align="center">

                    <table cellspacing="2" cellpadding="2" width="100%">
 						<tr>
							<td colspan="2"><p class="text-left"><h3>&nbsp;&nbsp;<?php echo __('Materiais'); ?></h3></p></td>
						</tr>
						<tr><td colspan="2">&nbsp;</td></tr>
                        <tr><td colspan="2">
	                    	<table style="border: 2px solid #ddd;">
	                    		<tr>
	                    			<td colspan="5"><div class="form-group"><?php echo $this->Form->input('id_material', array('class' => 'form-control', 'type' => 'hidden', 'label' => 'Código', 'placeholder' => 'Código')); ?>
	                    				<?php
	                    				echo $this->Form->input('tp_status', array('class' => 'form-control', 'type' => 'hidden', 'label' => 'status', 'placeholder' => 'status', 'value' => 'A')); ?></div>
	                    			</td>
	                    		</tr>
	                    		<tr>
	                    			<td width="15px"></td>
									<td colspan="3"><div class="form-group"><?php echo $this->Form->input('tx_descricao', array('class' => 'form-control', 'label' => 'Descrição&nbsp;
									', 'placeholder' => 'Descrição do produto', 'style' => 'width:700px'));?></div></td>
									<td width="15px"></td>
								</tr>
								<tr>
	                    			<td width="15px"></td>
									<td colspan="3"><div class="form-group"><?php echo $this->Form->input('nr_codigo_barras', array('class' => 'form-control', 'label' => 'Código de Barras', 'placeholder' => 'Código de Barras', 'style' => 'width:700px'));?></div></td>
									<td width="15px"></td>
								</tr>
	                    		<tr>
	                    			<td width="15px"></td>
									<td><div class="form-group"><?php echo $this->Form->input('tp_unidade', array('class' => 'form-control', 'label' => 'Unidade&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', 'placeholder' => 'Unidade'));?></div></td>
									<td><div class="form-group"><?php echo $this->Form->input('qtd_embalagem', array('class' => 'form-control', 'label' => 'Quantidade&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', 'placeholder' => 'Quantidade na embalagem','size' => '50px'));?></div></td>
									<td><div class="form-group">
										<?php 
										$options = array('' => 'Selecione um tipo...', '0' => 'Outros', '1' => 'ACABADO-FINAL');
									 	echo $this->Form->input('tp_produto', array('class' => 'form-control', 'label' => 'Tipo de Produto&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', 'type' => 'select', 'options' => $options)); ?>
									 </div></td>
	                    			<td width="15px"></td>
								</tr>
								<tr>
	                    			<td width="15px"></td>
	                    			<td><div class="form-group">
										<?php 
										$options = array('' => 'Selecione um tipo...', '0' => 'Serviço', '1' => 'Combustível', '2' => 'Celular', '3' => 'Embalagem', '4' => 'Composição');
									 	echo $this->Form->input('tp_especificacao', array('class' => 'form-control', 'label' => 'Especificação', 'type' => 'select', 'options' => $options)); ?>
									 </div></td>
									<td><div class="form-group"><?php echo $this->Form->input('cod_ultimo_fornec', array('class' => 'form-control', 'label' => 'Código do último Fornecedor', 'placeholder' => 'Código do último Fornecedor','size' => '50px'));?></div></td>
									<td><div class="form-group"><?php echo $this->Form->input('dt_ultima_compra', array('class' => 'form-control datepicker', 'label' => 'Data da última compra (AAAA-MM-DD)', 'type' => 'text', 'format' => 'Y-m-d', 'default' => date('Y-m-d')));?></div></td>
	                    			<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<td><div class="form-group"><?php echo $this->Form->input('id_genero', array('class' => 'form-control', 'label' => 'Gênero', 'placeholder' => 'Gênero', 'style' => 'width:200px'));?></div></td>
									<td><div class="form-group"><?php echo $this->Form->input('id_grupo', array('class' => 'form-control', 'label' => 'Grupo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', 'placeholder' => 'Grupo', 'style' => 'width:200px'));?></div></td>
									<td><div class="form-group"><?php echo $this->Form->input('id_subgrupo', array('class' => 'form-control', 'label' => 'Subgrupo', 'placeholder' => 'Subgrupo', 'style' => 'width:200px'));?></div></td>
									<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<td><div class="form-group"><?php echo $this->Form->input('vl_preco_ent', array('class' => 'form-control', 'label' => 'Preço de Entrada', 'placeholder' => 'Preço de Entrada', 'style' => 'width:200px'));?></div></td>
									<td><div class="form-group"><?php echo $this->Form->input('vl_preco_custo', array('class' => 'form-control', 'label' => 'Preço de Custo', 'placeholder' => 'Preço de Custo', 'style' => 'width:200px'));?></div></td>
									<td><div class="form-group"><?php echo $this->Form->input('vl_preco_venda', array('class' => 'form-control', 'label' => 'Preço de Venda', 'placeholder' => 'Preço de Venda', 'style' => 'width:200px'));?></div></td>
									<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<td><div class="form-group"><?php echo $this->Form->input('qtd_estoque_minimo', array('class' => 'form-control', 'label' => 'Estoque Mínimo (alerta)', 'placeholder' => 'Estoque Mínimo', 'style' => 'width:200px'));?></div></td>
									<td><div class="form-group"><?php echo $this->Form->input('per_margem', array('class' => 'form-control', 'label' => 'Percentual da Margem', 'placeholder' => 'Percentual da Margem', 'style' => 'width:200px'));?></div></td>
									<td></td>
									<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<td colspan="3"><div class="form-group"><b>Observação</b><br><?php echo $this->Form->textarea('tx_observacao', array('class' => 'form-control', 'label' => 'Observação', 'placeholder' => 'Observação','style' => 'width:300px'));?></div></td>
									<td width="15px"></td>
								</tr>
								<tr>
									<?php
									$date = date('Y-m-d H:i:s');
									?>
									<td width="15px"></td>
									<td colspan="3"><div class="form-group">
										<?php echo $this->Form->input('dt_inclui', array('class' => 'form-control', 'type' => 'hidden'));?>
										<?php echo $this->Form->input('dt_altera', array('class' => 'form-control', 'type' => 'hidden', 'value' => $date));?>
									</div></td>
									<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<td colspan="3">
									<?php
										$usuario = "";
									?>
										<div class="form-group"><?php echo $this->Form->input('id_usuario_altera', array('class' => 'form-control', 'type' => 'hidden', 'value' => $usuario));?></div>
									</td>
									<td width="15px"></td>
								</tr>
								<tr>
									<td width="15px"></td>
									<td align="right">
										<?php echo $this->Form->submit(__('Salvar'), array('class' => 'btn btn-default')); ?>
									</td>
									<td align="center">
										<?php echo $this->Form->postLink('<input type="button" value="Excluir" class="btn btn-default">&nbsp;&nbsp;', array('action' => 'delete', $this->Form->value('material.id')), array('escape' => false), __('Você realmente deseja excluir definitivamente o item Material?', $this->Form->value('material.'))); ?>
									</td>
									<td align="left">
										<input type="button" value="Cancelar" onclick="javascript:window.location = '../../Materials';" class="btn btn-default">
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
