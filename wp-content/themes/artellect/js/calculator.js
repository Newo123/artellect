// ['input', 'blur', 'keyup'].forEach(element => {
// 	window.addEventListener(element, e => {
// 		const target = e.target.closest('[data-calc-block]');

// 		if (target) {
// 			const inputs = Array.from(target.querySelectorAll('input'));

// 			if (inputs.find(item => !item?.value)) {
// 				return;
// 			}

// 			console.log(inputs);
// 		}
// 	});
// });

// $('.main_calc_screen_block_cont_win_form_item_input')
// 	.bind('keyup', function () {
// 		processcalc();
// 	})
// 	.bind('mouseout keyup', function () {
// 		processcalc();
// 	})
// 	.bind('focus', function () {
// 		interval = setInterval(processcalc, 200);
// 	})
// 	.bind('blur', function () {
// 		clearInterval(interval);
// 		processcalc();
// 	});

// $('.main_calc2_screen_block_cont_win_form_item_input')
// 	.bind('keyup', function () {
// 		processcalc2();
// 	})
// 	.bind('mouseout keyup', function () {
// 		processcalc2();
// 	})
// 	.bind('focus', function () {
// 		interval = setInterval(processcalc2, 200);
// 	})
// 	.bind('blur', function () {
// 		clearInterval(interval);
// 		processcalc2();
// 	});

// $('.main_calc3_screen_block_cont_win_form_item_input')
// 	.bind('keyup', function () {
// 		processcalc3();
// 	})
// 	.bind('mouseout keyup', function () {
// 		processcalc3();
// 	})
// 	.bind('focus', function () {
// 		interval = setInterval(processcalc3, 200);
// 	})
// 	.bind('blur', function () {
// 		clearInterval(interval);
// 		processcalc3();
// 	});

// function processcalc() {
// 	var invar_0 = $('#main_calc_screen_block_cont_win_form_item_input_0').val();
// 	invar_0 = invar_0.replace(/[^0-9]/g, '');
// 	var invar_1 = $('#main_calc_screen_block_cont_win_form_item_input_1').val();
// 	invar_1 = invar_1.replace(/[^0-9]/g, '');
// 	var invar_2 = $('#main_calc_screen_block_cont_win_form_item_input_2').val();
// 	invar_2 = invar_2.replace(/[^0-9]/g, '');
// 	var invar_3 = $('#main_calc_screen_block_cont_win_form_item_input_3').val();
// 	invar_3 = invar_3.replace(/[^0-9]/g, '');
// 	var invar_4 = $('#main_calc_screen_block_cont_win_form_item_input_4').val();
// 	invar_4 = invar_4.replace(/[^0-9]/g, '');

// 	if (
// 		invar_3 >= 0 &&
// 		invar_1 >= 1 &&
// 		invar_0 > 0 &&
// 		invar_0 <= 100 &&
// 		invar_2 > 0 &&
// 		invar_4 > 0 &&
// 		invar_4 <= 100
// 	) {
// 		var res_summ_4 = Math.ceil((invar_3 / 100) * invar_4); // B12
// 		res_summ_4 = res_summ_4 + ' ';
// 		res_summ_4 = res_summ_4.replace(/[^0-9-]/g, '');
// 		//	res_summ_4 = numberWithSpaces(res_summ_4);

// 		var res_summ_5 = Math.ceil(res_summ_4 * invar_1); // B13
// 		res_summ_5 = res_summ_5 + ' ';
// 		res_summ_5 = res_summ_5.replace(/[^0-9-]/g, '');
// 		//	res_summ_5 = numberWithSpaces(res_summ_5);

// 		invar_2++;
// 		invar_2--;
// 		var res_summ_2 = Math.ceil(res_summ_5 * (100 / (invar_2 + 100))); // B9
// 		res_summ_2 = res_summ_2 + ' ';
// 		res_summ_2 = res_summ_2.replace(/[^0-9-]/g, '');
// 		//	res_summ_2 = numberWithSpaces(res_summ_2);

// 		var res_summ_1 = Math.ceil(res_summ_2 / res_summ_4); // B10
// 		res_summ_1 = res_summ_1 + ' ';
// 		res_summ_1 = res_summ_1.replace(/[^0-9-]/g, '');
// 		//	res_summ_1 = numberWithSpaces(res_summ_1);

// 		var res_summ_3 = Math.ceil(res_summ_2 / invar_3); // B11
// 		res_summ_3 = res_summ_3 + ' ';
// 		res_summ_3 = res_summ_3.replace(/[^0-9-]/g, '');
// 		//		res_summ_3 = numberWithSpaces(res_summ_3);

// 		$('#main_calc_screen_block_cont_win_res_item_summ_1 span')
// 			.empty()
// 			.append(numberWithSpaces(res_summ_2)); // B9
// 		$('#main_calc_screen_block_cont_win_res_item_summ_2 span')
// 			.empty()
// 			.append(numberWithSpaces(res_summ_1)); // B10
// 		$('#main_calc_screen_block_cont_win_res_item_summ_3 span')
// 			.empty()
// 			.append(numberWithSpaces(res_summ_3)); // B11
// 		$('#main_calc_screen_block_cont_win_res_item_summ_4 span')
// 			.empty()
// 			.append(numberWithSpaces(res_summ_4)); // B12
// 		$('#main_calc_screen_block_cont_win_res_item_summ_5 span')
// 			.empty()
// 			.append(numberWithSpaces(res_summ_5)); // B13

// 		var res_summ_6 = Math.ceil((res_summ_5 / 100) * invar_0 - res_summ_2); // B14
// 		res_summ_6 = res_summ_6 + ' ';
// 		res_summ_6 = res_summ_6.replace(/[^0-9-]/g, '');

// 		if (res_summ_6 <= 0) {
// 			$('#main_calc_screen_block_cont_win_res_line_6').addClass(
// 				'main_calc_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc_screen_block_cont_win_res_line_6').removeClass(
// 				'main_calc_screen_block_cont_win_form_item_input_a'
// 			);

