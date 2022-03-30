

//apllyListerners
document.querySelectorAll('.card.card-sub').forEach(element => {
  element.addEventListener(
    'click',
    ev => {
      window.location.href = `${window.location.origin.substring(-1)}?${ev.target.innerText.replace(/\s+/g, '')}`
    })
})
