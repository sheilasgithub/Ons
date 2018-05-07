<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
<head>
  <title>Contact Us - Onsystem Logic </title>
  <?php include "includes/head.php"; ?>
</head>
  <body style="">
  <div class="page">
    <?php // The active value must correspond to the highlighted menu item (note there are two one for mobile and one for non-mobile
      $active = "contactus";
        include 'includes/header.php'; ?>
      <section style="background-image: url(images/bg-image-7.jpg);" class="section-30 section-sm-40 section-md-66 section-lg-bottom-90 bg-gray-dark page-title-wrap">
        <div class="shell">
          <div class="page-title">
            <h2>Contact Us</h2>
          </div>
        </div>
      </section>

      <section class="section-60 section-sm-top-90 section-sm-bottom-100">
        <div class="shell">
          <div class="range range-md-justify">
            <div class="cell-md-5 cell-lg-4">
              <div class="inset-md-right-15 inset-lg-right-0">
                <div class="range">
                  <div class="cell-sm-10 cell-md-12">
                    <h3>How to Reach us</h3>
                    <p class="offset-sm-top-40 text-secondary">
                      If you have any questions, please fill in the contact form to the right.
                      
                    </p>
                  </div>
                  <div class="cell-sm-6 cell-md-12 offset-top-30 offset-sm-top-45">
                    <h5>Headquarters</h5>
                    <address class="contact-info">
                      <p class="text-uppercase"></p>
                      <dl class="list-terms-inline">
                        <dt>Telephone</dt>
                        <dd><a href="callto:#" class="link-secondary">+1(443)543-5070</a></dd>
                      </dl>
                      <dl class="list-terms-inline">
                        <dt>E-mail</dt>
                        <dd><a href="mailto:info@onsystemlogic.com" class="link-primary">info@onsystemlogic.com</a></dd>
                      </dl>
                    </address>
                  </div>
                </div>
              </div>
            </div>
            <div class="cell-md-7 cell-lg-6 offset-top-50 offset-md-top-0">
              <h3>Contact Us</h3>
              <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="rd-mailform form-modern offset-top-30">
                <div class="range">
                  <div class="cell-sm-6">
                    <div class="form-group">
                      <input id="contact-name" type="text" name="name" data-constraints="@Required" class="form-control">
                      <label for="contact-name" class="form-label">Name</label>
                      <input id="form-type" type="hidden" name="form-type" value="contact"/>
                    </div>
                  </div>
                  <div class="cell-sm-6 offset-top-30 offset-sm-top-0">
                    <div class="form-group">
                      <input id="contact-us-email" type="email" name="email" data-constraints="@Email @Required" class="form-control">
                      <label for="contact-us-email" class="form-label">Email</label>
                    </div>
                  </div>
                  <div class="cell-xs-12 offset-top-30">
                    <div class="form-group">
                      <div class="textarea-lined-wrap">
                        <textarea id="contact-message" name="message" data-constraints="@Required" class="form-control"></textarea>
                        <label for="contact-message" class="form-label">Message</label>
                      </div>
                    </div>
                  </div>
                  <div class="cell-xs-8 offset-top-30 offset-xs-top-30 offset-sm-top-60">
                    <button type="submit" class="btn btn-primary btn-block">Send</button>
                  </div>
                  <div class="cell-xs-4 offset-top-22 offset-xs-top-30 offset-sm-top-60">
                    <button type="reset" class="btn btn-silver-outline btn-block">Reset</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <section data-zoom="14" data-x="-76.71461999999997" data-y="39.2479699" data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#FFBB00&quot;},{&quot;saturation&quot;:43.400000000000006},{&quot;lightness&quot;:37.599999999999994},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#FFC200&quot;},{&quot;saturation&quot;:-61.8},{&quot;lightness&quot;:45.599999999999994},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#FF0300&quot;},{&quot;saturation&quot;:-100},{&quot;lightness&quot;:51.19999999999999},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#FF0300&quot;},{&quot;saturation&quot;:-100},{&quot;lightness&quot;:52},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#0078FF&quot;},{&quot;saturation&quot;:-13.200000000000003},{&quot;lightness&quot;:2.4000000000000057},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#00FF6A&quot;},{&quot;saturation&quot;:-1.0989010989011234},{&quot;lightness&quot;:11.200000000000017},{&quot;gamma&quot;:1}]}]" class="rd-google-map rd-google-map__model"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3089.7765487697243!2d-76.71675478623703!3d39.2479438295181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c81dc623588c5b%3A0xc992a8898aee6114!2sMulti-Tenant%2C+5520+Research+Park+Dr%2C+Baltimore%2C+MD+21228!5e0!3m2!1sen!2sus!4v1517499553909" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>        
        <ul class="map_locations">
          <li data-y="40.643180" data-x="-73.9874068">
            <p>
              5520 Research Park Drive, Suite 100, Baltimore, MD 21226
            </p>
          </li>
        </ul>
      </section>

    <?php include 'includes/bottombar.php'; ?>
    <?php include 'includes/footer.php'; ?>
    </div>
    <?php include 'includes/snackbars.php'; ?>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
