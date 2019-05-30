<h2>Create Project</h2>
<?php  $attributes = array('id'=> 'create_form', 'class'=> 'form_horiziontal'); ?>


<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('projects/create', $attributes); ?>
<!-- -> controller/method -->

<div class="form-group">
	
	<?php echo form_label('Project Name') ?>
	<?php
		$data = array(
			'class' => 'form-control',
			'name' => 'project_name',
			'placeholder' => 'Enter Project Name'
		);
	?>
	<?php echo form_input($data) ?>

</div>



<div class="form-group">
	
	<?php echo form_label('Project Description') ?>
	<?php
		$data = array(
			'class' => 'form-control',
			'name' => 'project_body'
		);
	?>
	<?php echo form_textarea($data) ?>

</div>


<div class="form-group">
	
	<?php
		$data = array(
			'class' => 'btn btn-primary',
			'name' => 'submit',
			'value' => 'Create'
		);
	?>
	<?php echo form_submit($data) ?>
	
</div>


<?php echo form_close(); ?>
