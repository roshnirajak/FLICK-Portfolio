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

        #contact {
            padding-top: 50px
        }
        #contact button{
            margin-bottom: 50px
        }
        
        #contact .col input {
            width: 400px;
        }

        label {
            font-family: 'Poppins';
            font-size: medium;
        }

        .alert {
            font-size: medium;
        }

        footer {
            background-color: #ddd;
            /* position: absolute; */
            bottom: 0%;
            width: 100vw
        }

        ::selection {
            background-color: #5d5d5dbd;
            color: white;
        }

        @media screen and (max-width:600px) {
            #contact {
                padding-top: 0px
            }
        }
    </style>
</head>

<body>

    <section id="contact">
        &nbsp;
        <h3>Enrollment Application</h3>
        <div class="col">
            <div class="block1">
                <form action="{{ route('enroll.store') }}" method="post" id="contactForm" enctype="multipart/form-data">
                    @if (session('success'))
                        <div class="alert alert-success">
                            Your Application has been submitted!<br> We'll get back to you later
                        </div>
                    @endif
                    @csrf
                    <label for="job_title">Full Name</label>
                    <input type="text" id="full_name" name="full_name" placeholder="Full Name" required />

                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="user_email" placeholder="Your Email" required />

                    <label for="email">Mobile Number</label>
                    <input type="text" id="mobile" name="mobile_num" placeholder="Your Mobile Number" required />

                    <label for="job_description">Qualification, Achievements & About Yourself</label>
                    <textarea id="about_user" name="about_user" rows="4" placeholder="Start Here..." required></textarea>

                    <button name="submitApplication" type="submit">POST</button>
                </form>
            </div>
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
