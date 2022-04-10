<!DOCTYPE html>
<html lang="en">

<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>mmwadvocates | Home</title>

  <?php
  include "includes/scripts/headerScripts.php";
  ?>
</head>

<body class="body-wrapper">
  <div class="se-pre-con"></div>
  <div class="main-wrapper">
    <?php
    include "includes/siteBody/header.php";
    ?>


    <!-- MAIN SLIDER -->
    <section class="main-slider" data-loop="true" data-autoplay="true" data-interval="7000">
      <div class="inner">
        <div class="slide" style="background-image: url(img/home/slider1.jpg);">
          <div class="container text-center">
            <div class="slide-inner1">
              <span class="h3 from-bottom">"Our overriding goal</span><br>
              <span class="h1 from-bottom">is to work</span><br>
              <span class="h4 from-bottom">alongside our clients as a trusted adviser"</span><br>
              <a href="#requestCosultation" data-toggle="modal" class="btn btn-primary first-btn waves-effect waves-light scale-up">Free Consultation</a>
              <a href="contacts.html" class="btn btn-border waves-effect waves-light scale-up">Contact Us</a>
            </div>
          </div>
        </div><!-- .slide -->

        <div class="slide" style="background-image: url(img/home/slider2.jpg);">
          <div class="container">
            <div class="slide-inner2 common-inner">
              <span class="h3 from-left">Its Our </span><br>
              <span class="h2 from-right delay-1">Aim to be the</span><br>
              <span class="h2 from-bottom delay-1">
                best law firm in big 5 country
              </span><br>
              <a href="#requestCosultation" data-toggle="modal" class="btn btn-primary waves-effect waves-light scale-up delay-3">Free Consultation</a>
            </div>
          </div>
        </div><!-- .slide -->

        <div class="slide" style="background-image: url(img/home/slider3.jpg);">
          <div class="container">
            <div class="common-inner slide-inner3">
              <span class="h3 scale-up"> "As our Clients</span><br>
              <span class="h2 scale-up delay-1">have moved to</span><br>
              <span class="h3 scale-up delay-1">
                maximise commercial opportunities in new markets, so we have"
              </span><br>
              <a href="#requestCosultation" data-toggle="modal" class="btn btn-border waves-effect waves-light scale-up delay-3">Free Consultation</a>
            </div>
          </div>
        </div><!-- .slide -->
      </div><!-- .inner -->
    </section><!-- .hero-slider -->


    <!-- BANNER BOTTOM -->
    <section class="banner-bottom">
      <div class="container">
        <div class="banner-bottom-inner">
          <div class="row">
            <div class="col-sm-3">
              <div class="media colContent">
                <span class="media-left">
                  <!-- <i class="icon-avatar-male"></i> -->
                  <i class="fa fa-users    "></i>
                </span>
                <div class="media-body">
                  <h3 class="media-heading">Our Team</h3>
                  <p>The Firm handles a diversity of legal work, i.e litigation, commercial, Contracts etc.</p>
                  <a href="team.html">read more...</a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="media colContent">
                <span class="media-left">
                  <i class="icon-lawyer-hammer"></i>
                </span>
                <div class="media-body">
                  <h3 class="media-heading">Our Branches</h3>
                  <p>We have branches in different parts of the country. Nairobi, Lamu & Malindi.</p>
                  <a href="contacts.html">read more...</a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="media colContent">
                <span class="media-left">
                  <i class="icon-star-badge"></i>
                </span>
                <div class="media-body">
                  <h3 class="media-heading color-1">Our Gallery</h3>
                  <p>Look into our gallery to find more interesting pictures of our firm</p>
                  <a href="#">read more...</a>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="media colContent">
                <span class="media-left">
                  <i class="icon-avatar-male"></i>
                </span>
                <div class="media-body">
                  <h3 class="media-heading color-1">Our Clients</h3>
                  <p>Review a list of our Esteemed clients. A portfolio of satisfied customers.</p>
                  <a href="clients.html">read more...</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- ABOUT SECTION -->
    <!-- <section class="commonSection clearfix whiteSection padding-top about-section">
      <div class="container">

        <div class="sectionTitle text-center">
          <h2>about Trust law</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="lawInfo">
              <span>wellcome</span>
              <h2>trust law</h2>
              <p class="highlight">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin.</p>
              <p>More obscure Latin words, consectetur, from a Lorem Ipsum passage, </p>
              <ul class="list-unstyled">
                <li><i class="fa fa-check" aria-hidden="true"></i> Vestibulum iaculis quam ac libero</li>
                <li><i class="fa fa-check" aria-hidden="true"></i>Risus fringilla, aliquet lacus vel suscipit lorem.</li>
                <li><i class="fa fa-check" aria-hidden="true"></i> Amet risus fringilla,aliquet lacus vel.</li>
                <li><i class="fa fa-check" aria-hidden="true"></i> Etiam suscipit velit et tellus bibendum.</li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="info-img">
              <img src="img/home/info-img.jpg" alt="image">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="progress-wrapper">
              <h3>We are making progress</h3>
              <div class="progress-title">Family Law</div>
              <div class="progress-bar-inner">
                <div class="progress-bar-container title-up small color">
                  <div class="progress-bar wow fadeInLeft" data-wow-delay="100ms" data-percent="75" data-delay="0" data-type="%">
                  </div>
                </div>
              </div>
              <div class="progress-title">Civil Law</div>
              <div class="progress-bar-inner">
                <div class="progress-bar-container title-up small color">
                  <div class="progress-bar wow fadeInLeft" data-wow-delay="100ms" data-percent="100" data-delay="100" data-type="%">
                  </div>
                </div>
              </div>
              <div class="progress-title">Land Law</div>
              <div class="progress-bar-inner">
                <div class="progress-bar-container title-up small color">
                  <div class="progress-bar wow fadeInLeft" data-wow-delay="100ms" data-percent="60" data-delay="200" data-type="%">
                  </div>
                </div>
              </div>
              <div class="progress-title">Criminal Law</div>
              <div class="progress-bar-inner">
                <div class="progress-bar-container title-up small color">
                  <div class="progress-bar wow fadeInLeft" data-wow-delay="100ms" data-percent="85" data-delay="300" data-type="%">
                  </div>
                </div>
              </div>
              <div class="progress-title">Financial Law</div>
              <div class="progress-bar-inner">
                <div class="progress-bar-container title-up small color">
                  <div class="progress-bar wow fadeInLeft" data-wow-delay="100ms" data-percent="70" data-delay="300" data-type="%">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section> -->


    <!-- CONSULTATION SECTION -->
    <section class="full-width-section clearfix">
      <div class="half-width half-width-left hidden-xs">
      </div>
      <div class="half-width half-width-right hidden-xs">
        <div class="free-request">
          <i class="icon-lawyer-hammer"></i>
          <h2>get a free consultation</h2>
          <p>Get a free consultations by completing the free consultations form below.</p>
          <a href="#requestCosultation" data-toggle="modal" class="btn btn-secondary">submit your request</a>
        </div>
      </div>
      <div class="container visible-xs">
        <div class="free-request">
          <i class="fa fa-graduation-cap" aria-hidden="true"></i>
          <h2>get a free consultation</h2>
          <p>Are you in need of legal advice? Fill this form and one of our partners will contact you.</p>
          <a href="#requestCosultation" data-toggle="modal" class="btn btn-secondary">submit your request</a>
        </div>
      </div>
    </section>


    <!-- GALLERY SECTION -->
    <!-- <section class="commonSection clearfix whiteSection gallery-section">
      <div class="container">

        <div class="sectionTitle text-center">
          <h2>practice area</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
        </div>

        <div class="row">
          <div class="col-sm-4">
            <article class="gallery-img text-center">
              <figure>
                <img src="img/home/g-img1.jpg" alt="Image" class="img-responsive">
                <div class="overlay">
                  <div class="overlayInfo">
                    <i class="icon-avatar-family"></i>
                    <h4><a href="practice-detailV1.html">Family Law</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <a href="practice-detailV1.html" class="btn btn-border">learn more</a>
                  </div>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-sm-4">
            <article class="gallery-img text-center">
              <figure>
                <img src="img/home/g-img2.jpg" alt="Image" class="img-responsive">
                <div class="overlay">
                  <div class="overlayInfo">
                    <i class="icon-gun"></i>
                    <h4><a href="practice-detailV1.html">Criminal Law</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <a href="practice-detailV1.html" class="btn btn-border">learn more</a>
                  </div>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-sm-4">
            <article class="gallery-img text-center">
              <figure>
                <img src="img/home/g-img3.jpg" alt="Image" class="img-responsive">
                <div class="overlay">
                  <div class="overlayInfo">
                    <i class="icon-piggy-bank"></i>
                    <h4><a href="practice-detailV1.html">Financial Law</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <a href="practice-detailV1.html" class="btn btn-border">learn more</a>
                  </div>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-sm-4">
            <article class="gallery-img text-center">
              <figure>
                <img src="img/home/g-img4.jpg" alt="Image" class="img-responsive">
                <div class="overlay">
                  <div class="overlayInfo">
                    <i class="icon-airplane"></i>
                    <h4><a href="practice-detailV1.html">Immigration Law</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <a href="practice-detailV1.html" class="btn btn-border">learn more</a>
                  </div>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-sm-4">
            <article class="gallery-img text-center">
              <figure>
                <img src="img/home/g-img5.jpg" alt="Image" class="img-responsive">
                <div class="overlay">
                  <div class="overlayInfo">
                    <i class="icon-avatar-female"></i>
                    <h4><a href="practice-detailV1.html">Sexual Law</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <a href="practice-detailV1.html" class="btn btn-border">learn more</a>
                  </div>
                </div>
              </figure>
            </article>
          </div>

          <div class="col-sm-4">
            <article class="gallery-img text-center">
              <figure>
                <img src="img/home/g-img6.jpg" alt="Image" class="img-responsive">
                <div class="overlay">
                  <div class="overlayInfo">
                    <i class="icon-home"></i>
                    <h4><a href="practice-detailV1.html">Land Law</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <a href="practice-detailV1.html" class="btn btn-border">learn more</a>
                  </div>
                </div>
              </figure>
            </article>
          </div>
        </div>

        <div class="bottom-button text-center">
          <a href="practice-areaV2.html" class="btn btn-secondary">View all</a>
        </div>

      </div>
    </section> -->


    <!--PROCESS SECTION -->
    <!-- <section class="clearfix whiteSection process-section">
  <div class="container">
    <div class="process-content border-top">

      <div class="sectionTitle text-center">
        <h2>how it works?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
      </div>

      <div class="row">
        <div class="col-sm-4 text-center">
          <div class="box">
            <div class="box-inner border-all">
              <i class="icon-note" aria-hidden="true"></i>
              <h4>Request Quote</h4>
              <p>Send us your request</p>
              <a href="#" class="btn btn-secondary">Send request</a>
            </div>
          </div>
        </div>

        <div class="col-sm-4 text-center">
          <div class="box">
            <div class="box-inner border-all">
              <i class="icon-magnifiying-glass" aria-hidden="true"></i>
              <h4>Investigation</h4>
              <p>We will investigate about your case</p>
              <a href="#" class="btn btn-secondary">Read more</a>
            </div>
          </div>
        </div>

        <div class="col-sm-4 text-center">
          <div class="box">
            <div class="box-inner border-all">
              <i class="icon-handcuffs" aria-hidden="true"></i>
              <h4>Case Fight</h4>
              <p>We will fight your case in cort</p>
              <a href="#" class="btn btn-secondary">See results</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section> -->


    <!-- COUNT Up SECTION -->
    <!-- <section class="countUpSection paralax" style="background-image: url(img/paralax/paralax-img1.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-xs-12">
            <div class="counter-inner">
              <div class="icon text-center">
                <i class="icon-avatar-male"></i>
              </div>
              <div class="counter">2900</div>
              <h5>Trusted Clients</h5>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="counter-inner">
              <div class="icon text-center">
                <i class="icon-security"></i>
              </div>
              <div class="counter">10600</div>
              <h5>Personal injury cases</h5>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="counter-inner">
              <div class="icon text-center">
                <i class="icon-lawyer-hammer"></i>
              </div>
              <div class="counter">98</div><span>&#37;</span>
              <h5>Successful cases</h5>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="counter-inner">
              <div class="icon text-center">
                <i class="icon-star-badge"></i>
              </div>
              <div class="counter">1700</div>
              <h5>honors &amp awards</h5>
            </div>
          </div>
        </div>
      </div>
    </section> -->


    <!-- TEAM SECTION -->
    <!-- <section class="commonSection clearfix whiteSection teamSection">
      <div class="container">

        <div class="sectionTitle text-center">
          <h2>our attorneys</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
        </div>
        <div class="row">
          <div class="col-sm-3 col-xs-12">
            <div class="teamContent text-center">
              <div class="teamImage">
                <img src="img/home/team4.jpg" alt="img">
                <div class="overlay">
                  <a href="attorney-profile.html"></a>
                </div>
              </div>
              <div class="teamInfo">
                <h3><a href="attorney-profile.html">Mark Brown</a></h3>
                <p>Lawyer &amp; ceo</p>
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-sm-3 col-xs-12">
            <div class="teamContent text-center">
              <div class="teamImage">
                <img src="img/home/team1.jpg" alt="img">
                <div class="overlay">
                  <a href="attorney-profile.html"></a>
                </div>
              </div>
              <div class="teamInfo">
                <h3><a href="attorney-profile.html">Amanda Stone</a></h3>
                <p>Lawyer &amp; ceo</p>
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-sm-3 col-xs-12">
            <div class="teamContent text-center">
              <div class="teamImage">
                <img src="img/home/team2.jpg" alt="img">
                <div class="overlay">
                  <a href="attorney-profile.html"></a>
                </div>
              </div>
              <div class="teamInfo">
                <h3><a href="attorney-profile.html">Mark Brown</a></h3>
                <p>Lawyer &amp; ceo</p>
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-sm-3 col-xs-12">
            <div class="teamContent text-center">
              <div class="teamImage">
                <img src="img/home/team3.jpg" alt="img">
                <div class="overlay">
                  <a href="attorney-profile.html"></a>
                </div>
              </div>
              <div class="teamInfo">
                <h3><a href="attorney-profile.html">Amanda Stone</a></h3>
                <p>Lawyer &amp; ceo</p>
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section> -->


    <!-- COMMENT SECTION -->
    <!-- <section class="clearfix commentSection paralax" style="background-image: url(img/paralax/paralax-img2.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="owl-carousel commentSlider">
          <div class="slide">
            <div class="commentContent text-center">
              <i class="icon-quote" aria-hidden="true"></i>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in</p>
              <h3>Santana White</h3>
              <h4>Sextual Offence</h4>
            </div>
          </div>
          <div class="slide">
            <div class="commentContent text-center">
              <i class="icon-quote" aria-hidden="true"></i>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in</p>
              <h3>Santana White</h3>
              <h4>Sextual Offence</h4>
            </div>
          </div>
          <div class="slide">
            <div class="commentContent text-center">
              <i class="icon-quote" aria-hidden="true"></i>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in</p>
              <h3>Santana White</h3>
              <h4>Sextual Offence</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->


    <!-- NEWS SECTION -->
    <!-- <section class="commonSection whiteSection clearfix newsSection">
  <div class="container">
    <div class="sectionTitle text-center">
      <h2>Recent news</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
    </div>

    <div class="row">
      <div class="col-sm-6 col-xs-12">
        <div class="thumbnail gridView">
          <a href="blog-details-right-sidebar.html">
            <img src="img/home/news-img1.jpg" alt="image" class="img-responsive">
          </a>
          <div class="caption">
            <h3><a href="blog-details-right-sidebar.html">Aliquam consequat lorem eget facilisis.</a></h3>
            <ul class="list-inline">
              <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Jone Doe</a></li>
              <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>4 Comments</a></li>
            </ul>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClin tock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin </p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-xs-12">
        <div class="media listView border-bottom">
          <a class="media-left" href="blog-details-right-sidebar.html">
            <img src="img/home/news-img2.jpg" alt="Image" class="img-responsive">
          </a>
          <div class="media-body">
            <h3 class="media-heading"><a href="blog-details-right-sidebar.html">Integer blandit mauris aliquam.</a></h3>
            <ul class="list-inline">
              <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Jone Doe</a></li>
              <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>4 Comments</a></li>
            </ul>
            <p>There are many variations of passages of Lorem Ipsuma vailable, but the majority have suffered alteration in some form.</p>
          </div>
        </div>

        <div class="media listView border-bottom">
          <a class="media-left" href="blog-details-right-sidebar.html">
            <img src="img/home/news-img3.jpg" alt="Image" class="img-responsive">
          </a>
          <div class="media-body">
            <h3 class="media-heading"><a href="blog-details-right-sidebar.html">Integer blandit mauris aliquam.</a></h3>
            <ul class="list-inline">
              <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Jone Doe</a></li>
              <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>4 Comments</a></li>
            </ul>
            <p>There are many variations of passages of Lorem Ipsuma vailable, but the majority have suffered alteration in some form.</p>
          </div>
        </div>

        <div class="media listView">
          <a class="media-left" href="blog-details-right-sidebar.html">
            <img src="img/home/news-img4.jpg" alt="Image" class="img-responsive">
          </a>
          <div class="media-body">
            <h3 class="media-heading"><a href="blog-details-right-sidebar.html">Integer blandit mauris aliquam.</a></h3>
            <ul class="list-inline">
              <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Jone Doe</a></li>
              <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>4 Comments</a></li>
            </ul>
            <p>There are many variations of passages of Lorem Ipsuma vailable, but the majority have suffered alteration in some form.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="bottom-button text-center">
      <a href="blog-grid-3col.html" class="btn btn-secondary waves-effect waves-button waves-float">View all</a>
    </div>

  </div>