// 			$('#main_calc_screen_block_cont_win_res_badbtn').show();
// 			$('#main_calc_screen_block_cont_win_res_btn').hide();
// 		} else {
// 			$('#main_calc_screen_block_cont_win_res_line_6').removeClass(
// 				'main_calc_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc_screen_block_cont_win_res_line_6').addClass(
// 				'main_calc_screen_block_cont_win_form_item_input_a'
// 			);

// 			$('#main_calc_screen_block_cont_win_res_badbtn').hide();
// 			$('#main_calc_screen_block_cont_win_res_btn')
// 				.show()
// 				.css({ opacity: '1' });
// 		}

// 		res_summ_6 = numberWithSpaces(res_summ_6);

// 		//var invar_b_8 = Math.ceil(invar_0 * (invar_3 / 100));
// 		$('#main_calc_screen_block_cont_win_res_item_summ_6 span')
// 			.empty()
// 			.append(res_summ_6); // B14
// 		$('#main_calc_screen_block_cont_win_res').show().css({ opacity: '1' });
// 	} else {
// 		$('#main_calc_screen_block_cont_win_res_item_summ_1 span')
// 			.empty()
// 			.append('—');
// 		$('#main_calc_screen_block_cont_win_res_item_summ_2 span')
// 			.empty()
// 			.append('—');
// 		$('#main_calc_screen_block_cont_win_res_item_summ_3 span')
// 			.empty()
// 			.append('—');
// 		$('#main_calc_screen_block_cont_win_res_item_summ_4 span')
// 			.empty()
// 			.append('—');
// 		$('#main_calc_screen_block_cont_win_res_item_summ_5 span')
// 			.empty()
// 			.append('—');
// 		$('#main_calc_screen_block_cont_win_res_item_summ_6 span')
// 			.empty()
// 			.append('—');
// 		$('#main_calc_screen_block_cont_win_res_btn')
// 			.show()
// 			.css({ opacity: '0.2' });
// 		$('#main_calc_screen_block_cont_win_res_badbtn').hide();
// 		$('#main_calc_screen_block_cont_win_res').css({ opacity: '0.3' });
// 	}

// 	/*
// 	if(invar_0 > 0){
// 		if(invar_0 >= 100000){
// 			$("#main_calc_screen_block_cont_win_form_item_input_0").removeClass('main_calc_screen_block_cont_win_form_item_input_na');
// 			$("#main_calc_screen_block_cont_win_form_err_0").css({ 'opacity' : '0' });
// 		}else{
// 			$("#main_calc_screen_block_cont_win_form_item_input_0").addClass('main_calc_screen_block_cont_win_form_item_input_na');
// 			$("#main_calc_screen_block_cont_win_form_err_0").css({ 'opacity' : '1' });
// 		}
// 	}
// 	*/

// 	if (invar_1 != '') {
// 		if (invar_1 >= 10) {
// 			$('#main_calc_screen_block_cont_win_form_item_input_1').removeClass(
// 				'main_calc_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc_screen_block_cont_win_form_err_1').css({ opacity: '0' });
// 		} else {
// 			$('#main_calc_screen_block_cont_win_form_item_input_1').addClass(
// 				'main_calc_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc_screen_block_cont_win_form_err_1').css({ opacity: '1' });
// 		}
// 	}

// 	if (invar_2 != '') {
// 		if (invar_2 > 0) {
// 			$('#main_calc_screen_block_cont_win_form_item_input_2').removeClass(
// 				'main_calc_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc_screen_block_cont_win_form_err_2').css({ opacity: '0' });
// 		} else {
// 			$('#main_calc_screen_block_cont_win_form_item_input_2').addClass(
// 				'main_calc_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc_screen_block_cont_win_form_err_2').css({ opacity: '1' });
// 		}
// 	}

// 	if (invar_0 > 0) {
// 		if (invar_0 <= 100) {
// 			$('#main_calc_screen_block_cont_win_form_item_input_0').removeClass(
// 				'main_calc_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc_screen_block_cont_win_form_err_0').css({ opacity: '0' });
// 		} else {
// 			$('#main_calc_screen_block_cont_win_form_item_input_0').addClass(
// 				'main_calc_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc_screen_block_cont_win_form_err_0').css({ opacity: '1' });
// 		}
// 	}

// 	if (invar_4 > 0) {
// 		if (invar_4 <= 100) {
// 			$('#main_calc_screen_block_cont_win_form_item_input_4').removeClass(
// 				'main_calc_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc_screen_block_cont_win_form_err_4').css({ opacity: '0' });
// 		} else {
// 			$('#main_calc_screen_block_cont_win_form_item_input_4').addClass(
// 				'main_calc_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc_screen_block_cont_win_form_err_4').css({ opacity: '1' });
// 		}
// 	}

// 	invar_0 = numberWithSpaces(invar_0);
// 	$('#main_calc_screen_block_cont_win_form_item_input_0').val(invar_0);

// 	invar_1 = numberWithSpaces(invar_1);
// 	$('#main_calc_screen_block_cont_win_form_item_input_1').val(invar_1);

// 	$('#main_calc_screen_block_cont_win_form_item_input_2').val(invar_2);
// 	$('#main_calc_screen_block_cont_win_form_item_input_3').val(invar_3);
// 	$('#main_calc_screen_block_cont_win_form_item_input_4').val(invar_4);
// }

// ///

// function processcalc2() {
// 	var invar_0 = $('#main_calc2_screen_block_cont_win_form_item_input_0').val();
// 	invar_0 = invar_0.replace(/[^0-9]/g, '');
// 	var invar_1 = $('#main_calc2_screen_block_cont_win_form_item_input_1').val();
// 	invar_1 = invar_1.replace(/[^0-9]/g, '');
// 	var invar_2 = $('#main_calc2_screen_block_cont_win_form_item_input_2').val();
// 	invar_2 = invar_2.replace(/[^0-9.-]/g, '');
// 	var invar_3 = $('#main_calc2_screen_block_cont_win_form_item_input_3').val();
// 	invar_3 = invar_3.replace(/[^0-9.-]/g, '');
// 	var invar_4 = $('#main_calc2_screen_block_cont_win_form_item_input_4').val();
// 	invar_4 = invar_4.replace(/[^0-9.-]/g, '');

