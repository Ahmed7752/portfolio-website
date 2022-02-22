<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    @include ('include.head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfolio</title>

<body>
    @include ('include.header')
    <div class="page">
        <div class="home-container">
            <img src="./img/img-of-bakery.png" alt="bg img">
            <div class="home-message ">
                <h1 class="greeting">
                    <span class="text-wrapper">
                        <span class="line line1"></span>
                        <span class="second-greeting">Hi There I'm Ahmed</span>
                    </span>
                </h1>
                <div class="wrapper1">
                    <div class="static-txt">I'm a</div>
                    <ul class="dynamic-txts">
                        <li><span>Developer</span></li>
                        <li><span>Designer</span></li>
                        <li><span>Video editor</span></li>
                        <li><span>Freelancer</span></li>
                    </ul>
                </div>
                <p>I create amazing websites with an ever growing
                    array of languages and tools</p>


            </div>
        </div>




        @include ('include.footer')
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

</html>
