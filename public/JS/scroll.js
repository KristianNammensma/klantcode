var projecten = document.getElementById('Projecten');
var diensten = document.getElementById('Diensten');
var overons = document.getElementById('OverOns');
var nieuws = document.getElementById('Nieuws');
var contact = document.getElementById('Contact');

projecten.addEventListener('click', scrollFunction);

function scrollFunction() {
    document.documentElement.scrollTop = 50;
  }