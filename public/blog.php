<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
<head>
  <title>Blog - Onsystem Logic </title>
  <?php include "includes/head.php"; ?>
</head>
  <body style="">
  <div class="page">
     <?php 
      $active = "blog";
              include 'includes/header.php'; ?>
      <section style="background-image: url(images/bg-image-3.jpg);" class="section-30 section-sm-40 section-md-66 section-lg-bottom-90 bg-gray-dark page-title-wrap">
        <div class="shell">
          <div class="page-title">
            <h2>Blog</h2>
          </div>
        </div>
      </section>

      <section class="section-50 section-sm-75 section-lg-100">
        <div class="shell">
          <div class="range range-sm-center">
            <div class="cell-lg-10">
              <dl class="blog-timeline">
                <dt>2018</dt>
                <dd>
                  <article class="post-classic-minimal">
                    <div class="post-left">
                      <time datetime="2018-01-01">Jan 1</time>
                    </div>
                    <div class="post-main">
                      <div class="post-media post-gallery">
                        <figure><img src="images/blog-line-1-771x515.jpg" alt="" width="771" height="515"/>
                        </figure>
                      </div>
                      <div class="post-header">
                        <h4><a href="blog-post.php">The Importance of Security</a></h4>
                        <p>...</p>
                      </div>
                      <div class="post-footer">
                        <ul class="post-meta">
                          <li>
                            <dl>
                              <dt>in</dt>
                              <dd>
                                <ul class="list-tags-inline">
                                  <li><a href="#">Planning</a></li>
                                  <li><a href="#">Support</a></li>
                                </ul>
                              </dd>
                            </dl>
                          </li>
                          <li>
                            <dl>
                              <dt>by</dt>
                              <dd>Homayoon Tajalli</dd>
                            </dl>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </article>

                  <div class="offset-top-40 offset-sm-top-60 offset-lg-top-90 inset-lg-left-100 text-center">
                    <ul class="pagination-custom">
                      <li><a href="#">Prev</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li class="active"><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">Next</a></li>
                    </ul>
                  </div>
                </dd>
              </dl>
            </div>
          </div>
        </div>
      </section>

    <?php include 'includes/bottombar.php'; ?>
    <?php include 'includes/footer.php'; ?>
    </div>
    <?php include 'includes/snackbars.php'; ?>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
