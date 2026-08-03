<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <nav>
            <div>
                <a href="">
                    <img src="{{ vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>
            <div>Links</div>
            <div>Post a job</div>
        </nav>


        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
