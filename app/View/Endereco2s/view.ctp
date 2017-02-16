<div class="enderecos view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Endereco'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Endereco'), array('action' => 'edit', $endereco['endereco']['id_pessoa']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Endereco'), array('action' => 'delete', $endereco['Endereco']['y']), array('escape' => false), __('Are you sure you want to delete # %s?', $endereco['Endereco']['y'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Enderecos'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Endereco'), array('action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Tp Pessoa'); ?></th>
		<td>
			<?php echo h($endereco['Endereco']['tp_pessoa']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Id Pessoa'); ?></th>
		<td>
			<?php echo h($endereco['Endereco']['id_pessoa']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tx Uf'); ?></th>
		<td>
			<?php echo h($endereco['Endereco']['tx_uf']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nr Cep'); ?></th>
		<td>
			<?php echo h($endereco['Endereco']['nr_cep']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tx Endereco'); ?></th>
		<td>
			<?php echo h($endereco['Endereco']['tx_endereco']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nr Numero End'); ?></th>
		<td>
			<?php echo h($endereco['Endereco']['nr_numero_end']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tx Complem End'); ?></th>
		<td>
			<?php echo h($endereco['Endereco']['tx_complem_end']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tx Bairro'); ?></th>
		<td>
			<?php echo h($endereco['Endereco']['tx_bairro']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tx Cidade'); ?></th>
		<td>
			<?php echo h($endereco['Endereco']['tx_cidade']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tx Pais'); ?></th>
		<td>
			<?php echo h($endereco['Endereco']['tx_pais']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Id Tabela'); ?></th>
		<td>
			<?php echo h($endereco['Endereco']['id_tabela']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

