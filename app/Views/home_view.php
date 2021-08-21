<?= $this->extend("layouts/base");?>

<?= $this->Section('content');?>
    
<<main>
    <div id="main-slider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#main-slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#main-slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#main-slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?= base_url()?>/public/assets/images/c-gifts.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="text-danger">First slide label</h5>
              <p class="text-danger">Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?= base_url()?>/public/assets/images/c-gifts-1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="text-danger">Second slide label</h5>
              <p class="text-danger">Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?= base_url()?>/public/assets/images/c-gifts-2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="text-danger">Third slide label</h5>
              <p class="text-danger">Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#main-slider" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#main-slider" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Corporate Gifts -->
    <section id="corporate-gifts" class="pt-5 pb-5">
        <h2 class="text-center text-danger pt-2 pb-2">Corporate Gifts</h2>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                  <div class="card">
                    <img src="<?= base_url()?>/public/assets/images/corporate-giftings/c-gifts-1.png" alt="" class="img-fluid">
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="pt-2 pl-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam perferendis pariatur sint quia aspernatur minus libero modi, quam ad praesentium vel expedita atque architecto, tempora quasi aliquid adipisci autem doloribus.</p>
                        <a href="" class="btn btn-outline-danger float-start">Read More</a>
                        <a href="" class="btn btn-danger float-end">Buy Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                    <div class="card bg-danger">
                      <img src="<?= base_url()?>/public/assets/images/corporate-giftings/c-gifts-2.png" alt="" class="img-fluid">
                      <div class="card-body">
                        <h5 class="card-title text-white">Special title treatment</h5>
                        <p class="pt-2 pl-2 text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam perferendis pariatur sint quia aspernatur minus libero modi, quam ad praesentium vel expedita atque architecto, tempora quasi aliquid adipisci autem doloribus.</p>
                          <a href="" class="btn btn-outline-light float-start">Read More</a>
                          <a href="" class="btn btn-light float-end">Buy Now</a>
                      </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                      <img src="<?= base_url()?>/public/assets/images/corporate-giftings/c-gifts-3.png" alt="" class="img-fluid">
                      <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="pt-2 pl-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam perferendis pariatur sint quia aspernatur minus libero modi, quam ad praesentium vel expedita atque architecto, tempora quasi aliquid adipisci autem doloribus.</p>
                          <a href="" class="btn btn-outline-danger float-start">Read More</a>
                          <a href="" class="btn btn-danger float-end">Buy Now</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Corporate Gifts Ends-->

    <!-- Personalized Gifts -->
    <section id="personalized-gifts" class="pt-5 pb-5">
        <h2 class="text-center text-danger pt-2 pb-2">Personalized Gifts</h2>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                  <div class="card bg-danger">
                    <img src="<?= base_url()?>/public/assets/images/corporate-giftings/c-gifts-1.png" alt="" class="img-fluid">
                    <div class="card-body">
                      <h5 class="card-title text-white">Special title treatment</h5>
                      <p class="pt-2 pl-2 text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam perferendis pariatur sint quia aspernatur minus libero modi, quam ad praesentium vel expedita atque architecto, tempora quasi aliquid adipisci autem doloribus.</p>
                        <a href="" class="btn btn-outline-light float-start">Read More</a>
                        <a href="" class="btn btn-light float-end">Buy Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                      <img src="<?= base_url()?>/public/assets/images/corporate-giftings/c-gifts-2.png" alt="" class="img-fluid">
                      <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="pt-2 pl-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam perferendis pariatur sint quia aspernatur minus libero modi, quam ad praesentium vel expedita atque architecto, tempora quasi aliquid adipisci autem doloribus.</p>
                          <a href="" class="btn btn-outline-danger float-start">Read More</a>
                          <a href="" class="btn btn-danger float-end">Buy Now</a>
                      </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card bg-danger">
                      <img src="<?= base_url()?>/public/assets/images/corporate-giftings/c-gifts-3.png" alt="" class="img-fluid">
                      <div class="card-body">
                        <h5 class="card-title text-white">Special title treatment</h5>
                        <p class="pt-2 pl-2 text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam perferendis pariatur sint quia aspernatur minus libero modi, quam ad praesentium vel expedita atque architecto, tempora quasi aliquid adipisci autem doloribus.</p>
                          <a href="" class="btn btn-outline-light float-start">Read More</a>
                          <a href="" class="btn btn-light float-end">Buy Now</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Personolized Gifts Ends-->

    <!-- Customized Gifts -->
    <section id="customized-gifts" class="pt-5 pb-5">
        <h2 class="text-center text-danger pt-2 pb-2">Customized Gifts</h2>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                  <div class="card">
                    <img src="<?= base_url()?>/public/assets/images/corporate-giftings/c-gifts-1.png" alt="" class="img-fluid">
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="pt-2 pl-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam perferendis pariatur sint quia aspernatur minus libero modi, quam ad praesentium vel expedita atque architecto, tempora quasi aliquid adipisci autem doloribus.</p>
                        <a href="" class="btn btn-outline-danger float-start">Read More</a>
                        <a href="" class="btn btn-danger float-end">Buy Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                    <div class="card bg-danger">
                      <img src="<?= base_url()?>/public/assets/images/corporate-giftings/c-gifts-2.png" alt="" class="img-fluid">
                      <div class="card-body">
                        <h5 class="card-title text-white">Special title treatment</h5>
                        <p class="pt-2 pl-2 text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam perferendis pariatur sint quia aspernatur minus libero modi, quam ad praesentium vel expedita atque architecto, tempora quasi aliquid adipisci autem doloribus.</p>
                          <a href="" class="btn btn-outline-light float-start">Read More</a>
                          <a href="" class="btn btn-light float-end">Buy Now</a>
                      </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                      <img src="<?= base_url()?>/public/assets/images/corporate-giftings/c-gifts-3.png" alt="" class="img-fluid">
                      <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="pt-2 pl-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam perferendis pariatur sint quia aspernatur minus libero modi, quam ad praesentium vel expedita atque architecto, tempora quasi aliquid adipisci autem doloribus.</p>
                          <a href="" class="btn btn-outline-danger float-start">Read More</a>
                          <a href="" class="btn btn-danger float-end">Buy Now</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- customized Gifts Ends-->

    <section id="enquiry" class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="text-center">
                        <img src="<?= base_url()?>/public/assets/images/enquiry.png" alt="" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-white p-3 rounded">
                        <h2 class="text-center text-danger">Send Us on Enquiry</h2>
                        <form>
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="username">
                                <label for="username">User Name</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="email" class="form-control" id="useremail">
                                <label for="useremail">Email address</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="tel" class="form-control" id="phoneno">
                                <label for="phoneno">Phone</label>
                            </div>
                            <div class="form-floating mb-2">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                  <option selected>---</option>
                                  <option value="1">Personalized Gifts</option>
                                  <option value="2">Customized Gifts</option>
                                  <option value="3">Corporate Gifts</option>
                                </select>
                                <label for="floatingSelect">Select Gifts Category</label>
                              </div>
                            <!-- <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="city">
                                <label for="city">City</label>
                            </div> -->
                            <div class="form-floating mb-2">
                                <textarea class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Your Requirement</label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?= $this->endSection();?>