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
                            <a class="nav-link" aria-current="page" href="indexD.php"> Destinations </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="indexO.php"> Opérateurs </a>
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
                                <a target="_blank" href=""> Voir les offres </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="#!">
                            <h2> Saint Romain Lachalm </h2>
                            <p> Saint-Romain-Lachalm est une commune française située à l'est du Velay, dans le
                                département de la Haute-Loire en région Auvergne-Rhône-Alpes.<br> Ses habitants sont
                                appelés les San-Roumis. </p>
                        </a>

                    </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background-image:url('images/Madrid.jpg');">
                        <div class="overlay">
                            <div class="overlay-content">
                                <a target="_blank" href=""> Voir les offres </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="#!">
                            <h2> Madrid </h2>
                            <p> Située au centre de l'Espagne, Madrid, sa capitale, est une ville dotée d'élégants
                                boulevards et de vastes parcs très bien entretenus comme le Retiro.</p>
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background-image:url('images/Berlin.jpg');">
                        <div class="overlay">
                            <div class="overlay-content">
                                <a target="_blank" href=""> Voir les offres </a>
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
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background-image:url('images/Seoul.jpg');">
                        <div class="overlay">
                            <div class="overlay-content">
                                <a target="_blank" href=""> Voir les offres </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="#!">
                            <h2> Séoul </h2>
                            <p> Capitale de la Corée du Sud, Séoul est une immense métropole où les gratte-ciel
                                modernes,<br> les métros high-tech et la culture pop côtoient les temples bouddhistes,
                                les palais et les marchés de rue. </p>
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background-image:url('images/Bangkok.jpg')">
                        <div class="overlay">
                            <div class="overlay-content">
                                <a target="_blank" href=""> Voir les offres </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="#!">
                            <h2> Bangkok </h2>
                            <p>Bangkok, la capitale de la Thaïlande, est une grande ville connue <br>pour ses
                                sanctuaires richement décorés et ses rues animées. </p>
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background-image:url('images/Bombay.jpg');">
                        <div class="overlay">
                            <div class="overlay-content">
                                <a target="_blank" href=""> Voir les offres </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="#!">
                            <h2> Bombay </h2>
                            <p> Mumbai (anciennement Bombay) est une ville densément peuplée qui se trouve sur la côte
                                ouest de l'Inde.<br> Ce centre financier est la plus grande ville du pays. </p>
                        </a>
                    </div>
                </div>


                <div class="card">
                    <div class="card-img" style="background-image:url('images/New-York.jpg');">
                        <div class="overlay">
                            <div class="overlay-content">
                                <a target="_blank" href=""> Voir les offres </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="#!">
                            <h2> New york </h2>
                            <p> New York est une ville composée de 5 arrondissements à l'embouchure du fleuve Hudson et
                                de l'océan Atlantique.<br> En son centre se trouve Manhattan, un arrondissement
                                densément peuplé faisant partie des principaux centres commerciaux, financiers et
                                culturels du monde. </p>
                        </a>
                    </div>
                </div>


                <div class="card">
                    <div class="card-img" style="background-image:url('images/Tel-Aviv.jpg');">
                        <div class="overlay">
                            <div class="overlay-content">
                                <a target="_blank" href=""> Voir les offres </a>
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
                    </div>
                </div>


                <div class="card">
                    <div class="card-img" style="background-image:url('images/Venise.jpg');">
                        <div class="overlay">
                            <div class="overlay-content">
                                <a target="_blank" href=""> Voir les offres </a>
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
                    </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background-image:url('images/Tokyo.jpg');">
                        <div class="overlay">
                            <div class="overlay-content">
                                <a target="_blank" href=""> Voir les offres </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="#!">
                            <h2> Tokyo </h2>
                            <p> Capitale animée du Japon, Tokyo associe les styles ultramodernes et traditionnels,<br>
                                dans un mélange de gratte-ciel aux néons lumineux et de temples anciens. </p>
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background-image:url('images/Rio-de-Janeiro.jpg');">
                        <div class="overlay">
                            <div class="overlay-content">
                                <a target="_blank" href=""> Voir les offres </a>
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
                    </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background-image:url('images/Amsterdam.jpg');">
                        <div class="overlay">
                            <div class="overlay-content">
                                <a target="_blank" href=""> Voir les offres </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <a href="#!">
                            <h2> Amsterdam </h2>
                            <p> Amsterdam, capitale des Pays-Bas, est connue pour son patrimoine artistique, <br>
                                son système élaboré de canaux et ses étroites maisons à pignons, <br>
                                héritage de l'âge d'or de la ville, le XVIIe siècle. </p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FIN DESTINATION -->

</body>

<script src="/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</html>