// 	//	var invar_0 = $("#main_calc_screen_block_cont_win_form_item_input_0").val(); // B2
// 	//	var invar_1 = $("#main_calc_screen_block_cont_win_form_item_input_1").val(); // B3
// 	//	var invar_2 = $("#main_calc_screen_block_cont_win_form_item_input_2").val(); // B4
// 	//	var invar_3 = $("#main_calc_screen_block_cont_win_form_item_input_3").val(); // B5
// 	//	var invar_4 = $("#main_calc_screen_block_cont_win_form_item_input_4").val(); // B6

// 	if (
// 		invar_0 >= 100000 &&
// 		invar_1 >= 10 &&
// 		invar_2 > 0 &&
// 		invar_3 > 0 &&
// 		invar_4 > 0 &&
// 		invar_2 <= 1000 &&
// 		invar_4 <= 100
// 	) {
// 		invar_0++;
// 		invar_0--;
// 		var res_summ_5 = Math.ceil((invar_0 / 100) * invar_3 + invar_0); // B28
// 		res_summ_5 = res_summ_5 + ' ';
// 		res_summ_5 = res_summ_5.replace(/[^0-9-]/g, '');
// 		//res_summ_5 = numberWithSpaces(res_summ_5);

// 		$('#main_calc2_screen_block_cont_win_res_item_summ_5 span')
// 			.empty()
// 			.append(numberWithSpaces(res_summ_5)); // B28

// 		res_summ_5++;
// 		res_summ_5--;
// 		invar_1++;
// 		invar_1--;
// 		var res_summ_2 = Math.ceil(res_summ_5 / invar_1); // B25
// 		res_summ_2 = res_summ_2 + ' ';
// 		res_summ_2 = res_summ_2.replace(/[^0-9-]/g, '');
// 		//res_summ_2 = numberWithSpaces(res_summ_2);

// 		$('#main_calc2_screen_block_cont_win_res_item_summ_2 span')
// 			.empty()
// 			.append(numberWithSpaces(res_summ_2)); // B25

// 		res_summ_2++;
// 		res_summ_2--;
// 		invar_4++;
// 		invar_4--;
// 		var res_summ_1 = Math.ceil(res_summ_2 * (100 / invar_4)); // B24
// 		res_summ_1 = res_summ_1 + ' ';
// 		res_summ_1 = res_summ_1.replace(/[^0-9-]/g, '');
// 		//res_summ_1 = numberWithSpaces(res_summ_1);

// 		var res_summ_3 = Math.ceil(invar_0 / res_summ_1);
// 		res_summ_3 = res_summ_3 + ' ';
// 		res_summ_3 = res_summ_3.replace(/[^0-9-]/g, '');
// 		// res_summ_3 = numberWithSpaces(res_summ_3);

// 		var res_summ_4 = Math.ceil(invar_0 / res_summ_2);
// 		res_summ_4 = res_summ_4 + ' ';
// 		res_summ_4 = res_summ_4.replace(/[^0-9-]/g, '');
// 		//res_summ_4 = numberWithSpaces(res_summ_4);

// 		$('#main_calc2_screen_block_cont_win_res_item_summ_1 span')
// 			.empty()
// 			.append(numberWithSpaces(res_summ_1)); // B24
// 		$('#main_calc2_screen_block_cont_win_res_item_summ_3 span')
// 			.empty()
// 			.append(numberWithSpaces(res_summ_3)); // B26
// 		$('#main_calc2_screen_block_cont_win_res_item_summ_4 span')
// 			.empty()
// 			.append(numberWithSpaces(res_summ_4)); // B27

// 		res_summ_5++;
// 		res_summ_5--;
// 		invar_0++;
// 		invar_0--;
// 		invar_2++;
// 		invar_2--;
// 		var res_summ_6 = Math.ceil((res_summ_5 / 100) * invar_2 - invar_0);
// 		res_summ_6 = res_summ_6 + ' ';
// 		res_summ_6 = res_summ_6.replace(/[^0-9-]/g, '');

// 		$('#main_calc2_screen_block_cont_win_res_item_summ_6 span')
// 			.empty()
// 			.append(numberWithSpaces(res_summ_6)); // B29
// 		$('#main_calc2_screen_block_cont_win_res').show().css({ opacity: '1' });

// 		var valovayaval = Math.ceil((res_summ_5 / 100) * invar_2 - invar_0); //$("#main_calc_screen_block_cont_win_res_item_summ_6 span").html();

// 		if (valovayaval <= 0) {
// 			$('#main_calc2_screen_block_cont_win_res_line_6').addClass(
// 				'main_calc2_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc2_screen_block_cont_win_res_line_6').removeClass(
// 				'main_calc2_screen_block_cont_win_form_item_input_a'
// 			);

// 			$('#main_calc2_screen_block_cont_win_res_badbtn').show();
// 			$('#main_calc2_screen_block_cont_win_res_btn').hide();
// 		} else {
// 			$('#main_calc2_screen_block_cont_win_res_line_6').removeClass(
// 				'main_calc2_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc2_screen_block_cont_win_res_line_6').addClass(
// 				'main_calc2_screen_block_cont_win_form_item_input_a'
// 			);

// 			$('#main_calc2_screen_block_cont_win_res_badbtn').hide();
// 			$('#main_calc2_screen_block_cont_win_res_btn')
// 				.show()
// 				.css({ opacity: '1' });
// 		}

