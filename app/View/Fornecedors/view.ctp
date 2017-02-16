<div class="fornecedors view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Fornecedor'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Fornecedor'), array('action' => 'edit', $fornecedor['Fornecedor']['id_fornecedor']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Fornecedor'), array('action' => 'delete', $fornecedor['Fornecedor']['id_fornecedor']), array('escape' => false), __('Are you sure you want to delete # %s?', $fornecedor['Fornecedor']['id_fornecedor'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Fornecedors'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Fornecedor'), array('action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id Fornecedor'); ?></th>
		<td>
			<?php echo h($fornecedor['Fornecedor']['id_fornecedor']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tp Tipo'); ?></th>
		<td>
			<?php echo h($fornecedor['Fornecedor']['tp_tipo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nr Cpf Cnpj'); ?></th>
		<td>
			<?php echo h($fornecedor['Fornecedor']['nr_cpf_cnpj']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Id Atividade'); ?></th>
		<td>
			<?php echo h($fornecedor['Fornecedor']['id_atividade']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tx Nome Contato'); ?></th>
		<td>
			<?php echo h($fornecedor['Fornecedor']['tx_nome_contato']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tx Contato Cargo'); ?></th>
		<td>
			<?php echo h($fornecedor['Fornecedor']['tx_contato_cargo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nr Telefone01'); ?></th>
		<td>
			<?php echo h($fornecedor['Fornecedor']['nr_telefone01']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nr Telefone02'); ?></th>
		<td>
			<?php echo h($fornecedor['Fornecedor']['nr_telefone02']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nr Telefone03'); ?></th>
		<td>
			<?php echo h($fornecedor['Fornecedor']['nr_telefone03']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nr Telefone04'); ?></th>
		<td>
			<?php echo h($fornecedor['Fornecedor']['nr_telefone04']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nr Telefonefax'); ?></th>
		<td>
			<?php echo h($fornecedor['Fornecedor']['nr_telefonefax']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tx Hora Funcionamento'); ?></th>
		<td>
			<?php echo h($fornecedor['Fornecedor']['tx_hora_funcionamento']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tp Forma Pagto'); ?></th>
		<td>
			<?php echo h($fornecedor['Fornecedor']['tp_forma_pagto']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tx Limite Credito'); ?></th>
		<td>
			<?php echo h($fornecedor['Fornecedor']['tx_limite_credito']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tx Logistica Obs'); ?></th>
		<td>
			<?php echo h($fornecedor['Fornecedor']['tx_logistica_obs']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Dt Inclui'); ?></th>
		<td>
			<?php echo h($fornecedor['Fornecedor']['dt_inclui']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Dt Altera'); ?></th>
		<td>
			<?php echo h($fornecedor['Fornecedor']['dt_altera']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Dt Desabilita'); ?></th>
		<td>
			<?php echo h($fornecedor['Fornecedor']['dt_desabilita']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tx Observacao'); ?></th>
		<td>
			<?php echo h($fornecedor['Fornecedor']['tx_observacao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Id Usuario Altera'); ?></th>
		<td>
			<?php echo h($fornecedor['Fornecedor']['id_usuario_altera']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

