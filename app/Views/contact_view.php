<?= $this->extend("layouts/base"); ?>
<?= $this->Section("content"); ?>

<main>
    <div id="header-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pt-5 pb-5">
                        <h2 class="pt-2 pb-2 text-white">Contact</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contact-details" class="pt-2 pb-2 pt-md-5 pb-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="pt-2 pb-2">Address</h2>
                    <address>
                        Shanthas Designs & Prints<br>
                        10th main 8th cross malleshpalya, <br>
                        # 485, 3rd Floor, HAL 3rd Stage, <br>
                        Jeevan Bima Nagar, Bengaluru, <br>
                        Karnataka 560075.<br>
                        M.No.: 95138 38585
                    </address>

                </div>
                <div class="col-md-6">
                    <div class="p-3">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Name</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?= $this->endSection(); ?>    

