<!--   <div id="preloader"></div> -->
  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                  <h1><span>Ph</span>Dir</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="http://localhost/phdir">Home</a>
                  </li>
                  <li >
                    <a class="page-scroll" href="http://localhost/phdir#public-contacts">Public Directory</a>
                  </li>
                  
                  <?php

                    if(isset($_SESSION['loggedIn']) and $_SESSION['loggedIn'] == true)
                    {?>
                      <li>
                      <a class="page-scroll" href="addphones.php">Add Phones</a>
                      </li>
                      <li>
                      <a class="page-scroll" href="index.php#private-directory">Your Directory</a>
                      </li>
                      <li>
                      <a class="page-scroll" href="logout.php">Logout</a>
                      </li>
                    <?php 
                    } 
                    else
                    {
                      ?>
                      <li>
                      <a class="page-scroll" href="#about">Login</a>
                      </li>
                      <li>
                      <a class="page-scroll" href="#signupbody">Sign Up</a>
                      </li>
                      <?php 
                    }
                  ?>
                  <!-- <li>
                    <a class="page-scroll" href="#services">SignUp</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#team">Public Directory</a>
                  </li> -->
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->