<?php require_once APPPATH . 'views/site/include/header.php'; ?>

<form action="" method="get" accept-charset="utf-8" class="form-inline">

	<div class="container">
		<div class="row">

			<div class="col-sm-3">

				<select name="stan" class="form-control">
					<option value="">Kwalifikacje</option>
					<option value="Nowy">Technik Farmacji</option>
					<option value="Używany">Student Farmacji</option>
				</select>

			</div>



			<div class="col-sm-3">
				<button type="submit" class="btn btn-default" type="button">Filtruj</button>
			</div>

		</div>

		<p>&nbsp;</p>
	</div>

</form>

<div class="container">

<?php foreach ( $ads as $ad ): ?>
	<div class="row">
		
		<div class="col-sm-4">
			<a href="<?php echo base_url( 'ads/show/' . $ad->id . '/' . alias( $ad->subject ) ); ?>"><img class="img-responsive" src="<?php echo base_url( 'img/ogloszenia/' . $ad->id . '/thumbs/' . $ad->thumb ); ?>" alt=""></a>
		</div>

		<div class="col-sm-8">
			<h2><a href="<?php echo base_url( 'ads/show/' . $ad->id . '/' . alias( $ad->subject ) ); ?>"><?php echo $ad->subject; ?></a></h2>
			<p><?php echo character_limiter( $ad->description , 50 ); ?></p>
		</div>

	</div>
		<p>&nbsp;</p>
<?php endforeach; ?>

</div>

<?php require_once APPPATH . 'views/site/include/footer.php'; ?>
</body>
</html>