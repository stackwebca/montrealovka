// change greyscale hero image to color
var images = document.getElementsByClassName('innerHero');
var changeFrom = 350; // from which amount of scroll do you want the effect to appear ?

window.addEventListener('scroll', function() {
  if (window.scrollY >= changeFrom ) {
    [].forEach.call(images, function(image) {
      image.classList.add('innerHero-color');
    });
  }
  else {
    [].forEach.call(images, function(image) {
      image.classList.remove('innerHero-color');
    });
  }
});

// change greyscale alt image to color
var altimages = document.getElementsByClassName('altImage');
var altchangeFrom = 225; // from which amount of scroll do you want the effect to appear ?

window.addEventListener('scroll', function() {
  if (window.scrollY >= altchangeFrom ) {
    [].forEach.call(altimages, function(image) {
      image.classList.add('altImage-color');
    });
  }
  else {
    [].forEach.call(altimages, function(image) {
      image.classList.remove('altImage-color');
    });
  }
});


// change text size when scrolled on main page on hero image



// Used for changing images on models pages
var image;

function F0() {
  image = `bigF0`
  document.getElementById("bigImage").src = "./img/" + image + ".jpg";
}

function F10() {
  image = `bigF10`
  document.getElementById("bigImage").src = "./img/" + image + ".jpg";
}

function F4() {
  image = `bigF4`
  document.getElementById("bigImage").src = "./img/" + image + ".jpg";
}
function F12() {
  image = `bigF12`
  document.getElementById("bigImage").src = "./img/" + image + ".jpg";
}
function F5() {
  image = `bigF5`
  document.getElementById("bigImage").src = "./img/" + image + ".jpg";
}
function F6() {
  image = `bigF6`
  document.getElementById("bigImage").src = "./img/" + image + ".jpg";
}
function F7() {
  image = `bigF7`
  document.getElementById("bigImage").src = "./img/" + image + ".jpg";
}
function F8() {
  image = `bigF8`
  document.getElementById("bigImage").src = "./img/" + image + ".jpg";
}
function F9() {
  image = `bigF9`
  document.getElementById("bigImage").src = "./img/" + image + ".jpg";
}

function F11() {
  image = `bigF11`
  document.getElementById("bigImage").src = "./img/" + image + ".jpg";
}
function F2() {
  image = `bigF2`
  document.getElementById("bigImage").src = "./img/" + image + ".jpg";
}

function M1() {
  image = `bigM1`
  document.getElementById("bigImage").src = "./img/" + image + ".jpg";
}
function M2() {
  image = `bigM2`
  document.getElementById("bigImage").src = "./img/" + image + ".jpg";
}
function M3() {
  image = `bigM3`
  document.getElementById("bigImage").src = "./img/" + image + ".jpg";
}
function M4() {
  image = `bigM4`
  document.getElementById("bigImage").src = "./img/" + image + ".jpg";
}
function M5() {
  image = `bigM5`
  document.getElementById("bigImage").src = "./img/" + image + ".jpg";
}
function M6() {
  image = `bigM6`
  document.getElementById("bigImage").src = "./img/" + image + ".jpg";
}
function M7() {
  image = `bigM7`
  document.getElementById("bigImage").src = "./img/" + image + ".jpg";
}
function M8() {
  image = `bigM8`
  document.getElementById("bigImage").src = "./img/" + image + ".jpg";
}
function M9() {
  image = `bigM9`
  document.getElementById("bigImage").src = "./img/" + image + ".jpg";
}
function M10() {
  image = `bigM10`
  document.getElementById("bigImage").src = "./img/" + image + ".jpg";
}
function M11() {
  image = `bigM11`
  document.getElementById("bigImage").src = "./img/" + image + ".jpg";
}
