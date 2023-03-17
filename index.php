<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title> ComparOperator </title>
</head>

<body>

    <!-- HEADER / NAVBAR -->

    <header id="header">
        <nav class="navbar navbar-expand-lg d-flex" style="width: 100%;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#header" style="color: white;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" style="color: white;"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon bi bi-list">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php"> Destinations </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="indexO.html"> Opérateurs </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Administrateur.php"> Admin </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- FIN NAVBAR -->

    <div class="name-title wrapper">
        <div class="typing-demo fs-1">
            <font color="black"> <strong class="ref"> Welcome to<br>ComparOperator </strong> </font>
        </div>
    </div>

    <!-- FIN HEADER -->

    <!-- DESTINATION -->

    <section class='Destinations' id="Destinations">
        <div class="projects-content container">
            <div class="content-title">
                <h1 class="fs-1"> <strong> Nos Destinations </strong> </h1>
            </div>
            <div class="box-card">

                <div class="card">
                    <div class="card-img" style="background-image:url('images/Saint\ Romain\ Lachalm.jpg');">
                        <div class="overlay">
                            <div class="overlay-content">
                            <a href="indexO.php"> Réserver 
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                            <h2> Saint Romain Lachalm </h2>
                            <p> Saint-Romain-Lachalm est une commune française située à l'est du Velay, dans le
                                département de la Haute-Loire en région Auvergne-Rhône-Alpes.<br> Ses habitants sont
                                appelés les San-Roumis. </p>
                        </a>
                        <div>
                               <svg height="50" viewBox="0 0 512 512" width="50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="13.354" x2="468.463" y1="498.646" y2="43.537" data-name="New Gradient Swatch 1"><stop offset="0" stop-color="#003f8a"/><stop offset=".518" stop-color="#00d7df"/><stop offset="1" stop-color="#006df0"/></linearGradient><linearGradient id="c" x1="13.354" x2="468.463" xlink:href="#a" y1="498.646" y2="43.537"/><linearGradient id="e" x1="-70.646" x2="384.463" xlink:href="#a" y1="414.646" y2="-40.463"/><linearGradient id="f" x1="97.354" x2="552.463" xlink:href="#a" y1="582.646" y2="127.537"/><g><path d="m496 96h-480a8 8 0 0 0 -8 8v304a8 8 0 0 0 8 8h480a8 8 0 0 0 8-8v-304a8 8 0 0 0 -8-8zm-8 304h-464v-288h464z" fill="url(#a)"/><path d="m472 168a40.04 40.04 0 0 1 -40-40 8 8 0 0 0 -8-8h-336a8 8 0 0 0 -8 8 40.04 40.04 0 0 1 -40 40 8 8 0 0 0 -8 8v160a8 8 0 0 0 8 8 40.04 40.04 0 0 1 40 40 8 8 0 0 0 8 8h336a8 8 0 0 0 8-8 40.04 40.04 0 0 1 40-40 8 8 0 0 0 8-8v-160a8 8 0 0 0 -8-8zm-8 160.58a56.11 56.11 0 0 0 -47.42 47.42h-321.16a56.11 56.11 0 0 0 -47.42-47.42v-145.16a56.11 56.11 0 0 0 47.42-47.42h321.16a56.11 56.11 0 0 0 47.42 47.42z" fill="url(#a)"/><path d="m256 344a88 88 0 1 0 -88-88 88.1 88.1 0 0 0 88 88zm0-160a72 72 0 1 1 -72 72 72.081 72.081 0 0 1 72-72z" fill="url(#c)"/><path d="m240 272a8 8 0 0 0 0 16h8a8 8 0 0 0 16 0h8a8 8 0 0 0 8-8v-24a8 8 0 0 0 -8-8h-24v-8h24a8 8 0 0 0 0-16h-8a8 8 0 0 0 -16 0h-8a8 8 0 0 0 -8 8v24a8 8 0 0 0 8 8h24v8z" fill="url(#c)"/><path d="m88 280a24 24 0 1 0 -24-24 24.027 24.027 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" fill="url(#e)"/><path d="m424 280a24 24 0 1 0 -24-24 24.027 24.027 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" fill="url(#f)"/></g></svg>
                               1 $
                               <img src="https://play-lh.googleusercontent.com/0ZA4UQQIsUeqgU8KhGkrD_Te1PNk_GMYSnZU3tdtL-wesr2BWzchxkjgafyJ4NxAVg" width="50" height="50">


                            </div>
                            <br>
                            <div>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
  <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
  <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
  <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
