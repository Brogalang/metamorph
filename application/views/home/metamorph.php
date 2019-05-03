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

      .status{width: 20px; height: 20px; float: left;}

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

    <ul>
      <li><div class="rounded-circle bg-success status"></div>&nbsp;Masuk</li>
      <li><div class="rounded-circle bg-danger status"></div>&nbsp;Tidak Masuk</li>
      <li><div class="rounded-circle bg-warning status"></div>&nbsp;Sakit</li>
    </ul>

    <div class="table-responsive">
              <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>JKL</th>
                    <th>Asal</th>
                    <th>Universitas</th>
                    <th>Photo</th>
                    <th>Kehadiran</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($pendaftar as $pendaftar): ?>
                  <tr>
                    <td width="150">
                      <?php echo $pendaftar->nip ?>
                    </td>
                    <td>
                      <?php echo $pendaftar->nama ?>
                    </td>
                    <td>
                      <?php echo $pendaftar->jk ?>
                    </td>
                    <td>
                      <?php echo $pendaftar->asal ?>
                    </td>
                    <td>
                      <?php echo $pendaftar->univ ?>
                    </td>
                    <td>
                      <img src="<?php echo base_url('upload/pendaftar/'.$pendaftar->image) ?>" width="64" />
                    </td>
                    <td>
                      <?php 
                          switch ($pendaftar->status) {
                            case 1:
                                  echo '<div class="p-2 d-inline-block rounded-circle bg-danger"></div>';
                                break;
                            
                            case 2:
                                  echo '<div class="p-2 d-inline-block rounded-circle bg-warning"></div>';
                                break;
           
                             case 3:
                                  echo '<div class="p-2 d-inline-block rounded-circle bg-success"></div>';
                                break;
           
                              case 4:
                                  echo '<div class="p-2 d-inline-block rounded-circle bg-primary"></div>';
                                break;
                          }
                       ?>    
                  </td>
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>

    
   <!-- <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 ml auto">
            
              <div class="img-border">
                <a href="https://vimeo.com/28959265" >
                  <span class="icon-wrap"></span>
                  <img src="images/sejarah1.jpg" alt="" class="img-fluid">
                </a>
              </div>
          </div>
          <div class="col-md-6 ml-auto">
            <div class="img-border">
                <a href="https://vimeo.com/28959265" >
                  <span class="icon-wrap"></span>
                  <img src="images/sejarah1.jpg" alt="" class="img-fluid">
                </a>
              </div>
            <h2 class="h2 mb-3">Sejarah PPM NH</h2>
            <p class="h5 mb-3">Kita membangun karakter anak muda agamis dan berilmu tinggi</p>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nisi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nobis magni eaque velit eum, id rem eveniet dolor possimus voluptas..</p>
            <p><a href="https://vimeo.com/28959265" class="popup-vimeo text-uppercase">Watch Video <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
    </div> -->


    <!-- <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-5 mb-5 mb-lg-0 order-1">
            <h2 class="mb-3 text-uppercase">Pastor's <strong class="text-black font-weight-bold">Dedication</strong></h2>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque accusamus, rerum illo facilis reiciendis.</p>
            <p class="mb-4">Iste aut dolorem veritatis saepe nesciunt distinctio voluptas sapiente sunt perspiciatis autem minima, iure provident. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, quas.</p>
            <p><a href="#" class="btn btn-primary pill px-4">Read More</a></p>
          </div>
          <div class="col-md-12 col-lg-6 mr-auto order-2">
            <img src="images/about_2.jpg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div> -->

    <!-- <div class="site-section site-block-feature bg-light">
      <div class="container">
        <div class="d-block d-md-flex border-bottom">
          <div class="text-center p-4 item border-right">
            <span class="flaticon-paper-plane display-3 mb-3 d-block text-primary"></span>
            <h2 class="h5 text-uppercase">VISI MISI PPM</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
            <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
          <div class="text-center p-4 item">
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
          </div>
          <div class="text-center p-4 item">
            <span class="flaticon-avatar display-3 mb-3 d-block text-primary"></span>
            <h2 class="h5 text-uppercase">WHY JOIN PPM NH ?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
            <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
    </div> -->


    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2>Frequently Ask Questions</h2>
          </div>
        </div>
        

        <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
          <div class="col-md-8">
            <div class="accordion unit-8" id="accordion">
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">Apakah program berjalan dengan baik?<span class="icon"></span></a>
              </h3>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur quae cumque perspiciatis aperiam accusantium facilis provident aspernatur nisi optio debitis dolorum, est eum eligendi vero aut ad necessitatibus nulla sit labore doloremque magnam! Ex molestiae, dolor tempora, ad fuga minima enim mollitia consequuntur, necessitatibus praesentium eligendi officia recusandae culpa tempore eaque quasi ullam magnam modi quidem in amet. Quod debitis error placeat, tempore quasi aliquid eaque vel facilis culpa voluptate.</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->
            
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">Cara apa agar misi bisa berjalan?<span class="icon"></span></a>
              </h3>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <!-- <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Be save and be baptise?<span class="icon"></span></a>
              </h3>
              <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> --> <!-- .accordion-item -->

           <!--  <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">Where to Start?<span class="icon"></span></a>
              </h3>
              <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> --> <!-- .accordion-item -->

          </div>
          </div>
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