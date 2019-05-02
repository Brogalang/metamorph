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
  
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2>Data Siswa Baru</h2>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="span2">
          <img src="http://thetransformedmale.files.wordpress.com/2011/06/bruce-wayne-armani.jpg"  alt="" class="img-rounded">
        </div>
        <div class="col-md-7">
          <?php foreach ($pendaftar as $pendaftar): ?>
                    <p>
                      <?php echo $pendaftar->nip ?>
                    </p>
                    <blockquote>
                      <?php echo $pendaftar->nama ?>
                    </blockquote>
                    <p>
                      <?php echo $pendaftar->jk ?>
                    </p>
                    <p>
                      <?php echo $pendaftar->asal ?>
                    </p>
                    <p>
                      <?php echo $pendaftar->univ ?>
                    </p>
                    <p>
                      <img src="<?php echo base_url('upload/pendaftar/'.$pendaftar->image) ?>" width="64" />
                    </p>
                    <p class="small">
                      <?php echo substr($pendaftar->ket, 0, 120) ?>...</p>
                  <?php endforeach; ?>
          <!-- <blockquote>
            <p>Bruce Wayne</p>
            <small><cite title="Source Title">Gotham, United Kingdom  <i class="icon-map-marker"></i></cite></small>
          </blockquote>
          <p>
            <i class="icon-envelope"></i> masterwayne@batman.com <br>
            <i class="icon-globe"></i> www.bootsnipp.com <br>
            <i class="icon-gift"></i> January 30, 1974
          </p> -->
        </div>
      </div>
    </div>
  </div>

   <div style="height: 113px;"></div>
    <div class="slide-one-item home-slider owl-carousel">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
      
            </div>
          </div>
        </div>
      </div> 
    </div>

    
     <?php $this->load->view("home/_partials/footer.php") ?>

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