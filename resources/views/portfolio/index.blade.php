<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="module" src="https://cdn.jsdelivr.net/npm/ldrs/dist/auto/square.js"></script>

    <title>FLICK-Portfolio</title>
    <style>
        /* [class*="col-"] {
            padding: 0px
        } */

        #websiteLoader {
            position: fixed;
            background-color: #f1f1f1;
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 2;
            transition: 0.5s ease
        }

        .loader {
            display: block;
            --height-of-loader: 4px;
            --loader-color: rgba(79, 79, 79);
            width: 130px;
            height: var(--height-of-loader);
            border-radius: 30px;
            background-color: rgba(0, 0, 0, 0.2);
            position: relative;
            transition: 0.5s ease
        }

        .loader::before {
            content: "";
            position: absolute;
            background: var(--loader-color);
            top: 0;
            left: 0;
            width: 0%;
            height: 100%;
            border-radius: 30px;
            animation: moving 1s ease-in-out infinite;
        }

        #about .button,
        #about button,
        #about input[type="button"] {
            line-height: 0rem;
            color: #353535;
            background: #afafaf00;
            font-family: 'Poppins';
            border-bottom: 1px solid #5d5d5d;
        }
        #about .button:hover,
        #about button:hover,
        #about input[type="button"]:hover {
            color: #e9e9e9;
            background-color: #5d5d5d
        }

        /* .home-content-tablecell .more .button {
            font-family: 'Poppins';
            margin-left: 10px;
            margin-right: 10px
        } */

        .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info {
            align-items: baseline
        }

        .deneb_footer .copyright_area .copyright_text p {
            margin-top: 0rem
        }

        @keyframes moving {
            50% {
                width: 100%;
            }

            100% {
                width: 0;
                right: 0;
                left: unset;
            }
        }

        ::selection {
            background-color: #5d5d5dbd;
            color: white;
        }

        footer .row {
            display: flex;
            justify-content: space-between;
        }

        @media screen and (max-width:600px) {
            footer .row {
                display: block;

            }

            footer [class*="col-"] {
                width: 80%
            }

            .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info {
                align-items: baseline
            }

            input,
            textarea,
            select,
            pre,
            blockquote,
            figure,
            table,
            p,
            ul,
            ol,
            dl,
            form,
            .fluid-video-wrapper,
            .ss-custom-select {
                margin-bottom: 0rem;
                margin-top: 0rem;
            }
        }
    </style>
</head>

