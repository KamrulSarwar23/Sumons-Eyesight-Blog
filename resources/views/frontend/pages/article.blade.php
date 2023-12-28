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

<section class="offer-wrapper">
    <div class="container">
        <div class="offers py-5">
            <a class="btn btn-sm btn-primary" href="{{ route('home.page.view') }}">Back</a>
            <div class="offers-head">
                <h2><span>Our</span> Article</h2>
            </div>

            <div class="card-wrapper">
                @foreach ($article as $item)
                    <div class="card">
                        <h6>{{ $item->title }}</h6>
                        <p> {!! limitText($item->description, 200) !!} <a style="text-decoration: none" href="{{ route('article.all', $item->id) }}"><small
                                    class="text-info">See
                                    More...</small></a></p>
                    </div>
                @endforeach

            </div>
            {{ $article->links() }}
            
        </div>
    </div>
</section>

</body>

</html>
