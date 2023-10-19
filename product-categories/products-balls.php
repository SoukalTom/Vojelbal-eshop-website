<!DOCTYPE html>

<html lang="cs">
    
    <head>
        <title> Míče | Volejbal centrum Lužiny </title>
        <link rel="icon" href="../images/logo/icon1.png" type="image/icon type">
        <meta name ="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script defer src="../javascript/shopping-button.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@300;600&display=swap" rel="stylesheet">
    </head>
    
    <body>
        <header>
            <div class="nav-container">
                <div class="container">
                    <div class="logo-container">
                        <a href="index.html">
                            <img src="../images/logo/logo3.png" style="width: auto; height: 55px;">
                        </a>
                    </div>
                    <div class="navbar">
                        <nav class="navbar-nav">
                            <ul>
                                <li><a href="../index.html">DOMŮ</a></li>
                                <li><a href="products.php">PRODUKTY</a></li>
                                <li><a href="../about-us.html">O NÁS</a></li>
                                <li><a href="../contacts.html">KONTAKTY</a></li>
                            </ul>
                        </nav>
                        <div class="search">  
                            <form> 
                                <input class="search-bar" type="search" placeholder="Vyhledávání...">
                                <img src="../images/icons/search2.png" style="width: 18px">
                            </form>    
                        </div>
                        <div class="shopping-basket-container">
                            <div class="shopping-basket-icon">
                                <a id="cart-button">
                                    <img class="bag-icon no-select" src="../images/icons/bag.png" style="height: auto; width: 20px;">
                                    <img class="bag-hover-icon no-select" src="../images/icons/bag-hover.png" style="height: auto; width: 20px;">
                                    <div class="number-of-items">0</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-links-low-width">
                    <nav class="navbar-nav">
                        <ul>
                            <li><a href="../index.html">DOMŮ</a></li>
                            <li><a href="products.php">PRODUKTY</a></li>
                            <li><a href="../about-us.html">O NÁS</a></li>
                            <li><a href="../contacts.html">KONTAKTY</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="shopping-basket-bg">
                <div id="shopping-basket">
                    <a id="cart-close">
                        <img src="../images/icons/close-square-line.png" style="height: 24px;">
                    </a>
                    <h3> KOŠÍK </h3>
                    <hr size="3px">
                    <p class="empty-shopping-cart"> Váš košík je prázdný </p>
                    <div class="sc-content-paste" id="sc-content-paste">
                        
                    </div>
                    <div class="buy-button">
                        <a href="shopping-basket.html">
                            <button >Koupit</button>
                        </a>
                    </div>
                </div>
                <div id="shopping-basket-background">

                </div>
            </div>
        </header>
        
        <main>
            <h1 class="products-heading"> Produkty - Míče </h1>
            <div class="products-main-container">
                <div class="products-left-menu">
                    <div class="left-menu-box1">
                        <a class="left-menu-main-item">
                            Podle prostředí
                        </a>
                        <a class="left-menu-small-item" href="products.php">
                            Vše
                        </a>
                        <a class="left-menu-small-item" href="products-antuka.php">
                            Antuka
                        </a>
                        <a class="left-menu-small-item" href="products-hala.php">
                            Hala
                        </a>
                        <a class="left-menu-small-item" href="products-beach.php">
                            Písek
                        </a>
                    </div>
                    <div class="left-menu-box2">
                        <a class="left-menu-main-item">
                            Tréninkové vybavení
                        </a>
                        <a class="left-menu-small-item" href="products-shoes.php">
                            Boty
                        </a>
                        <a class="left-menu-small-item" href="products-outfits.php">
                            Dresy
                        </a>
                        <a class="left-menu-small-item" href="products-tops.php">
                            Topy
                        </a>
                        <a class="left-menu-small-item" href="products-shorts.php">
                            Kraťasy
                        </a>
                        <a class="left-menu-small-item" href="products-knee-pads.php">
                            Chrániče
                        </a>
                        <a class="left-menu-small-item" href="products-bottle.php">
                            Láhve
                        </a>
                        <a class="left-menu-small-item" href="products-glasses.php">
                            Sluneční brýle
                        </a>
                        <a class="left-menu-small-item" href="products-bags.php">
                            Sportovní Tašky
                        </a>
                    </div>
                    <div class="left-menu-box3">
                        <a class="left-menu-main-item">
                            Vybavení
                        </a>
                        <a class="left-menu-small-item" href="products-balls.php">
                            Míče
                        </a>
                        <a class="left-menu-small-item" href="products-nets.php">
                            Sítě
                        </a>
                        <a class="left-menu-small-item" href="products-first-aid.php">
                            Zdravotnické vybavení
                        </a>
                        <a class="left-menu-small-item" href="products-ball-accessories.php">
                            Příšlušenství k míčům
                        </a>
                    </div>
                    
                </div>
                <div class="products-list-container">

                    <?php
                    include '../php/functions.php';
                    $pdo = pdo_connect_mysql();
                    include '../php/balls-select.php';
                    ?>

                </div>
            </div>    
        </main>
        
        <footer>
            <div class="footer-navigation-bar">
                <div class="footer-columns">
                    <ul class="folow-us">
                        <h3>SLEDUJTE NÁS</h3>
                        <li class="follow-us-facebook">
                            <a href="https://www.facebook.com/" target="blank">
                                <img src="../images/icons/facebook-footer.png" style="width: 30px;">
                            </a>
                            <a href="https://www.facebook.com/" target="blank">Facebook</a>
                        </li>
                        <li class="follow-us-instagram">
                            <a href="https://www.instagram.com/" target="blank">
                                <img src="../images/icons/instagram-footer.png" style="width: 30px">
                            </a>
                            <a href="https://www.instagram.com/" target="blank">Instagram</a>
                        </li>
                        <li class="follow-us-twitter">
                            <a href="https://twitter.com/?lang=cs" target="blank">
                                <img src="../images/icons/twitter-footer.png" style="width: 30px">
                            </a>
                            <a href="https://twitter.com/?lang=cs" target="blank">Twitter</a>
                        </li>
                    </ul>

                    <div class="contact-us">
                        <h3>KONTAKTUJTE NÁS</h3>
                        <ul class="contact-us-links">
                            <li><a href="../contacts.html">Kontakty</a></li>
                            <li><a href="../faq.html">FAQ</a></li>
                            <li><a href="../contacts.html#contact-us-form">Napiště nám</a></li>
                            <li><a href="">sth</a></li>
                        </ul>
                    </div>

                    <div class="about-us">
                        <h3>O NÁS</h3>
                        <ul class="about-us-links">
                            <li><a href="../about-us.html">Info o nás</a></li>
                            <li><a href="../terms-and-conditions.html">Obchodní podmínky</a></li>
                            <li><a href="../contacts.html">Prodejna</a></li>
                        </ul>
                    </div>
                </div>
                <div class="credits">
                    © 2021 Volejbal Centrum Lužiny - Webdesign by Tomáš Soukal
                </div>
            </div>
        </footer>
    </body>
</html>