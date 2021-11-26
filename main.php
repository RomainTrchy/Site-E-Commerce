<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>PhoneSwap - Page principal</title>
        <link rel="stylesheet" href="style.css">
        <!--Font du site-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <!--Logo Flavicon dans l'onglet-->
        <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
        <link rel="manifest" href="images/site.webmanifest">
    </head>
    <body>
        <!--Header du site-->
        <div class="header">
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <a href="main.php"><img src="images/logo.png" width="130px"></a>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="main.php">Menu</a></li>
                            <li><a href="produits.php">Produits</a></li>
                            <li><a href="apropos.php">A propos</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                    <a href="shoppingcart.php"><img src="images/shopping.png" width="30px" height="30px"></a>
                </div>
                <div class="row">
                    <div class="col-2">
                        <h1>Swappez votre<br> téléphone!</h1>
                        <p>Transformer votre ancien téléphone en un nouveau tout en faisant des économies !</p>
                        <a href="" class="bouton"><strong>Explorer notre site &#x2192;</strong></a>
                    </div>
                    <div class="col-2">
                        <img src="images/fond-iphone.png">
                    </div>
                </div>
            </div>
        </div>

        <!-- Catégories mentionnées -->
        <div class="categories">
            <div class="small-container">
                <h2 class="titre">Marques préféreés de nos client !</h2>
                <div class="row">
                    <div class="col-3">
                        <img src="images/iphone-category.jpg">
                    </div>
                    <div class="col-3">
                        <img src="images/samsung-category.jpg">
                    </div>
                    <div class="col-3">
                        <img src="images/huawei-category.jpg">
                    </div>
                </div>
            </div>
        </div>

        <!-- Produits les plus aimés par nos clients -->
        <div class="small-container">
            <h2 class="titre">Les plus aimés de nos clients !</h2>
            <div class="row">
                <div class="col-4">
                    <a href="product-details.php"><img src="images/iphone-13.png"></a>
                    <h4>Iphone 13</h4>
                    <div class="notation">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>989,00€</p>
                </div>
                <div class="col-4">
                    <a href="product-details.php"><img src="images/iphone-12.png"></a>
                    <h4>Iphone 12</h4>
                    <div class="notation">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>789,00€</p>
                </div>
                <div class="col-4">
                    <a href="product-details.php"><img src="images/iphone-11.png"></a>
                    <h4>Iphone 11</h4>
                    <div class="notation">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>589,00€</p>
                </div>
                <div class="col-4">
                    <a href="product-details.php"><img src="images/iphone-X.png"></a>
                    <h4>Iphone X</h4>
                    <div class="notation">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>289,00€</p>
                </div>
            </div>

            <!-- notre sélection de produits -->

            <h2 class="titre">Notre sélection du moment !</h2>
            <div class="row">
                <div class="col-4">
                    <a href="product-details.php"><img src="images/iphone-13.png"></a>
                    <h4>Iphone 13</h4>
                    <div class="notation">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>989,00€</p>
                </div>
                <div class="col-4">
                    <a href="product-details.php"><img src="images/iphone-12.png"></a>
                    <h4>Iphone 12</h4>
                    <div class="notation">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>789,00€</p>
                </div>
                <div class="col-4">
                    <a href="product-details.php"><img src="images/iphone-11.png"></a>
                    <h4>Iphone 11</h4>
                    <div class="notation">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>589,00€</p>
                </div>
                <div class="col-4">
                    <a href="product-details.php"><img src="images/iphone-X.png"></a>
                    <h4>Iphone X</h4>
                    <div class="notation">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>289,00€</p>
                </div>
                <div class="col-4">
                    <a href="product-details.php"><img src="images/iphone-SE.png"></a>
                    <h4>Iphone SE</h4>
                    <div class="notation">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <p>278,00€</p>
                </div>
                <div class="col-4">
                    <a href="product-details.php"><img src="images/iphone-8.png"></a>
                    <h4>Iphone 8</h4>
                    <div class="notation">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>199,00€</p>
                </div>
                <div class="col-4">
                    <a href="product-details.php"><img src="images/iphone-7.png"></a>
                    <h4>Iphone 7</h4>
                    <div class="notation">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>139,00€</p>
                </div>
                <div class="col-4">
                    <a href="product-details.php"><img src="images/iphone-6s.png"></a>
                    <h4>Iphone 6S</h4>
                    <div class="notation">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>101,00€</p>
                </div>
            </div>
        </div>
        <!-- Avis fictifs de nos clients -->
        <h2 class="titre">Avis de nos clients</h2>
        <div class="avis">
            <div class="small-container">
                <div class="row">
                    <div class="col-3-2">
                        <img src="images/avis-1.png">
                            <h3>Lucas S.</h3>
                            <div class="notation">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <br>
                        <i class="fa-solid fa-quote-left"></i>
                        <p>"J'ai adoré acheter mon nouvel appareil sur ce site !
                            Mon Iphone 13 reconditionné fonctionne à merveille !
                            Je recommande à n'importe qui qui voudrait un nouveau smartphone."</p>
                    </div>
                    <div class="col-3-2">
                        <img src="images/avis-2.jpg">
                        <h3>Aurore D.</h3>
                        <div class="notation">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <br>
                        <i class="fa-solid fa-quote-left"></i>
                        <p>"PhoneSwap est le meilleur site internet d'e-commerce !
                            J'avais un Nokia 3310 que j'ai fait récupérer pour l'échanger
                            contre un Samsung Galaxy Z Flip 3."</p>
                    </div>
                    <div class="col-3-2">
                        <img src="images/avis-3.jpg">
                        <h3>Jean L.</h3>
                        <div class="notation">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <br>
                        <i class="fa-solid fa-quote-left"></i>
                        <p>"J'attribue la note de 5 étoiles tellement j'admire le smarthpone que j'ai entre les mains !"</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="googlemaps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d20245.590319625426!2d3.0582779424804696!3d50.63271210713552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1635149453488!5m2!1sfr!2sfr" 
            width="1000" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

<!-- footer -->
<?php include 'includes/footer.php'; ?>