<body id="top">
    <!-- Loader element -->
    <div id="websiteLoader">
        <div class="loader"></div>
    </div>

    <header>

        <div class="header-logo">
            <!-- <a href="index.php">FLICK</a> -->
        </div>
        <a id="header-menu-trigger" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>
        <nav id="menu-nav-wrap">
            <a href="#" class="close-button" title="close"><span>Close</span></a>
            <h3>FLICK</h3>
            <ul class="nav-list">
                <li class="current"><a class="li_link" href="#home" title="">Home</a></li>
                {{-- <li><a class="li_link" href="#about" title="">About</a></li> --}}
                <li><a class="li_link" href="#portfolio" title="">Projects</a></li>
                <li><a class="" href="{{ url('/contact') }}" title="">Contact</a></li>
                <li><a class="" href="{{ url('/course') }}">Course</a></li>
            </ul>
            <ul class="header-social-list">
                <li>
                    <a href="https://www.instagram.com/flickvfx/?hl=en" target="_blank"><i
                            class="fa fa-instagram"></i></a>
                </li>
                <li>
                    <a href="https://open.spotify.com/user/31lky5dbczeenbrmeq3ghvphhgke" target="_blank"><i
                            class="fa fa-spotify"></i></a>
                </li>
            </ul>

        </nav> <!-- end #menu-nav-wrap -->

    </header>
    <section id="home">
        <div class="home-content-table">
            <div class="home-content-tablecell">
                <div class="row">
                    <div class="col-twelve">

                        <!-- <h3 class="animate-intro"></h3> -->
                        <h1 class="animate-intro flick">
                            FLICK<br>

                        </h1>
                        <div class="sub-head">Visual Effects</div>
                        <div class="more animate-intro">
                            <a class="smoothscroll button stroke" href={{ url('/job') }}>
                                Hire Me</a>
                            {{-- <a class="smoothscroll button stroke" href={{ url('/job') }}>
                                View Course
                            </a> --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <ul class="home-social-list">

            <li class="animate-intro">
                <a href="https://www.instagram.com/flickvfx/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a>
            </li>
            <li class="animate-intro">
                <a href="https://open.spotify.com/user/31lky5dbczeenbrmeq3ghvphhgke" target="_blank"><i
                        class="fa fa-spotify"></i></a>
            </li>
        </ul> <!-- end home-social-list -->

        <div class="scrolldown">
            <a href="#about" class="scroll-icon li_link">
                <i class="fa fa-solid fa-chevron-down" aria-hidden="true" style="transform: rotate(270deg);"></i>
                <!-- <i class="fa fa-long-arrow-right" aria-hidden="true"></i> -->
            </a>
        </div>

    </section>


    <!-- about
   ================================================== -->
    <section id="about">

        <div class="row about-wrap">
            <div class="col-full">

                <div class="about-profile-bg"></div>

                <div class="intro">
                    <h3 class="animate-this">About Me</h3>
                    <p class="lead animate-this">I am Surya Narayan Rajak, founder of Flick Visual Effects
                        and Cad Leader for NASA HERC 2024 at Kaizel-YMRD. As a passionate individual dedicated to the
                        world of VFX, I want to share my expertise with aspiring students and nurture them into the next
                        generation of VFX professionals.
                        You can checkout my course details down below <br><br>
                        <a href="{{url('/course')}}"> <button name="submitContact" type="submit">Course Details</button></a>
                    </p>
                </div>

            </div> <!-- end col-full  -->
        </div> <!-- end about-wrap  -->

    </section>

    <section id="portfolio">

        <div class="intro-wrap">

            <div class="row narrow section-intro with-bottom-sep animate-this">
                <div class="col-twelve">
                    <h3>Project Showcase</h3>
                    <!-- <h1>These are some of my projects.</h1> -->

                    <!-- <p class="lead">These are some of my projects.</p> -->
                </div>
            </div> <!-- end row section-intro -->

        </div> <!-- end intro-wrap -->

        <div class="sorting-buttons">
            <button id="imagesBtn">Images</button>
            <button id="videosBtn">Video</button>
            <button id="allBtn" style="border-bottom: 1px solid #939393;">All</button>
        </div>
        <div class="grid-container">

            <!-- Row 1 -->
            <div class="grid-item image-item" data-context="Cyberpunk">
                <img src="assets/img/Cyberpunk.png" alt="Image 1">
            </div>

            <div class=" grid-item video-item" data-context="Date Night">
                <video class="grid-video" poster="assets/poster/date_night_poster.png">
                    <source src="assets/vid/date_night.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="grid-item image-item" data-context="Astronaut">
                <img src="assets/img/Astronaut.png" alt="Image 2">
            </div>

            <!-- Row 2 -->
            <div class=" grid-item video-item" data-context="">
                <video class="grid-video" poster="assets/poster/spidey_poster.png">
                    <source src="assets/vid/spidey.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="grid-item video-item" data-context="A Nightmare">
                <video class="grid-video" poster="assets/poster/scary_night_poster.png">
                    <source src="assets/vid/scary_night.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="grid-item video-item" data-context="Cloth Simulation">
                <video class="grid-video" poster="assets/poster/witch_poster.png">
                    <source src="assets/vid/witch.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <!-- Row 3 -->
            <!-- <div class="grid-item image-item" data-context="Context of Image 5">
            <img src="https://placekitten.com/304/304" alt="Image 5">
        </div>
        <div class="grid-item video-item" data-context="BL">
            <video class="grid-video" poster="assets/3.jpg">
                <source src="assets/video4.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="grid-item image-item" data-context="Context of img 6">
            <img src="https://placekitten.com/305/305" alt="Image 6">
        </div> -->
        </div>
        <div class="overlay">
            <div class="overlay-content">
                <div class="media-container"></div>
                <p class="context-text"></p>
                <button class="close-overlay-button" style="line-height: 0px;"><svg
                        xmlns="http://www.w3.org/2000/svg" height="1.3em" fill="#ddd" viewBox="0 0 512 512">
                        <path
                            d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c-9.4 9.4-9.4 24.6 0 33.9l47 47-47 47c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l47-47 47 47c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-47-47 47-47c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-47 47-47-47c-9.4-9.4-24.6-9.4-33.9 0z" />
                    </svg></button>
            </div>
        </div>

    </section> <!-- end portfolio -->


    <section id="soon">
        <div class="soon-text">
            <br>
            More is otw...

        </div>
    </section>

    @include('portfolio.footer')

    <script src="https://cdn.plyr.io/3.6.3/plyr.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <!-- JavaScript to show/hide loader based on conditions -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var loader = document.getElementById("websiteLoader");
            setTimeout(function() {
                loader.style.visibility = "hidden";
            }, 5000); // 3 seconds
        });
    </script>
</body>

</html>
