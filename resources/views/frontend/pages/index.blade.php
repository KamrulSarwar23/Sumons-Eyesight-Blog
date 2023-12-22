<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumon's Eyesight</title>

    <link rel="stylesheet" href="{{ asset('frontend/asset/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/asset/style.css') }}">


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
                                        <a class="nav-link" aria-current="page" href="#services">Article</a>
                                    </li>


                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="{{route('videos.view')}}">Videos</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="{{route('blog.view')}}">Blog</a>
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
                            <h2>I'm a <br> <span class="design">Digital Creator</span> </h2>

                            <p>With every keystroke, a connection they seek, <br>
                                A symphony of words, poetic and sleek. <br>
                                Their blog, a canvas, where ideas take shape, <br>
                                A world of inspiration, ready to drape.</p>

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
                            <img src=" {{ asset('frontend/asset/images/sumon3.jpg') }}" alt="">

                            <div class="img-text">
                                <h5>Sumon's Eyesight</h5>

                                <a href="#contact"><button class="btn btn-sm">Contact</button></a>
                            </div>
                        </div>

                    </div>

                    <div class="right">
                        <h3>Bloger</h3>
                        <h2>Hello, I'm <span class="text-info">Sumon</span> </h2>
                        <p>A blogger is someone who regularly creates and maintains a blog, which is an online platform
                            where they share their thoughts, ideas, expertise, or experiences on various topics. Blogs
                            can be personal, professional, or a combination of both, and bloggers often use them as a
                            means of self-expression, communication, and engagement with their audience.
                            <br> <br>
                            Blogging has gained immense popularity in recent years due to the accessibility of the
                            internet and the ease of setting up a blog. Bloggers can choose from a wide range of topics
                            to write about, such as fashion, travel, technology, health, lifestyle, cooking, and many
                            more. They can also adopt different writing styles, including informative, conversational,
                            opinion-based, or instructional, depending on their niche and target audience.
                        </p>

                        <div class="social">
                            <a href="https://www.facebook.com/sumonHcl.ctg" target="-blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="https://www.youtube.com/@sumonseyesight6986" target="-blank"><i
                                    class="fab fa-youtube"></i></a>
                            <i class="fab fa-twitter"></i>
                            <i class=" fab fa-facebook-messenger"></i>
                            <i class="fab fa-google-plus-g"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- Offer Section -->

        <section id="services" class="offer-section">
            <div class="container">
                <div class="offers">
                    <div class="offers-head">
                        <h2><span>Our</span> Article</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adiisicing elit Sit omnis</p>
                    </div>

                    <div class="card-wrapper">
                        <div class="card">


                            <h2>Article</h2>
                            <p>A blogger, a storyteller of the virtual realm,
                                An architect of words, at the blogging helm.
                                With keyboard as their brush and screen as their stage,
                                They share their passions, wisdom, and engage. <small class="text-danger">See
                                    More...</small></p>
                        </div>
                        <div class="card">


                            <h2>Article</h2>
                            <p>A blogger dives into topics wide and deep,
                                From travel to fashion, or secrets they keep.
                                Their words a tapestry, woven with care,
                                Creating a community, willing to share. <small class="text-danger">See More...</small>
                            </p>
                        </div>
                        <div class="card">


                            <h2>Article</h2>
                            <p>Through anecdotes and experiences, they connect,
                                Their insights and perspectives, their readers reflect.
                                With each post, they unveil a piece of their soul,
                                In hopes that their audience finds comfort and role <small class="text-danger">See
                                    More...</small></p>
                        </div>
                        <div class="card">


                            <h2>Article</h2>
                            <p>A blogger's domain, a digital sanctuary,
                                Where ideas flow freely, without boundary.
                                They craft narratives, rich and profound,
                                Transforming thoughts into stories renowned. <small class="text-danger">See
                                    More...</small></p>
                        </div>
                        <div class="card">


                            <h2>Article</h2>
                            <p>From the first tentative steps to seasoned grace,
                                They learn and adapt, embracing the pace.
                                Experimenting with styles, finding their voice,
                                Building a brand, their readers rejoice. <small class="text-danger">See More...</small>
                            </p>
                        </div>
                        <div class="card">


                            <h2>Article</h2>
                            <p>But it's not all glamour and endless delight,
                                A blogger's journey requires effort and might.
                                Researching, editing, promoting with zeal,
                                Navigating algorithms and trends with appeal. <small class="text-danger">See
                                    More...</small></p>
                        </div>
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
                        <div class="box">
                            <iframe width="100%" height="300px" src="https://www.youtube.com/embed/GM_THWHuYlc"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>

                        <div class="box">
                            <iframe width="100%" height="300px" src="https://www.youtube.com/embed/_DhPrnfxwJE"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>

                        <div class="box">
                            <iframe width="100%" height="300px" src="https://www.youtube.com/embed/hcwJZ0yEHu0"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>

                        <div class="box">
                            <iframe width="100%" height="300px" src="https://www.youtube.com/embed/5m-d2cfTKkE"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>

                        <div class="box">
                            <iframe width="100%" height="300px" src="https://www.youtube.com/embed/ffclFxU-2KE"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>

                        <div class="box">
                            <iframe width="100%" height="300px" src="https://www.youtube.com/embed/W7fp027WtIk"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="more-btn">
                        <a href="videos.html"> <button class="btn">See More Videos</button> </a>
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
                            history, customs, local laws, and safety precautions. Familiarize yourself with the local
                            transportation system, accommodation options, and popular tourist sites. Create an itinerary
                            that balances must-see attractions with some flexibility for spontaneous exploration.</p>
                    </div>

                    <div class="blog-box-wrapper">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img src=" {{ asset('frontend/asset/images/20.jpg') }}" alt="">
                            </div>

                            <div class="blog-text">
                                <h2>About This Tour</h2>
                                <p>Transportation and logistics: Determine the best mode of transportation for your
                                    tour, whether it's flying, driving, or using public transportation. Make necessary
                                    arrangements for airport transfers, train or bus tickets, and any guided tours or
                                    excursions you wish to join. Ensure you have the required travel documents, such as
                                    passports and visas.</p>
                                <button class="btn">Read More</button>
                            </div>

                        </div>
                        <div class="blog-box">

                            <div class="blog-img">
                                <img src="{{ asset('frontend/asset/images/15.jpg') }}" alt="">
                            </div>
                            <div class="blog-text">
                                <h2>About This Tour</h2>
                                <p>Accommodation: Book accommodations that suit your preferences and budget. Options
                                    range from hotels and resorts to vacation rentals or hostels. Read reviews, compare
                                    prices, and consider factors such as location, amenities, and customer service to
                                    make an informed decision.</p>
                                <button class="btn">Read More</button>
                            </div>
                        </div>
                        <div class="blog-box">
                            <div class="blog-img">
                                <img src="{{ asset('frontend/asset/images/19.jpg') }}" alt="">
                            </div>
                            <div class="blog-text">
                                <h2>About This Tour</h2>
                                <p>Budgeting: Set a budget for your tour, considering expenses such as transportation,
                                    accommodation, meals, activities, and souvenirs. Research average costs in your
                                    chosen destination to help plan your expenditures. Leave some room for unexpected
                                    expenses or optional experiences that may arise during your tour.</p>
                                <button class="btn">Read More</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="more-btn2">

                    <a href="blog.html"> <button class="btn">See More Blog Photos</button></a>

                </div>
            </div>
        </section>





        <!-- Contact Section -->

        <section id="contact">
            <div class="contact-us">
                <div class="container">
                    <div class="contact-head">
                        <h2>Contact <span>Us</span></h2>
                        <p>If you are comfortable sharing your phone number, consider including it on the contact page.
                            This provides an alternative means of communication for visitors who prefer to speak
                            directly.</p>
                    </div>

                    <div class="contact-wrapper">
                        <div class="contact-card">
                            <i class="fas fa-mobile"></i>
                            <h2>Call Us</h2>
                            <h3>031-255-7335</h3>
                        </div>

                        <div class="contact-card">
                            <i class="far fa-envelope"></i>
                            <h2>Email Us</h2>
                            <h3>sumon@iconicslotionsbd.com</h3>
                        </div>

                        <div class="contact-card">
                            <i class="far fa-address-card"></i>
                            <h2>Visit Office</h2>
                            <h3>Muradpur,Chattogram</h3>
                        </div>
                    </div>

                    <form action="">
                        <div class="message">
                            <input class="name" type="text" placeholder="Your Name">

                            <input class="email" type="text" placeholder="Your Email">

                            <textarea name="" id="" cols="30" rows="5" placeholder="Your Message"></textarea>
                            <br>

                            <button type="submit" class="btn">Send Message</button>
                        </div>
                    </form>
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
                        <i class=" fab fa-facebook-messenger"></i>
                        <i class="fab fa-google-plus-g"></i>

                    </div>

                    <div class="reserve">
                        <h4>All Rights Reserve By Sumon's Eyesight</h4>
                    </div>
                </div>

            </div>

        </footer>
    </div>



    <script src="https://kit.fontawesome.com/852f643165.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>
