// AJAX подгрузка кейсов
document.addEventListener('DOMContentLoaded', function () {
	const loadMoreBtn = document.querySelector('.all-cases__more button');
	const casesWrapper = document.querySelector('.all-cases__wrapper');
	let currentPage = 1;
	let isLoading = false;

	if (!loadMoreBtn) return;

	loadMoreBtn.addEventListener('click', loadMoreCases);

	async function loadMoreCases() {
		if (isLoading) return;

		isLoading = true;
		currentPage++;

		// Сохраняем оригинальный текст кнопки
		const originalText = loadMoreBtn.innerHTML;

		// Показываем индикатор загрузки
		loadMoreBtn.innerHTML = '<span>Загрузка...</span>';
		loadMoreBtn.disabled = true;

		try {
			// Получаем текущие параметры фильтра из URL
			const urlParams = new URLSearchParams(window.location.search);
			const directions = urlParams.getAll('directions[]');
			const industries = urlParams.getAll('industries[]');

			// Получаем nonce из data-атрибута кнопки
			const nonce = loadMoreBtn.dataset.nonce;
			if (!nonce) {
				throw new Error('Nonce not found');
			}

			// Формируем данные для запроса
			const formData = new FormData();
			formData.append('action', 'load_more_cases');
			formData.append('page', currentPage);
			formData.append('nonce', nonce);

			// Добавляем параметры фильтра
			directions.forEach(direction => {
				formData.append('directions[]', direction);
			});
			industries.forEach(industry => {
				formData.append('industries[]', industry);
			});

			const response = await fetch('/wp-admin/admin-ajax.php', {
				method: 'POST',
				body: formData,
			});

			if (!response.ok) {
				throw new Error('Network response was not ok');
			}

			const data = await response.json();

			if (data.success) {
				// Добавляем новые посты
				casesWrapper.insertAdjacentHTML('beforeend', data.data.html);

				// Проверяем, есть ли еще посты
				if (!data.data.has_more) {
					loadMoreBtn.style.display = 'none';
				}
			} else {
				throw new Error(data.data);
			}
		} catch (error) {
			console.error('Error loading more cases:', error);
			loadMoreBtn.innerHTML = '<span>Ошибка загрузки</span>';

			// Через 3 секунды возвращаем обычный текст
			setTimeout(() => {
				loadMoreBtn.innerHTML = originalText;
				loadMoreBtn.disabled = false;
			}, 3000);
			return;
		}

		// Возвращаем обычное состояние кнопки
		loadMoreBtn.innerHTML = originalText;
		loadMoreBtn.disabled = false;
		isLoading = false;
	}
});
