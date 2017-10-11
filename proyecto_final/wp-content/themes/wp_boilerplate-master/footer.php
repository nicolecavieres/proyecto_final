<!--FOOTER-->
<footer>
	<div class="contacto_seccion" id="contacto_seccion">
		<h2>Contacto</h2>
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mapa">
				<div id="map">
				</div>

				<div class="datos row">
					<div class="col col-xl-2 col-lg-2 col-md-2 col-sm-2 iconf">
						<a href="https://www.facebook.com/jardin.semillitaprovidencia?fref=ts" target="_blank"><div class="facebook"></div></a>
					</div>
					<div class="col col-xl-10 col-lg-10 col-md-10 col-sm-10 textodatos">
						<p><span>Dirección: </span>Miguel Claro 638, Providencia Santiago</p>
						<p><span>E-mail: </span>jadinnsemillita@yahoo.com</p>
						<p><span>Teléfono: </span>2 346 87 05</p>
						<br>
						<p><span>Horario de atención:</span> Lunes a Viernes de 8:00 am a 7:00 pm</p>
						<p><span>Ahora: </span><span id="ahora"> </span></p>
					</div>
				</div>

			</div>
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
				<h3>Envíanos tus preguntas y mensajes.</h3>

				<?php if(is_active_sidebar('contact_widget')):?>
				    <?php dynamic_sidebar('contact_widget');?>
				<?php endif; ?>

			</div>
		</div>
	</div>
</footer>
<!--FIN FOOTER-->
	<script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBT0QIHB1cKyzLoQduBpD6nfvpBdWkodB8&callback=initMap">
    </script>
</body>

</html>

<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'header_menu' ) ); ?>
<?php } ?>

<?php wp_footer() ?>
</body>
</html>