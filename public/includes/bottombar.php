<?php
    // Get the current file for returning upon errors.
    $currentURL = $_SERVER["PHP_SELF"];
    $fragments = explode("/", $currentURL);
    $currentFile = $fragments[count($fragments) - 1];
 ?>

      <section class="section-40 section-sm-60 bg-cello">
        <div class="shell">
          <div class="range range-xs-center">
            <div class="cell-xs-10 cell-sm-11 cell-md-12">
              <div class="range">
                <div class="cell-sm-6 cell-md-4">
                  <div class="inset-md-right-30">
                    <h6 class="text-uppercase text-big">About us</h6>
                    <p class="offset-top-27 text-bismark">
                       We are committed to making a difference in our nation's enterprise security.
                    </p>
                  </div>
                  <div class="offset-top-22">
                    <div class="group-md group-top">
                      <div>
                        <div class="unit unit-middle unit-horizontal unit-spacing-xs">
                          <div class="unit-left"><span class="icon icon-xs-smaller icon-primary fa-phone"></span></div>
                          <div class="unit-body"><a href="callto:#" class="link link-bold link-white-v2">+1 (443) 543-5070</a></div>
                        </div>
                        <div class="inset-left-30"><a href="mailto:#" class="link-white-v2 text-italic">info@onsystemlogic.com</a></div>
                      </div>
                      <div>
                        <ul class="list-inline list-inline-reset">
                          <li><a href="https://www.facebook.com/meetcambium" class="icon icon-round icon-san-juan-filled icon-xxs-smallest fa fa-facebook" target="_blank"></a></li>
                          <li><a  href="https://twitter.com/meetcambium" class="icon icon-round icon-san-juan-filled icon-xxs-smallest fa fa-twitter" target="_blank"></a></li>
                          <!-- <li><a href="#" class="icon icon-round icon-san-juan-filled icon-xxs-smallest fa fa-google-plus"></a></li> -->
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cell-sm-6 cell-md-4 offset-top-50 offset-sm-top-0">
                  <h6 class="text-uppercase text-big">Quick links</h6>
                  <div style="max-width: 340px;" class="row offset-top-22 offset-md-top-30">
                    <div class="col-xs-6">
                      <ul class="list-marked-variant-2">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="services.php">Services</a></li>
<!--                        <li><a href="careers.php">Careers</a></li> -->
<!--                        <li><a href="blog-grid.php">Blog</a></li>-->
                      </ul>
                    </div>
                    <div class="col-xs-6">
                      <ul class="list-marked-variant-2">
                        <li><a href="about-us.php">About us</a></li>
                        <li><a href="contact-us.php">Contacts</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="cell-sm-6 cell-md-4 offset-top-50 offset-md-top-0">
                  <h6 class="text-uppercase text-big">Help Us Help You!</h6>
                  <div class="offset-top-22 offset-md-top-30">
                    <p class="text-bismark">Email us to find out how we can help!</p>
                    <!--form data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php" class="rd-mailform form-classic form-inline offset-top-15" -->
                    <form class="rd-mailform form-classic form-inline offset-top-15" action="subscribeExec.php" method="POST">

                    <div class="form-group">
                        <input id="contact-email" type="email" name="email" data-constraints="@Email @Required" class="form-control">
                        <label for="contact-email" class="form-label">Your Email</label>
                    <input type="hidden" name="origin" value="<?php echo $currentFile; ?>" />
                    </div>
                    <button type="submit" aria-label="Subscribe" class="btn btn-icon-only btn-primary"><span class="icon icon-xs icon-white fa-envelope-o"></span></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
