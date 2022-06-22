<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Laravel Primi Passi</title>
</head>
<body>
    <div class="container">
        <nav class="sc-nav">
            <ul class="d-flex justify-content-evenly align-items-center">
                <li><a href="http://127.0.0.1:8000/">Home</a></li>
                <li><a href="http://127.0.0.1:8000/blog">Blog</a></li>
                <li><a href="http://127.0.0.1:8000/about">About</a></li>
                <li><a href="http://127.0.0.1:8000/contact">Contact</a></li>
            </ul>
        </nav>
    </div>
    <main class="container d-flex justify-content-center align-items-center text-white">
        <h1>Welcome {{ $name }} {{ $surname }} To Home Page</h1>
    </main>
</body>
</html>
