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

<div class="clientes view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Menu'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo __('Ações'); ?></div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Cliente'), array('action' => 'edit', $cliente['cliente']['id_cliente']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Deletar Cliente'), array('action' => 'delete', $cliente['Cliente']['id_cliente']), array('escape' => false), __('Are you sure you want to delete # %s?', $cliente['cliente']['id_cliente'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Clientes'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Novo Cliente'), array('action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id Cliente'); ?></th>
		<td>
			<?php echo h($cliente['cliente']['id_cliente']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tp Status'); ?></th>
		<td>
			<?php echo h($cliente['cliente']['tp_status']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tp Tipo'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['tp_tipo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tp Nivel'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['tp_nivel']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Id Matriz Filial'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['id_matriz_filial']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nr Cpf Cnpj'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['nr_cpf_cnpj']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nr Ie Rg'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['nr_ie_rg']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nr Imunic'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['nr_imunic']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nr Cnpj Pai'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['nr_cnpj_pai']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tx Nome Razao'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['tx_nome_razao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tx Fantasia Setor'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['tx_fantasia_setor']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tx Nome Contato'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['tx_nome_contato']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tx Contato Cargo'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['tx_contato_cargo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nr Telefone01'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['nr_telefone01']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nr Telefone02'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['nr_telefone02']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nr Telefone03'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['nr_telefone03']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nr Telefone04'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['nr_telefone04']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nr Telefonefax'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['nr_telefonefax']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Dt Inclui'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['dt_inclui']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Dt Altera'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['dt_altera']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Dt Desabilita'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['dt_desabilita']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tx Observacao'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['tx_observacao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Id Usuario Altera'); ?></th>
		<td>
			<?php echo h($cliente['Cliente']['id_usuario_altera']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

