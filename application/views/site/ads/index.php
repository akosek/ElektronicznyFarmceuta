<?php require_once APPPATH . 'views/site/include/header.php'; ?>
<!--<div class="container-fluid hello-container">
      <div class="row">
        <div class="col-md-12 bannerglowna">
          <h1 class="hello-text">Poznaj elektronicznego farmaceutę!</h1>
          <button onclick="window.location.href='account/'" class="btn btn-secondary button-hello">Przejdź do swojego panelu!</button>
          <br><br><br>
        </div>
      </div>
    </div>-->

<div class="container">
	<div class="row">
		<div class="col-md-12" style="margin-top:5px;">
			<center><h1 class="text-blue">Zobacz promowane ogłoszenia</h1> </center>

				<div class="text-center">
					<h4 style="color:#84A0C6;">Ilość aktualnych zleceń (aptek w serwisie): <?php echo count( $ads ); ?></h4>
				</div>

			<hr style="margin-top:25px; border-top:1px solid #607992;"></hr>
		</div>
	</div>
</div>
<div class="container offerContainer">

	<div class="row">
		<div class="col-md-7">


			<?php if ( $promo_ads ): ?>

				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">

				  	<?php $i = 0; ?>
					<?php foreach ( $promo_ads as $promo_ad ): ?>

						<?php if ( $promo_ad->promo_date > time() ): ?>

							<li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>" <?php echo $i == 0 ? 'class="active"' : '' ; ?>></li>

						<?php endif; ?>

						<?php ++$i; ?>
					<?php endforeach; ?>

				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">

				  	<?php $i = 0; ?>
					<?php foreach ( $promo_ads as $promo_ad ): ?>

						<?php if ( $promo_ad->promo_date > time() ): ?>

						    <div class="item <?php echo $i == 0 ? 'active' : '' ; ?>">
							  <img src="<?php echo base_url( 'img/ogloszenia/' . $promo_ad->id . '/thumbs/' . $promo_ad->thumb ); ?>" alt="">
						      <div class="carousel-caption">
								<a class="btn btn-default" href="<?php echo base_url( 'ads/show/' . $promo_ad->id . '/' . alias( $promo_ad->subject ) ); ?>"><?php echo $promo_ad->subject; ?></a>
						      </div>
						    </div>

						<?php endif; ?>

						<?php ++$i; ?>
					<?php endforeach; ?>

				  </div>



				</div>

			<?php endif; ?>






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
