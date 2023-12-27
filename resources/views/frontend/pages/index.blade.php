@php
    namespace App\Helper\Helper;
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumon's Eyesight</title>

    <link rel="stylesheet" href="{{ asset('frontend/asset/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/asset/style.css') }}">


    <style>
        .card-wrapper a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <!-- Header Section -->

    <div class="full-wrapper">

        <header>
            <div id="home">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <div class="container">

                            <a class="navbar-brand logo" href="#home">Sumon's <span>E</span>yesight</a>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="#home">Home</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="#about">About Us</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page"
                                            href="{{ route('article.view') }}">Article</a>
                                    </li>


                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page"
                                            href="{{ route('videos.view') }}">Videos</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page"
                                            href="{{ route('blog.view') }}">Photos</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="#contact">Contact Us</a>
                                    </li>

                                </ul>


                                <a href="https://www.youtube.com/@sumonseyesight6986" target="-blank"><button
                                        class="btn">Subscribe</button></a>

                            </div>
                        </div>
                    </nav>


                    <!-- Hero Section -->

                    <div class="hero">
                        <div class="right">
                            <h3>Sumon's Eyesight</h3>
                            <h2>I'm a <br> <span class="design">{{ $herodata->title }}</span> </h2>

                            <p>{!! $herodata->description !!}</p>

                            <a href="#contact"><button class="btn">Contact Us</button></a>
                        </div>
                    </div>
                </div>
        </header>




        <!-- About Me section -->

        <section id="about">
            <div class="container">
                <div class="about">
                    <div class="left">
                        <div class="about-img">
                            <img src=" {{ asset('storage/profile/' . $profile->image) }}" alt="">

                            <div class="img-text">
                                <h5>Sumon's Eyesight</h5>

                                <a href="#contact"><button class="btn btn-sm">Contact</button></a>
                            </div>
                        </div>

                    </div>

                    <div class="right">
                        <h3>Digital Creator</h3>
                        <h2>Hello, I'm <span class="text-info">Sumon</span> </h2>
                        <p> {!! $profile->description !!} </p>

                        <div class="social">
                            <a href="https://www.facebook.com/sumonHcl.ctg" target="-blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="https://www.youtube.com/@sumonseyesight6986" target="-blank"><i
                                    class="fab fa-youtube"></i></a>
                            <i class="fab fa-twitter"></i>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Offer Section -->

        <section id="services" class="offer-section mt-5">
            <div class="container">
                <div class="offers">
                    <div class="offers-head">
                        <h1><span>Our</span> Article</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adiisicing elit Sit omnis</p>
                    </div>

                    <div class="card-wrapper">
                        @foreach ($article as $item)
                            <div class="card">
                                <h2>{{ $item->title }}</h2>
                                <p> {!! limitText($item->description, 200) !!} <a href="{{ route('article.all', $item->id) }}"><small
                                            class="text-danger">See
                                            More...</small></a></p>
                            </div>
                        @endforeach


                    </div>
                    <div class="more-btn text-center mb-3">
                        <a href="{{ route('article.view') }}"> <button class="btn">See More Article</button> </a>
                    </div>
                </div>
            </div>

        </section>




        <!-- Our Works section -->

        <section id="portfolio">
            <div class="our-work">
                <div class="container">
                    <h2> Our <span>Youtube</span> Blog</h2>
                    <p>A YouTube blog, often referred to as a vlog or video blog, is a form of content creation where
                        individuals or creators share their thoughts, experiences, expertise, and stories through video
                        format on the YouTube platform. It allows creators to engage with their audience visually and
                        audibly, bringing their ideas and personalities to life.</p>

                    <div class="work-box">

                        @foreach ($videos as $item)
                            <div class="box">
                                <iframe width="100%" height="300px" src="{{ $item->url }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                        @endforeach



                    </div>

                    <div class="more-btn">
                        <a href="{{ route('videos.view') }}"> <button class="btn">See More Videos</button> </a>
                    </div>
                </div>
            </div>
        </section>




        <!-- Our Blog section -->

        <section id="blog">
            <div class="our-blog">
                <div class="container">

                    <div class="blog-head">
                        <h2><span>Our</span> Tour </h2>
                        <p>Research and planning: Conduct thorough research about the destination, including its
                            history,
                            customs, local laws, and safety precautions. Familiarize yourself with the local
                            transportation
                            system, accommodation options, and popular tourist sites. Create an itinerary that balances
                            must-see attractions with some flexibility for spontaneous exploration.</p>
                    </div>

                    <div class="blog-box-wrapper">

                        @foreach ($images as $image)
                            <div class="full-img" id="fullimgBox">
                                <img src="{{ asset('storage/images/' . $image->image) }}" alt=""
                                    id="fullimg">
                                <span onclick="closeFullImg()">X</span>
                            </div>

                            <div class="blog-box">
                                <div class="blog-img">
                                    <img src="{{ asset('storage/images/' . $image->image) }}" alt=""
                                        onclick="openFullImg(this.src)">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="more-btn text-center">
                        <a href="{{ route('blog.view') }}"> <button class="btn">See More Photos</button> </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Footer Section -->

        <footer>
            <div class="footer">
                <div class="container">

                    <div class="arrow">
                        <a href="#home"><img src="img/arrow10.png" alt=""></a>
                    </div>

                    <div class="logo">
                        <h2>Sumon's <span>E</span>yesight</h2>
                    </div>

                    <div class="social">

                        <a href="https://www.facebook.com/sumonHcl.ctg" target="-blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.youtube.com/@sumonseyesight6986" target="-blank"><i
                                class="fab fa-youtube"></i></a>
                        <i class="fab fa-twitter"></i>


                    </div>

                    <div class="reserve">
                        <h6>All Rights Reserve By Sumon's Eyesight</h6>
                    </div>
                </div>

            </div>

        </footer>
    </div>


    <script>
        var fullimgBox = document.getElementById('fullimgBox');
        var fullimg = document.getElementById('fullimg');

        function openFullImg(pic) {
            fullimgBox.style.display = "flex";
            fullimg.src = pic;
        }


        function closeFullImg() {
            fullimgBox.style.display = "none";
        }
    </script>

    <script src="https://kit.fontawesome.com/852f643165.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>
