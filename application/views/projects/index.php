<h2>Projects</h2>





<p class="bg-success">

<?php 	if($this->session->flashdata('project_created')) :?>
	
	<?php echo $this->session->flashdata('project_created') ?>

<?php endif; ?>


<?php 	if($this->session->flashdata('project_updated')) :?>
	
	<?php echo $this->session->flashdata('project_updated') ?>

<?php endif; ?>


<?php 	if($this->session->flashdata('project_deleted')) :?>
	
	<?php echo $this->session->flashdata('project_deleted') ?>

<?php endif; ?>

</p>



	<a href="<?php echo base_url(); ?>projects/create" class="btn btn-primary pull-right mb-2">Create Project</a>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>Project Name</th>
			<th>Project Body</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>

	<?php foreach ($projects as $project): ?>
			
		<tr>
			<td>
				<a href="<?php echo base_url()."projects/display/".$project->id ?>"><?php echo $project->project_name; ?></a>
			</td>
			<td>
				<?php echo $project->project_body; ?>
			</td>
			
			<td>
				<a href="<?php echo base_url(); ?>projects/delete/<?php echo $project->id ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>