<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article</title>
    <link rel="stylesheet" href="{{ asset('frontend/asset/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/asset/style.css') }}">
</head>

<body>
<div class="offer-wrapper py-5">
    <div class="container">
        <div class="row">
            <section id="services" class="offer-section">
                <a class="btn btn-sm btn-primary mb-3" href="{{ route('article.view') }}">Back</a>
                <div class="container">
                    <div class="offers">

                        <h2>{{ $article->title }}</h2>
                        <p> {!! $article->description !!} </p>

                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
</body>

</html>
