document.querySelectorAll('.card.card-sub').forEach(element => {
  element.addEventListener('click', ev => `${window.location.origin}/${ev.target.innerText}`)
});
