export default class Cursor {
  constructor() {
    this.init();
  }
  init() {
    var cursor = document.querySelector('.cursor');
    var cursorinner = document.querySelector('.cursor2');
    var a = document.querySelectorAll('a');

    document.addEventListener('mousemove', function (e) {
      var x = e.clientX;
      var y = e.clientY;
      cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`;
      cursorinner.style.left = x + 'px';
      cursorinner.style.top = y + 'px';
    });

    document.addEventListener('mousedown', function () {
      cursor.classList.add('click');
      cursorinner.classList.add('cursorinnerhover');
    });

    document.addEventListener('mouseup', function () {
      cursor.classList.remove('click');
      cursorinner.classList.remove('cursorinnerhover');
    });

    a.forEach((item) => {
      item.addEventListener('mouseover', () => {
        cursor.classList.add('hover');
      });
      item.addEventListener('mouseleave', () => {
        cursor.classList.remove('hover');
      });
    });
  }
}

//Copyright (c) 2024 by Davide Magnoni (https://codepen.io/maghno/pen/NWZymmp)
