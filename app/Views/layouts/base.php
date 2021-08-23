<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Two+Tone|Material+Icons+Sharp" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Shanthas Designs</title>
    <!-- build:css css/main.min.css -->
    <link rel="stylesheet" href="<?= base_url()?>/public/assets/scss/main.css">
    <!-- endbuild -->
</head>
<body>
    
    <div id="top-menu" class="p-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4 align-self-center">
                    <div class="text-center text-md-start">
                        <i class="fas fa-envelope text-white"></i> <a href="mailto:shanthasdesigns@gmail.com" class="email">shanthasdesigns@gmail.com</a>
                    </div>
                </div>
                <div class="col-md-4 align-self-center">
                    <div class="text-center">
                        <a href="" class="social-link"><i class="fab fa-facebook-f fs-4 ps-1"></i></a>
                        <a href="" class="social-link"><i class="fab fa-instagram fs-4 ps-1"></i></a>
                        <a href="" class="social-link"><i class="fab fa-linkedin-in fs-4 ps-1"></i></a>
                    </div>
                </div>
                <div class="col-md-4 align-self-center">
                    <div class="tex-center text-end">
                        <i class="fas fa-phone-volume text-white"></i> <a href="tel:09513636036" class="call">+91 95136 36036</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav id="menu-bar" class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="<?= base_url()?>/public/assets/images/logo.png" alt="" class="img-fluid"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/about">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Corporate Gifts
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Water Bottles</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Calenders</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Coffee Table Book</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Headphones</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Mugs</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown" id="myDropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">  Personalised Gifts  </a>
                <ul class="dropdown-menu">
                    <li> <a class="dropdown-item" href="#"> By Occasion &raquo; </a>
                        <ul class="submenu dropdown-menu">
                            <li><a class="dropdown-item" href="#">Birth Day</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Aniversery</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Engement</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <!-- <li><a class="dropdown-item" href="#">Submenu item 3 &raquo; </a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                                    <li><a class="dropdown-item" href="#">Multi level 2</a></li>
                                </ul>
                            </li> -->
                            <li><a class="dropdown-item" href="#">Love & Romance</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">New Arrivals</a></li>
                        </ul>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li> <a class="dropdown-item" href="#"> Home Lovers &raquo; </a>
                        <ul class="submenu dropdown-menu">
                            <li><a class="dropdown-item" href="#">Mugs</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Cushions</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Photo Frames</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Clocks</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Lamps</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Caricagers</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Key Chains</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Name Plates</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">LED Cushions</a></li>
                        </ul>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li> <a class="dropdown-item" href="#"> For Chefs &raquo; </a>
                        <ul class="submenu dropdown-menu">
                            <li><a class="dropdown-item" href="#">Water Bottles</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Glassware</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Chopping Board</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Bar Accessories</a></li>
                        </ul>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li> <a class="dropdown-item" href="#"> Unique Collection &raquo; </a>
                        <ul class="submenu dropdown-menu">
                            <li><a class="dropdown-item" href="#">Priemium Gifts</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Stationary</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Chocolates</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">T-Shirts</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Photo Cakes</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li class="nav-item dropdown" id="myDropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">  Customised Gifts  </a>
                <ul class="dropdown-menu">
                    <li> <a class="dropdown-item" href="#"> T-Shirts &raquo; </a>
                        <ul class="submenu dropdown-menu">
                            <li><a class="dropdown-item" href="#">Must</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Sportz Daily</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Sportz Mesh</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Eco</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Forever</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Prima</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Jointy Clothes</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Reva</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Sportz Polo</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Fussion</a></li>
                        </ul>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li> <a class="dropdown-item" href="#"> Bags & Wallets &raquo; </a>
                        <ul class="submenu dropdown-menu">
                            <li><a class="dropdown-item" href="#">Laptop Bags</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">School / College Bags</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Travelling Bags</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Tution Bags</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Wallet & Combos</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Visiting Card Holder</a></li>
                        </ul>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li> <a class="dropdown-item" href="#"> Electronic Gadgets &raquo; </a>
                        <ul class="submenu dropdown-menu">
                            <li><a class="dropdown-item" href="#">Audio 3 &raquo; </a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Bluetooth Speakers</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Bluetooth Headphones</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Ear Pods</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Smart Audio</a></li>
                                </ul>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Audio &raquo; </a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Bluetooth Speakers</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Bluetooth Headphones</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Ear Pods</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Smart Audio</a></li>
                                </ul>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Power Bank</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Pen drive</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Table Lamps</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Smart Watch & Fitness Bank</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Accessories</a></li>
                        </ul>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li> <a class="dropdown-item" href="#"> Desktop Products &raquo; </a>
                        <ul class="submenu dropdown-menu">
                            <li><a class="dropdown-item" href="#">Dairy & Notebooks</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Promotional Pens</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Premium Pens</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Pen Stand | Mobile Stand</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Eco Friendly Products</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Table Clocks</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Photo Frames</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Laptop Stands</a></li>
                        </ul>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li> <a class="dropdown-item" href="#"> Home Utilities & more &raquo; </a>
                        <ul class="submenu dropdown-menu">
                            <li><a class="dropdown-item" href="#">Bottles | Mugs | Lunch Box &raquo; </a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Vaccum Bottle</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Vaccum Flask</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Metal Water Bottle</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Plastic Water Bottle</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Glass Water Bottle</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Lunch Box</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Mugs</a></li>
                                </ul>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Kitchen Appliances</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Gift Set</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Key Chains</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Air Purifier</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Wall Clocks</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Accessories</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/contact">Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Other Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Web Designing</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Digital Marketing</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Spoken English</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Job Skills Training</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Yoga, Pranayam & Meditation Classes</a></li>
                </ul>
              </li>
            </ul>
            <!-- <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
          </div>
        </div>
    </nav>

    <?= $this->renderSection("content");?>

    <footer id="footer" class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="<?= base_url()?>/public/assets/images/footer-logo.jpg" alt="" class="img-fluid mb-2">
                        <address class="text-white">
                            <b>Shanthas Designs & Prints</b><br>
                            #485, 10th Main, 8th Cross Road, <br>
                            HAL 3rd Stage, Jeevan Bhima Nagar, <br>
                            Bangalore - 560 075 
                        </address>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 class="text-white">Quick Links</h3>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">About Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="text-white">Giftings</h3>
                    <ul>
                        <li><a href="">Corporate Giftings</a></li>
                        <li><a href="">Personalized Giftings</a></li>
                        <li><a href="">Customized Giftings</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="text-white">Social Connect with</h3>
                    <div class="text-center">
                        <a href="" class="social-link"><i class="fab fa-facebook-f fs-2 ps-1"></i></a>
                        <a href="" class="social-link"><i class="fab fa-instagram fs-2 ps-1"></i></a>
                        <a href="" class="social-link"><i class="fab fa-linkedin-in fs-2 ps-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!-- build:js js/main.min.js  -->
    <script src="<?= base_url()?>/public/assets/js/main.js"></script>
    <!-- endbuild -->
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='http://HOST:4000/browser-sync/browser-sync-client.js?v=2.26.13'><\/script>".replace("HOST", location.hostname));
    //]]></script> -->
</body>
</html>