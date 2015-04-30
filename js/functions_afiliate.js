var _n_afiliados = 0;
var _c_afiliado = 0;

function addNewAfiliate() {
	_n_afiliados++;

	$('#afiliado_principal').addClass('hidden');

	var html = '<div id="afiliado_adicional_' + _n_afiliados + '" class="afiliado-adicional hidden">' +
		   			$('#afiliado_adicional_0').html() +
			   '</div>';

	var holder = $('#afiliados_adicionales_holder');

	holder.append( html );
	holder.find('.afiliado-adicional').addClass('hidden');

	var page = holder.find('#afiliado_adicional_' + _n_afiliados);
	page.find('#genero_female_0').attr('id', 'genero_female_' + _n_afiliados)
		.attr('name', 'genero' + _n_afiliados + '[]')
		.parent().find('label').attr('for', 'genero_female_' + _n_afiliados);

	page.find('#genero_male_0').attr('id', 'genero_male_' + _n_afiliados)
		.attr('name', 'genero' + _n_afiliados + '[]')
		.parent().find('label').attr('for', 'genero_male_' + _n_afiliados);

	page.find('input[name=index]').val(_n_afiliados);

	page.removeClass('hidden');

	_c_afiliado = _n_afiliados;

	updateTitleCurrentAfiliate();
	updateArrows();
}

function removeAfiliate() {
	var holder = $('#afiliados_adicionales_holder');
	var page;

	page = holder.find('#afiliado_adicional_' + _c_afiliado);

	if (page.find('input[name="nombres[]"]').val().length > 0) {
		if (!confirm('¿Está seguro que quiere quitar este afiliado?')) {
			return false;
		}
	}

	page.remove();
	
	//renames the ones following the current one being deleted
	if (_c_afiliado < _n_afiliados) {
		for (var i = _c_afiliado + 1; i <= _n_afiliados; i++) {
			page = $('#afiliado_adicional_' + i);
			if (page.length) {
				page.attr('id', 'afiliado_adicional_' + (i-1));
			}
		}
	}

	_c_afiliado--;
	_n_afiliados--;
	showPage();
	updateTitleCurrentAfiliate();
	updateArrows();
}

function updateTitleCurrentAfiliate(dir) {
	if (typeof dir == 'undefined') {
		dir = '';
	}
	var title = $('#current_afiliate_title');
	if (_c_afiliado == 0) {
		title.html('Afiliado Principal');
	}
	else {
		title.html('Familiar Afiliado ' + _c_afiliado);
	}
	title.addClass('animated fadeIn' + dir);
	setTimeout(function() {
		title.removeClass('animated fadeIn' + dir);
	}, 1000);
}

function enableIfAccepted() {
	var checked = $('#accept_conditions').is(':checked');
	if (checked) {
		$('#btn_done').removeClass('disabled');
	}
	else{
		$('#btn_done').addClass('disabled');
	}
	return checked;
}

function submitForm() {
	console.log('you have submitted the form');
	showPayment();
}

function showPage(index, dir) {
	if (typeof index == 'undefined') index = _c_afiliado;
	if (typeof dir == 'undefined') dir = '';
	var holder = $('#afiliados_adicionales_holder');
	if (index > 0) {
		$('#afiliado_principal').addClass('hidden');
		holder.find('.afiliado-adicional').addClass('hidden');
		holder.find('#afiliado_adicional_' + index).removeClass('hidden').hide().fadeIn();
	}
	else {
		holder.find('.afiliado-adicional').addClass('hidden');
		$('#afiliado_principal').removeClass('hidden').hide().fadeIn();
	}
	updateTitleCurrentAfiliate(dir);
	updateArrows();
}

function previousPage() {
	_c_afiliado--;
	showPage(_c_afiliado, 'Left');
}

function nextPage() {
	_c_afiliado++;
	showPage(_c_afiliado, 'Right');
}

