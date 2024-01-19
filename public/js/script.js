//menu ani comment...

function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }
  
  function closeNav() {
    document.getElementById("myNav").style.width = "0";
  }
  
  //slideshow
  
  const myslide = document.querySelectorAll('.myslide'),
    dot = document.querySelectorAll('.dot');
  let counter = 1;
  slidefun(counter);
  
  let timer = setInterval(autoSlide, 8000);
  function autoSlide() {
    counter += 1;
    slidefun(counter);
  }
  function plusSlides(n) {
    counter += n;
    slidefun(counter);
    resetTimer();
  }
  function currentSlide(n) {
    counter = n;
    slidefun(counter);
    resetTimer();
  }
  function resetTimer() {
    clearInterval(timer);
    timer = setInterval(autoSlide, 8000);
  }
  
  function slidefun(n) {
  
    let i;
    for (i = 0; i < myslide.length; i++) {
      myslide[i].style.display = "none";
    }
    for (i = 0; i < dot.length; i++) {
      dot[i].className = dot[i].className.replace(' active', '');
    }
    if (n > myslide.length) {
      counter = 1;
    }
    if (n < 1) {
      counter = myslide.length;
    }
    myslide[counter - 1].style.display = "block";
    dot[counter - 1].className += " active";
  }
  
  //Drop Down
  
  var dropdown = document.getElementsByClassName("dropdown-btn");
  var i;
  
  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function () {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
      }
    });
  }
  
  
  // Scroll Up Button
  let mybutton = document.getElementById("scBtn");
  
  window.onscroll = function () { scrollFunction() };
  
  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }
  
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  