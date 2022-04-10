<!-- HEADER -->
<header id="pageTop" class="header">

  <!-- TOP INFO BAR -->
  <div class="top-info-bar">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-xs-12 hidden-xs">
          <ul class="list-inline social-icon">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-xs-12 top-bar-right">
          <a href="#requestCosultation" data-toggle="modal">Request a free cosultation
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="nav-wrapper">
    <div class="container-fluid header-bg">
      <div class="row">
        <div class="col-lg-4 col-sm-4 col-xs-6 header-left empty">empty
        </div>
        <div class="col-lg-8 col-sm-8 col-xs-6 header-right empty">empty
        </div>
      </div>
    </div>

    <!-- NAVBAR -->
    <nav id="menuBar" class="navbar navbar-default lightHeader" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="img/mmwad/mmwad-logo.png" alt="logo"></a>
        </div>
        <div class="topList hidden-xs">
          <ul class="list-inline">
            <li><i class="fa fa-calendar" aria-hidden="true"></i>Monday To Saturday - 8AM To 5PM</li>
            <li><i class="fa fa-phone" aria-hidden="true"></i> +254701989348</li>
          </ul>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <?php
            $navLinks = [
              '/' => "Home",
              '/contact_us.php' => "Contact Us"
            ]
            ?>
            <?php foreach ($navLinks as $key => $value) : ?>
              <li class="<?= $_SERVER['REQUEST_URI'] === $key ? "active" : "" ?>">
                <a href="<?= $key ?>"><?= $value ?></a>
              </li>
            <?php endforeach; ?>
            <!-- <li class=" ">
              <a href="about_us.html" class="">About Us</a>
            </li>
            <li class=" dropdown singleDrop">
              <a href="services.html">Services</a>
            </li>
            <li class=" dropdown megaDropMenu">
              <a href="contacts.html">Contact Us</a>
            </li> -->
            <!-- <li class=" dropdown singleDrop">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Components</a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="accrodion-toggle.html">Accordions &amp; Toggles</a></li>
              <li><a href="button-alert.html">Buttons & Alerts</a></li>
            </ul>
          </li> -->
          </ul>
        </div>



      </div>
    </nav>
  </div>
</header>