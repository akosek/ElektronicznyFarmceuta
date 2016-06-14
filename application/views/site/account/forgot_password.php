<?php require_once APPPATH . 'views/site/include/header.php'; ?>

<div class="container containerPadding">
	<div class="row">
		<div class="col-xs-12 text-center">

<h1 class="text-blue">Zapomniałeś hasła?</h1>
<hr>

<?php echo form_open(); ?>

<div class="row">
	<div class="form-group col-sm-4 col-sm-offset-4">
		<input id="email" class="form-control" type="text" name="email" placeholder="Twój adres email" style="margin-top:10px;">
	</div>
</div>

<button type="submit" class="btn btn-lg btn-primary password-button">Przypomnij hasło</button>

<?php echo form_close(); ?>

		</div>
	</div>
</div>

<footer>
  <div class="container-fluid">
    <div class="col-md-12">
      <p class="footer-text">Elektroniczny Farmaceuta:</p>
      <p class="footer-last">tel: 663698144</p>
    </div>
  </div>
</footer>

<?php require_once APPPATH . 'views/site/include/footer.php'; ?>
</body>
</html>
