<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElizaImmo</title>
    <!--CSS File-->
    <link rel="stylesheet" href="style.css">
    <!--Boostrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--Fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

</head>
<body>
    <!--Navbar-->
    <div class="container-fluid">
        <div class="row">
            <div class="col navbar_bg p-0">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="#"><img class="logo" src="./assets/img/elizaImmo_logo.png"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" href="#">Change currency</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" href="#">Contact us</a>
                        </li>
                    </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <section class="triangle w-100">
        <!--Triangle SVG-->
        <div class="above-gradient"></div>
        <div class='gradient'>
            <svg viewBox='0 0 100 100' preserveAspectRatio='none' overflow="visible">
            <polygon points="0,0 0,100 100,0" class="main"/>
            </svg>
        </div>
    </section>
    <div class="container">
        <div class="row d-flex align-items-start mt-5">
            <div class="col-10 col-md-6 mx-auto formulaire pl-1 pl-md-2 pr-0 py-4">
                <!--critere de recherche-->
                <form class="col-12 px-0" method="post" action="">
                    <!--Type of property-->
                    <div class="col-12 d-flex align-items-start mb-1">
                        <div class="col-6 p-0">
                            <i class="fas fa-caret-right"></i>&nbsp;Type of property
                        </div>
                        <div class="col-6 d-flex flex-wrap align-items-baseline p-0">
                            <div>
                                <input type="radio" name="property_type" value="apartment" checked>
                                <label for="property_type">&nbsp;Apartment/Flat&nbsp;</label>
                            </div>
                            <div>
                                <input type="radio" name="property_type" value="house">
                                <label for="property_type">&nbsp;House</label>
                            </div>
                        </div>
                    </div>
                    <!-- Number facades -->
                    <div class="col-12 d-flex align-items-center mb-1">
                        <div class="col-6 p-0">
                            <i class="fas fa-caret-right"></i>&nbsp;<label for="facades_number">Number of facades</label>
                        </div>
                        <div class="col-6 p-0">
                            <input type="number" min="1" max="12" class="rooms_number  w-100" name="facades_number" value="1" required>
                        </div>
                    </div>
                    <!--Area-->
                    <div class="col-12 d-flex align-items-center mb-1">
                        <div class="col-6 p-0">
                            <i class="fas fa-caret-right"></i>&nbsp;<label for="land_m2">Area in ares</label>
                        </div>
                        <div class="col-6 p-0">
                            <input type="number" min="1" max="2000000" class="area  w-100" name="land_m2" value="1">
                        </div>
                    </div>
                    <!--Living Area-->
                    <div class="col-12 d-flex align-items-center mb-1">
                        <div class="col-6 p-0">
                            <i class="fas fa-caret-right"></i>&nbsp;<label for="house_m2">Living area (sqm)</label>
                        </div>
                        <div class="col-6 p-0">
                            <input type="number" min="1" max="1000" class="living_area  w-100" name="house_m2" value="1" required>
                        </div>
                    </div>
                    <!--Number bedrooms-->
                    <div class="col-12 d-flex align-items-center mb-1">
                        <div class="col-6 p-0">
                            <i class="fas fa-caret-right"></i>&nbsp;<label for="bedrooms_number">Nbr of bedrooms</label>
                        </div>
                        <div class="col-6 p-0">
                            <input type="number" min="1" max="12" class="rooms_number  w-100" name="bedrooms_number" value="1" required>
                        </div>
                    </div>
                    
                    <!--Garden-->
                    <div class="col-12 d-flex align-items-center mb-1">
                        <div class="col-6 p-0">
                            <i class="fas fa-caret-right"></i>&nbsp;Garden
                        </div>
                        <div class="col-6 d-flex align-items-baseline p-0">
                            <input type="radio" name="garden" value="yes">
                            <label for="garden">&nbsp;Yes&nbsp;</label>
                            <input type="radio" name="garden" value="no" checked>
                            <label for="garden">&nbsp;No</label>
                        </div>
                    </div>
                    <!--Terrasse-->
                    <div class="col-12 d-flex align-items-center mb-1">
                        <div class="col-6 p-0">
                            <i class="fas fa-caret-right"></i>&nbsp;Terrace                               
                        </div>
                        <div class="col-6 d-flex align-items-baseline  p-0">
                            <input type="radio" name="terrace" value="yes">
                            <label for="terrace">&nbsp;Yes&nbsp;</label>
                            <input type="radio" name="terrace" value="no" checked>
                            <label for="terrace">&nbsp;No</label>
                        </div>
                    </div>
                    <!--Open Fire-->
                    <div class="col-12 d-flex align-items-center mb-1">
                        <div class="col-6  p-0">
                            <i class="fas fa-caret-right"></i>&nbsp;Open fire
                        </div>
                        <div class="col-6 d-flex align-items-baseline p-0">
                            <input type="radio" name="open_fire" value="yes">
                            <label for="open_fire">&nbsp;Yes&nbsp;</label>
                            <input type="radio" name="open_fire" value="no" checked>
                            <label for="open_fire">&nbsp;No</label>
                        </div>
                    </div>
                    <!--Code Postal-->
                    <div class="col-12 d-flex">
                        <div class="col-6 d-flex align-items-center mb-1 p-0">
                            <i class="fas fa-caret-right"></i>&nbsp;<label for="postal_code">Postcode</label>
                        </div>
                        <div class="col-6 p-0">
                            <input type="number" min="1000" max="9999" class="post_code  w-100" name="postal_code" required>
                        </div>
                    </div>
                    <!--Province-->
                    <div class="col-12 d-flex align-items-center mb-1 flex-wrap">
                        <div class="col-12 col-sm-6 p-0"><i class="fas fa-caret-right"></i>&nbsp;<label for="province">Choose a province</label>
                        </div>
                        <div class="col-12 col-sm-6 d-flex align-items-baseline p-0">
                            <select name="province">
                                <option value="anvers" selected>Anvers</option>
                                <option value="limbourg">Limbourg</option>
                                <option value="flandre-orientale">Flandre-orientale</option>
                                <option value="flandre-occidentale">Flandre-occidentale</option>
                                <option value="brabant-flamand">Brabant-flamand</option>
                                <option value="brabant-wallon">Brabant-wallon</option>
                                <option value="hainaut">Hainaut</option>
                                <option value="liege">Liège</option>
                                <option value="luxembourg">Luxembourg</option>
                                <option value="namur">Namur</option>
                                <option value="bruxelles-capitale">Bruxelles-capitale</option>
                            </select>
                        </div>
                    </div>
                    <!--Region-->
                    <div class="col-12 d-flex align-items-start mb-1 flex-wrap">
                        <div class="col-12 col-sm-6 p-0">
                            <i class="fas fa-caret-right"></i>&nbsp;Region
                        </div>
                        <div class="col-12 col-sm-6 p-0">
                            <div>
                                <input type="radio" name="region" value="flandre" checked>
                                <label for="type">&nbsp;Flanders</label>
                            </div>
                            <div>
                                <input type="radio" name="region" value="wallonie">
                                <label for="type">&nbsp;Wallonia</label>
                            </div>
                            <div>
                                <input type="radio" name="region" value="bruxelles-capitale">
                                <label for="type">&nbsp;Brussels</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex mt-4">
                        <input class="m-auto getEstimate p-2" type="submit" value="Get an estimate">
                    </div>
                </form>      
            </div>
            <div class="d-md-none space"></div>
            <div class="col-10 col-md-4 mx-auto mb-5 pl-1 pl-md-2 pr-0 py-4 d-flex flex-column reponse">
                <div id="price">
                    <p class="h2 text-center">The estimate price</p>
                </div>
                <div id="datas">
                    <p class="text-center">The estimated price is <span class="h4">
                        <?php include_once('datas.php'); ?>
                        </span> euros.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section class="triangleBottom w-100">
        <!--Triangle SVG-->
        <div class='gradient'>
            <svg viewBox='0 0 100 100' preserveAspectRatio='none' overflow="visible">
            <polygon points="0,100 100,100 100,0" class="main"/>
            </svg>
        </div>
        <div class="above-gradient"></div>
    </section>
    <!--Footer-->
    <div class="footerReplace"></div>
    <div class="container-fluid footer mt-5">
        <div class="row">
            <div class="col-12 d-flex py-2">
                <p class="m-auto">Created by Florence, Frederic, Philippe and Noah @BeCode.org | November 2020</p>
                <!-- On devrait mettre nos noms comme link vers notre github et inclure joffrey -->
            </div>
        </div>
    </div>
    <!--Script Boostrap-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>