<div class="admin_header">
	<h3>
		<i class="icon-edit"></i> Claims
		<div class="btn-group pull-right">
			<?php echo $this->Html->link('Pull Latest', array('action' => 'cron'),array('class'=>'btn','escape'=>false)); ?>
		</div>
	</h3>
</div>
<div class="">
	<?php echo $this->element('search') ?>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>
					<?php echo $this->Paginator->sort('claimFileID','<i class="icon-sort"></i> File ID',array('escape'=>false)); ?>
				</th>
				<th>
					<?php echo $this->Paginator->sort('address1','<i class="icon-sort"></i> Address',array('escape'=>false)); ?>
				</th>
				<th>
					<?php echo $this->Paginator->sort('city','<i class="icon-sort"></i> City',array('escape'=>false)); ?>
				</th>
				<th>Links</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($claims as $claim): ?>
			<tr>
				<td><?php echo $this->Html->link($claim['Claim']['claimFileID'],array('action'=>'edit',$claim['Claim']['id'])) ?></td>
				<td><?php echo $claim['Claim']['address1'] ?></td>
				<td><?php echo $claim['Claim']['city'] ?></td>
				<td>
					<div class="btn-group">
						<?php
							echo $this->Html->link('Preliminary','/ajax/claims/preliminary/'.$claim['Claim']['id'],array('class'=>'btn'));
							echo $this->Html->link('Preliminary PDF','/ajax/claims/pdf/preliminary/'.$claim['Claim']['id'],array('class'=>'btn'));
						?>	
					</div>
				</td>
			</tr>
		<?php endforeach ?>
		</tbody>
	</table>
	<?php echo $this->element('paging') ?>
</div>