</svg>
                            </div>

                    </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background-image:url('images/Madrid.jpg');">
                        <div class="overlay">
                            <div class="overlay-content">
                            <a href="indexO.php"> Réserver 
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="#!">
                            <h2> Madrid </h2>
                            <p> Située au centre de l'Espagne, Madrid, sa capitale, est une ville dotée d'élégants
                                boulevards et de vastes parcs très bien entretenus comme le Retiro.</p>
                        </a>
                        <div>
                               <svg height="60" viewBox="0 0 512 512" width="60" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="13.354" x2="468.463" y1="498.646" y2="43.537" data-name="New Gradient Swatch 1"><stop offset="0" stop-color="#003f8a"/><stop offset=".518" stop-color="#00d7df"/><stop offset="1" stop-color="#006df0"/></linearGradient><linearGradient id="c" x1="13.354" x2="468.463" xlink:href="#a" y1="498.646" y2="43.537"/><linearGradient id="e" x1="-70.646" x2="384.463" xlink:href="#a" y1="414.646" y2="-40.463"/><linearGradient id="f" x1="97.354" x2="552.463" xlink:href="#a" y1="582.646" y2="127.537"/><g><path d="m496 96h-480a8 8 0 0 0 -8 8v304a8 8 0 0 0 8 8h480a8 8 0 0 0 8-8v-304a8 8 0 0 0 -8-8zm-8 304h-464v-288h464z" fill="url(#a)"/><path d="m472 168a40.04 40.04 0 0 1 -40-40 8 8 0 0 0 -8-8h-336a8 8 0 0 0 -8 8 40.04 40.04 0 0 1 -40 40 8 8 0 0 0 -8 8v160a8 8 0 0 0 8 8 40.04 40.04 0 0 1 40 40 8 8 0 0 0 8 8h336a8 8 0 0 0 8-8 40.04 40.04 0 0 1 40-40 8 8 0 0 0 8-8v-160a8 8 0 0 0 -8-8zm-8 160.58a56.11 56.11 0 0 0 -47.42 47.42h-321.16a56.11 56.11 0 0 0 -47.42-47.42v-145.16a56.11 56.11 0 0 0 47.42-47.42h321.16a56.11 56.11 0 0 0 47.42 47.42z" fill="url(#a)"/><path d="m256 344a88 88 0 1 0 -88-88 88.1 88.1 0 0 0 88 88zm0-160a72 72 0 1 1 -72 72 72.081 72.081 0 0 1 72-72z" fill="url(#c)"/><path d="m240 272a8 8 0 0 0 0 16h8a8 8 0 0 0 16 0h8a8 8 0 0 0 8-8v-24a8 8 0 0 0 -8-8h-24v-8h24a8 8 0 0 0 0-16h-8a8 8 0 0 0 -16 0h-8a8 8 0 0 0 -8 8v24a8 8 0 0 0 8 8h24v8z" fill="url(#c)"/><path d="m88 280a24 24 0 1 0 -24-24 24.027 24.027 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" fill="url(#e)"/><path d="m424 280a24 24 0 1 0 -24-24 24.027 24.027 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" fill="url(#f)"/></g></svg>
                               600 $
                               <img src="https://play-lh.googleusercontent.com/0ZA4UQQIsUeqgU8KhGkrD_Te1PNk_GMYSnZU3tdtL-wesr2BWzchxkjgafyJ4NxAVg" width="50" height="50">

                            </div>
                    </div>
                    <br>
                    <div>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
  <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
</svg>
                            </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background-image:url('images/Berlin.jpg');">
                        <div class="overlay">
                            <div class="overlay-content">
                            <a href="indexO.php"> Réserver 
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="#!">
                            <h2> Berlin </h2>
                            <p> La capitale allemande, Berlin, est née au XIIIe siècle. Le Mémorial de l’Holocauste et
                                les pans restants du mur de Berlin,<br> sur lesquels des graffitis ont été peints,
                                témoignent de son passé tumultueux.
                            </p>
                            <div>
                               <svg height="60" viewBox="0 0 512 512" width="60" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="13.354" x2="468.463" y1="498.646" y2="43.537" data-name="New Gradient Swatch 1"><stop offset="0" stop-color="#003f8a"/><stop offset=".518" stop-color="#00d7df"/><stop offset="1" stop-color="#006df0"/></linearGradient><linearGradient id="c" x1="13.354" x2="468.463" xlink:href="#a" y1="498.646" y2="43.537"/><linearGradient id="e" x1="-70.646" x2="384.463" xlink:href="#a" y1="414.646" y2="-40.463"/><linearGradient id="f" x1="97.354" x2="552.463" xlink:href="#a" y1="582.646" y2="127.537"/><g><path d="m496 96h-480a8 8 0 0 0 -8 8v304a8 8 0 0 0 8 8h480a8 8 0 0 0 8-8v-304a8 8 0 0 0 -8-8zm-8 304h-464v-288h464z" fill="url(#a)"/><path d="m472 168a40.04 40.04 0 0 1 -40-40 8 8 0 0 0 -8-8h-336a8 8 0 0 0 -8 8 40.04 40.04 0 0 1 -40 40 8 8 0 0 0 -8 8v160a8 8 0 0 0 8 8 40.04 40.04 0 0 1 40 40 8 8 0 0 0 8 8h336a8 8 0 0 0 8-8 40.04 40.04 0 0 1 40-40 8 8 0 0 0 8-8v-160a8 8 0 0 0 -8-8zm-8 160.58a56.11 56.11 0 0 0 -47.42 47.42h-321.16a56.11 56.11 0 0 0 -47.42-47.42v-145.16a56.11 56.11 0 0 0 47.42-47.42h321.16a56.11 56.11 0 0 0 47.42 47.42z" fill="url(#a)"/><path d="m256 344a88 88 0 1 0 -88-88 88.1 88.1 0 0 0 88 88zm0-160a72 72 0 1 1 -72 72 72.081 72.081 0 0 1 72-72z" fill="url(#c)"/><path d="m240 272a8 8 0 0 0 0 16h8a8 8 0 0 0 16 0h8a8 8 0 0 0 8-8v-24a8 8 0 0 0 -8-8h-24v-8h24a8 8 0 0 0 0-16h-8a8 8 0 0 0 -16 0h-8a8 8 0 0 0 -8 8v24a8 8 0 0 0 8 8h24v8z" fill="url(#c)"/><path d="m88 280a24 24 0 1 0 -24-24 24.027 24.027 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" fill="url(#e)"/><path d="m424 280a24 24 0 1 0 -24-24 24.027 24.027 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" fill="url(#f)"/></g></svg>
                               300 $
                               <img src="https://www.salaunmag.com/uploads/salaun-mag-and-news.jpg" width="40" height="40">


                            </div>
                            
                        </a>
                    </div>
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
  <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
