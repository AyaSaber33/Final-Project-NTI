<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/js/splide.min.js"
        integrity="sha512-4TcjHXQMLM7Y6eqfiasrsnRCc8D/unDeY1UGKGgfwyLUCTsHYMxF7/UHayjItKQKIoP6TTQ6AMamb9w2GMAvNg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/css/themes/splide-default.min.css"
        integrity="sha512-KhFXpe+VJEu5HYbJyKQs9VvwGB+jQepqb4ZnlhUF/jQGxYJcjdxOTf6cr445hOc791FFLs18DKVpfrQnONOB1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css"
        integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.rtl.min.css"
        integrity="sha512-wO8UDakauoJxzvyadv1Fm/9x/9nsaNyoTmtsv7vt3/xGsug25X7fCUWEyBh1kop5fLjlcrK3GMVg8V+unYmrVA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <link rel="stylesheet" href="{{ asset('css/abstract/generices.css') }}">
    <link rel="stylesheet" href="{{ asset('css/abstract/variable.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/app.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="page-wrapper">
        <nav class="navbar navbar-expand-lg navbar-expand-md bg-blue sticky-top">
            <div class="container">
                <div class="navbar-brand">
                    <a class="fw-bold text-white m-0 text-decoration-none h3" href="../index.html">VCare</a>
                </div>
                <button class="navbar-toggler btn-outline-light border-0 shadow-none" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <div class="d-flex gap-3 flex-wrap justify-content-center" role="group">
                        <a type="button" class="btn btn-outline-light navigation--button" href="../index.html">Home</a>
                        <a type="button" class="btn btn-outline-light navigation--button"
                            href="../majors.html">majors</a>
                        <a type="button" class="btn btn-outline-light navigation--button"
                            href="../doctors/index.html">Doctors</a>
                        <a type="button" class="btn btn-outline-light navigation--button" href="../login.html">login</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="../index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">history</li>
                </ol>
            </nav>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Doctor Name</th>
                        <th scope="col">major</th>
                        <th scope="col">location</th>
                        <th scope="col">completed</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>8/11/2023</td>
                        <td class="d-flex align-items-center gap-2"><img src="{{asset('images/major.jpg')}}" alt="" width="25"
                                height="25" class="rounded-circle">
                            <a href="./doctors/doctor.html">hamada</a>
                        </td>
                        <td>bone</td>
                        <td><a href="https://www.google.com/maps" target="_blank">eraasoft</a></td>
                        <td>yes</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>8/11/2023</td>
                        <td class="d-flex align-items-center gap-2"><img src="{{asset('images/major.jpg')}}" alt="" width="25"
                                height="25" class="rounded-circle">
                            <a href="./doctors/doctor.html">hamada</a>
                        </td>
                        <td>bone</td>
                        <td><a href="https://www.google.com/maps" target="_blank">eraasoft</a></td>
                        <td>no</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>8/11/2023</td>
                        <td class="d-flex align-items-center gap-2"><img src="{{asset('images/major.jpg')}}" alt="" width="25"
                                height="25" class="rounded-circle">
                            <a href="./doctors/doctor.html">hamada</a>
                        </td>
                        <td>bone</td>
                        <td><a href="https://www.google.com/maps" target="_blank">eraasoft</a></td>
                        <td>no</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <footer class="container-fluid bg-blue text-white py-3">
        <div class="row gap-2">

            <div class="col-sm order-sm-1">
                <h1 class="h1">About Us</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nesciunt repellendus itaque,
                    laborum
                    saepe
                    enim maxime, delectus, dicta cumque error cupiditate nobis officia quam perferendis consequatur
                    cum
                    iure
                    quod facere.</p>
            </div>
            <div class="col-sm order-sm-2">
                <h1 class="h1">Links</h1>
                <div class="links d-flex gap-2 flex-wrap">
                    <a href="../index.html" class="link text-white">Home</a>
                    <a href="../majors.html" class="link text-white">Majors</a>
                    <a href="./index.html" class="link text-white">Doctors</a>
                    <a href="../login.html" class="link text-white">Login</a>
                    <a href="../register.html" class="link text-white">Register</a>
                    <a href="../contact.html" class="link text-white">Contact</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"
        integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>