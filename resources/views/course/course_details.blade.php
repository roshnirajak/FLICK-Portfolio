<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <title>FLICK-Portfolio</title>
    <style>
        body {
            background: #f9f9f9
        }

        header {
            display: flex;
            justify-content: right;
            padding: 20px;
            font-size: medium;
            margin: 0;
            /* Add padding for spacing, adjust as needed */
        }

        .header-links {
            display: flex;
            gap: 20px;
            /* Adjust the gap between the links as needed */
        }

        #contact {
            /* margin-top: 100px; */
            /* height:100vh; */
        }

        #contact .col input {
            width: 400px;
        }

        #contact h3 {
            font-size: large
        }

        label {
            font-family: 'Poppins';
            font-size: large;
        }

        #contact li {
            list-style: none;
            font-size: medium;
        }

        ul {
            margin-left: 0rem;
            padding-left: 0rem
        }

        .course-btn {
            text-align: center;
        }

        #contact button {
            width: 40%;
            margin-bottom: 80px
        }

        ::selection {
            background-color: #5d5d5dbd;
            color: white;
        }

        #header-menu-trigger .header-menu-text {
            background-color: #595959
        }

        #header-menu-trigger {
            background-color: #595959
        }

        @media screen and (max-width:600px) {
            #contact {
                padding-top: 0px
            }

            #contact button {
                width: 100%
            }

            label {
                font-family: 'Poppins';
                font-size: medium;
            }

            li {
                list-style: none;
                font-size: small;
            }

            #header-menu-trigger .header-menu-text {
                display: none
            }

            #header-menu-trigger {
                right: 5px;
                background-color: #595959
            }
        }
    </style>
</head>

<body>
    {{-- <header>

        <a id="header-menu-trigger" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>
        <nav id="menu-nav-wrap">
            <a href="#" class="close-button" title="close"><span>Close</span></a>
            <a href="{{ url('/') }}">
                <h3>FLICK</h3>
            </a>
            <ul class="nav-list">
                <li><a class="li_link" href="{{ url('/contact') }}" title="">Contact</a></li>
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

    </header> --}}

    <section id="contact">
        {{-- <header>
    
            <div class="header-links">
                <a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Login</a>
                <a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Sign Up</a>
            </div>
        </header> --}}
        &nbsp;
        <h3>Course Details</h3>
        <div class="col">
            <div class="block1">
                <label>What you will get to learn in this course:</label><br>

                <label>1. Animation and CGI:</label>
                <ul>
                    <li>Blender</li>
                    <li>Marvelous Designer</li>
                    <li>After Effects</li>
                </ul>
                <br>
                <label>2. 3D Animation Techniques:</label>
                <ul>
                    <li>Rigging</li>
                    <li>Animation</li>
                </ul>
                <br>
                <label>3. Scene and Cinematography:</label>
                <ul>
                    <li>Scene Creation</li>
                    <li>Cinematography</li>
                </ul>
                <br>
                <label>4. 3D Modeling and Texturing:</label>
                <ul>
                    <li>3D Modeling</li>
                    <li>Texturing</li>
                </ul>
            </div>
            <br>
            <div class="block2">
                <br>
                <label>Enrollment Process:</label>
                <li>Fill Enrollment Form</li>
                <li>Interview</li>

                <br>
                <label>Learning Format</label>
                <li>Live Virtual Sessions</li>

                <br>
                <label>Duration</label>
                <li>1 Year</li>

                <br>
                <label>Annual Amount</label>
                <li>₹120,000  /  $1,450</li>
            </div>

        </div>
        <br>
        <div class="course-btn">
            <a href="{{url('/enroll')}}"> <button name="submitContact" type="submit">Enroll Now</button></a>
        </div>

        <br>
    </section>

    @include('portfolio.footer')

    <script src="https://cdn.plyr.io/3.6.3/plyr.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
