<div class="admin_header">
	<h3>
		<i class="icon-edit"></i> Edit Claim
		<div class="btn-group pull-right">
			<?php
				echo $this->Html->link('PDF',array('action'=>'pdf',$this->data['Claim']['id']),array('class'=>'btn'));
				echo $this->Html->link('<i class="icon-trash"></i> ', array('action' => 'delete',$this->data['Claim']['id']),array('class'=>'btn','escape'=>false),'Are you sure you want to delete this Claim?'); 
			?>
		</div>
	</h3>
</div>
<?php echo $this->Form->create() ?>
<div class="row-fluid">
	<div class="span12">
		<?php echo $this->Form->submit('Save',array('class'=>'btn')); ?>
	</div>
</div>
<?php echo $this->Form->end() ?>