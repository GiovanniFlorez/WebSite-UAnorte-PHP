const fabOptions = document.getElementById('fabOptions');
const toggleFab = document.getElementById('toggleFab');
const fabArrow = document.getElementById('fabArrow');

function handleScroll() {
  if (window.pageYOffset > 50) {
    toggleFab.classList.remove('hidden');
    toggleFab.classList.add('visible');

    fabOptions.classList.remove('visible');
    fabOptions.classList.add('hidden');

    fabArrow.style.transform = 'rotate(0deg)';
  } else {
    toggleFab.classList.remove('visible');
    toggleFab.classList.add('hidden');

    fabOptions.classList.remove('hidden');
    fabOptions.classList.add('visible');

    fabArrow.style.transform = 'rotate(0deg)';
  }
}

handleScroll();

window.addEventListener('scroll', handleScroll);

toggleFab.addEventListener('click', () => {
  const isOpen = fabOptions.classList.contains('visible');

  if (isOpen) {
    fabOptions.classList.remove('visible');
    fabOptions.classList.add('hidden');
    fabArrow.style.transform = 'rotate(0deg)';
  } else {
    fabOptions.classList.remove('hidden');
    fabOptions.classList.add('visible');
    fabArrow.style.transform = 'rotate(180deg)';
  }
});