</svg>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background-image:url('images/Seoul.jpg');">
                        <div class="overlay">
                        <a href="indexO.php"> Réserver 
                          </a>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="#!">
                            <h2> Séoul </h2>
                            <p> Capitale de la Corée du Sud, Séoul est une immense métropole où les gratte-ciel
                                modernes,<br> les métros high-tech et la culture pop côtoient les temples bouddhistes,
                                les palais et les marchés de rue. </p>
                               <div>
                               <svg height="60" viewBox="0 0 512 512" width="60" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="13.354" x2="468.463" y1="498.646" y2="43.537" data-name="New Gradient Swatch 1"><stop offset="0" stop-color="#003f8a"/><stop offset=".518" stop-color="#00d7df"/><stop offset="1" stop-color="#006df0"/></linearGradient><linearGradient id="c" x1="13.354" x2="468.463" xlink:href="#a" y1="498.646" y2="43.537"/><linearGradient id="e" x1="-70.646" x2="384.463" xlink:href="#a" y1="414.646" y2="-40.463"/><linearGradient id="f" x1="97.354" x2="552.463" xlink:href="#a" y1="582.646" y2="127.537"/><g><path d="m496 96h-480a8 8 0 0 0 -8 8v304a8 8 0 0 0 8 8h480a8 8 0 0 0 8-8v-304a8 8 0 0 0 -8-8zm-8 304h-464v-288h464z" fill="url(#a)"/><path d="m472 168a40.04 40.04 0 0 1 -40-40 8 8 0 0 0 -8-8h-336a8 8 0 0 0 -8 8 40.04 40.04 0 0 1 -40 40 8 8 0 0 0 -8 8v160a8 8 0 0 0 8 8 40.04 40.04 0 0 1 40 40 8 8 0 0 0 8 8h336a8 8 0 0 0 8-8 40.04 40.04 0 0 1 40-40 8 8 0 0 0 8-8v-160a8 8 0 0 0 -8-8zm-8 160.58a56.11 56.11 0 0 0 -47.42 47.42h-321.16a56.11 56.11 0 0 0 -47.42-47.42v-145.16a56.11 56.11 0 0 0 47.42-47.42h321.16a56.11 56.11 0 0 0 47.42 47.42z" fill="url(#a)"/><path d="m256 344a88 88 0 1 0 -88-88 88.1 88.1 0 0 0 88 88zm0-160a72 72 0 1 1 -72 72 72.081 72.081 0 0 1 72-72z" fill="url(#c)"/><path d="m240 272a8 8 0 0 0 0 16h8a8 8 0 0 0 16 0h8a8 8 0 0 0 8-8v-24a8 8 0 0 0 -8-8h-24v-8h24a8 8 0 0 0 0-16h-8a8 8 0 0 0 -16 0h-8a8 8 0 0 0 -8 8v24a8 8 0 0 0 8 8h24v8z" fill="url(#c)"/><path d="m88 280a24 24 0 1 0 -24-24 24.027 24.027 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" fill="url(#e)"/><path d="m424 280a24 24 0 1 0 -24-24 24.027 24.027 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" fill="url(#f)"/></g></svg>
                               1000 $
                               <img src="https://carriere.mariettondeveloppement.fr/wp-content/uploads/2021/10/logo_heliades.png" width="50" height="50">

                            </div>

                        </a>
                    </div>
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background-image:url('images/Bangkok.jpg')">
                        <div class="overlay">
                          
                            <div class="overlay-content">
                            <a href="indexO.php"> Réserver 
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="#!">
                            <h2> Bangkok </h2>
                            <p>Bangkok, la capitale de la Thaïlande, est une grande ville connue <br>pour ses
                                sanctuaires richement décorés et ses rues animées. </p>
                        </a>
                        <div>
                               <svg height="60" viewBox="0 0 512 512" width="60" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="13.354" x2="468.463" y1="498.646" y2="43.537" data-name="New Gradient Swatch 1"><stop offset="0" stop-color="#003f8a"/><stop offset=".518" stop-color="#00d7df"/><stop offset="1" stop-color="#006df0"/></linearGradient><linearGradient id="c" x1="13.354" x2="468.463" xlink:href="#a" y1="498.646" y2="43.537"/><linearGradient id="e" x1="-70.646" x2="384.463" xlink:href="#a" y1="414.646" y2="-40.463"/><linearGradient id="f" x1="97.354" x2="552.463" xlink:href="#a" y1="582.646" y2="127.537"/><g><path d="m496 96h-480a8 8 0 0 0 -8 8v304a8 8 0 0 0 8 8h480a8 8 0 0 0 8-8v-304a8 8 0 0 0 -8-8zm-8 304h-464v-288h464z" fill="url(#a)"/><path d="m472 168a40.04 40.04 0 0 1 -40-40 8 8 0 0 0 -8-8h-336a8 8 0 0 0 -8 8 40.04 40.04 0 0 1 -40 40 8 8 0 0 0 -8 8v160a8 8 0 0 0 8 8 40.04 40.04 0 0 1 40 40 8 8 0 0 0 8 8h336a8 8 0 0 0 8-8 40.04 40.04 0 0 1 40-40 8 8 0 0 0 8-8v-160a8 8 0 0 0 -8-8zm-8 160.58a56.11 56.11 0 0 0 -47.42 47.42h-321.16a56.11 56.11 0 0 0 -47.42-47.42v-145.16a56.11 56.11 0 0 0 47.42-47.42h321.16a56.11 56.11 0 0 0 47.42 47.42z" fill="url(#a)"/><path d="m256 344a88 88 0 1 0 -88-88 88.1 88.1 0 0 0 88 88zm0-160a72 72 0 1 1 -72 72 72.081 72.081 0 0 1 72-72z" fill="url(#c)"/><path d="m240 272a8 8 0 0 0 0 16h8a8 8 0 0 0 16 0h8a8 8 0 0 0 8-8v-24a8 8 0 0 0 -8-8h-24v-8h24a8 8 0 0 0 0-16h-8a8 8 0 0 0 -16 0h-8a8 8 0 0 0 -8 8v24a8 8 0 0 0 8 8h24v8z" fill="url(#c)"/><path d="m88 280a24 24 0 1 0 -24-24 24.027 24.027 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" fill="url(#e)"/><path d="m424 280a24 24 0 1 0 -24-24 24.027 24.027 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" fill="url(#f)"/></g></svg>
                               200 $
                               <img src="https://play-lh.googleusercontent.com/0ZA4UQQIsUeqgU8KhGkrD_Te1PNk_GMYSnZU3tdtL-wesr2BWzchxkjgafyJ4NxAVg" width="50" height="50">
    
                            </div>
                    </div>
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-half" viewBox="0 0 16 16">
  <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
  <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
