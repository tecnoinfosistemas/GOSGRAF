<div class="unidades form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Unidade'); ?></h1>
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

																<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;'.__('List Unidades'), array('action' => 'index'), array('escape' => false)); ?></li>
														</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Unidade', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id_unidade', array('class' => 'form-control', 'placeholder' => 'Id Unidade'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tx_unidade', array('class' => 'form-control', 'placeholder' => 'Tx Unidade'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tx_descricao', array('class' => 'form-control', 'placeholder' => 'Tx Descricao'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