// 		valovayaval = valovayaval + ' ';
// 		valovayaval = valovayaval.replace(/[^0-9-]/g, '');
// 		//valovayaval = numberWithSpaces(valovayaval);
// 		//$("#main_calc2_screen_block_cont_win_res_item_summ_6 span").empty().append(valovayaval);
// 	} else {
// 		$('#main_calc2_screen_block_cont_win_res_item_summ_1 span')
// 			.empty()
// 			.append('—'); // B8
// 		$('#main_calc2_screen_block_cont_win_res_item_summ_2 span')
// 			.empty()
// 			.append('—');
// 		$('#main_calc2_screen_block_cont_win_res_item_summ_3 span')
// 			.empty()
// 			.append('—');
// 		$('#main_calc2_screen_block_cont_win_res_item_summ_4 span')
// 			.empty()
// 			.append('—'); // B11
// 		var invar_b_11 = Math.ceil(invar_0 / invar_1);
// 		$('#main_calc2_screen_block_cont_win_res_item_summ_5 span')
// 			.empty()
// 			.append('—');
// 		var invar_b_8 = Math.ceil(invar_0 * (invar_3 / 100));
// 		$('#main_calc2_screen_block_cont_win_res_item_summ_6 span')
// 			.empty()
// 			.append('—');
// 		$('#main_calc2_screen_block_cont_win_res_btn')
// 			.show()
// 			.css({ opacity: '0.2' });
// 		$('#main_calc2_screen_block_cont_win_res_badbtn').hide();
// 		$('#main_calc2_screen_block_cont_win_res').css({ opacity: '0.3' });

// 		$('#main_calc2_screen_block_cont_win_res_line_6').removeClass(
// 			'main_calc2_screen_block_cont_win_form_item_input_na'
// 		);
// 		$('#main_calc2_screen_block_cont_win_res_line_6').removeClass(
// 			'main_calc2_screen_block_cont_win_form_item_input_a'
// 		);
// 	}

// 	if (invar_0 >= 0) {
// 		if (invar_0 >= 100000) {
// 			$('#main_calc2_screen_block_cont_win_form_item_input_0').removeClass(
// 				'main_calc2_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc2_screen_block_cont_win_form_err_0').css({ opacity: '0' });
// 		} else {
// 			$('#main_calc2_screen_block_cont_win_form_item_input_0').addClass(
// 				'main_calc2_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc2_screen_block_cont_win_form_err_0').css({ opacity: '1' });
// 		}
// 	}

// 	if (invar_1 > 0) {
// 		if (invar_1 >= 10) {
// 			$('#main_calc2_screen_block_cont_win_form_item_input_1').removeClass(
// 				'main_calc2_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc2_screen_block_cont_win_form_err_1').css({ opacity: '0' });
// 		} else {
// 			$('#main_calc2_screen_block_cont_win_form_item_input_1').addClass(
// 				'main_calc2_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc2_screen_block_cont_win_form_err_1').css({ opacity: '1' });
// 		}
// 	}

// 	if (invar_2 > 0) {
// 		if (invar_2 <= 100) {
// 			$('#main_calc2_screen_block_cont_win_form_item_input_2').removeClass(
// 				'main_calc2_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc2_screen_block_cont_win_form_err_2').css({ opacity: '0' });
// 		} else {
// 			$('#main_calc2_screen_block_cont_win_form_item_input_2').addClass(
// 				'main_calc2_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc2_screen_block_cont_win_form_err_2').css({ opacity: '1' });
// 		}
// 	}

// 	if (invar_3 != '') {
// 		if (invar_3 > 0) {
// 			$('#main_calc2_screen_block_cont_win_form_item_input_3').removeClass(
// 				'main_calc2_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc2_screen_block_cont_win_form_err_3').css({ opacity: '0' });
// 		} else {
// 			$('#main_calc2_screen_block_cont_win_form_item_input_3').addClass(
// 				'main_calc2_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc2_screen_block_cont_win_form_err_3').css({ opacity: '1' });
// 		}
// 	}

// 	if (invar_4 > 0) {
// 		if (invar_4 <= 100) {
// 			$('#main_calc2_screen_block_cont_win_form_item_input_4').removeClass(
// 				'main_calc2_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc2_screen_block_cont_win_form_err_4').css({ opacity: '0' });
// 		} else {
// 			$('#main_calc2_screen_block_cont_win_form_item_input_4').addClass(
// 				'main_calc2_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc2_screen_block_cont_win_form_err_4').css({ opacity: '1' });
// 		}
// 	}

// 	invar_0++;
// 	invar_0--;
// 	invar_0 = invar_0 + ' ';
// 	invar_0 = invar_0.replace(/[^0-9]/g, '');
// 	invar_0 = numberWithSpaces(invar_0);
// 	$('#main_calc2_screen_block_cont_win_form_item_input_0').val(invar_0);

// 	invar_1++;
// 	invar_1--;
// 	invar_1 = invar_1 + ' ';
// 	invar_1 = invar_1.replace(/[^0-9]/g, '');
// 	invar_1 = numberWithSpaces(invar_1);
// 	$('#main_calc2_screen_block_cont_win_form_item_input_1').val(invar_1);

// 	$('#main_calc2_screen_block_cont_win_form_item_input_2').val(invar_2);
// 	$('#main_calc2_screen_block_cont_win_form_item_input_3').val(invar_3);
// 	$('#main_calc2_screen_block_cont_win_form_item_input_4').val(invar_4);
// }

// ///

// function processcalc3() {
// 	var invar_0 = $('#main_calc3_screen_block_cont_win_form_item_input_0').val(); // B33
// 	invar_0 = invar_0.replace(/[^0-9]/g, '');
// 	var invar_1 = $('#main_calc3_screen_block_cont_win_form_item_input_1').val(); // B34
// 	invar_1 = invar_1.replace(/[^0-9]/g, '');
// 	var invar_2 = $('#main_calc3_screen_block_cont_win_form_item_input_2').val(); // B35
// 	invar_2 = invar_2.replace(/[^0-9.-]/g, '');
// 	var invar_3 = $('#main_calc3_screen_block_cont_win_form_item_input_3').val(); // B36
// 	invar_3 = invar_3.replace(/[^0-9.-]/g, '');
// 	var invar_4 = $('#main_calc3_screen_block_cont_win_form_item_input_4').val(); // B37
// 	invar_4 = invar_4.replace(/[^0-9.-]/g, '');

// 	////////

