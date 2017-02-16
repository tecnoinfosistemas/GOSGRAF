<?php
 
$valorpagina = $this->Paginator->counter(array('format' => __('{:page}')));
 if ($valorpagina <> 1){
	echo "<link rel='stylesheet' type='../../css/cake.generic.css' href=''>";
	echo "<link rel='stylesheet' href='../../css/signin.css'>";
	echo "<link rel='stylesheet' href='../../css/stylelogin.css'>";
	echo "<link rel='stylesheet' href='../../css/bootstrap.min.css'>";

	echo "<!-- Latest compiled and minified JavaScript -->";
	echo "<!--<script src='js/jquery.min.js'></script>-->";
	echo "<script src='../../js/jquery-3.1.1.min.js'></script>";
	echo "<script src='../../js/ie-emulation-modes-warning.js'></script>";
	echo "<script src='../../js/ie10-viewport-bug-workaround.js'></script>";
	echo "<script src='../../js/bootstrap.min.js'></script>";
}
?>

<div class="materials index"  align="center">

	<div class="container">

        <div class="row">

		<div class="col-md-9">

			<span><h2>Manutenção de Cadastros</h2></span>
 				<table cellspacing="2" cellpadding="2" style="border: 2px solid #ddd;"><tr><td width="15px"></td><td>

                    <table cellspacing="2" cellpadding="2" width="100%">
 						<tr>
							<td colspan="2"><p class="text-left"><h3>&nbsp;&nbsp;<?php echo __('Materiais'); ?></h3></p></td>
						</tr>
						<tr>
							<td><?php echo $this->Form->create('material', array('action' => 'index')); ?>
								Buscar Material&nbsp;<input type="text" name="tx_nome" id="tx_nome" size="25">&nbsp;
								<input type="submit" value="Buscar" class="btn btn-default">
								<?php echo $this->Form->end() ?>
							</td>

 							<td><p class="text-right">&nbsp;&nbsp;<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'.__('Novo Material'), array('action' => 'add'), array('escape' => false)); ?> </p></td>
 						</tr>
 						<tr><td colspan="2">&nbsp;</td></tr>
                        <tr><td colspan="2">

	                    	<table class="table table-striped" style="border: 2px solid #ddd;">
							<thead style="background-color:#DCDCDC;">
							<tr>
								<!--<th nowrap><?php echo $this->Paginator->sort('id_material'); ?></th>-->
								<th nowrap>Código</th>
								<th nowrap>Descrição</th>
								<th nowrap>Unidade</th>
								<th nowrap>Alteração</th>
								<th nowrap>Compra</th>
								<th nowrap>Qtd</th>
								<th nowrap>Situação</th>
								<th nowrap>Ação</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($data as $material) { ?>
							<tr>
								<td align="center" nowrap><?php echo h($material['material']['id_material']); ?>&nbsp;</td>
								<td nowrap><?php echo h($material['material']['tx_descricao']); ?>&nbsp;</td>
								<td nowrap><?php echo h($material['material']['tp_unidade']); ?>&nbsp;</td>	
								<td nowrap><?php echo h($material['material']['dt_altera']); ?>&nbsp;</td>
								<td nowrap><?php echo h($material['material']['dt_ultima_compra']); ?>&nbsp;</td>
								<td nowrap><?php echo h($material['material']['qtd_embalagem']); ?>&nbsp;</td>
								<?php if (h($material['material']['tp_status']) == 'A') {
									echo "<td nowrap>Ativo&nbsp;</td>";
								}else {
									echo "<td nowrap>Inativo&nbsp;</td>";
								} ?>
								<td class="actions" align="center">
									<?php //echo $this->Html->link('<i class="glyphicon glyphicon-search"></i>', array('action' => 'view', $cliente['cliente']['id_cliente']), array('escape' => false)); ?>
									<?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>', array('action' => 'edit', $material['material']['id_material']), array('escape' => false)); ?>
	                            &nbsp;&nbsp;<?php echo $this->Form->postLink('<p class="glyphicon glyphicon-minus" aria-hidden="true"></p>', array('action' => 'delete', $material['material']['id_material']), array('escape' => false), __('Você deseja realmente deletar o material: %s?', $material['material']['id_material'])); ?>
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