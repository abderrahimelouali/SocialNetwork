<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Social Network | {{ $title }}</title>
</head>

<body>
    @include('partials.nav')
    <main>
        <div class="row my-3">
            @include('partials.flashbag')
        </div>
        <div class="container">
            {{ $slot }}
        </div>
    </main>

    @include('partials.footer')
</body>

</html>
