<div class="col-xs-9">
	

	<p class="bg-success">

	<?php 	if($this->session->flashdata('mark_done')) :?>
		
		<?php echo $this->session->flashdata('mark_done') ?>

	<?php endif; ?>


	<?php 	if($this->session->flashdata('unmark_done')) :?>
		
		<?php echo $this->session->flashdata('unmark_done') ?>

	<?php endif; ?>

	</p>


	<h1>Project Name: <?php echo $project_data->project_name; ?> </h1>
	<p><?php echo $project_data->date_created; ?> </p>

	<h3>Description: </h3>
	<p><?php echo $project_data->project_body; ?></p>




	<h3>Active Tasks</h3>

	<?php if($not_completed_tasks): ?>
			
	<ul>
			
			<?php foreach( $not_completed_tasks as $task): ?>
		<li>		
				<a href="<?php echo base_url() ?>tasks/display/<?php echo $task->task_id ?>">
					<?php echo $task->task_name ?>
				</a>
		</li>	
			<?php endforeach; ?>

	</ul>
		<?php else: ?>

			<p>You have no Tasks pending</p>
	<?php endif; ?>




	<h3>Completed Tasks</h3>
	
	<?php if($completed_tasks): ?>
		
<ul>
		
		<?php foreach( $completed_tasks as $task): ?>
	<li>		
			<a href="<?php echo base_url() ?>tasks/display/<?php echo $task->task_id ?>">
				<?php echo $task->task_name ?>
			</a>
	</li>	
		<?php endforeach; ?>

</ul>
	<?php else: ?>

		<p>You have no Tasks completed</p>
	<?php endif; ?>

</div>

<div class="col-xs-3 pull-right">
	<ul class="list-group">
		<h3>Project Actions</h3>

		<li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/create/<?php echo $project_data->id ?>">Create Task</a></li>
		<li class="list-group-item"><a href="<?php echo base_url(); ?>projects/edit/<?php echo $project_data->id ?>">Edit Project</a></li>
		<li class="list-group-item"><a href="<?php echo base_url(); ?>projects/delete/<?php echo $project_data->id ?>">Delete Project</a></li>
	</ul>
</div>