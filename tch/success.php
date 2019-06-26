<?php  include('updatepassword.php')?>

<?php if ( count($success) > 0): ?>
	<div class="error">
		<?php  foreach($success as $succes): ?>
			<p  style="width: 100%;display: block;height: 20px;font-size: 18px;line-height: 20px;color: blue;"><?php echo $succes;?></p>
		<?php endforeach; ?>
	</div>
<?php endif; ?>