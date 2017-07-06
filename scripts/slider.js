;(function (window, document, undefined) {

  window.onload = function () {
    var slider = document.querySelector('#slider')
    var container = document.querySelector('#slider > .container_slider')
    var pos = 0

    var left = document.querySelector('button.left')
    var right = document.querySelector('button.right')

    left.onclick = function () {
      pos+=slider.clientWidth
      container.style.transform = 'translate(' + pos + 'px)'
    }
    right.onclick = function () {
      pos-=slider.clientWidth
      container.style.transform = 'translate(' + pos + 'px)'
    }

    slider.onclick = function (e) {
      if (e.clientX - slider.clientWidth / 2 > 0) {
        pos-=slider.clientWidth
        container.style.transform = 'translate(' + pos + 'px)'
      } else {
        pos+=slider.clientWidth
        container.style.transform = 'translate(' + pos + 'px)'
      }
    }

  }

}(window, document));