function updateArrows() {
	if (_c_afiliado > 0) {
		$('.popup-afiliate-left-arrow').show();
		$('#rem_afiliado').parent().removeClass('hidden');
	}
	else {
		$('.popup-afiliate-left-arrow').hide();
		$('#rem_afiliado').parent().addClass('hidden');
	}

	if (_c_afiliado < _n_afiliados) {
		$('.popup-afiliate-right-arrow').show();
	}
	else {
		$('.popup-afiliate-right-arrow').hide();
	}
}

function showTermsConditions() {
	$('.popup-terms-conditions').show();
}

function showPayment() {
	$('.popup-holder').hide();
	$('.popup-pay').show();
}

function checkPaymentData() {
	var $frm = $('#frm_payment');
	var $field;

	$field = $frm.find('select[name=banco]');
	if ($field.val().length == 0) {
		emphasizeField($field);
		return false;
	}

	$field = $frm.find('input[name=num_cuenta]');
	if ($field.val().length < 5 || !isAccountNumber($field.val())) {
		emphasizeField($field);
		return false;
	}

	$field = $frm.find('input[name=num_ref]');
	if ($field.val().length < 5 || !isConfirmationNumber($field.val())) {
		emphasizeField($field);
		return false;
	}

	$field = $frm.find('input[name=fecha]');
	if ($field.val().length < 10 || !isDate($field.val())) {
		emphasizeField($field);
		return false;
	}

	$field = $frm.find('input[name=monto]');
	if ($field.val().length == 0 || !isMoneyAmount($field.val())) {
		emphasizeField($field);
		return false;
	}

	return true;
}

function submitAfiliate() {
	var $frm_payment = $('#frm_payment');
	var $frm_afiliates = $('#frm_afiliates');

	if (checkPaymentData()) {
		console.log('form submition takes place here');
		return true;
	}
	return false;
}

jQuery(document).ready(function($) {
	$('.match1').matchHeight();
	$('.match2').matchHeight();
	$('.match3').matchHeight();
	$('.match4').matchHeight();
	$('.match5').matchHeight();
	$('.match6').matchHeight();
	$('.match7').matchHeight();

	//date picker
	$('.date-input').datepicker({
        format: 'dd/mm/yyyy',
        startView: 2,
        language: 'es',
        autoclose: true
    });

	//date picker
	$('.day-input').datepicker({
        format: 'dd/mm/yyyy',
        startView: 0,
        language: 'es',
        autoclose: true,
        todayBtn: 'linked'
    });

	//adding new afiliate
	$('#add_afiliado').click(function(e) {
		addNewAfiliate();
		e.preventDefault();
		return false;
	});

	//removing afiliate
	$('#rem_afiliado').click(function(e) {
		removeAfiliate();
		e.preventDefault();
		return false;
	});

	//accept term & conditions
	$('#accept_conditions').click(function() {
		enableIfAccepted();
	});

	//done button
	$('#btn_done').find('a').click(function(e) {
		if (enableIfAccepted()) {
			submitForm();
		}
		else {
			var accepted = $('#accept_conditions').parent();
			accepted.addClass('animated shake');
			setTimeout(function() {
				accepted.removeClass('animated shake');
			}, 3000);
		}
		e.preventDefault();
		return false;
	});

	//submit payment
	$('#submit_payment').click(function(e) {
		submitAfiliate();
		e.preventDefault();
		return false;
	});


	//updates done button status
	enableIfAccepted();

	//left arrow
	$('.popup-afiliate-left-arrow').click(function() {
		previousPage();
	});

	//right arrow
	$('.popup-afiliate-right-arrow').click(function() {
		nextPage();
	});

	updateArrows();

	//terms & conditions
	$('.terms-conditions').click(function(e) {
		showTermsConditions();
		e.preventDefault();
		return false;
	});

	$('.popup-holder').find('.btn-close').click(function(e) {
		$('#accept_conditions').prop('checked', true);
		enableIfAccepted();
		e.preventDefault();
		return false;
	});
});