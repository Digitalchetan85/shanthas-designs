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
                        <?= form_open(); ?>
                        <?php if(session()->getTempdata('error')):?>
                        <div class="alert alert-danger">
                            <?= session()->getTempdata('error'); ?>
                        </div>
                        <?php endif;?>
                        <?php if(session()->getTempdata('success')):?>
                        <div class="alert alert-success">
                            <?= session()->getTempdata('success'); ?>
                        </div>
                        <?php endif;?>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="name@example.com">
                            <label for="name">Name</label>
                            <?php if(isset($validation)):?>
                                <?php if($validation->hasError('name')):?>
                                    <span class="text-danger"><?= $validation->getError('name');?></span>
                                <?php endif;?>
                            <?php endif;?>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                            <?php if(isset($validation)):?>
                                <?php if($validation->hasError('email')):?>
                                    <span class="text-danger"><?= $validation->getError('email');?></span>
                                <?php endif;?>
                            <?php endif;?>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Password">
                            <label for="floatingPassword">Phone No.</label>
                            <?php if(isset($validation)):?>
                                <?php if($validation->hasError('mobile')):?>
                                    <span class="text-danger"><?= $validation->getError('mobile');?></span>
                                <?php endif;?>
                            <?php endif;?>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" aria-label="Default select example" id="gifts" name="gifts">
                                <option selected>Select Category</option>
                                <option value="Corporate Gifts">Corporate Gifts</option>
                                <option value="Personalised Gifts">Personalised Gifts</option>
                                <option value="Customised Gifts">Customised Gifts</option>
                            </select>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="comment" name="comment" style="height: 100px"></textarea>
                            <label for="comment">Comments</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?= $this->endSection(); ?>    

