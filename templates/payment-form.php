<?php
	$args = array(
		'posts_per_page' => -1,
		'post_type' => 'bancos'
	);

	$items = get_posts( $args );

	$options = '';
	foreach ($items as $item) {
		$bank = $item->post_title;
		$vars = get_post_custom( $item->ID );
		$num = array();
		$num[] = $vars['numero_de_cuenta1'][0];
		$num[] = $vars['numero_de_cuenta2'][0];
		$num[] = $vars['numero_de_cuenta3'][0];
		$nums = implode(',', $num);
		$options .= <<<EOT
<option value="{$bank}" data-list="{$nums}">{$bank}</option>
EOT;
	}
?>
<div class="form-group">
	<label class="col-sm-2 control-label">Banco</label>
	<div class="col-sm-10">
		<select name="banco" id="banco_select">
			<option value="" selected="selected"></option>
			<?php echo $options; ?>
			<!--option value="banco1">Banco 1</option>
			<option value="banco2">Banco 2</option>
			<option value="banco3">Banco 3</option-->
		</select>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Nº de cuenta</label>
	<div class="col-sm-10">
		<!--input type="text" class="form-control" name="num_cuenta" placeholder="Nº de cuenta"-->
		<select name="num_cuenta" id="num_cuenta_select"></select>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Nº de depósito/transf.</label>
	<div class="col-sm-10">
		<input type="text" class="form-control" name="num_ref" placeholder="Nº de depósito o transferencia">
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Fecha del depósito</label>
	<div class="col-sm-10">
		<input type="text" class="form-control day-input" name="fecha">
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Monto total</label>
	<div class="col-sm-10">
		<input type="text" class="form-control" name="monto" placeholder="Monto total">
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Adjuntar Voucher / Constancia</label>
	<div class="col-sm-10">
		<input type="file" name="constancia">
	</div>
</div>

<div class="buttons">
	<div class="color-button static <?php echo isset($_COLOR) ? $_COLOR : 'green'; ?>-bg">
		<a href="#" id="submit_payment">
			<div class="label">
				<h1 data-alt="Enviando...">Confirmar</h1>
			</div>
		</a>
	</div>
</div>
<br><br>