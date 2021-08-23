<?= $this->extend("layouts/base"); ?>

<?= $this->Section("content"); ?>
<main>
    <div id="header-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pt-5 pb-5">
                        <h2 class="pt-2 pb-2 text-white">About</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="about-content" class="pt-2 pb-2 pt-md-5 pb-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>
                        About
                    </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis vel repellendus commodi iusto, natus doloremque sit nobis perferendis tempora ipsum necessitatibus similique et sint molestiae? Facilis minima tempore nobis nemo!</p>
                </div>
                <div class="col-md-6">
                    <div class="text-center">
                        <img src="<?= base_url();?>/public/assets/images/banner-bg.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>      
    </div>
    <div id="director-message" class="pt-2 pb-2 pt-md-5 pb-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?= base_url();?>/public/assets/images/director.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2>Director</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est tempora atque in labore a cum dolorum, fugit facere ipsum commodi architecto veniam, asperiores corporis ducimus omnis nesciunt quasi nobis quod?</p>
                    
                </div>
            </div>
        </div>
    </div>
    <div id="mission-vision" class="pt-2 pb-2 pt-md-5 pb-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-center">
                        <h2 class="pt-2 pb-2">Mission</h2>
                        <i class="fas fa-bullseye"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam itaque ipsam atque quod eum eaque ipsum nam aspernatur error, consequuntur provident dolorum veritatis hic explicabo repellat debitis quisquam excepturi deserunt.</p>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="text-center">
                        <h2 class="pt-2 pb-2">Vision</h2>
                        <i class="fas fa-eye"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam itaque ipsam atque quod eum eaque ipsum nam aspernatur error, consequuntur provident dolorum veritatis hic explicabo repellat debitis quisquam excepturi deserunt.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="social-connect" class="pt-2 pb-2 pt-md-5 pb-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center pt-2 pb-2">Social Connect</h2>
                    <div class="text-center">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-telegram"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-whatsapp-square"></i>
                    <i class="fab fa-spotify"></i>
                    <i class="fab fa-quora"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>

