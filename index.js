document.querySelectorAll('.card.card-sub').forEach(element => {
  element.addEventListener('click', ev => window.location.href =`${window.location.origin}/${ev.target.innerText.replace(/\s+/g, '')}/index.php`)
});