</svg>


                    </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background-image:url('images/Bombay.jpg');">
                        <div class="overlay">
                            <div class="overlay-content">
                            <a href="indexO.php"> Réserver  
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="#!">
                            <h2> Bombay </h2>
                            <p> Mumbai (anciennement Bombay) est une ville densément peuplée qui se trouve sur la côte
                                ouest de l'Inde.<br> Ce centre financier est la plus grande ville du pays. </p>
                        </a>
                        <div>
                               <svg height="60" viewBox="0 0 512 512" width="60" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="13.354" x2="468.463" y1="498.646" y2="43.537" data-name="New Gradient Swatch 1"><stop offset="0" stop-color="#003f8a"/><stop offset=".518" stop-color="#00d7df"/><stop offset="1" stop-color="#006df0"/></linearGradient><linearGradient id="c" x1="13.354" x2="468.463" xlink:href="#a" y1="498.646" y2="43.537"/><linearGradient id="e" x1="-70.646" x2="384.463" xlink:href="#a" y1="414.646" y2="-40.463"/><linearGradient id="f" x1="97.354" x2="552.463" xlink:href="#a" y1="582.646" y2="127.537"/><g><path d="m496 96h-480a8 8 0 0 0 -8 8v304a8 8 0 0 0 8 8h480a8 8 0 0 0 8-8v-304a8 8 0 0 0 -8-8zm-8 304h-464v-288h464z" fill="url(#a)"/><path d="m472 168a40.04 40.04 0 0 1 -40-40 8 8 0 0 0 -8-8h-336a8 8 0 0 0 -8 8 40.04 40.04 0 0 1 -40 40 8 8 0 0 0 -8 8v160a8 8 0 0 0 8 8 40.04 40.04 0 0 1 40 40 8 8 0 0 0 8 8h336a8 8 0 0 0 8-8 40.04 40.04 0 0 1 40-40 8 8 0 0 0 8-8v-160a8 8 0 0 0 -8-8zm-8 160.58a56.11 56.11 0 0 0 -47.42 47.42h-321.16a56.11 56.11 0 0 0 -47.42-47.42v-145.16a56.11 56.11 0 0 0 47.42-47.42h321.16a56.11 56.11 0 0 0 47.42 47.42z" fill="url(#a)"/><path d="m256 344a88 88 0 1 0 -88-88 88.1 88.1 0 0 0 88 88zm0-160a72 72 0 1 1 -72 72 72.081 72.081 0 0 1 72-72z" fill="url(#c)"/><path d="m240 272a8 8 0 0 0 0 16h8a8 8 0 0 0 16 0h8a8 8 0 0 0 8-8v-24a8 8 0 0 0 -8-8h-24v-8h24a8 8 0 0 0 0-16h-8a8 8 0 0 0 -16 0h-8a8 8 0 0 0 -8 8v24a8 8 0 0 0 8 8h24v8z" fill="url(#c)"/><path d="m88 280a24 24 0 1 0 -24-24 24.027 24.027 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" fill="url(#e)"/><path d="m424 280a24 24 0 1 0 -24-24 24.027 24.027 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" fill="url(#f)"/></g></svg>
                               250 $
                               <img src="https://www.salaunmag.com/uploads/salaun-mag-and-news.jpg" width="40" height="40">


                            </div>
                    </div>
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-half" viewBox="0 0 16 16">
  <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
  <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
  <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