</section> -->


    <!-- BRAND SECTION -->
    <!-- <section class="brandSection clearfix">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="owl-carousel partnersLogoSlider">
          <div class="slide">
            <div class="partnersLogo clearfix">
              <img src="img/home/partner-01.png" alt="partner-img">
            </div>
          </div>
          <div class="slide">
            <div class="partnersLogo clearfix">
              <img src="img/home/partner-02.png" alt="partner-img">
            </div>
          </div>
          <div class="slide">
            <div class="partnersLogo clearfix">
              <img src="img/home/partner-03.png" alt="partner-img">
            </div>
          </div>
          <div class="slide">
            <div class="partnersLogo clearfix">
              <img src="img/home/partner-04.png" alt="partner-img">
            </div>
          </div>
          <div class="slide">
            <div class="partnersLogo clearfix">
              <img src="img/home/partner-01.png" alt="partner-img">
            </div>
          </div>
          <div class="slide">
            <div class="partnersLogo clearfix">
              <img src="img/home/partner-02.png" alt="partner-img">
            </div>
          </div>
          <div class="slide">
            <div class="partnersLogo clearfix">
              <img src="img/home/partner-03.png" alt="partner-img">
            </div>
          </div>
          <div class="slide">
            <div class="partnersLogo clearfix">
              <img src="img/home/partner-04.png" alt="partner-img">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->


    <?php
    include "includes/siteBody/footer.php";
    ?>
  </div>

  <div class="scrolling">
    <a href="#pageTop" class="backToTop" id="backToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
  </div>

  <!-- CREATE ACCOUNT MODAL -->
  <div class="modal fade customModal" id="requestCosultation" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <div class="panel formPanel">
          <div class="panel-heading text-center">
            <h3 class="panel-title">request free consultation</h3>
            <p>Are you in need of legal advice? Fill this form and one of our partners will contact you.</p>
          </div>
          <div class="panel-body">
            <form action="#" method="POST" role="form">
              <div class="form-group formField formField-left">
                <input type="text" class="form-control" placeholder="Name">
              </div>
              <div class="form-group formField formField-right">
                <input type="text" class="form-control" placeholder="Email">
              </div>
              <div class="form-group formField formField-left">
                <input type="text" class="form-control" placeholder="Phone">
              </div>
              <div class="form-group formField formField-right">
                <input type="text" class="form-control" placeholder="Address">
              </div>
              <div class="form-group formField">
                <textarea class="form-control" placeholder="Your Description"></textarea>
              </div>
              <div class="form-group formField text-center">
                <button type="submit" class="btn btn-secondary" value="Submit Request">Submit Request</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  include "includes/scripts/footerScripts.php"
  ?>
</body>

</html>