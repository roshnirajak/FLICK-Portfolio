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
        body {
            background: #f9f9f9
        }

        .alert {
            font-size: medium;
        }

        .block2 {
            font-size: medium
        }
        @media (max-width: 767px) {
           
        .block2 {
                display: none
            }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>

    <section id="contact">

        <h3>Contact Me Here</h3>
        <div class="col">
            <div class="block1">
                <form action="{{ url('/contact/store') }}" method="post" id="contactForm">
                    @if ($errors->has('contact_num'))
                        <div class="alert alert-danger">
                            {{ $errors->first('contact_num') }}
                        </div>
                    @elseif($errors->has('message'))
                        <div class="alert alert-danger">
                            {{ $errors->first('message') }}
                        </div>
                    @elseif (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @csrf
                    <input type="text" id="fullname" name="fname" placeholder="Name *" required />

                    <input type="text" id="contact_num" name="contact_num" placeholder="Contact Number"
                        maxlength="13" />

                    <div class="input-col">
                        <input type="email" id="email" name="email" placeholder="Email *" required />
                        <input type="text" id="subject" name="subject" placeholder="Subject *" required />
                    </div>

                    <textarea id="message" name="message" rows="4" placeholder="Your Message... *" required /></textarea>
                    <button name="submitContact" type="submit">Submit</button>
                </form>
            </div>
            <div class="block2">
                <div class="block2-email">
                    <span><i class="fa fa-solid fa-envelope"></i></span> <br>
                    <span>flick@kaizeltech.onmicrosoft.com <br></span>
                </div>
                <div class="block2-phone">
                    <span><i class="fa fa-solid fa-phone"></i></span> <br>
                    <span>+91 8699143545 <br></span>
                </div>
            </div>
        </div>

        <br>
    </section> <!-- end contact -->

    @include('portfolio.footer')

</body>

</html>