</svg>
                     </div>
                </div>


                <div class="card">
                    <div class="card-img" style="background-image:url('images/New-York.jpg');">
                        <div class="overlay">
                            <div class="overlay-content">
                            <a href="indexO.php"> Réserver 
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="#!">
                            <h2> New York </h2>
                            <p> New York est une ville composée de 5 arrondissements à l'embouchure du fleuve Hudson et
                                de l'océan Atlantique.<br> En son centre se trouve Manhattan, un arrondissement
                                densément peuplé faisant partie des principaux centres commerciaux, financiers et
                                culturels du monde. </p>
                        </a>
                        <div>
                               <svg height="60" viewBox="0 0 512 512" width="60" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="13.354" x2="468.463" y1="498.646" y2="43.537" data-name="New Gradient Swatch 1"><stop offset="0" stop-color="#003f8a"/><stop offset=".518" stop-color="#00d7df"/><stop offset="1" stop-color="#006df0"/></linearGradient><linearGradient id="c" x1="13.354" x2="468.463" xlink:href="#a" y1="498.646" y2="43.537"/><linearGradient id="e" x1="-70.646" x2="384.463" xlink:href="#a" y1="414.646" y2="-40.463"/><linearGradient id="f" x1="97.354" x2="552.463" xlink:href="#a" y1="582.646" y2="127.537"/><g><path d="m496 96h-480a8 8 0 0 0 -8 8v304a8 8 0 0 0 8 8h480a8 8 0 0 0 8-8v-304a8 8 0 0 0 -8-8zm-8 304h-464v-288h464z" fill="url(#a)"/><path d="m472 168a40.04 40.04 0 0 1 -40-40 8 8 0 0 0 -8-8h-336a8 8 0 0 0 -8 8 40.04 40.04 0 0 1 -40 40 8 8 0 0 0 -8 8v160a8 8 0 0 0 8 8 40.04 40.04 0 0 1 40 40 8 8 0 0 0 8 8h336a8 8 0 0 0 8-8 40.04 40.04 0 0 1 40-40 8 8 0 0 0 8-8v-160a8 8 0 0 0 -8-8zm-8 160.58a56.11 56.11 0 0 0 -47.42 47.42h-321.16a56.11 56.11 0 0 0 -47.42-47.42v-145.16a56.11 56.11 0 0 0 47.42-47.42h321.16a56.11 56.11 0 0 0 47.42 47.42z" fill="url(#a)"/><path d="m256 344a88 88 0 1 0 -88-88 88.1 88.1 0 0 0 88 88zm0-160a72 72 0 1 1 -72 72 72.081 72.081 0 0 1 72-72z" fill="url(#c)"/><path d="m240 272a8 8 0 0 0 0 16h8a8 8 0 0 0 16 0h8a8 8 0 0 0 8-8v-24a8 8 0 0 0 -8-8h-24v-8h24a8 8 0 0 0 0-16h-8a8 8 0 0 0 -16 0h-8a8 8 0 0 0 -8 8v24a8 8 0 0 0 8 8h24v8z" fill="url(#c)"/><path d="m88 280a24 24 0 1 0 -24-24 24.027 24.027 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" fill="url(#e)"/><path d="m424 280a24 24 0 1 0 -24-24 24.027 24.027 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" fill="url(#f)"/></g></svg>
                               1000 $
                               <img src="https://play-lh.googleusercontent.com/0ZA4UQQIsUeqgU8KhGkrD_Te1PNk_GMYSnZU3tdtL-wesr2BWzchxkjgafyJ4NxAVg" width="50" height="50">

                            </div>
                    </div>
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
                    </div>
                </div>


                <div class="card">
                    <div class="card-img" style="background-image:url('images/Tel-Aviv.jpg');">
                        <div class="overlay">
                            <div class="overlay-content">
                            <a href="indexO.php"> Réserver 
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="#!">
                            <h2> Tel Aviv </h2>
                            <p> Sur la côte méditerranéenne, Tel Aviv est une ville israélienne caractérisée <br> par
                                ses sobres immeubles Bauhaus datant des années 1930, dont des milliers sont regroupés
                                dans l'ensemble architectural appelé Ville Blanche. </p>
                        </a>
                        <div>
                               <svg height="60" viewBox="0 0 512 512" width="60" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="13.354" x2="468.463" y1="498.646" y2="43.537" data-name="New Gradient Swatch 1"><stop offset="0" stop-color="#003f8a"/><stop offset=".518" stop-color="#00d7df"/><stop offset="1" stop-color="#006df0"/></linearGradient><linearGradient id="c" x1="13.354" x2="468.463" xlink:href="#a" y1="498.646" y2="43.537"/><linearGradient id="e" x1="-70.646" x2="384.463" xlink:href="#a" y1="414.646" y2="-40.463"/><linearGradient id="f" x1="97.354" x2="552.463" xlink:href="#a" y1="582.646" y2="127.537"/><g><path d="m496 96h-480a8 8 0 0 0 -8 8v304a8 8 0 0 0 8 8h480a8 8 0 0 0 8-8v-304a8 8 0 0 0 -8-8zm-8 304h-464v-288h464z" fill="url(#a)"/><path d="m472 168a40.04 40.04 0 0 1 -40-40 8 8 0 0 0 -8-8h-336a8 8 0 0 0 -8 8 40.04 40.04 0 0 1 -40 40 8 8 0 0 0 -8 8v160a8 8 0 0 0 8 8 40.04 40.04 0 0 1 40 40 8 8 0 0 0 8 8h336a8 8 0 0 0 8-8 40.04 40.04 0 0 1 40-40 8 8 0 0 0 8-8v-160a8 8 0 0 0 -8-8zm-8 160.58a56.11 56.11 0 0 0 -47.42 47.42h-321.16a56.11 56.11 0 0 0 -47.42-47.42v-145.16a56.11 56.11 0 0 0 47.42-47.42h321.16a56.11 56.11 0 0 0 47.42 47.42z" fill="url(#a)"/><path d="m256 344a88 88 0 1 0 -88-88 88.1 88.1 0 0 0 88 88zm0-160a72 72 0 1 1 -72 72 72.081 72.081 0 0 1 72-72z" fill="url(#c)"/><path d="m240 272a8 8 0 0 0 0 16h8a8 8 0 0 0 16 0h8a8 8 0 0 0 8-8v-24a8 8 0 0 0 -8-8h-24v-8h24a8 8 0 0 0 0-16h-8a8 8 0 0 0 -16 0h-8a8 8 0 0 0 -8 8v24a8 8 0 0 0 8 8h24v8z" fill="url(#c)"/><path d="m88 280a24 24 0 1 0 -24-24 24.027 24.027 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" fill="url(#e)"/><path d="m424 280a24 24 0 1 0 -24-24 24.027 24.027 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" fill="url(#f)"/></g></svg>
                               400 $
                               <img src="https://carriere.mariettondeveloppement.fr/wp-content/uploads/2021/10/logo_heliades.png" width="50" height="50">

                            </div>
                    </div>
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
  <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
  <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
