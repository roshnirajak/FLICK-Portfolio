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
        #portfolio .section-intro h3 {
            color: #5d5d5d
        }

        #imagesBtn,
        #videosBtn,
        #allBtn {
            color: #9d9d9d
        }

        [class*="col-"] {
            padding: 0px
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

<body>

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
            <div class=" grid-item video-item" data-context="Teen Wolf">
                <video class="grid-video" poster="assets/poster/spidey_poster.png">
                    <source src="assets/vid/spidey.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="grid-item video-item" data-context="Zoro">
                <video class="grid-video" poster="assets/poster/scary_night_poster.png">
                    <source src="assets/vid/scary_night.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="grid-item video-item" data-context="Zoro">
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
                <button class="close-overlay-button" style="line-height: 0px;"><svg xmlns="http://www.w3.org/2000/svg"
                        height="1.3em" fill="#ddd" viewBox="0 0 512 512">
                        <path
                            d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c-9.4 9.4-9.4 24.6 0 33.9l47 47-47 47c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l47-47 47 47c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-47-47 47-47c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-47 47-47-47c-9.4-9.4-24.6-9.4-33.9 0z" />
                    </svg></button>
            </div>
        </div>

    </section> <!-- end portfolio -->
@include('portfolio.footer')