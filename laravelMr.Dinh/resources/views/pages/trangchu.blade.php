<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Slide Show</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($slide as $index => $sl)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                <img src="/source/image/slide/{{$sl->image}}" class="d-block w-100" alt="Slide">
            </div>
            @endforeach
        </div>
</body>
</html>