</svg>
                   </div>
                </div>


                <div class="card">
                    <div class="card-img" style="background-image:url('images/Venise.jpg');">
                        <div class="overlay">
                            <div class="overlay-content">
                            <a href="indexO.php"> Réserver 
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="#!">
                            <h2> Venise </h2>
                            <p> Venise, capitale de la région de la Vénétie au nord de l'Italie, occupe plus de 100
                                petites îles dans un lagon de la mer Adriatique.<br> La ville ne comprend aucune route,
                                uniquement des canaux, dont le Grand Canal, bordé de palais gothiques et Renaissance.
                            </p>
                        </a>
                        <div>
                               <svg height="60" viewBox="0 0 512 512" width="60" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="13.354" x2="468.463" y1="498.646" y2="43.537" data-name="New Gradient Swatch 1"><stop offset="0" stop-color="#003f8a"/><stop offset=".518" stop-color="#00d7df"/><stop offset="1" stop-color="#006df0"/></linearGradient><linearGradient id="c" x1="13.354" x2="468.463" xlink:href="#a" y1="498.646" y2="43.537"/><linearGradient id="e" x1="-70.646" x2="384.463" xlink:href="#a" y1="414.646" y2="-40.463"/><linearGradient id="f" x1="97.354" x2="552.463" xlink:href="#a" y1="582.646" y2="127.537"/><g><path d="m496 96h-480a8 8 0 0 0 -8 8v304a8 8 0 0 0 8 8h480a8 8 0 0 0 8-8v-304a8 8 0 0 0 -8-8zm-8 304h-464v-288h464z" fill="url(#a)"/><path d="m472 168a40.04 40.04 0 0 1 -40-40 8 8 0 0 0 -8-8h-336a8 8 0 0 0 -8 8 40.04 40.04 0 0 1 -40 40 8 8 0 0 0 -8 8v160a8 8 0 0 0 8 8 40.04 40.04 0 0 1 40 40 8 8 0 0 0 8 8h336a8 8 0 0 0 8-8 40.04 40.04 0 0 1 40-40 8 8 0 0 0 8-8v-160a8 8 0 0 0 -8-8zm-8 160.58a56.11 56.11 0 0 0 -47.42 47.42h-321.16a56.11 56.11 0 0 0 -47.42-47.42v-145.16a56.11 56.11 0 0 0 47.42-47.42h321.16a56.11 56.11 0 0 0 47.42 47.42z" fill="url(#a)"/><path d="m256 344a88 88 0 1 0 -88-88 88.1 88.1 0 0 0 88 88zm0-160a72 72 0 1 1 -72 72 72.081 72.081 0 0 1 72-72z" fill="url(#c)"/><path d="m240 272a8 8 0 0 0 0 16h8a8 8 0 0 0 16 0h8a8 8 0 0 0 8-8v-24a8 8 0 0 0 -8-8h-24v-8h24a8 8 0 0 0 0-16h-8a8 8 0 0 0 -16 0h-8a8 8 0 0 0 -8 8v24a8 8 0 0 0 8 8h24v8z" fill="url(#c)"/><path d="m88 280a24 24 0 1 0 -24-24 24.027 24.027 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" fill="url(#e)"/><path d="m424 280a24 24 0 1 0 -24-24 24.027 24.027 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" fill="url(#f)"/></g></svg>
                             700 $
                             <img src="https://play-lh.googleusercontent.com/0ZA4UQQIsUeqgU8KhGkrD_Te1PNk_GMYSnZU3tdtL-wesr2BWzchxkjgafyJ4NxAVg" width="50" height="50">

                            </div>
                    </div>
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-half" viewBox="0 0 16 16">
  <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
