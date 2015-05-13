<div class="subscribe-box">
	<h1>Recibe Nuestras Noticias en tu Email</h1>
	<form id="frm-subscriptionFront" method="post" action="<?php echo home_url() ?>/?wpmlmethod=offsite&list=1">
		<div class="input">
			<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
			<input type="email" name="email" id="wpml-1430920167email" required>
		</div>
		<div class="buttons">
			<input type="hidden" name="list_id[]" value="1" />
			<button type="submit" name="subscribe">Enviar</button>
		</div>
	</form>
	<?php //do_shortcode('[simpleSubscribeForm]'); ?>
</div>
<!--div class="newsletters wpml widget_newsletters">
	<form action="http://192.168.0.147/medicsemka/?wpmlmethod=offsite&list=1" method="post">
		<input type="hidden" name="list_id[]" value="1" />
		<div class="newsletters-fieldholder newsletters-fieldholder-visible email"><label for="wpml-1430920167email" class="wpmlcustomfield wpmlcustomfield1">Email Address <i class="fa fa-asterisk newsletters_required"></i></label><input class="wpml wpmltext" id="wpml-1430920167email" tabindex="914309201672" type="text" name="email" value="" /></div>
		<div>
			<input class="button ui-button" type="submit" name="subscribe" value="Subscribe Now" />
		</div>
	</form>
</div-->