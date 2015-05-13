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

	if (page.find('input[name="nombres_sub[]"]').val().length > 0) {
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

function doneButton(enabled) {
	if (enabled) {
		$('#btn_done').removeClass('disabled');
	}
	else {
		$('#btn_done').addClass('disabled');
	}
}

function enableIfAccepted(skip_validation) {
	var checked = true;
	if (!(typeof skip_validation == 'boolean' && skip_validation)) {
		var $frm = $('#afiliado_principal');
		var $field;

		$field = $frm.find('input[name=nombres]');
		if ($field.val().length == 0) {
			doneButton(false);
			emphasizeField($field);
			return false;
		}

		$field = $frm.find('input[name=apellidos]');
		if ($field.val().length == 0) {
			doneButton(false);
			emphasizeField($field);
			return false;
		}

		$field = $frm.find('input[name=ci]');
		if ($field.val().length < 6 || $field.val().length > 9 || !isCI($field.val())) {
			doneButton(false);
			emphasizeField($field);
			return false;
		}

		$field = $frm.find('input[name=correo]');
		if ($field.val().length == 0) {
			doneButton(false);
			emphasizeField($field);
			return false;
		}
	}

	$field = $('#accept_conditions');
	checked = $field.is(':checked');
	doneButton(checked);
	emphasizeField($field.parent(), false);
	return checked;
}

function submitForm() {
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

	$field = $frm.find('select[name=num_cuenta]');//$frm.find('input[name=num_cuenta]');
	if ($field.val().length == 0) { //if ($field.val().length < 5 || !isAccountNumber($field.val())) {//if ($field.val().length < 5 || !isAccountNumber($field.val())) {
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
		sendFormsData();
		return true;
	}
	return false;
}

function commitVals($frm, type) {
	if (typeof type == 'undefined') {
		commitVals($frm, 'input');
		commitVals($frm, 'select');
		commitVals($frm, 'file');
		//TODO: add support for textareas and radio buttons
		return;
	}
	var inputs = $frm.find(type);
	$.each(inputs, function(i,o) {
		var $o = $(o);
		if (type == 'select') {
			$o.find('option[value="' + $o.val() + '"]').eq(0).attr('selected', 'selected');
		}
		else if (type == 'file') {
			//
		}
		else {
			$o.attr('value', $o.val());
		}
	});
}

function moveFormTo($frm_from, $frm_to) {
	$('<div id="tmp_values" style="display:none">' + $frm_from.html() + '</div>').appendTo($frm_to);
	var $tmp = $('#tmp_values');
	$tmp.find('input[type=file]').remove();
	var file_inputs = $frm_from.find('input[type=file]');
	$.each(file_inputs, function(i,o) {
		$(o).clone().appendTo( $tmp );
	});
}

function blockSendButton() {
	var $btn = $('#frm_payment').find('#submit_payment');
	$btn.parent().addClass('disabled');
	var $label = $btn.find('h1');
	$label.attr('data-ori', $label.html());
	$label.html( $label.attr('data-alt') );
}
function unblockSendButton() {
	var $btn = $('#frm_payment').find('#submit_payment');
	$btn.parent().removeClass('disabled');
	var $label = $btn.find('h1');
	$label.html( $label.attr('data-ori') );
}

function redirectToThankYouPage() {
	if (typeof thank_you_page == 'undefined') {
		alert('Gracias');
		location.reload();
	}
	else {
		window.location = thank_you_page;
	}
}

function sendFormsData() {
	blockSendButton();
	var $frm_afiliates = $('#frm_afiliates');
	var $frm_payment = $('#frm_payment');
	//moving payment form fields to other form to be sent
	commitVals($frm_payment);
	moveFormTo($frm_payment, $frm_afiliates);

	var data = new FormData($frm_afiliates[0]);

	$.ajax({
        url: $frm_payment.attr('action'),
        type: 'POST',
        data: data,
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false
    }).done(function(data) {
    	console.log(data);
	    if (data['ok'] == 1) {
        	redirectToThankYouPage();
        }
        else {
        	if (typeof data['msg'] == 'string') {
        		alert(data['msg']);
        	}
        }
	}).fail(function() {
		alert('Ha ocurrido un error con la conexión.');
	}).always(function() {
		$('#tmp_values').remove();
		unblockSendButton();
	});
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

	$('#banco_select').change(function() {
		var option = $(this).find('option[value=' + $(this).val() + ']');
		var numbers = option.attr('data-list');
		var num_select = $('#num_cuenta_select');
		num_select.find('option').remove();
		
		if (typeof numbers != 'undefined') {
			options = '';
			numbers = numbers.split(',');
			$.each(numbers, function(i,v) {
				if (v.length) {
					options += '<option value="' + v + '">' + v + '</option>';
				}
			});
			num_select.html( options );
		}
	});
});