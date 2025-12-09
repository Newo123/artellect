window.addEventListener('submit', async e => {
	const target = e.target;
	// сделать проверку на атрибут data-send +
	if (target && target.dataset.send) {
		e.preventDefault();
		const formSend = new FormSend(target);
	}
});

class FormSend {
	form;
	dataUrl = '';
	hash = '';
	hashUrl = '';
	method = 'POST';

	constructor(form) {
		this.form = form;

		if (this.form.dataset.send) {
			this.dataUrl = this.form.dataset.send;
		}
		if (this.form.dataset.hash) {
			this.hashUrl = this.form.dataset.hash;
		}
		if (this.form.getAttribute('method')) {
			this.method = this.form.getAttribute('method');
		}

		this.send();
	}

	async send() {
		try {
			const formData = new FormData(this.form);

			if (this.hashUrl) {
				this.hash = await fetch(this.hashUrl).then(res => res.text());
			}

			if (this.hash) {
				formData.append('hash', this.hash);
			}

			const request = await fetch(this.dataUrl, {
				method: this.method,
				body: formData,
			});

			if (request.ok) {
				this.form.reset();
			}

			const response = await request.json();
			Toastify({
				text: response.message,
				className: response.success ? 'info' : 'error',
			}).showToast();
		} catch (error) {}
	}
}