</svg>

                   </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background-image:url('images/Tokyo.jpg');">
                        <div class="overlay">
                            <div class="overlay-content">
                            <a href="indexO.php"> Réserver 
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="#!">
                            <h2> Tokyo </h2>
                            <p> Capitale animée du Japon, Tokyo associe les styles ultramodernes et traditionnels,<br>
                                dans un mélange de gratte-ciel aux néons lumineux et de temples anciens. </p>
                        </a>
                        <div>
                               <svg height="60" viewBox="0 0 512 512" width="60" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="13.354" x2="468.463" y1="498.646" y2="43.537" data-name="New Gradient Swatch 1"><stop offset="0" stop-color="#003f8a"/><stop offset=".518" stop-color="#00d7df"/><stop offset="1" stop-color="#006df0"/></linearGradient><linearGradient id="c" x1="13.354" x2="468.463" xlink:href="#a" y1="498.646" y2="43.537"/><linearGradient id="e" x1="-70.646" x2="384.463" xlink:href="#a" y1="414.646" y2="-40.463"/><linearGradient id="f" x1="97.354" x2="552.463" xlink:href="#a" y1="582.646" y2="127.537"/><g><path d="m496 96h-480a8 8 0 0 0 -8 8v304a8 8 0 0 0 8 8h480a8 8 0 0 0 8-8v-304a8 8 0 0 0 -8-8zm-8 304h-464v-288h464z" fill="url(#a)"/><path d="m472 168a40.04 40.04 0 0 1 -40-40 8 8 0 0 0 -8-8h-336a8 8 0 0 0 -8 8 40.04 40.04 0 0 1 -40 40 8 8 0 0 0 -8 8v160a8 8 0 0 0 8 8 40.04 40.04 0 0 1 40 40 8 8 0 0 0 8 8h336a8 8 0 0 0 8-8 40.04 40.04 0 0 1 40-40 8 8 0 0 0 8-8v-160a8 8 0 0 0 -8-8zm-8 160.58a56.11 56.11 0 0 0 -47.42 47.42h-321.16a56.11 56.11 0 0 0 -47.42-47.42v-145.16a56.11 56.11 0 0 0 47.42-47.42h321.16a56.11 56.11 0 0 0 47.42 47.42z" fill="url(#a)"/><path d="m256 344a88 88 0 1 0 -88-88 88.1 88.1 0 0 0 88 88zm0-160a72 72 0 1 1 -72 72 72.081 72.081 0 0 1 72-72z" fill="url(#c)"/><path d="m240 272a8 8 0 0 0 0 16h8a8 8 0 0 0 16 0h8a8 8 0 0 0 8-8v-24a8 8 0 0 0 -8-8h-24v-8h24a8 8 0 0 0 0-16h-8a8 8 0 0 0 -16 0h-8a8 8 0 0 0 -8 8v24a8 8 0 0 0 8 8h24v8z" fill="url(#c)"/><path d="m88 280a24 24 0 1 0 -24-24 24.027 24.027 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" fill="url(#e)"/><path d="m424 280a24 24 0 1 0 -24-24 24.027 24.027 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" fill="url(#f)"/></g></svg>
                               1300 $
                               <img src="https://carriere.mariettondeveloppement.fr/wp-content/uploads/2021/10/logo_heliades.png" width="50" height="50">

                            </div>
                    </div>
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background-image:url('images/Rio-de-Janeiro.jpg');">
                        <div class="overlay">
                            <div class="overlay-content">
                            <a href="indexO.php"> Réserver 
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="#!">
                            <h2> Brasília </h2>
                            <p> Brasília, inaugurée comme capitale du Brésil en 1960, <br>
                                est une ville à l'urbanisme planifié qui se distingue par son architecture blanche et
                                moderne, <br>
                                principalement réalisée par Oscar Niemeyer. </p>
                        </a>
                        <div>
                               <svg height="60" viewBox="0 0 512 512" width="60" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="13.354" x2="468.463" y1="498.646" y2="43.537" data-name="New Gradient Swatch 1"><stop offset="0" stop-color="#003f8a"/><stop offset=".518" stop-color="#00d7df"/><stop offset="1" stop-color="#006df0"/></linearGradient><linearGradient id="c" x1="13.354" x2="468.463" xlink:href="#a" y1="498.646" y2="43.537"/><linearGradient id="e" x1="-70.646" x2="384.463" xlink:href="#a" y1="414.646" y2="-40.463"/><linearGradient id="f" x1="97.354" x2="552.463" xlink:href="#a" y1="582.646" y2="127.537"/><g><path d="m496 96h-480a8 8 0 0 0 -8 8v304a8 8 0 0 0 8 8h480a8 8 0 0 0 8-8v-304a8 8 0 0 0 -8-8zm-8 304h-464v-288h464z" fill="url(#a)"/><path d="m472 168a40.04 40.04 0 0 1 -40-40 8 8 0 0 0 -8-8h-336a8 8 0 0 0 -8 8 40.04 40.04 0 0 1 -40 40 8 8 0 0 0 -8 8v160a8 8 0 0 0 8 8 40.04 40.04 0 0 1 40 40 8 8 0 0 0 8 8h336a8 8 0 0 0 8-8 40.04 40.04 0 0 1 40-40 8 8 0 0 0 8-8v-160a8 8 0 0 0 -8-8zm-8 160.58a56.11 56.11 0 0 0 -47.42 47.42h-321.16a56.11 56.11 0 0 0 -47.42-47.42v-145.16a56.11 56.11 0 0 0 47.42-47.42h321.16a56.11 56.11 0 0 0 47.42 47.42z" fill="url(#a)"/><path d="m256 344a88 88 0 1 0 -88-88 88.1 88.1 0 0 0 88 88zm0-160a72 72 0 1 1 -72 72 72.081 72.081 0 0 1 72-72z" fill="url(#c)"/><path d="m240 272a8 8 0 0 0 0 16h8a8 8 0 0 0 16 0h8a8 8 0 0 0 8-8v-24a8 8 0 0 0 -8-8h-24v-8h24a8 8 0 0 0 0-16h-8a8 8 0 0 0 -16 0h-8a8 8 0 0 0 -8 8v24a8 8 0 0 0 8 8h24v8z" fill="url(#c)"/><path d="m88 280a24 24 0 1 0 -24-24 24.027 24.027 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" fill="url(#e)"/><path d="m424 280a24 24 0 1 0 -24-24 24.027 24.027 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" fill="url(#f)"/></g></svg>
                               1052 $
                               <img src="https://carriere.mariettondeveloppement.fr/wp-content/uploads/2021/10/logo_heliades.png" width="50" height="50">

                            </div>
                    </div>
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-half" viewBox="0 0 16 16">
  <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
  <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
