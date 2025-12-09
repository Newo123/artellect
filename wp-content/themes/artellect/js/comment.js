document.addEventListener('DOMContentLoaded', function () {
	const loadMoreBtn = document.getElementById('loadMoreComments');
	const commentsContainer = document.getElementById('commentsContainer');
	if (!loadMoreBtn) return;

	loadMoreBtn.addEventListener('click', function () {
		const postId = this.dataset.postId;
		const currentOffset = parseInt(this.dataset.offset);
		const perPage = parseInt(this.dataset.perPage) || 6;
		const apiUrl = this.dataset.url;

		// Блокируем кнопку
		const btnText = this.querySelector('span:first-child');
		const spinner = this.querySelector('.loading-spinner');
		btnText.style.display = 'none';
		spinner.style.display = 'inline-flex';
		this.disabled = true;

		// Формируем URL с параметрами
		const url = new URL(apiUrl);
		url.searchParams.append('post_id', postId);
		url.searchParams.append('offset', currentOffset);
		url.searchParams.append('per_page', perPage);

		// Отправляем GET запрос
		fetch(url, {
			method: 'GET',
			headers: {
				Accept: 'application/json',
				'X-Requested-With': 'XMLHttpRequest',
			},
		})
			.then(response => {
				if (!response.ok) {
					throw new Error(`HTTP error! Status: ${response.status}`);
				}
				return response.json();
			})
			.then(data => {
				if (data.success) {
					// Добавляем новые комментарии
					if (data.data.html) {
						commentsContainer.insertAdjacentHTML('beforeend', data.data.html);
					}

					// Обновляем данные кнопки
					const loadedCount = data.data.count || 0;
					const newOffset = data.data.offset || currentOffset + loadedCount;
					const remaining = data.data.remaining || 0;
					const hasMore = data.data.has_more || false;

					this.dataset.offset = newOffset;

					// Обновляем текст или скрываем кнопку
					if (hasMore && remaining > 0) {
						const nextLoad = Math.min(perPage, remaining);
						btnText.textContent = `Загрузить ещё (${nextLoad})`;
						btnText.style.display = 'inline';
					} else {
						// Скрываем кнопку если все комментарии загружены
						this.style.display = 'none';
					}
				} else {
					throw new Error(data.error || 'Ошибка загрузки комментариев');
				}
			})
			.catch(error => {
				console.error('Error loading comments:', error);

				// Показываем сообщение об ошибке
				const errorMsg = document.createElement('div');
				errorMsg.className = 'comments-error';
				errorMsg.innerHTML = `
                <p>Не удалось загрузить комментарии</p>
                <small>Попробуйте обновить страницу</small>
            `;
				errorMsg.style.cssText = `
                background: #fff3cd;
                border: 1px solid #ffeaa7;
                color: #856404;
                padding: 12px;
                margin: 15px 0;
                border-radius: 6px;
                text-align: center;
                font-size: 14px;
            `;

				this.parentNode.insertBefore(errorMsg, this);

				// Удаляем сообщение через 5 секунд
				setTimeout(() => errorMsg.remove(), 5000);

				// Восстанавливаем кнопку
				btnText.style.display = 'inline';
			})
			.finally(() => {
				spinner.style.display = 'none';
				this.disabled = false;
			});
	});
});
