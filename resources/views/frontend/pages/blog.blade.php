<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('frontend/asset/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/asset/style.css') }}">

</head>

<body>

    <section id="blog">
        <div class="our-blog">
            <div class="container">

                <a class="btn btn-sm btn-primary mb-3" href="{{ route('home.page.view') }}">Back</a>

                <div class="blog-head">
                    <h2><span>Our</span> Tour </h2>
                    <p>Research and planning: Conduct thorough research about the destination, including its history,
                        customs, local laws, and safety precautions. Familiarize yourself with the local transportation
                        system, accommodation options, and popular tourist sites. Create an itinerary that balances
                        must-see attractions with some flexibility for spontaneous exploration.</p>
                </div>

                <div class="blog-box-wrapper">

                    @foreach ($images as $image)

                    <div class="full-img" id="fullimgBox">
                        <img src="{{ asset('storage/images/' . $image->image) }}" alt="" id="fullimg">
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
                {{ $images->links() }}
            </div>
        </div>
    </section>

    <script>
        var fullimgBox = document.getElementById('fullimgBox');
        var fullimg = document.getElementById('fullimg');

        function openFullImg(pic) {
            fullimgBox.style.display = "flex";
            fullimg.src = pic;
        }


        function closeFullImg(){
            fullimgBox.style.display = "none";
        }
    </script>
</body>

</html>
