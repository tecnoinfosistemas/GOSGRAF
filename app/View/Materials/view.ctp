<div class="materials view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Material'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo __('Actions'); ?></div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Material'), array('action' => 'edit', $material['Material']['id_material']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Material'), array('action' => 'delete', $material['Material']['id_material']), array('escape' => false), __('Are you sure you want to delete # %s?', $material['Material']['id_material'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Materials'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Material'), array('action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id Material'); ?></th>
		<td>
			<?php echo h($material['Material']['id_material']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tx Descricao'); ?></th>
		<td>
			<?php echo h($material['Material']['tx_descricao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Id Genero'); ?></th>
		<td>
			<?php echo h($material['Material']['id_genero']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Id Grupo'); ?></th>
		<td>
			<?php echo h($material['Material']['id_grupo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Id Subgrupo'); ?></th>
		<td>
			<?php echo h($material['Material']['id_subgrupo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nr Codigo Barras'); ?></th>
		<td>
			<?php echo h($material['Material']['nr_codigo_barras']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tp Unidade'); ?></th>
		<td>
			<?php echo h($material['Material']['tp_unidade']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tp Produto'); ?></th>
		<td>
			<?php echo h($material['Material']['tp_produto']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Qtd Embalagem'); ?></th>
		<td>
			<?php echo h($material['Material']['qtd_embalagem']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tp Especificacao'); ?></th>
		<td>
			<?php echo h($material['Material']['tp_especificacao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Vl Preco Ent'); ?></th>
		<td>
			<?php echo h($material['Material']['vl_preco_ent']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Vl Preco Custo'); ?></th>
		<td>
			<?php echo h($material['Material']['vl_preco_custo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('V Preco Venda'); ?></th>
		<td>
			<?php echo h($material['Material']['v_preco_venda']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Perc Margem'); ?></th>
		<td>
			<?php echo h($material['Material']['perc_margem']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Dt Inclui'); ?></th>
		<td>
			<?php echo h($material['Material']['dt_inclui']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Dt Altera'); ?></th>
		<td>
			<?php echo h($material['Material']['dt_altera']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Dt Ultima Compra'); ?></th>
		<td>
			<?php echo h($material['Material']['dt_ultima_compra']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cod Ultimo Fornec'); ?></th>
		<td>
			<?php echo h($material['Material']['cod_ultimo_fornec']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tx Observacao'); ?></th>
		<td>
			<?php echo h($material['Material']['tx_observacao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tp Status'); ?></th>
		<td>
			<?php echo h($material['Material']['tp_status']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

