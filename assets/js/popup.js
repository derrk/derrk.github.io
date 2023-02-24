const sendFileBtn = document.getElementById('send-file-btn');
const popup = document.querySelector('.popup');
const form = document.getElementById('email-form');

sendFileBtn.addEventListener('click', () => {
  popup.style.display = 'flex';
});

form.addEventListener('submit', () => {
  // Hide the popup when the form is submitted
  popup.style.display = 'none';
});
