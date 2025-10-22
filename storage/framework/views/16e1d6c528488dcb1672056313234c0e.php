<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StcScouts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Google fonts-->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">


</head>

<body>

<button onclick="topFunction()" id="scBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>



<?php echo $__env->make("layouts.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  

<section class="about-us">
        <div class="about">
            <div class="text">
                <h2>About The Site</h2>
                <h5>History of the Site:</h5>
                <p>Launching of the first site:

                    The first ever website of the Troop was launched at the Scout & Craft Exhibition – Tribal Craft
                    2004,
                    held from the 13th – 14th of February 2004. The site was one of the first ever Troop websites to be
                    launched
                    by a Scout Troop in the country:</p>

                <br>

                <img src="img/ab-1.jpg" class="pic">

                <br>

                <p>
                    The website was then officially handed over to the “Webmasters” of the Troop, an office created to
                    look into the IT related data handling in the Troop. From there on, the site was developed to suit
                    the developments in the field of Web Development in Computing with time.
                </p>

                <br>

                <p>
                    Updating of the site layout:

                    The site layout was changed in 2012, and the platform was changed to HTML 4.0 with added new
                    features and a more attractive look. The following is a glimpse of the site that was updated:
                </p>


            </div>
        </div>
    </section>


<?php echo $__env->make("layouts.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  


    </body>

<script>

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
  

</script>

</html><?php /**PATH C:\xampp\htdocs\stc\stcscouts\resources\views/about.blade.php ENDPATH**/ ?>