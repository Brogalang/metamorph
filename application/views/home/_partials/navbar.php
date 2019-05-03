<div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="<?php echo site_url('page/index') ?>">PPM NH</a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li class="<?php if($this->uri->uri_string() == 'page/index') { echo 'active'; } ?>">
                        <a href="<?php echo site_url('page/index') ?>">Home</a>
                      </li>
                      <li class="has-children <?php if($this->uri->uri_string() == 'page/visi') { echo 'active'; } ?>">
                        <a>About</a>
                        <ul class="dropdown arrow-top">
                          <li><a href="<?php echo site_url('page/visi') ?>">Visi dan Misi</a></li>
                          <li><a href="<?php echo site_url('page/sejarah') ?>">Sejarah PPM NH</a></li>
                          <li><a href="<?php echo site_url('page/why') ?>">Why Join PPM NH ?</a></li>
                        </ul>
                      </li>
                      <li class="<?php if($this->uri->uri_string() == 'page/santri') { echo 'active'; } ?>">
                        <a href="<?php echo site_url('page/santri') ?>">Santri</a>
                      </li>
                      <li class="<?php if($this->uri->uri_string() == 'page/metamorph') { echo 'active'; } ?>">
                        <a href="<?php echo site_url('page/metamorph') ?>">Metamorph</a>
                      </li>
                      <li class="<?php if($this->uri->uri_string() == 'page/guru') { echo 'active'; } ?>">
                        <a href="<?php echo site_url('page/guru') ?>">Guru</a>
                    </li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>