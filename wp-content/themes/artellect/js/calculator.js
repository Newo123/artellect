let interval;

// --- УТИЛИТЫ ---

function numberWithSpaces(x) {
	if (x === null || x === undefined || x === '') return '';

	const str = x.toString().replace(/\s+/g, '');
	const num = parseFloat(str);

	if (isNaN(num)) return str;

	const parts = num.toString().split('.');
	parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ' ');
	return parts.join('.');
}

function getNumericValue(value) {
	if (value === null || value === undefined || value === '') return 0;
	if (typeof value === 'number') return value;

	const str = value.toString();

	let cleaned = str
		.replace(/\s+/g, '')
		.replace(/[^\d.,-]/g, '')
		.replace(/,/g, '.');

	const parts = cleaned.split('.');
	if (parts.length > 2) {
		cleaned = parts[0] + '.' + parts.slice(1).join('');
	}

	const result = parseFloat(cleaned);
	return isNaN(result) ? 0 : result;
}

// --- УПРАВЛЕНИЕ РЕЗУЛЬТАТАМИ И КНОПКОЙ ---

function updateCtaButton(block, profit) {
	const button = block.querySelector('.button-decore');
	if (!button) return;

	const buttonTextElement = button.querySelector('span') || button;
	const resultBlock = block.querySelector('.ads-calculator__result:last-child');

	if (profit <= 0) {
		// Убыток или ноль
		if (resultBlock) {
			resultBlock.classList.remove('positive');
			resultBlock.classList.add('negative');
		}
		buttonTextElement.textContent = 'Как избежать такого результата';
	} else {
		// Прибыль
		if (resultBlock) {
			resultBlock.classList.add('positive');
			resultBlock.classList.remove('negative');
		}
		buttonTextElement.textContent = 'Как получить такой результат';
	}

	// В любом случае, делаем кнопку активной, если расчеты были произведены
	button.style.opacity = '1';
	button.style.cursor = 'pointer';
}

function updateResultDisplay(block, isCalculated) {
	const resultsBlock = block.querySelector('.ads-calculator__results');
	if (resultsBlock) {
		resultsBlock.style.opacity = isCalculated ? '1' : '0.3';
	}

	const button = block.querySelector('.button-decore');

	if (!isCalculated) {
		// Если расчеты невозможны (поля пустые/невалидные):

		// 1. Устанавливаем прочерки
		const results = block.querySelectorAll('.ads-calculator__result p span');
		results.forEach(span => {
			if (span.textContent.includes('₽')) {
				span.textContent = '— ₽';
			} else {
				span.textContent = '—';
			}
		});

		// 2. Устанавливаем текст кнопки по умолчанию
		const buttonTextElement = button?.querySelector('span') || button;
		if (buttonTextElement) {
			buttonTextElement.textContent = 'Как получить такой результат';
		}

		// 3. Делаем кнопку менее заметной
		if (button) {
			button.style.opacity = '0.5';
			button.style.cursor = 'not-allowed';
		}
	} else {
		// Если расчет произведен, делаем кнопку активной (логика текста в updateCtaButton)
		if (button) {
			button.style.opacity = '1';
			button.style.cursor = 'pointer';
		}
	}
}

// --- КАЛЬКУЛЯТОРЫ (С ЛОГИКОЙ РАСЧЕТА) ---

// Калькулятор 1: По нагрузке на отдел продаж
function processcalc() {
	const block = document.querySelector('[data-calc-block="1"]');
	if (!block) return;

	const inputs = block.querySelectorAll('.ads-calculator__input');

	const leads = getNumericValue(inputs[0]?.value);
	const margin = getNumericValue(inputs[1]?.value);
	const avgCheck = getNumericValue(inputs[2]?.value);
	const romi = getNumericValue(inputs[3]?.value);
	const conversion = getNumericValue(inputs[4]?.value);

	const results = block.querySelectorAll('.ads-calculator__result p span');

	const isValid =
		leads > 0 &&
		avgCheck > 0 &&
		margin > 0 &&
		margin <= 100 &&
		romi > 0 &&
		conversion > 0 &&
		conversion <= 100;

	if (isValid) {
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

		updateCtaButton(block, grossProfit);
		updateResultDisplay(block, true);
	} else {
		updateResultDisplay(block, false);
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

	const isValid =
		budget > 0 &&
		avgCheck > 0 &&
		margin > 0 &&
		margin <= 100 &&
		romi > 0 &&
		conversion > 0 &&
		conversion <= 100;

	if (isValid) {
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

		updateCtaButton(block, profit);
		updateResultDisplay(block, true);
	} else {
		updateResultDisplay(block, false);
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

	const isValid =
		revenue > 0 &&
		avgCheck > 0 &&
		margin > 0 &&
		margin <= 100 &&
		marketingShare > 0 &&
		marketingShare <= 100 &&
		conversion > 0 &&
		conversion <= 100;

	if (isValid) {
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
		if (results[3]) results[3].textContent = numberWithSpaces(clients);
		if (results[4]) results[4].textContent = numberWithSpaces(leads);
		if (results[5]) results[5].textContent = numberWithSpaces(profit) + ' ₽';

		updateCtaButton(block, profit);
		updateResultDisplay(block, true);
	} else {
		updateResultDisplay(block, false);
	}
}

// --- УПРАВЛЕНИЕ ИНПУТАМИ И ВКЛАДКАМИ ---

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
		const target = e.target;
		if (target.classList.contains('tips__btn') || target.textContent === '?') {
			const tipBtn = target.closest('.tips__btn') || target;
			const tipMessage = tipBtn.nextElementSibling;

			if (tipMessage && tipMessage.classList.contains('tips__message')) {
				document.querySelectorAll('.tips__message').forEach(msg => {
					if (msg !== tipMessage) {
						msg.style.display = 'none';
					}
				});
				tipMessage.style.display =
					tipMessage.style.display === 'none' || tipMessage.style.display === ''
						? 'block'
						: 'none';
			}
		} else {
			document.querySelectorAll('.tips__message').forEach(msg => {
				msg.style.display = 'none';
			});
		}
	});
}

// Обработчики для всех калькуляторов
function setupAllInputs() {
	function handleBlurFormatting(input) {
		if (!input) return;

		const value = input.value;
		if (!value && value !== '0') return;

		const isPercentage = input.classList.contains('percentage-field');
		const numValue = getNumericValue(value);

		if (numValue !== 0 || value === '0') {
			if (isPercentage) {
				input.value = numValue;
			} else {
				input.value = numberWithSpaces(numValue);
			}
		}
	}

	function setupCalculatorInputs(selector, handler) {
		const inputs = document.querySelectorAll(selector);
		inputs.forEach(input => {
			clearInterval(input.dataset.calcInterval);

			input.addEventListener('input', handler);
			input.addEventListener('change', handler);

			input.addEventListener('focus', function () {
				const value = this.value;
				if (value) {
					this.value = value.replace(/\s+/g, '');
				}
				const currentInterval = setInterval(handler, 200);
				this.dataset.calcInterval = currentInterval;
				handler();
			});

			input.addEventListener('blur', function () {
				clearInterval(this.dataset.calcInterval);
				this.dataset.calcInterval = null;

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

// Инициализация
document.addEventListener('DOMContentLoaded', function () {
	console.log('Инициализация калькулятора...');

	setupAllInputs();
	setupTabs();
	setupTooltips();

	// Первоначальный запуск для установки прочерков и дефолтного текста кнопки
	processcalc();
	processcalc2();
	processcalc3();

	console.log('Калькулятор готов!');
});
