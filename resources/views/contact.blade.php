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

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>



@include("layouts.header")  

<div class="container">
        <div class="content">

            <div class="left-side">

                <div class="address details">
                    <i class="fa fa-map-marker"></i>
                    <div class="topic">Address</div>
                    <div class="text-one">S. Thomas’ College, Mount Lavinia, Sri Lanka</div>
                </div>
                <div class="phone details">
                    <i class="fa fa-phone"></i>
                    <div class="topic">Phone</div>
                    <div class="text-one">Group Scout Administrator: Mrs. Wathsala Wijewickrema (0772930805)</div>
                    <div class="text-two">Scout Master: Mr. Dilanka Dayananda (0701944131)</div>
                    <div class="text-two">Troop Leader: J.S. Fernando (0777318283)</div>
                    <div class="text-two">Asst. Troop Leader: D.R.K. Haththottuwa (0763136848)</div>
                </div>
                <div class="email details">
                    <i class="fa fa-envelope"></i>
                    <div class="topic">Email</div>
                    <div class="text-one">Troop E-Mail Address: stcscouts@gmail.com</div>
                </div>

            </div>

            <div class="right-side">
                <div class="topic-text">Contact US</div>
                <p></p>
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3688.061940898536!2d79.865034!3d6.837401!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25b185cb65ba3%3A0x359e4cab22d61c21!2sS.%20Thomas&#39;%20College!5e1!3m2!1sen!2slk!4v1690163091413!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
    </div>


    @include("layouts.footer")  


    </body>

    <script src="{{asset ('js/script.js')}}"></script>


</html>