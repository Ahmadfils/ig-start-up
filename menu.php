<?php 
  $cur_page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/")+1);
 ?>
<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              IG <strong class="logo_tech">Tech.</strong>
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="index.php">Home<?php if($cur_page == "index.php"){echo '<span class="sr-only">(current)</span>';} ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About <?php if($cur_page == "about.php"){echo '<span class="sr-only">(current)</span>';} ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.php">Services <?php if($cur_page == "service.php"){echo '<span class="sr-only">(current)</span>';} ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us <?php if($cur_page == "contact.php"){echo '<span class="sr-only">(current)</span>';} ?></a>
              </li>
            </ul>
            <div class="quote_btn-container">
              <a href="" class="quote_btn">
               Recevoir un PDF
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>