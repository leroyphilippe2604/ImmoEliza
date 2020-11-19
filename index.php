<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Dealer</title>
    <!--Boostrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <!--Navbar-->
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#"><img>Logo</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <!--critere de recherche-->
                <form class="d-flex flex-column" method="post" action="">
                    <div>
                        <!--Code Postal-->
                        <label for="post_code">Post Code</label>
                        <input type="number" class="post_code" name="post_code">
                    </div>
                    <div class="d-flex align-items-baseline">
                        <input type="radio" name="type" value="apartment">
                        <label for="type">Apartment</label>
                        <input type="radio" name="type" value="house">
                        <label for="type">House</label>
                    </div>
                    <div>
                        <!--Area-->
                        <label for="area">Area in ares</label>
                        <input type="number" class="area" name="area">
                    </div>
                    <div>
                        <!--Living Area-->
                        <label for="living_area">Living area in ares</label>
                        <input type="number" class="living_area" name="living_area">
                    </div>
                    <div>
                        <!--Number rooms-->
                        <label for="rooms_number">Number of rooms</label>
                        <input type="number" min="0" max="12" class="rooms_number" name="rooms_number">
                    </div>
                    <div class="d-flex align-items-baseline">
                        <!--Jardin-->
                        <p>Garden</p>
                        <input type="radio" name="garden" value="yes">
                        <label for="garden">Yes</label>
                        <input type="radio" name="garden" value="no">
                        <label for="garden">No</label>
                    </div>

                    <div>
                        <!--Number bathrooms-->
                        <label for="bathrooms_number">Number of rooms</label>
                        <input type="number" min="1" max="10" class="bathrooms_number" name="bathrooms_number">
                    </div>
                    <div class="d-flex align-items-baseline">
                        <!--Parking-->
                        <p>Parking</p>
                        <input type="radio" name="parking" value="yes">
                        <label for="parking">Yes</label>
                        <input type="radio" name="parking" value="no">
                        <label for="parking">No</label>
                    </div>
                    <div class="d-flex align-items-baseline">
                        <!--Swimming pool-->
                        <p>Swimming pool</p>
                        <input type="radio" name="pool" value="yes">
                        <label for="pool">Yes</label>
                        <input type="radio" name="pool" value="no">
                        <label for="pool">No</label>
                    </div>
                    <div>
                        <!--Number floors-->
                        <label for="floors_number">Number of floors</label>
                        <input type="number" min="0" max="6" class="floors_number" name="floors">
                        <!--Type of Property-->
                    </div>
                    <div>
                        <input type="submit" value="Get an estimate">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Partenaire-->

    
    <!--Footer-->
<!--Script Boostrap-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>