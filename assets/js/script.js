document.addEventListener('DOMContentLoaded', function() {
  // Создаём модальное окно, если его нет в HTML
  let modal = document.createElement('div');
  modal.classList.add('modal');
  modal.innerHTML = '<span class="close-modal">&times;</span><img src="" alt="Full Screen Image">';
  document.body.appendChild(modal);

  let modalImg = modal.querySelector('img');
  let closeModal = modal.querySelector('.close-modal');

  // При клике на изображение открываем его в модальном окне
  document.querySelectorAll('.gallery img').forEach(img => {
    img.addEventListener('click', function() {
      modal.classList.add('active');
      modalImg.src = this.src;
    });
  });

  // Закрытие модального окна по клику на крестик или по клику вне изображения
  closeModal.addEventListener('click', function() {
    modal.classList.remove('active');
  });

  modal.addEventListener('click', function(e) {
    if (e.target === modal) {
      modal.classList.remove('active');
    }
  });
});