// 	if (
// 		invar_3 > 0 &&
// 		invar_1 >= 10 &&
// 		invar_0 > 0 &&
// 		invar_2 <= 100 &&
// 		invar_2 > 0 &&
// 		invar_4 > 0 &&
// 		invar_4 <= 100
// 	) {
// 		//////

// 		var res_summ_1 = Math.ceil((invar_0 / 100) * invar_3); // B39
// 		res_summ_1 = res_summ_1 + ' ';
// 		res_summ_1 = res_summ_1.replace(/[^0-9.-]/g, '');
// 		//	res_summ_1 = numberWithSpaces(res_summ_1);

// 		var res_summ_2 = Math.ceil((invar_1 / 100) * invar_3); // B40
// 		res_summ_2 = res_summ_2 + ' ';
// 		res_summ_2 = res_summ_2.replace(/[^0-9.-]/g, '');
// 		//	res_summ_4 = numberWithSpaces(res_summ_4);

// 		var res_summ_3 = Math.ceil((((invar_1 / 100) * invar_3) / 100) * invar_4); // B41
// 		res_summ_3 = res_summ_3 + ' ';
// 		res_summ_3 = res_summ_3.replace(/[^0-9.-]/g, '');
// 		//	res_summ_5 = numberWithSpaces(res_summ_5);

// 		var res_summ_4 = Math.ceil(invar_0 / invar_1); // B42
// 		res_summ_4 = res_summ_4 + ' ';
// 		res_summ_4 = res_summ_4.replace(/[^0-9.-]/g, '');
// 		//	res_summ_2 = numberWithSpaces(res_summ_2);

// 		$('#main_calc3_screen_block_cont_win_res_item_summ_1 span')
// 			.empty()
// 			.append(numberWithSpaces(res_summ_1)); // B39
// 		$('#main_calc3_screen_block_cont_win_res_item_summ_2 span')
// 			.empty()
// 			.append(numberWithSpaces(res_summ_2)); // B40
// 		$('#main_calc3_screen_block_cont_win_res_item_summ_3 span')
// 			.empty()
// 			.append(numberWithSpaces(res_summ_3)); // B41
// 		$('#main_calc3_screen_block_cont_win_res_item_summ_4 span')
// 			.empty()
// 			.append(numberWithSpaces(res_summ_4)); // B42

// 		res_summ_4++;
// 		res_summ_4--;
// 		var res_summ_5 = Math.ceil(res_summ_4 * (100 / invar_4)); // B43 ////Math.ceil(res_summ_4 / ((res_summ_4 * invar_3)  / 100)); // B43
// 		res_summ_5 = res_summ_5 + ' ';
// 		res_summ_5 = res_summ_5.replace(/[^0-9.-]/g, '');
// 		//		res_summ_3 = numberWithSpaces(res_summ_3);

// 		$('#main_calc3_screen_block_cont_win_res_item_summ_5 span')
// 			.empty()
// 			.append(numberWithSpaces(res_summ_5)); // B43

// 		res_summ_1++;
// 		res_summ_1--;
// 		var res_summ_6 = Math.ceil((invar_0 / 100) * invar_2 - res_summ_1); // B44
// 		res_summ_6 = res_summ_6 + ' ';
// 		res_summ_6 = res_summ_6.replace(/[^0-9-]/g, '');

// 		if (res_summ_6 <= 0) {
// 			$('#main_calc3_screen_block_cont_win_res_line_6').addClass(
// 				'main_calc3_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc3_screen_block_cont_win_res_line_6').removeClass(
// 				'main_calc3_screen_block_cont_win_form_item_input_a'
// 			);

// 			$('#main_calc3_screen_block_cont_win_res_badbtn').show();
// 			$('#main_calc3_screen_block_cont_win_res_btn')
// 				.hide()
// 				.css({ opacity: '0' });

// 			console.log('bad');
// 		} else {
// 			$('#main_calc3_screen_block_cont_win_res_line_6').removeClass(
// 				'main_calc3_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc3_screen_block_cont_win_res_line_6').addClass(
// 				'main_calc3_screen_block_cont_win_form_item_input_a'
// 			);

// 			$('#main_calc3_screen_block_cont_win_res_badbtn').hide();
// 			$('#main_calc3_screen_block_cont_win_res_btn')
// 				.show()
// 				.css({ opacity: '1' });

// 			console.log('good');
// 		}

// 		res_summ_6 = numberWithSpaces(res_summ_6);

// 		/*
// 	console.log(invar_0);
// 	console.log((invar_0 / 100));
// 	console.log(((invar_0 / 100) * invar_2));
// 	console.log(res_summ_1);
// 	console.log((((invar_0 / 100) * invar_2) - res_summ_1));
// */
// 		//var invar_b_8 = Math.ceil(invar_0 * (invar_3 / 100));
// 		$('#main_calc3_screen_block_cont_win_res_item_summ_6 span')
// 			.empty()
// 			.append(res_summ_6); // B44
// 		$('#main_calc3_screen_block_cont_win_res').show().css({ opacity: '1' });

// 		//	$("#main_calc3_screen_block_cont_win_res_badbtn").hide();
// 		//	$("#main_calc3_screen_block_cont_win_res_btn").show().css({ 'opacity' : '1' });
// 	} else {
// 		$('#main_calc3_screen_block_cont_win_res_item_summ_1 span')
// 			.empty()
// 			.append('—');
// 		$('#main_calc3_screen_block_cont_win_res_item_summ_2 span')
// 			.empty()
// 			.append('—');
// 		$('#main_calc3_screen_block_cont_win_res_item_summ_3 span')
// 			.empty()
// 			.append('—');
// 		$('#main_calc3_screen_block_cont_win_res_item_summ_4 span')
// 			.empty()
// 			.append('—');
// 		$('#main_calc3_screen_block_cont_win_res_item_summ_5 span')
// 			.empty()
// 			.append('—');
// 		$('#main_calc3_screen_block_cont_win_res_item_summ_6 span')
// 			.empty()
// 			.append('—');
// 		$('#main_calc3_screen_block_cont_win_res_btn')
// 			.show()
// 			.css({ opacity: '0.2' });
// 		$('#main_calc3_screen_block_cont_win_res_badbtn').hide();
// 		$('#main_calc3_screen_block_cont_win_res').css({ opacity: '0.3' });
// 	}

