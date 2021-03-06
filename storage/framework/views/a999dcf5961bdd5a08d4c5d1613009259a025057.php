<?php if(session('success')): ?>
<div class="alert alert-success fade in">
	<button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<?php echo session('success'); ?>

</div>
<?php endif; ?>

<?php if(session('error')): ?>
<div class="alert alert-danger fade in">
	<button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<?php echo session('error'); ?>

</div>
<?php endif; ?>

<?php if(count($errors) > 0): ?>
<div class="alert alert-danger fade in">
	<button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	 </button>
	 <p>Perhatian</p>
	 <ul>
	 	<?php foreach($errors->all() as $error): ?>
	 	<li><?php echo e($error); ?></li>
	 	<?php endforeach; ?>
	 </ul>
	
</div>
<?php endif; ?>