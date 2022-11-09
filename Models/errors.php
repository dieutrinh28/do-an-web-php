<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <?php echo "<p style='color:red; padding: 5px 0; font-weight: 600; text-align:center; '>$error</p>"?>
  	<?php endforeach ?>
  </div>
<?php  endif ?>