 <!-- HERO SECTION-->
 <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">Contact us</h1>
              </div>
              
            </div>
          </div>
        </section>

        <!-- Contact page-->
        <section class="">
          <div class="container">
            <header class="mb-5 pb-4">
              <p class="lead">
                Are you curious about something? Do you have some kind of problem with our products? As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built party world. Of so am
                he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity.
              </p>
            </header>
            <?php if (isset($address)):?>
            <div class="row">
              <div class="col-md-4">
                <svg class="svg-icon mb-4 text-primary svg-icon-big svg-icon-light">
                  <use xlink:href="#map-marker-1"> </use>
                </svg>
                <h3>Address</h3>
                <p><?=$address['street']?>,<br><?=$address['zip']?>, <?=$address['city']?>, <strong><?=$address['country']?></strong></p>
              </div>
              <div class="col-md-4">
                <svg class="svg-icon mb-4 text-primary svg-icon-big svg-icon-light">
                  <use xlink:href="#helpline-24h-1"> </use>
                </svg>
                <h3>Call center</h3>
                <p>This number is toll free if calling from Ukraine otherwise we advise you to use the electronic form of communication.</p>
                <p><strong><?=$address['phone']?></strong></p>
              </div>
              <div class="col-md-4">
                <svg class="svg-icon mb-4 text-primary svg-icon-big svg-icon-light">
                  <use xlink:href="#envelope-1"> </use>
                </svg>
                <h3>Electronic support</h3>
                <p>Please feel free to write an email to us or to use our electronic ticketing system.</p>
                <ul class="list-style-none">
                  <li><strong class="fw-bold"><a href="mailto:"><?=$address['email']?></a></strong></li>
                  <li><strong class="fw-bold"><a href="#">
                        Ticketio - our ticketing support platform</a></strong></li>
                </ul>
              </div>
            </div>
            <?php endif?>
          </div>
        </section>

        <section class="">
          <div class="container">
            <header class="mb-5">
              <h2>Drop Message For Us</h2>
            </header>
            <div class="row">
              <div class="col-md-7">
                <form class="custom-form form" id="contact-form" method="POST" action="">
                  <div class="row gy-3">
                    <div class="col-sm-6">
                      <label class="form-label" for="name">Your firstname *</label>
                      <input class="form-control" type="text" name="name" id="name" placeholder="Enter your firstname" required="required">
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="surname">Your lastname *</label>
                      <input class="form-control" type="text" name="surname" id="surname" placeholder="Enter your  lastname" required="required">
                    </div>
                    <div class="col-sm-12">
                      <label class="form-label" for="email">Your email *</label>
                      <input class="form-control" type="email" name="email" id="email" placeholder="Enter your  email" required="required">
                    </div>
                    <div class="col-sm-12">
                      <label class="form-label" for="message">Your message for us *</label>
                      <textarea class="rounded form-control" rows="4" name="message" id="message" placeholder="Enter your message" required="required"></textarea>
                    </div>
                    <div class="col-sm-12">
                      <button class="btn btn-primary" type="submit">Send message</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-5">
                <p>Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions it pleasure of debating. Court front maids forty if aware their at. Chicken use are pressed removed. </p>
                <p>Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. </p>
                <ul class="list-inline">
                  <li class="list-inline-item mr-2"><a class="reset-anchor text-primary" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="list-inline-item mr-2"><a class="reset-anchor text-primary" href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                  <li class="list-inline-item mr-2"><a class="reset-anchor text-primary" href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                  <li class="list-inline-item mr-2"><a class="reset-anchor text-primary" href="#" target="_blank"><i class="fab fa-behance"></i></a></li>
                  <li class="list-inline-item mr-2"><a class="reset-anchor text-primary" href="#" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        <section class="">
            <?php if (isset($messages)):?>
            <div class="p-3 p-md-5">
                <p class="small text-muted mb-1">Based on <?php echo count($messages);?> customers</p>
                <h5 class="mb-4">How customers reviewed this store</h5>
                <div class="row">
                    <?php foreach ($messages as $row):?>
                        <div class="col-lg-6">
                            <div class="d-flex mb-4"><img class="rounded-circle p-1 shadow-sm flex-grow-1 align-self-baseline" src="/images/user.png" alt="..." width="60" height="60">
                            <div class="ms-3">
                                <h3 class="h6 mb-0"><?=$row['name']?>&nbsp;<?=$row['surname']?></h3>
                                <p class="text-gray small mb-0"><?=$row['created_at']?></p>
                                
                                <p class="text-small text-muted"><?=$row['message']?></p>
                            </div>
                            </div>
                        </div>
                    <?php endforeach?>
                </div>
            </div>
            <?php endif?>
        </section>