// 	if (invar_0 != '') {
// 		if (invar_0 >= 100000) {
// 			$('#main_calc3_screen_block_cont_win_form_item_input_0').removeClass(
// 				'main_calc3_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc3_screen_block_cont_win_form_err_0').css({ opacity: '0' });
// 		} else {
// 			$('#main_calc3_screen_block_cont_win_form_item_input_0').addClass(
// 				'main_calc3_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc3_screen_block_cont_win_form_err_0').css({ opacity: '1' });
// 		}
// 	}

// 	if (invar_1 != '') {
// 		if (invar_1 >= 10) {
// 			$('#main_calc3_screen_block_cont_win_form_item_input_1').removeClass(
// 				'main_calc3_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc3_screen_block_cont_win_form_err_1').css({ opacity: '0' });
// 		} else {
// 			$('#main_calc3_screen_block_cont_win_form_item_input_1').addClass(
// 				'main_calc3_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc3_screen_block_cont_win_form_err_1').css({ opacity: '1' });
// 		}
// 	}

// 	if (invar_2 > 0) {
// 		if (invar_2 <= 100) {
// 			$('#main_calc3_screen_block_cont_win_form_item_input_2').removeClass(
// 				'main_calc3_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc3_screen_block_cont_win_form_err_2').css({ opacity: '0' });
// 		} else {
// 			$('#main_calc3_screen_block_cont_win_form_item_input_2').addClass(
// 				'main_calc3_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc3_screen_block_cont_win_form_err_2').css({ opacity: '1' });
// 		}
// 	}

// 	if (invar_3 != '') {
// 		if (invar_3 > 0) {
// 			$('#main_calc3_screen_block_cont_win_form_item_input_3').removeClass(
// 				'main_calc3_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc3_screen_block_cont_win_form_err_3').css({ opacity: '0' });
// 		} else {
// 			$('#main_calc3_screen_block_cont_win_form_item_input_3').addClass(
// 				'main_calc3_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc3_screen_block_cont_win_form_err_3').css({ opacity: '1' });
// 		}
// 	}

// 	if (invar_4 > 0) {
// 		if (invar_4 <= 100) {
// 			$('#main_calc3_screen_block_cont_win_form_item_input_4').removeClass(
// 				'main_calc3_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc3_screen_block_cont_win_form_err_4').css({ opacity: '0' });
// 		} else {
// 			$('#main_calc3_screen_block_cont_win_form_item_input_4').addClass(
// 				'main_calc3_screen_block_cont_win_form_item_input_na'
// 			);
// 			$('#main_calc3_screen_block_cont_win_form_err_4').css({ opacity: '1' });
// 		}
// 	}

// 	invar_0 = numberWithSpaces(invar_0);
// 	$('#main_calc3_screen_block_cont_win_form_item_input_0').val(invar_0);

// 	invar_1 = numberWithSpaces(invar_1);
// 	$('#main_calc3_screen_block_cont_win_form_item_input_1').val(invar_1);

// 	$('#main_calc3_screen_block_cont_win_form_item_input_2').val(invar_2);
// 	$('#main_calc3_screen_block_cont_win_form_item_input_3').val(invar_3);
// 	$('#main_calc3_screen_block_cont_win_form_item_input_4').val(invar_4);
// }

// function numberWithSpaces(x) {
// 	var output = x.split(/(?=(?:...)*$)/);
// 	return output.join(' ');
// }

let interval;

// Утилиты
function numberWithSpaces(x) {
	if (x === null || x === undefined || x === '') return '';

	// Преобразуем в строку и удаляем все пробелы для корректного парсинга
	const str = x.toString().replace(/\s+/g, '');
	const num = parseFloat(str);

	if (isNaN(num)) return str; // Возвращаем оригинальную строку если не число

	// Форматируем только целую часть
	const parts = num.toString().split('.');
	parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ' ');
	return parts.join('.');
}

// Настройка вкладок
function setupTabs() {
	const tabs = document.querySelectorAll('.ads-calculator__tab');
	const blocks = document.querySelectorAll('.ads-calculator__block');

	tabs.forEach(tab => {
		tab.addEventListener('click', function () {
			const tabNum = this.dataset.calcTab;

			tabs.forEach(t => t.classList.remove('active'));
			this.classList.add('active');

			blocks.forEach(block => {
				block.classList.remove('active');
			});

			const targetBlock = document.querySelector(
				`[data-calc-block="${tabNum}"]`
			);
			if (targetBlock) {
				targetBlock.classList.add('active');
			}

			switch (tabNum) {
				case '1':
					processcalc();
					break;
				case '2':
					processcalc2();
					break;
				case '3':
					processcalc3();
					break;
			}
		});
	});
}

// Настройка подсказок
function setupTooltips() {
	document.addEventListener('click', function (e) {
		if (
			e.target.classList.contains('tips__btn') ||
			e.target.textContent === '?'
		) {
			const tipBtn = e.target;
			const tipMessage = tipBtn.nextElementSibling;

			if (tipMessage && tipMessage.classList.contains('tips__message')) {
				tipMessage.style.display =
					tipMessage.style.display === 'none' ? 'block' : 'none';
			}
		}
	});
}

