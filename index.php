<!DOCTYPE html>
<html lang="fr">
<head>
    <base href="https://immo-eliza.herokuapp.com/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElizaImmo</title>
    <!--CSS File-->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!--Boostrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--Fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

</head>
<body>
    <section class="triangle w-100">
        <!--Triangle SVG-->
        <div class="above-gradient"></div>
        <div class='gradient'>
            <svg viewBox='0 0 100 100' preserveAspectRatio='none' overflow="visible">
            <polygon points="0,0 0,100 100,0" class="main"/>
            </svg>
        </div>
    </section>
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
    <div class="container">
        <div class="row mt-5">
            <div class="col-10 col-md-5 mx-auto formulaire pl-1 pl-md-2 pr-0 py-4">
                <!--critere de recherche-->
                <form class="col-12 px-0" method="post" action="">
                    <!--Code Postal-->
                    <div class="col-12 d-flex">
                        <div class="col-8 d-flex align-items-center mb-1 p-0">
                            <i class="fas fa-caret-right"></i>&nbsp;<label for="postal_code">Post Code</label>
                        </div>
                        <div class="col-4 p-0">
                            <input type="number" min="1000" max="9999" class="post_code  w-100" name="postal_code" required>
                        </div>
                    </div>
                    <!--Type of property-->
                    <div class="col-12 d-flex align-items-center mb-1">
                        <div class="col-8 p-0">
                            <i class="fas fa-caret-right"></i>&nbsp;Type of property
                        </div>
                        <div class="col-4 d-flex flex-column align-items-baseline p-0">
                            <div>
                                <input type="radio" name="type" value="apartment">
                                <label for="type">&nbsp;Apart</label>
                            </div>
                            <div>
                                <input type="radio" name="type" value="house">
                                <label for="type">&nbsp;House</label>
                            </div>
                        </div>
                    </div>
                    <!--Area-->
                    <div class="col-12 d-flex align-items-center mb-1">
                        <div class="col-8 p-0">
                            <i class="fas fa-caret-right"></i>&nbsp;<label for="area">Area in ares</label>
                        </div>
                        <div class="col-4 p-0">
                            <input type="number" min="0" max="200" class="area  w-100" name="area">
                        </div>
                    </div>
                    <!--Living Area-->
                    <div class="col-12 d-flex align-items-center mb-1">
                        <div class="col-8 p-0">
                            <i class="fas fa-caret-right"></i>&nbsp;<label for="house_m2">Living area in sqm</label>
                        </div>
                        <div class="col-4 p-0">
                            <input type="number" min="0" max="1000" class="living_area  w-100" name="house_m2" required>
                        </div>
                    </div>
                    <!--Number rooms-->
                    <div class="col-12 d-flex align-items-center mb-1">
                        <div class="col-8 p-0">
                            <i class="fas fa-caret-right"></i>&nbsp;<label for="rooms_number">Number of rooms</label>
                        </div>
                        <div class="col-4 p-0">
                            <input type="number" min="0" max="12" class="rooms_number  w-100" name="rooms_number">
                        </div>
                    </div>
                    <!--Garden-->
                    <div class="col-12 d-flex align-items-center mb-1">
                        <div class="col-8 p-0">
                            <i class="fas fa-caret-right"></i>&nbsp;Garden
                        </div>
                        <div class="col-4 d-flex align-items-baseline p-0">
                            <input type="radio" name="garden" value="yes">
                            <label for="garden">&nbsp;Yes&nbsp;</label>
                            <input type="radio" name="garden" value="no">
                            <label for="garden">&nbsp;No</label>
                        </div>
                    </div>
                    <!--Number bathrooms-->
                    <div class="col-12 d-flex align-items-center mb-1">
                        <div class="col-8 p-0">
                            <i class="fas fa-caret-right"></i>&nbsp;<label for="bathrooms_number">Number of bathrooms</label>
                        </div>
                        <div class="col-4 p-0">
                            <input type="number" min="1" max="10" class="bathrooms_number  w-100" name="bathrooms_number">
                        </div>
                    </div>
                    <!--Parking-->
                    <div class="col-12 d-flex align-items-center mb-1">
                        <div class="col-8 p-0">
                            <i class="fas fa-caret-right"></i>&nbsp;Parking                               
                        </div>
                        <div class="col-4 d-flex align-items-baseline  p-0">
                            <input type="radio" name="parking" value="yes">
                            <label for="parking">&nbsp;Yes&nbsp;</label>
                            <input type="radio" name="parking" value="no">
                            <label for="parking">&nbsp;No</label>
                        </div>
                    </div>
                    <!--Swimming pool-->
                    <div class="col-12 d-flex align-items-center mb-1">
                        <div class="col-8  p-0">
                            <i class="fas fa-caret-right"></i>&nbsp;Swimming pool
                        </div>
                        <div class="col-4 d-flex align-items-baseline p-0">
                            <input type="radio" name="pool" value="yes">
                            <label for="pool">&nbsp;Yes&nbsp;</label>
                            <input type="radio" name="pool" value="no">
                            <label for="pool">&nbsp;No</label>
                        </div>
                    </div>
                    <!--Number floors-->
                    <div class="col-12 d-flex align-items-center mb-1">
                        <div class="col-8 p-0">
                            <i class="fas fa-caret-right"></i>&nbsp;<label for="floors_number">Number of floors</label>
                        </div>
                        <div class="col-4 p-0">
                            <input type="number" min="0" max="6" class="floors_number w-100" name="floors">
                        </div>
                    </div>
                    <div class="col-12 d-flex mt-4">
                        <input class="m-auto getEstimate p-2" type="submit" value="Get an estimate">
                    </div>
                </form>      
            </div>
            <div class="col-xs-8 col-md-5 m-auto d-flex flex-column reponse">
                <div id="price">
                    Estimated price HERE
                </div>
                <div id="datas">
                    <?php include_once('datas.php'); ?>
                    3D Vue HERE(Optionnal)
                    <p></p>
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
    </section>
    <!--Footer-->
    <div class="container-fluid footer">
        <div class="row">
            <div class="col-12 d-flex py-2">
                <p class="m-auto">Created by Florence, Frederic, Philippe and Noah @BeCode.org | November 2020</p>
            </div>
        </div>
    </div>
    <!--Script Boostrap-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>