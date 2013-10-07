<div class="span12">
	<h2><i class="icon-dash"></i> Dashboard</h2>
	<div class="btn-group">
		<?php
			echo $this->Html->link('Claims','/admin/claims/',array('class'=>'btn'));
			echo $this->Html->link('Users','/admin/users/',array('class'=>'btn'));
		?>
	</div>
</div>