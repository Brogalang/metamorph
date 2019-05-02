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
  
  <?php $this->load->view("home/_partials/navbar.php") ?>
  
    <div style="height: 113px;"></div>
    <div class="slide-one-item home-slider owl-carousel">
      
      <div class="site-blocks-cover" style="background-image: url(<?php echo base_url ();?>bootstrap/images/hero_b1_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1>For The Time <strong>Is At Hand</strong></h1>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover" style="background-image: url(<?php echo base_url ();?>bootstrap/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1>The <strong>Truth</strong> Will Set You Free</h1>
            </div>
          </div>
        </div>
      </div> 
    </div>

   <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Best Quote</h2>
            <p>Menjadi orang sukses di dunia itu biasa, tapi menjadi orang yang sukses dunia dan akhirot baru luar biasa</p>
          </div>
        </div>

        <!-- <div class="row"> -->
          <!-- <div class="col-12 text-center mb-3">
            <h3 class="h5"><span class="text-uppercase">&ldquo;Thy Kingdom Come&rdquo;</span> &mdash; <span class="small"><em>by</em> Pastor Edward Cane</span></h3>
          </div> -->
          <!-- <div class="col-12">
            <div class="player">
                <audio id="player2" preload="none" controls style="max-width: 100%">
                    <source src="http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3" type="audio/mp3">
                </audio>
            </div>
          </div> -->
        <!-- </div> -->

      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            
              <div class="img-border">
                <a href="https://vimeo.com/28959265" >
                  <span class="icon-wrap"></span>
                  <img src="<?php echo base_url ('bootstrap/images/sejarah.jpg')?>" alt="" class="img-fluid">
                </a>
              </div>
            
          </div>
          <div class="col-md-5 ml-auto">
            <h2 class="h2 mb-3">Sejarah PPM NH</h2>
            <!-- <p class="h5 mb-3">Kita membangun karakter anak muda agamis dan berilmu tinggi</p> -->
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nisi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nobis magni eaque velit eum, id rem eveniet dolor possimus voluptas..</p>
            <!-- <p><a href="https://vimeo.com/28959265" class="popup-vimeo text-uppercase">Watch Video <span class="icon-arrow-right small"></span></a></p> -->
          </div>
        </div>
      </div>
    </div>
   

    <div class="site-section site-block-feature bg-light">
      <div class="container">
        <div class="d-block d-md-flex border-bottom">
          <div class="text-center p-4 item border-right">
            <span class="flaticon-paper-plane display-3 mb-3 d-block text-primary"></span>
            <h2 class="h5 text-uppercase">VISI MISI PPM</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
            <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
          <!-- <div class="text-center p-4 item">
            <span class="flaticon-chat-1 display-3 mb-3 d-block text-primary"></span>
            <h2 class="h5 text-uppercase">Testimonies</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
            <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
        <div class="d-block d-md-flex">
          <div class="text-center p-4 item border-right">
            <span class="flaticon-speaker display-3 mb-3 d-block text-primary"></span>
            <h2 class="h5 text-uppercase">Listen To Our Sermons</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
            <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
          </div> -->
          <div class="text-center p-4 item">
            <span class="flaticon-avatar display-3 mb-3 d-block text-primary"></span>
            <h2 class="h5 text-uppercase">WHY JOIN PPM NH ?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
            <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
    </div>

    


    <div class="site-section block-15">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>Recent Events</h2>
          </div>
        </div>


        <div class="nonloop-block-15 owl-carousel">
          

            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="<?php echo base_url ('bootstrap/images/img_1.jpg')?>" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Church Bible Study</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="<?php echo base_url ('bootstrap/images/img_2.jpg')?>" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Church Building Accomplishments in January 2018</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="<?php echo base_url ('bootstrap/images/img_3.jpg')?>" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Learn How To Pray</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>

            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="<?php echo base_url ('bootstrap/images/img_1.jpg')?>" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Church Bible Study</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="<?php echo base_url ('bootstrap/images/img_2.jpg')?>" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Church Building Accomplishments in January 2018</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="<?php echo base_url ('bootstrap/images/img_3.jpg')?>" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Learn How To Pray</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
            
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="<?php echo base_url ('bootstrap/images/img_1.jpg')?>" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Church Bible Study</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="<?php echo base_url ('bootstrap/images/img_2.jpg')?>" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Church Building Accomplishments in January 2018</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="<?php echo base_url ('bootstrap/images/img_3.jpg')?>" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Learn How To Pray</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          


        </div>

        <div class="row">
          
        </div>
      </div>
    </div>
    

    <!-- <div class="py-5 quick-contact-info">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div>
              <h2><span class="icon-room"></span> Location</h2>
              <p class="mb-0">New York - 2398 <br>  10 Hadson Carl Street</p>
            </div>
          </div>
          <div class="col-md-4">
            <div>
              <h2><span class="icon-clock-o"></span> Service Times</h2>
              <p class="mb-0">Wednesdays at 6:30PM - 7:30PM <br>
              Fridays at Sunset - 7:30PM <br>
              Saturdays at 8:00AM - Sunset</p>
            </div>
          </div>
          <div class="col-md-4">
            <h2><span class="icon-comments"></span> Get In Touch</h2>
            <p class="mb-0">Email: info@yoursite.com <br>
            Phone: (123) 3240-345-9348 </p>
          </div>
        </div>
      </div>
    </div> -->

    
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