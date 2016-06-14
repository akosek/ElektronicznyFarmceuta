<?php require_once APPPATH . 'views/site/include/header.php'; ?>
<form action="" method="get" accept-charset="utf-8" class="form-inline">

	<div class="container candidateContainer">
		<div class="row">
			<div class="col-md-4 filtr-box">
				<h4 class="title">Jakiego kandydata poszukujesz?</h4>
				<div class="col-sm-3 col-md-3">
					<select name="stan" class="form-control candidate-options">
						<option value="">Kwalifikacje</option>
						<option value="Nowy">Technik Farmacji</option>
						<option value="Używany">Student Farmacji</option>
					</select>
				</div>
				<div class="col-sm-2 col-md-2">
					<button type="submit" class="btn filrt-button" type="button">Filtruj</button>
				</div>
				</form>
		</div>

		<div class="col-sm-7 col-md-7 col-sm-offset-1 col-md-offset-1">
		<?php foreach ( $ads as $ad ): ?>
			<div class="row">

				<div class="col-sm-4">
					<a href="<?php echo base_url( 'ads/show/' . $ad->id . '/' . alias( $ad->subject ) ); ?>"><img class="img-responsive" src="<?php echo base_url( 'img/ogloszenia/' . $ad->id . '/thumbs/' . $ad->thumb ); ?>" alt=""></a>
				</div>

				<div class="col-sm-8">
					<h2 class="title-shop"><a href="<?php echo base_url( 'ads/show/' . $ad->id . '/' . alias( $ad->subject ) ); ?>"><?php echo $ad->subject; ?></a></h2>
					<p><?php echo character_limiter( $ad->description , 50 ); ?></p>
				</div>

			</div>
				<p>&nbsp;</p>
		<?php endforeach; ?>
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
