       <header class="page-head">
        <div class="rd-navbar-wrap">
          <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="53px" data-lg-stick-up-offset="53px" data-md-stick-up="true" data-lg-stick-up="true" class="rd-navbar rd-navbar-corporate-dark">
            <div class="rd-navbar-inner">
              <div class="rd-navbar-aside">
                <div data-custom-toggle=".rd-navbar-aside" data-custom-toggle-disable-on-blur="true" class="rd-navbar-aside-toggle"><span></span></div>
                <div class="rd-navbar-aside-content context-dark">
                  <ul class="rd-navbar-aside-group list-units">
                    <li>
                      <div class="unit unit-horizontal unit-spacing-xs">
                        <div class="unit-left"><span class="icon icon-xxs-small icon-primary material-icons-place icon-shift-1 offset-top-2"></span></div>
                        <div class="unit-body"><a href="maps.php" class="link-white-v2 reveal-inline font-accent">5520 Research Park Drive, Suite 100, Baltimore, MD 21226</a></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-horizontal unit-spacing-xs">
                        <div class="unit-left"><span class="icon icon-xxs icon-primary fa-clock-o offset-top-2"></span></div>
                        <div class="unit-body">
                          <p class="text-white font-accent">Mon – Fri: 8:00am–5:00pm </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-horizontal unit-spacing-xs">
                        <div class="unit-left"><span class="icon icon-xxs icon-primary material-icons-phone icon-shift-2"></span></div>
                        <div class="unit-body"><a href="callto:#" class="link-white-v2 font-accent">+1 (443) 543–5070</a></div>
                      </div>
                    </li>
                  </ul>
                  <div class="rd-navbar-aside-group">
                    <ul class="list-inline list-inline-reset">
                     <li><a href="https://www.facebook.com/onsystemlogic" class="icon icon-round icon-san-juan-filled icon-xxs-smallest fa fa-facebook" target="_blank"></a></li>
                        <li><a href="https://twitter.com/onsystemlogic" class="icon icon-round icon-san-juan-filled icon-xxs-smallest fa fa-twitter" target="_blank"></a></li>
                    </ul>
                  </div>
                </div>
              
              </div>
              <div class="rd-navbar-group rd-navbar-search-wrap">
                <div class="rd-navbar-panel">
                  <button data-custom-toggle=".rd-navbar-nav-wrap" data-custom-toggle-disable-on-blur="true" class="rd-navbar-toggle"><span></span></button><a href="index.php" class="rd-navbar-brand brand"><img class="top-logo" src="images/osl-header-logo-regular.png" alt="OnsystemLogic" /></a>
                </div>
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-nav-inner">
                    <!--<div class="rd-navbar-search">
                      <form action="search-results.php" method="GET" data-search-live="rd-search-results-live" class="rd-search">
                        <div class="form-group">
                          <label for="rd-search-form-input" class="form-label">Search...</label>
                          <input id="rd-search-form-input" type="text" name="s" autocomplete="off" class="form-control">
                          <div id="rd-search-results-live" class="rd-search-results-live"></div>
                        </div>
                        <button type="submit" class="rd-search-submit"></button>
                      </form>
                      <button data-rd-navbar-toggle=".rd-navbar-search, .rd-navbar-search-wrap" class="rd-navbar-search-toggle"></button>
                    </div>-->
                    <ul class="rd-navbar-nav">
                      <li <?php if ($active == "home") {echo " class=\"active\"";}?>> <a href="index.php">Home</a></li>
                      <li <?php if ($active == "aboutus") {echo " class=\"active\"";}?>> <a href="about-us.php">About Us</a></li>
                      <li <?php if ($active == "services") {echo " class=\"active\"";}?>> <a href="services.php">Services</a></li>
                      <li <?php if ($active == "product") {echo " class=\"active\"";}?>> <a href="services.php">Product</a></li>
                      <li <?php if ($active == "support") {echo " class=\"active\"";}?>> <a href="services.php">Support</a></li>
                      <li <?php if ($active == "partners") {echo " class=\"active\"";}?>> <a href="services.php">Partners</a></li>

                      <li <?php if ($active == "blog") {echo " class=\"active\"";}?>><a href="services.php">Blog</a>
                      </li>
                       <li <?php if ($active == "contactus") {echo "class=\"active\"";}?>> <a href="contact-us.php">Contact Us</a></li>

                      <!--<li><a href="#">Pages</a>
                        <ul class="rd-navbar-megamenu">
                          <li>
                            <h5 class="rd-megamenu-header">Gallery</h5>
                            <ul class="rd-navbar-list">
                              <li><a href="gallery-grid.php">Grid gallery</a></li>
                              <li><a href="gallery-masonry.php">Masonry gallery</a></li>
                              <li><a href="gallery-cobbles.php">Cobbles gallery</a></li>
                              <li><a href="gallery-item.php">Gallery item</a></li>
                            </ul>
                          </li>
                          <li>
                            <h5 class="rd-megamenu-header">Pages</h5>
                            <ul class="rd-navbar-list">
                              <li><a href="appointment.php">Contact Us</a></li>
                              <li><a href="clients.php">Clients</a></li>
                              <li><a href="clients-testimonials.php">Clients testimonials</a></li>
                              <li><a href="our-team.php">Our team</a></li>
                              <li><a href="team-member-profile.php">Team member profile</a></li>
                              <li><a href="careers.php">Careers</a></li>
                              <li><a href="pricing.php">Pricing</a></li>
                              <li><a href="faq.php">FAQ</a></li>
                            </ul>
                          </li>
                          <li>
                            <h5 class="rd-megamenu-header">Extras</h5>
                            <ul class="rd-navbar-list">
                              <li><a href="extras.php">Extras</a></li>
                              <li><a href="404-page.php">404 Page</a></li>
                              <li><a href="503-page.php">503 Page</a></li>
                              <li><a href="maintenance.php">Maintenance</a></li>
                              <li><a href="coming-soon.php">Coming soon</a></li>
                              <li><a href="login.php">Login</a></li>
                              <li><a href="register.php">Register</a></li>
                              <li><a href="search-results.php">Search results</a></li>
                              <li><a href="privacy-policy.php">Terms of use</a></li>
                            </ul>
                          </li>
                          <li>
                            <h5 class="rd-megamenu-header">Components</h5>
                            <ul class="rd-navbar-list">
                              <li><a href="accordion.php">Accordion</a></li>
                              <li><a href="buttons.php">Buttons</a></li>
                              <li><a href="grid-system.php">Grid</a></li>
                              <li><a href="forms.php">Forms</a></li>
                              <li><a href="icons.php">Icons</a></li>
                              <li><a href="icon-lists.php">Icon lists</a></li>
                              <li><a href="progress-bars.php">Progress bars</a></li>
                              <li><a href="tabs.php">Tabs</a></li>
                              <li><a href="tables.php">Table styles</a></li>
                              <li><a href="typography.php">Typography</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>-->
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>

