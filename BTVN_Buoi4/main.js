let portfolio = document.querySelector('#portfolio');
let about = document.querySelector('#about');
let contact = document.querySelector('#contact');

let isInViewPort = elem => {
  let bounding = elem.getBoundingClientRect();

  return (
    bounding.top >= 0 &&
    bounding.left >= 0 &&
    bounding.bottom <=
      (window.innerHeight || document.documentElement.clientHeight) &&
    bounding.right <=
      (window.innerWidth || document.documentElement.clientWidth)
  );
};

let showButton = (button, buttonName) => {
  let elem = document.getElementById(`${buttonName}-header`);
  if (isInViewPort(button)) {
    // elem.getElementsByTagName('a').onmouseover = () => {
    //   this.style.color = '#fff !important';
    // };
    elem.style.backgroundColor = '#1abc9c';
  } else {
    // elem.getElementsByTagName('a').onmouseover = () => {
    //   this.style.color = '#1abc9c !important';
    // };
    elem.style.backgroundColor = '#2c3e50';
  }
};

window.onscroll = () => {
  showButton(portfolio, 'portfolio');
  showButton(about, 'about');
  showButton(contact, 'contact');
};