// Обработчики для всех калькуляторов
function setupAllInputs() {
	// Обработчик для форматирования при потере фокуса
	function handleBlurFormatting(input) {
		if (!input) return;

		const value = input.value;
		if (!value && value !== '0') return;

		// Определяем, процентное ли это поле
		const label = input.previousElementSibling;
		const isPercentage =
			label &&
			(label.textContent.includes('%') ||
				label.classList.contains('percentage-label') ||
				input.classList.contains('percentage-field'));

		// Получаем числовое значение
		const numValue = getNumericValue(value);

		// Форматируем только если есть значение
		if (numValue !== 0 || value === '0') {
			if (isPercentage) {
				// Для процентных полей просто оставляем число
				input.value = numValue;
			} else {
				// Для числовых полей форматируем с пробелами
				input.value = numberWithSpaces(numValue);
			}
		}
	}

	// Настраиваем обработчики для каждого калькулятора
	function setupCalculatorInputs(selector, handler) {
		const inputs = document.querySelectorAll(selector);
		inputs.forEach(input => {
			// Удаляем старые обработчики
			input.removeEventListener('input', handler);
			input.removeEventListener('change', handler);
			input.removeEventListener('blur', handleBlurFormatting);

			// Добавляем новые
			input.addEventListener('input', function () {
				// При вводе не форматируем, чтобы не мешать пользователю
				handler();
			});

			input.addEventListener('change', handler);

			input.addEventListener('blur', function () {
				handleBlurFormatting(this);
				handler();
			});

			input.addEventListener('focus', function () {
				// При фокусе убираем пробелы для удобства редактирования
				const value = this.value;
				if (value) {
					this.value = value.replace(/\s+/g, '');
				}
				interval = setInterval(handler, 200);
			});

			input.addEventListener('blur', function () {
				clearInterval(interval);
				handleBlurFormatting(this);
				handler();
			});
		});
	}

	setupCalculatorInputs(
		'[data-calc-block="1"] .ads-calculator__input',
		processcalc
	);
	setupCalculatorInputs(
		'[data-calc-block="2"] .ads-calculator__input',
		processcalc2
	);
	setupCalculatorInputs(
		'[data-calc-block="3"] .ads-calculator__input',
		processcalc3
	);
}

// Функция для получения числового значения из поля
function getNumericValue(value) {
	if (value === null || value === undefined || value === '') return 0;

	// Если это уже число
	if (typeof value === 'number') return value;

	// Преобразуем в строку
	const str = value.toString();

	// Удаляем все нецифровые символы, кроме точки, минуса и запятой
	let cleaned = str
		.replace(/\s+/g, '') // Удаляем пробелы
		.replace(/[^\d.,-]/g, '') // Удаляем все, кроме цифр, точки, запятой и минуса
		.replace(/,/g, '.'); // Заменяем запятые на точки

	// Удаляем лишние точки (оставляем только первую)
	const parts = cleaned.split('.');
	if (parts.length > 2) {
		cleaned = parts[0] + '.' + parts.slice(1).join('');
	}

	// Парсим число
	const result = parseFloat(cleaned);
	return isNaN(result) ? 0 : result;
}

// Калькулятор 1: По нагрузке на отдел продаж
function processcalc() {
	const block = document.querySelector('[data-calc-block="1"]');
	if (!block) return;

	const inputs = block.querySelectorAll('.ads-calculator__input');

	// Получаем значения
	const leads = getNumericValue(inputs[0]?.value);
	const margin = getNumericValue(inputs[1]?.value);
	const avgCheck = getNumericValue(inputs[2]?.value);
	const romi = getNumericValue(inputs[3]?.value);
	const conversion = getNumericValue(inputs[4]?.value);

	const results = block.querySelectorAll('.ads-calculator__result p span');

	// Проверяем, что все поля заполнены и значения корректны
	if (
		leads > 0 &&
		avgCheck > 0 &&
		margin > 0 &&
		margin <= 100 &&
		romi > 0 &&
		conversion > 0 &&
		conversion <= 100
	) {
		// Расчеты
		const clientsPerMonth = Math.ceil((leads / 100) * conversion);
		const revenue = Math.ceil(clientsPerMonth * avgCheck);
		const marketingBudget = Math.ceil(revenue * (100 / (romi + 100)));
		const cac = Math.ceil(marketingBudget / clientsPerMonth);
		const cpl = Math.ceil(marketingBudget / leads);
		const grossProfit = Math.ceil((revenue / 100) * margin - marketingBudget);

		// Обновляем результаты
		if (results[0])
			results[0].textContent = numberWithSpaces(marketingBudget) + ' ₽';
		if (results[1]) results[1].textContent = numberWithSpaces(cac) + ' ₽';
		if (results[2]) results[2].textContent = numberWithSpaces(cpl) + ' ₽';
		if (results[3]) results[3].textContent = numberWithSpaces(clientsPerMonth);
		if (results[4]) results[4].textContent = numberWithSpaces(revenue) + ' ₽';
		if (results[5])
			results[5].textContent = numberWithSpaces(grossProfit) + ' ₽';

		// Обработка кнопки и стилей
		const button = block.querySelector('.button-decore');
		const result6 = results[5]?.closest('.ads-calculator__result');

		if (grossProfit <= 0) {
			if (result6) {
				result6.classList.remove('positive');
				result6.classList.add('negative');
			}
			if (button) {
				button.style.opacity = '0.2';
				button.style.cursor = 'not-allowed';
			}
		} else {
			if (result6) {
				result6.classList.add('positive');
				result6.classList.remove('negative');
			}
			if (button) {
				button.style.opacity = '1';
				button.style.cursor = 'pointer';
			}
		}

		const resultsBlock = block.querySelector('.ads-calculator__results');
		if (resultsBlock) {
			resultsBlock.style.opacity = '1';
		}
	} else {
		// Показываем прочерки
		results.forEach(span => {
			if (span.textContent.includes('₽')) {
				span.textContent = '— ₽';
			} else {
				span.textContent = '—';
			}
		});

		// const button = block.querySelector('.button-decore');
		// if (button) {
		// 	button.style.opacity = '0.2';
		// 	button.style.cursor = 'not-allowed';
		// }

		const resultsBlock = block.querySelector('.ads-calculator__results');
		if (resultsBlock) {
			resultsBlock.style.opacity = '0.3';
		}
	}
}

