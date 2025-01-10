<!DOCTYPE html>
<html lang="cs">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antik Chalupář</title>
    <style>
        body {
            background-color: #121212;
            color: #f5f5f5;
            font-family: "DM Serif Text", serif;
              font-weight: 400;
              font-style: normal;
        }
        .navbar {
        width:100%;
            position: fixed;
            background-image: url('./faw-product-josephine-no-2-universal-set-of-2-12-rkilgore-628-6b7f4e6191424847bffe5be23dd13f50.jpeg');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            transition: all 0.3s ease;
        }
        .navbar.shrink {
            padding: 10px 15px;
        }
        .navbar-brand, .nav-link {
            color: #fff !important;
        }
        .nav-link:hover {
            text-decoration: underline;
        }
        .section {
            padding-top: 100px
        }
    .section1 {
                padding-top: 50px
            }
        #sortiment img {
            max-width: 100%;
            height: 500px;
        }
        .gallery img {
            width: 100%;
            border-radius: 10px;
        }
        .backy1 {
             background-color:darkslategray;
             width: 100%;
             height: auto;
             padding-bottom: 20px;
             z-index: -1;
            }
            #sortiment .container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

#sortiment .row {
    display: flex;
    justify-content: center;
    flex-wrap: wrap; /* Ensures the items wrap on smaller screens */
    gap: 20px; /* Space between the tiles */
}

#sortiment .col-md-4 {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%; /* Ensures full width on small screens */
    max-width: 300px; /* Optional: max width of the tiles */
    padding: 10px;
}

/* Square images */
.gallery {
    width: 100%;
    height: 0;
    padding-bottom: 100%; /* This creates a square aspect ratio */
    background-size: cover;
    background-position: center;
}

/* For mobile devices, 2 columns */
@media (max-width: 767px) {
    #sortiment .row {
        flex-direction: row;
    }
    #sortiment .col-md-4 {
        width: 48%; /* 2 columns on small screens */
        margin: 10px 0;
    }
}

/* For larger screens (3 columns) */
@media (min-width: 768px) {
    #sortiment .row {
        flex-direction: row;
    }
    #sortiment .col-md-4 {
        width: 30%; /* 3 columns on larger screens */
    }
}


            
    </style>
</head>
<body>
   
    
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Antik Chalupář</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#uvod">Úvod</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sortiment">Sortiment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#vykup">Výkup</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="uvod" class="section mb-0 backy1">
    <div class="container ">
        <h1 class="text-center">Antik Chalupář</h1>
        <p class="text-center">Kamenný a internetový obchod z Nové Paky, který nabízí prodej a výkup především lidových starožitností. Zajistíme vybavení chalup, penzionů a restaurací dobovými doplňky, jenž dotváří atmosféru časů minulých generací. Naší filosofií je radost z nákupu pro každého milovníka starých věcí.
                               <br>Těšíme se na Vaši návštěvu!</p>
    </div>
</div>

<div id="sortiment" class="section1 mb-0">
    <div class="container">
        <h2 class="text-center">Sortiment</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="./FLJFJN.jpeg" alt="Kameninové nádoby" class="gallery">
                <p>Kameninové nádoby všeho druhu.</p>
            </div>
            <div class="col-md-4">
                <img src="./99463328525876700881_original_15836760-koupim-stare-sklo-a-porcelan-001.jpg" alt="Staré sklo" class="gallery">
                <p>Staré sklo a porcelán.</p>
            </div>
            <div class="col-md-4">
                <img src="./wnRFQr.jpeg" alt="Staré pracovní náčiní" class="gallery">
                <p>Staré pracovní náčiní.</p>
            </div>
        </div>
    </div>
</div>

<div id="vykup" class="section">
    <div class="container">
        <h2 class="text-center">Výkup</h2>
        <p class="text-center">Nabízíme výkup starožitností. Kontaktujte nás pro více informací.</p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            document.getElementById(targetId).scrollIntoView({ behavior: 'smooth' });
        });
    });

    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('shrink');
        } else {
            navbar.classList.remove('shrink');
        }
    });
</script>
</body>
</html>
