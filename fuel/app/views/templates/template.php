<?php echo $header;?>
        <!-- Check to see if its device is mobile, tablet or desktop for JavaScript  -->
        <div class="is-mobile is-tablet  is-desktop"></div>

        </div><!-- end of preloader-wrapper -->
        
        <header class="page-header">

          <div class="row">
            
            <div class="span-l-3 columns">
              <a href="" class="btn">Logo</a>
            </div>

            <div class="span-l-5 columns offset-l-3">
              <ul class="page-header-list">
                <li class="page-header-item"><a href="#">Sign up</a></li>
                <li class="page-header-item"><a href="#">Log in</a></li>
                <li class="page-header-item"><a href="#">Help</a></li>
              </ul>

            </div>

            <div class="span-l-1 columns">
              <div class="page-header-profile">
                <a class="profile-img btn">Profile</a>
              </div>
            </div>

          </div>

        </header><!-- end of page-header -->

        <main class="main-page">
          
          <div class="sub-header">
            
              <div class="row">
                
                <div class="span-l-3 columns">
                  <input type="text" class="form-control" placeholder="Search">
                </div>

                <div class="span-l-4 columns offset-l-2">
                  <ul class="nav-menu">
                    <li class="nav-item"><a href="#">Questions</a></li>
                    <li class="nav-item"><a href="#">Tags</a></li>
                    <li class="nav-item"><a href="#">Premium</a></li>
                  </ul>
                </div>

                <div class="span-l-2 columns offset-1">
                  <a href="#" class="btn ask-btn">Ask</a>
                </div>

              </div>

          </div>

        <?php echo $content; ?>


        </main>


<?php echo $footer;?>