</svg>

                  </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background-image:url('images/Amsterdam.jpg');">
                        <div class="overlay">
                            <div class="overlay-content">
                            <a href="indexO.php"> Réserver 
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="#!">
                            <h2> Amsterdam </h2>
                            <p> Amsterdam, capitale des Pays-Bas, est connue pour son patrimoine artistique, <br>
                                son système élaboré de canaux et ses étroites maisons à pignons, <br>
                                héritage de l'âge d'or de la ville, le XVIIe siècle. </p>
                        </a> <div>
                               <svg height="60" viewBox="0 0 512 512" width="60" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="13.354" x2="468.463" y1="498.646" y2="43.537" data-name="New Gradient Swatch 1"><stop offset="0" stop-color="#003f8a"/><stop offset=".518" stop-color="#00d7df"/><stop offset="1" stop-color="#006df0"/></linearGradient><linearGradient id="c" x1="13.354" x2="468.463" xlink:href="#a" y1="498.646" y2="43.537"/><linearGradient id="e" x1="-70.646" x2="384.463" xlink:href="#a" y1="414.646" y2="-40.463"/><linearGradient id="f" x1="97.354" x2="552.463" xlink:href="#a" y1="582.646" y2="127.537"/><g><path d="m496 96h-480a8 8 0 0 0 -8 8v304a8 8 0 0 0 8 8h480a8 8 0 0 0 8-8v-304a8 8 0 0 0 -8-8zm-8 304h-464v-288h464z" fill="url(#a)"/><path d="m472 168a40.04 40.04 0 0 1 -40-40 8 8 0 0 0 -8-8h-336a8 8 0 0 0 -8 8 40.04 40.04 0 0 1 -40 40 8 8 0 0 0 -8 8v160a8 8 0 0 0 8 8 40.04 40.04 0 0 1 40 40 8 8 0 0 0 8 8h336a8 8 0 0 0 8-8 40.04 40.04 0 0 1 40-40 8 8 0 0 0 8-8v-160a8 8 0 0 0 -8-8zm-8 160.58a56.11 56.11 0 0 0 -47.42 47.42h-321.16a56.11 56.11 0 0 0 -47.42-47.42v-145.16a56.11 56.11 0 0 0 47.42-47.42h321.16a56.11 56.11 0 0 0 47.42 47.42z" fill="url(#a)"/><path d="m256 344a88 88 0 1 0 -88-88 88.1 88.1 0 0 0 88 88zm0-160a72 72 0 1 1 -72 72 72.081 72.081 0 0 1 72-72z" fill="url(#c)"/><path d="m240 272a8 8 0 0 0 0 16h8a8 8 0 0 0 16 0h8a8 8 0 0 0 8-8v-24a8 8 0 0 0 -8-8h-24v-8h24a8 8 0 0 0 0-16h-8a8 8 0 0 0 -16 0h-8a8 8 0 0 0 -8 8v24a8 8 0 0 0 8 8h24v8z" fill="url(#c)"/><path d="m88 280a24 24 0 1 0 -24-24 24.027 24.027 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" fill="url(#e)"/><path d="m424 280a24 24 0 1 0 -24-24 24.027 24.027 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" fill="url(#f)"/></g></svg>
                               1452 $
                               <img src="https://www.salaunmag.com/uploads/salaun-mag-and-news.jpg" width="50" height="50">

                            </div>
                    </div>
                    <div>

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
<path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
</svg>
</div>
                </div>

            </div>
        </div>
</section>

<section class='CreateDestinations' id="CreateDestinations">

<form action="createDestination.php" method="post">
            <h4> </h4>
            <hr>

            <div class="name-field">
                <div>
                    <label> Nom </label>
                    <input name="name" type="text">
                </div>
      
            </div>

            <label for="destination-select"> Choisir la destination : </label>

<select name="destination" id="destination-select">
    <option value=""> Choisissez votre destination : </option>
    <option value="Saint-Romain-Lachalm"> Saint-Romain-Lachalm </option>
    <option value="Madrid"> Madrid </option>
    <option value="Berlin"> Berlin </option>
    <option value="Séoul"> Séoul </option>
    <option value="Bangkok"> Bangkok </option>
    <option value="Bombay"> Bombay </option>
    <option value="New York"> New York </option>
    <option value="Tel Aviv"> Tel Aviv </option>
    <option value="Venise"> Venise </option>
    <option value="Tokyo"> Tokyo </option>
    <option value="Brasília"> Brasília </option>
    <option value="Amsterdam"> Amsterdam </option>
</select>

<input type="submit" value="Envoyer">
           
</form>

    <!-- FIN DESTINATION -->

</body>

<script src="/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</html>