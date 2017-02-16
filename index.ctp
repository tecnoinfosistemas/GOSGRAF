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

<link rel="stylesheet" type="css/cake.generic.css" href="">
<link rel="stylesheet" href="css/signin.css">
<link rel="stylesheet" href="css/stylelogin.css">
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<!--<script src="js/jquery.min.js"></script>-->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/ie-emulation-modes-warning.js"></script>
<script src="js/ie10-viewport-bug-workaround.js"></script>
<script src="js/bootstrap.min.js"></script>


<div class="clientes index"  align="center">

	<div class="container">

        <div class="row">

		<div class="col-md-9">

			<span><h2>Manutenção de Cadastros</h2></span>
 				<table cellspacing="2" cellpadding="2" style="border: 2px solid #ddd;"><tr><td width="15px"></td><td>

                    <table cellspacing="2" cellpadding="2" width="100%">
 						<tr>
							<td colspan="2"><p class="text-left"><h3>&nbsp;&nbsp;<?php echo __('Clientes'); ?></h3></p></td>
						</tr>
						<tr>
							<td width="700px"><?php echo $this->Form->create('cliente', array('action' => 'index')); ?>
								Buscar Cliente&nbsp;<input type="text" name="tx_nome_razao" id="tx_nome_razao">&nbsp;
								<?php echo $this->Form->submit(__('Buscar'), array('class' => 'btn btn-default')); ?></td>

 							<td><p class="text-right"><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;'.__('Novo Cliente'), array('action' => 'add'), array('escape' => false)); ?> </p></td>
 						</tr>
                        <tr><td colspan="2">

	                    	<table class="table table-striped" style="border: 2px solid #ddd;">
							<thead style="background-color:#DCDCDC;">
							<tr>
								<!--<th nowrap><?php echo $this->Paginator->sort('id_cliente'); ?></th>-->
								<th nowrap>Código</th>
								<th nowrap>Status</th>
								<th nowrap>Tipo</th>
								<th nowrap>CPF/CNPJ</th>
								<th nowrap>Nome/Razão</th>
								<th nowrap>Fantasia/Setor</th>
								<th nowrap>Ação</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($data as $cliente) { ?>
							<tr>
								<td align="center" nowrap><?php echo h($cliente['cliente']['id_cliente']); ?>&nbsp;</td>
								<?php if (h($cliente['cliente']['tp_status']) == 'A') {
									echo "<td nowrap>Ativo&nbsp;</td>";
								}else {
									echo "<td nowrap>Inativo&nbsp;</td>";
								} ?>
								<?php if (h($cliente['cliente']['tp_tipo']) == 'F') {
									echo "<td nowrap>Física&nbsp;</td>";
								}else {
								echo "<td nowrap>Jurídico&nbsp;</td>";
								} ?>
								<td nowrap><?php echo h($cliente['cliente']['nr_cpf_cnpj']); ?>&nbsp;</td>
								<td nowrap><?php echo h($cliente['cliente']['tx_nome_razao']); ?>&nbsp;</td>
								<td nowrap><?php echo h($cliente['cliente']['tx_fantasia_setor']); ?>&nbsp;</td>
								<td class="actions" align="center">
									<?php //echo $this->Html->link('<i class="glyphicon glyphicon-search"></i>', array('action' => 'view', $cliente['cliente']['id_cliente']), array('escape' => false)); ?>
									<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>', array('action' => 'edit', $cliente['cliente']['id_cliente']), array('escape' => false)); ?>
	                            &nbsp;&nbsp;<?php echo $this->Form->postLink('<p class="glyphicon glyphicon-minus" aria-hidden="true"></p>', array('action' => 'delete', $cliente['cliente']['id_cliente']), array('escape' => false), __('Você deseja realmente deletar o cliente: %s?', $cliente['cliente']['id_cliente'])); ?>
								</td>
							</tr>
							<?php } ?>
							</tbody>
							</table>

                    		<p>
                    		     <small><?php echo $this->Paginator->counter(array('format' => __('Página {:page} de {:pages}, exibindo {:current} registro(s) de um total de {:count}, iniciando em {:start}, finalizando em {:end}.')));?></small>
                    		</p>

                    		<?php
                    	     $params = $this->Paginator->params();
                    	     if ($params['pageCount'] > 1) {
                    	      ?>
                    	          <ul class="pagination pagination-sm">
                    	          <?php
                    	          echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Anterior</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
                    	          echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
                    	          echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Próximo &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
                    	          ?>
                    	          </ul>
                    		<?php } ?>

                    	</td></tr>
                    </table>
 				</td>
 				<td width="15px"></td></tr>
                </table>
  		</div>

		</div>

		
	</div><!-- end row -->


</div><!-- end containing of content -->