// Калькулятор 2: По желаемому бюджету
function processcalc2() {
	const block = document.querySelector('[data-calc-block="2"]');
	if (!block) return;

	const inputs = block.querySelectorAll('.ads-calculator__input');

	const budget = getNumericValue(inputs[0]?.value);
	const avgCheck = getNumericValue(inputs[1]?.value);
	const margin = getNumericValue(inputs[2]?.value);
	const romi = getNumericValue(inputs[3]?.value);
	const conversion = getNumericValue(inputs[4]?.value);

	const results = block.querySelectorAll('.ads-calculator__result p span');

	if (
		budget > 0 &&
		avgCheck > 0 &&
		margin > 0 &&
		margin <= 100 &&
		romi > 0 &&
		conversion > 0 &&
		conversion <= 100
	) {
		const revenue = Math.ceil((budget / 100) * romi + budget);
		const clients = Math.ceil(revenue / avgCheck);
		const leads = Math.ceil(clients * (100 / conversion));
		const cpl = Math.ceil(budget / leads);
		const cac = Math.ceil(budget / clients);
		const profit = Math.ceil((revenue / 100) * margin - budget);

		if (results[0]) results[0].textContent = numberWithSpaces(leads);
		if (results[1]) results[1].textContent = numberWithSpaces(clients);
		if (results[2]) results[2].textContent = numberWithSpaces(cpl) + ' ₽';
		if (results[3]) results[3].textContent = numberWithSpaces(cac) + ' ₽';
		if (results[4]) results[4].textContent = numberWithSpaces(revenue) + ' ₽';
		if (results[5]) results[5].textContent = numberWithSpaces(profit) + ' ₽';

		const button = block.querySelector('.button-decore');
		const result6 = results[5]?.closest('.ads-calculator__result');

		if (profit <= 0) {
			if (result6) {
				result6.classList.remove('positive');
				result6.classList.add('negative');
			}
			// if (button) {
			// 	button.style.opacity = '0.2';
			// 	button.style.cursor = 'not-allowed';
			// }
		} else {
			if (result6) {
				result6.classList.add('positive');
				result6.classList.remove('negative');
			}
			// if (button) {
			// 	button.style.opacity = '1';
			// 	button.style.cursor = 'pointer';
			// }
		}

		const resultsBlock = block.querySelector('.ads-calculator__results');
		if (resultsBlock) {
			resultsBlock.style.opacity = '1';
		}
	} else {
		results.forEach(span => {
			if (span.textContent.includes('₽')) {
				span.textContent = '— ₽';
			} else {
				span.textContent = '—';
			}
		});

		// const button = block.querySelector('.button-decore');
		// if (button) {
		// 	button.style.opacity = '0.2';
		// 	button.style.cursor = 'not-allowed';
		// }

		const resultsBlock = block.querySelector('.ads-calculator__results');
		if (resultsBlock) {
			resultsBlock.style.opacity = '0.3';
		}
	}
}

// Калькулятор 3: По желаемой выручке
function processcalc3() {
	const block = document.querySelector('[data-calc-block="3"]');
	if (!block) return;

	const inputs = block.querySelectorAll('.ads-calculator__input');

	const revenue = getNumericValue(inputs[0]?.value);
	const avgCheck = getNumericValue(inputs[1]?.value);
	const margin = getNumericValue(inputs[2]?.value);
	const marketingShare = getNumericValue(inputs[3]?.value);
	const conversion = getNumericValue(inputs[4]?.value);

	const results = block.querySelectorAll('.ads-calculator__result p span');

	if (
		revenue > 0 &&
		avgCheck > 0 &&
		margin > 0 &&
		margin <= 100 &&
		marketingShare > 0 &&
		marketingShare <= 100 &&
		conversion > 0 &&
		conversion <= 100
	) {
		const budget = Math.ceil((revenue / 100) * marketingShare);
		const cac = Math.ceil((avgCheck / 100) * marketingShare);
		const cpl = Math.ceil(
			(((avgCheck / 100) * marketingShare) / 100) * conversion
		);
		const clients = Math.ceil(revenue / avgCheck);
		const leads = Math.ceil(clients * (100 / conversion));
		const profit = Math.ceil((revenue / 100) * margin - budget);

		if (results[0]) results[0].textContent = numberWithSpaces(budget) + ' ₽';
		if (results[1]) results[1].textContent = numberWithSpaces(cac) + ' ₽';
		if (results[2]) results[2].textContent = numberWithSpaces(cpl) + ' ₽';
		if (results[3]) results[3].textContent = numberWithSpaces(clients) + ' ₽';
		if (results[4]) results[4].textContent = numberWithSpaces(leads) + ' ₽';
		if (results[5]) results[5].textContent = numberWithSpaces(profit) + ' ₽';

		const button = block.querySelector('.button-decore');
		const result6 = results[5]?.closest('.ads-calculator__result');

		if (profit <= 0) {
			if (result6) {
				result6.classList.remove('positive');
				result6.classList.add('negative');
			}
			// if (button) {
			// 	button.style.opacity = '0.2';
			// 	button.style.cursor = 'not-allowed';
			// }
		} else {
			if (result6) {
				result6.classList.add('positive');
				result6.classList.remove('negative');
			}
			// if (button) {
			// 	button.style.opacity = '1';
			// 	button.style.cursor = 'pointer';
			// }
		}

		const resultsBlock = block.querySelector('.ads-calculator__results');
		if (resultsBlock) {
			resultsBlock.style.opacity = '1';
		}
	} else {
		results.forEach(span => {
			if (span.textContent.includes('₽')) {
				span.textContent = '— ₽';
			} else {
				span.textContent = '—';
			}
		});

		// const button = block.querySelector('.button-decore');
		// if (button) {
		// 	button.style.opacity = '0.2';
		// 	button.style.cursor = 'not-allowed';
		// }

		const resultsBlock = block.querySelector('.ads-calculator__results');
		if (resultsBlock) {
			resultsBlock.style.opacity = '0.3';
		}
	}
}

// Инициализация
document.addEventListener('DOMContentLoaded', function () {
	console.log('Инициализация калькулятора...');

	setupAllInputs();
	setupTabs();
	setupTooltips();

	// Запускаем расчет для всех калькуляторов
	processcalc();
	processcalc2();
	processcalc3();

	console.log('Калькулятор готов!');
});
