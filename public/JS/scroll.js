var projecten = document.getElementById('Projecten');
var diensten = document.getElementById('Diensten');
var overons = document.getElementById('OverOns');
var nieuws = document.getElementById('Nieuws');
var contact = document.getElementById('Contact');

projecten.addEventListener('click', scrollFunction);
diensten.addEventListener('click', scrollFunction2);
overons.addEventListener('click', scrollFunction3);

function scrollFunction() {
    document.documentElement.scrollTop = 1300;
  }

  function scrollFunction2() {
    document.documentElement.scrollTop = 500;
  }

  function scrollFunction3() {
    document.documentElement.scrollTop = 2100;
  }