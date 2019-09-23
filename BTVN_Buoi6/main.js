document.addEventListener("DOMContentLoaded", () => {
  const isInViewport = el => {
    const scroll = window.scrollY || window.pageYOffset;
    const boundsTop = el.getBoundingClientRect().top + scroll;

    const viewport = {
      top: scroll,
      bottom: scroll + window.innerHeight
    };

    const bounds = {
      top: boundsTop,
      bottom: boundsTop + el.clientHeight
    };

    return (
      (bounds.bottom >= viewport.top && bounds.bottom <= viewport.bottom) ||
      (bounds.top <= viewport.bottom && bounds.top >= viewport.top)
    );
  };

  const array = [
    {elem: document.querySelector("#about"), name: 'about', isLight: false},
    {elem: document.querySelector("#experience"), name: 'experience', isLight: false},
    {elem: document.querySelector("#education"), name: 'education', isLight: false},
    {elem: document.querySelector("#skills"), name: 'skills', isLight: false},
    {elem: document.querySelector("#interests"), name: 'interests', isLight: false},
    {elem: document.querySelector("#awards"), name: 'awards', isLight: false}
  ]

  document.addEventListener("scroll", event => {
    let x = array[0]
    let a = array.map(({elem, name, isLight}) => {
      
    })
    console.log(a)
    let elemChange = document.getElementById(`${x.name}Side`);
    x.isLight ? elemChange.style.opacity = 1 : elemChange.style.opacity = 0.5;
  });
});



