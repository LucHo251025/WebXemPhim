const dropdownButton = document.getElementById('dropdownButtonOptionforComment');
const dropdownMenu = document.getElementById('dropdownMenuOptionforComment');

dropdownButton.addEventListener('click', () => {
  dropdownMenu.classList.toggle('hidden');
});

window.addEventListener('click', (e) => {
  if (!dropdownButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
    dropdownMenu.classList.add('hidden');
  }
});
