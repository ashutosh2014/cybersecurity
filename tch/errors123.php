<?php  include('updatepassword.php')?>

<?php if ( count($errors) > 0): ?>
	<div class="error">
		<?php  foreach($errors as $error): ?>
			<p  style="width: 100%;display: block;height: 20px;font-size: 18px;line-height: 20px;color: red;"><?php echo $error;  ?></p>
		<?php endforeach; ?>
	</div>
<?php endif; ?>