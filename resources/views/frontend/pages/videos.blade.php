<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos</title>
    <link rel="stylesheet" href="{{ asset('frontend/asset/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/asset/style.css') }}">
</head>

<body>

    <section id="portfolio">

        <div class="our-work">
            <div class="container">

                <div class="back-home">
                    <a href="{{ route('home.page.view') }}"> <button class="btn">Back Home</button> </a>
                </div>

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
            </div>
        </div>
    </section>


</body>

</html>
