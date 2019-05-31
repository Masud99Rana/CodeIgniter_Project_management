<h2>Task Display View</h2>


<table class="table table-bordered">
		<thead>
			<tr>
				<th>Task Name</th>
				<th>Task Description</th>
				<th>Date</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>

				
			<tr>
				<td>
					<div class="task-name">
						<?php echo $task->task_name; ?>
					</div>
					<div class="task-actions">
						<a href="<?php echo base_url(); ?>/tasks/edit/<?php echo $task->id ?>">Edit</a>
						<a href="<?php echo base_url(); ?>/tasks/delete/<?php echo $task->id ?>/<?php echo $task->project_id ?>">Delete</a>
					</div>
				</td>
				<td>
					<?php echo $task->task_body; ?>
				</td>

				<td>
					<?php echo $task->date_created; ?>
				</td>

				<td><a href="<?php echo base_url(); ?>/tasks/mark_complete/<?php echo $task->id ?>">Mark Complete</a> || 
				<a href="<?php echo base_url(); ?>/tasks/mark_incomplete/<?php echo $task->id ?>">Mark Incomplete</a></td>				
			</tr>
		</tbody>
	</table>