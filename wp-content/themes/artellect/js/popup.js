window.addEventListener('click', e => {
	const target = e.target.closest('[data-popup]');

	if (target && target?.dataset?.popup !== 'menuPopup') {
		const popup = new Popup(target);
		popup.loadAndShow();
	}
});

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
