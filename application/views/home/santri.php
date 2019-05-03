<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view("home/_partials/head.php") ?>

    <style>
      #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 98;
        border: none;
        outline: none;
        background-color: none;
        color: none;
        cursor: pointer;
        padding: 15.9px;
        border-radius: circle;
      }

      #myBtn:hover {
        background-color: none;
      }

      .button-flat-circle {
        border: 1px solid none;        /* border: tebal[px] tipe[solid,dashed,dotted] warna[#hex, rgb()]; */
        background-color: white;        /* ubah warna background */
        color: none;                   /* ubah warna font */
        font-size: none;                  /* ubah ukuran font */
        width: 15.9px;                     /* set panjang button. ukuran width = ukuran height */
        height: 15.9px;                    /* set tinggi button. ukuran width = ukuran height */
        line-height: 15.9px;                /* set line height = font size */
        text-align: center;               /* text posisi center */
        border-radius: 15.9px;               /* set radius sudut pada button */
      }
      .button-flat-circle:hover {
        opacity: 0.5;                     /* ubah tingkat transparansi saat cursor menuju button. 0.0 s.d 1.0 */ 
      }
      .button-flat-circle:active {
        background: #4d667d;              /* ubah background saat button ditekan */
      }
    </style>
    
  </head>
  <body>
  
  <button class="button-flat-circle" onclick="topFunction()" id="myBtn" title="Go to top" style="background-image: url(<?php echo base_url();?>bootstrap/images/arrow.jpg);"></button>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <?php $this->load->view("home/_partials/navbar.php") ?>
  
    <div style="height: 113px;"></div>
    <div class="slide-one-item home-slider owl-carousel">
      
      

      <div class="site-blocks-cover" style="background-image: url(<?php echo base_url ();?>bootstrap/images/SAO.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1>Santri</h1>
             <!--  <p class="font-weight-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem esse praesentium expedita aliquam sunt eveniet.</p> -->
            </div>
          </div>
        </div>
      </div> 
    </div>

    
   <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#">
                  <img src="<?php echo base_url ('bootstrap/images/img_1.jpg')?>" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Church Bible Study</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#">
                  <img src="<?php echo base_url ('bootstrap/images/img_2.jpg')?>" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Church Building Accomplishments in January 2018</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#">
                  <img src="<?php echo base_url ('bootstrap/images/img_3.jpg')?>" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Learn How To Pray</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#">
                  <img src="<?php echo base_url ('bootstrap/images/img_1.jpg')?>" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Church Bible Study</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#">
                  <img src="<?php echo base_url ('bootstrap/images/img_2.jpg')?>" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Church Building Accomplishments in January 2018</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#">
                  <img src="<?php echo base_url ('bootstrap/images/img_3.jpg')?>" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Learn How To Pray</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          </div>


        </div>

        <div class="row">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <div class="site-section block-14">

      <div class="container">
        
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>Para Alumni</h2>
          </div>
        </div>

        <div class="nonloop-block-14 owl-carousel">
          
          <div class="p-4">
            <div class="d-flex block-testimony">
              <div class="person mr-3">
                <img src="<?php echo base_url ('bootstrap/images/person_1.jpg')?>" alt="Image" class="img-fluid rounded-circle">
              </div>
              <div>
                <h2 class="h5">Katie Johnson</h2>
                <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;</blockquote>
              </div>
            </div>
          </div>
          <div class="p-4">
            <div class="d-flex block-testimony">
              <div class="person mr-3">
                <img src="<?php echo base_url ('bootstrap/images/person_2.jpg')?>" alt="Image" class="img-fluid rounded-circle">
              </div>
              <div>
                <h2 class="h5">Jane Mars</h2>
                <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;</blockquote>
              </div>
            </div>
          </div>
          <div class="p-4">
            <div class="d-flex block-testimony">
              <div class="person mr-3">
                <img src="<?php echo base_url ('bootstrap/images/person_3.jpg')?>" alt="Image" class="img-fluid rounded-circle">
              </div>
              <div>
                <h2 class="h5">Shane Holmes</h2>
                <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;</blockquote>
              </div>
            </div>
          </div>
          <div class="p-4">
            <div class="d-flex block-testimony">
              <div class="person mr-3">
                <img src="<?php echo base_url ('bootstrap/images/person_4.jpg')?>" alt="Image" class="img-fluid rounded-circle">
              </div>
              <div>
                <h2 class="h5">Mark Johnson</h2>
                <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;</blockquote>
              </div>
            </div>
          </div>

        </div>

      </div>
      
    </div>

    
     <?php $this->load->view("home/_partials/footer.php") ?>
  </div>

  <script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("myBtn").style.display = "block";
    } else {
      document.getElementById("myBtn").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  </script>

  <?php $this->load->view("home/_partials/js.php") ?>
    

  <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>

  </body>
</html>