document.addEventListener('DOMContentLoaded', () => {
	const button = document.querySelector('#cookieAccept');
	const banner = document.querySelector('#cookieBanner');

	if (button && banner) {
		button.addEventListener('click', async e => {
			try {
				const req = await fetch(e.target?.dataset?.url, {
					method: 'POST',
				});

				if (!req.ok) {
					throw new Error('Возникла ошибка!');
				}
				const res = await req.json();

				banner.classList.remove('show');
				setTimeout(() => {
					banner.remove();
				}, 300);
			} catch (error) {
				console.log(error);
			}
		});
	}
});
