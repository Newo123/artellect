window.addEventListener('click', e => {
	const target = e.target.closest('[data-popup]');

	if (target && target?.dataset?.popup !== 'menuPopup') {
		const popup = new Popup(target);
		popup.loadAndShow();
	}
});

function mask(event) {
	event.keyCode && (keyCode = event.keyCode);
	var pos = this.selectionStart;
	if (pos < 3) event.preventDefault();
	var matrix = '+7 (___) ___ __ __',
		i = 0,
		def = matrix.replace(/\D/g, ''),
		val = this.value.replace(/\D/g, ''),
		new_value = matrix.replace(/[_\d]/g, function (a) {
			return i < val.length ? val.charAt(i++) : a;
		});
	i = new_value.indexOf('_');
	if (i != -1) {
		i < 5 && (i = 3);
		new_value = new_value.slice(0, i);
	}
	var reg = matrix
		.substr(0, this.value.length)
		.replace(/_+/g, function (a) {
			return '\\d{1,' + a.length + '}';
		})
		.replace(/[+()]/g, '\\$&');
	reg = new RegExp('^' + reg + '$');
	if (
		!reg.test(this.value) ||
		this.value.length < 5 ||
		(keyCode > 47 && keyCode < 58)
	) {
		this.value = new_value;
	}
	if (event.type == 'blur' && this.value.length < 5) {
		this.value = '';
	}
}

class Popup {
	url = '';
	button;
	body;
	popup;
	observer; // Добавляем свойство для хранения наблюдателя

	constructor(button) {
		this.button = button;
		this.url = this.button.dataset.popup;
		this.body = document.body;
	}

	load() {
		fetch(this.url).then(async req => {
			const res = await req.text();

			this.popup = new DOMParser()
				.parseFromString(res, 'text/html')
				.querySelector('.popup');

			this.body.insertAdjacentElement('beforeend', this.popup);
			this.show();
			this.setupObserver(); // Настраиваем наблюдателя после показа попапа
		});
	}

	show() {
		if (!this.popup) return;
		const input = this.popup.querySelector('.tel-mask');

		if (input) {
			input.addEventListener('input', mask, false);
			input.addEventListener('focus', mask, false);
			input.addEventListener('blur', mask, false);
			input.addEventListener('keydown', mask, false);
		}
		this.body.classList.add('scroll-hidden');
		setTimeout(() => {
			if (this.popup) {
				initAtropos();
				this.popup.classList.add('show');
			}
		}, 100);
	}

	loadAndShow() {
		this.load();
	}

	// Настройка MutationObserver для слежения за изменениями класса
	setupObserver() {
		if (!this.popup) return;

		// Создаем наблюдателя
		this.observer = new MutationObserver(mutations => {
			mutations.forEach(mutation => {
				if (
					mutation.type === 'attributes' &&
					mutation.attributeName === 'class' &&
					!this.popup.classList.contains('show')
				) {
					// Класс 'show' был удален - выполняем действие
					this.onHide();
				}
			});
		});

		// Начинаем наблюдение за изменениями атрибута class
		this.observer.observe(this.popup, {
			attributes: true,
			attributeFilter: ['class'],
		});
	}

	// Метод, который вызывается при удалении класса show
	onHide() {
		// Выполняем нужные действия
		this.body.classList.remove('scroll-hidden');

		// Останавливаем наблюдение
		if (this.observer) {
			this.observer.disconnect();
			this.observer = null;
		}

		// Удаляем попап из DOM через некоторое время для анимации
		setTimeout(() => {
			if (this.popup && this.popup.parentNode) {
				this.popup.parentNode.removeChild(this.popup);
				this.popup = null;
			}
		}, 500); // Время должно соответствовать длительности CSS-анимации
	}

	remove() {
		// Очистка наблюдателя при ручном удалении
		if (this.observer) {
			this.observer.disconnect();
			this.observer = null;
		}

		if (this.popup && this.popup.parentNode) {
			this.popup.parentNode.removeChild(this.popup);
			this.popup = null;
		}

		this.body.classList.remove('scroll-hidden');
	}
}
