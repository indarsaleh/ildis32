<?php

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\models\Dokumen;
use backend\models\FrontendConfig;


/* masukkan teks dibawah ini disetiap view dari halaman */
$this->title = 'Jaringan Dokumentasi dan Informasi Hukum';
$this->description = 'Jaringan Dokumentasi dan Informasi Hukum';
$this->keywords = ['Jaringan', 'Dokumentasi','Informasi', 'Hukum'];   
$this->generator = 'Badan Pembinaan Hukum Nasional';
/* masukkan teks diatas dibawah ini disetiap view dari halaman */
?>

<!-- ======= Hero Section ======= -->
  <section class="hero-section" id="hero">

    <div class="wave">

      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
          </g>
        </g>
      </svg>

    </div>

    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 hero-text-image">
          <div class="row">
            <div class="col-lg-8 text-center text-lg-start">
              <h1 class="cd-headline slide">
                    <?php $instansi = FrontendConfig::findOne(2);
                    echo $instansi->isi_konfig;
                    ?>
                    <br>                    
              </h1>
              <!-- <h1 data-aos="fade-right">Badan Pembinaan Hukum Nasional</h1> -->
              <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Jaringan Dokumentasi dan Informasi Hukum Nasional yang selanjutnya disebut JDIHN adalah wadah pendayagunaan bersama atas dokumen hukum secara tertib terpadu, dan berkesinambungan, serta merupakan sarana pemberian pelayanan informasi hukum secara lengkap, akurat, mudah, dan cepat.</p>
              <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="https://www.youtube.com/embed/zaGeqPp-Lrk" class="btn btn-outline-white">Watch Video</a></p>
            </div>
            <div class="col-lg-4 iphone-wrap">
              <img src="frontend/assets/img/phone_1.png" alt="Image" class="phone-1" data-aos="fade-right">
              <img src="frontend/assets/img/phone_2.png" alt="Image" class="phone-2" data-aos="fade-right" data-aos-delay="200">
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

<main id="main">

    <section class="section">
      <div class="container">

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-5" data-aos="fade-up">
            <h2 class="section-heading">Koleksi Kami</h2><br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-file-earmark"></i>
              </div>
              <a href="dokumen/peraturan"><h3 class="mb-3">Peraturan</h3></a>
              <!-- <h4><a href="dokumen/peraturan">Peraturan</a></h4> -->
              <p><h3>&nbsp&nbsp<?= Dokumen::find()->total(1); ?></h3></p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-book"></i>
              </div>
              <a href="dokumen/monografi"><h3 class="mb-3">Monografi Hukum</h3></a>
              <p><h3>&nbsp&nbsp<?= Dokumen::find()->total(2); ?></h3></p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-journal"></i>
              </div>
              <a href="dokumen/artikel"><h3 class="mb-3">Artikel Hukum</h3></a>
              <p><h3>&nbsp&nbsp<?= Dokumen::find()->total(3); ?></h3></p>
            </div>
          </div>
        </div>   
        <br>
         <div class="row">
            <div class="col-md-2" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-1 text-center"> 
              <h3 class="mb-3"></h3>
              <p>--</p>
            </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <i class="bi bi-check-square"></i>
                </div>
                <h3 class="mb-3">Peraturan Berlaku</h3>
                <p><h3>&nbsp&nbsp<?= dokumen::find()
                    ->where(['status' => 'Berlaku'])
                    ->count();?></h3></p>
                <p>--</p>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <i class="bi bi-x-circle"></i>
                </div>
                <h3 class="mb-3">Peraturan Tidak Berlaku</h3>
                <p><h3>&nbsp&nbsp<?= dokumen::find()
                    ->where(['status' => 'Tidak Berlaku'])
                    ->count();?></h3></p>
                <p>--</p>
              </div>
            </div>
             <div class="col-md-2" data-aos="fade-up" data-aos-delay="200">
              <div class="feature-1 text-center">
                <h3 class="mb-3"></h3>
                <p>--</p>
              </div>
            </div>
         </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade">
          <div class="col-md-6 mb-5">
            <img src="frontend/assets/img/undraw_svg_1.svg" alt="Image" class="img-fluid">
          </div>
        </div>

        <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-4">
            <div class="step">
              <!-- <span class="number">01</span> -->
              <h3><a href="dokumen">Koleksi Dokumen</a></h3>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <!-- <span class="number">02</span> -->
              <h3><a href="https://jdihn.go.id/">Portal JDIHN</a></h3>
            </div>
          </div>
          <div class="col-md-2">
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4 me-auto">
            <h2 class="mb-4">Koleksi Unggulan</h2>
              <ul>
                <a href=""><h4 class="mb-3">Aturan Peninggalan Kerajaan</h4></a>
                <a href=""><h4 class="mb-3">Hukum Adat</h4></a>
                <a href=""><h4 class="mb-3">Hukum Kolonial</h4></a>
              </ul>
            <!-- <p><a href="#" class="btn btn-primary">Get Started</a></p> -->
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <img src="frontend/assets/img/undraw_svg_2.svg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4 ms-auto order-2">
            <h2 class="mb-4">Indeks Kepuasan Masyarakat</h2>
            <h5 class="mb-3">Mohon mengisi survey Indeks Kepuasan Masyarakat (IKM) sebagai masukan untuk penyajian website yang lebih baik.</h5><br>
            <p><a href="#" class="btn btn-primary">Get Started</a></p>
          </div>
          <div class="col-md-6" data-aos="fade-right">
            <img src="frontend/assets/img/undraw_svg_3.svg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Testimonials Section ======= -->
    <section class="section border-top border-bottom">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-4">
            <h2 class="section-heading">Review From Our Users</h2>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-md-7">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill muted"></span>
                    </p>
                    <h3>Excellent App!</h3>
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                        aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                        provident voluptates consectetur maiores quos.</p>
                    </blockquote>

                    <p class="review-user">
                      <img src="assets/img/person_1.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Jean Doe</span>, &mdash; App User
                      </span>
                    </p>

                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill muted"></span>
                    </p>
                    <h3>This App is easy to use!</h3>
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                        aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                        provident voluptates consectetur maiores quos.</p>
                    </blockquote>

                    <p class="review-user">
                      <img src="assets/img/person_2.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Johan Smith</span>, &mdash; App User
                      </span>
                    </p>

                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill muted"></span>
                    </p>
                    <h3>Awesome functionality!</h3>
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                        aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                        provident voluptates consectetur maiores quos.</p>
                    </blockquote>

                    <p class="review-user">
                      <img src="assets/img/person_3.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Jean Thunberg</span>, &mdash; App User
                      </span>
                    </p>

                  </div>
                </div><!-- End testimonial item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= CTA Section ======= -->
    <section class="section cta-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 me-auto text-center text-md-start mb-5 mb-md-0">
            <h2>Download JDIHN mobile version</h2>
          </div>
          <div class="col-md-5 text-center text-md-end">
            <p><a href="#" class="btn d-inline-flex align-items-center"><i class="bx bxl-apple"></i><span>App store</span></a>&nbsp&nbsp&nbsp<a href="https://play.google.com/store/apps/details?id=id.go.kemenkumham.jdihn_mobile" class="btn d-inline-flex align-items-center"><i class="bx bxl-play-store"></i><span>Google play</span></a></p>
          </div>
        </div>
      </div>
    </section><!-- End CTA Section -->
    
    
<!-- start blog section -->
<?php if (!empty($berita)) : ?>
    <section>
        <div class="container">
            <div class="text-center margin-30px-bottom">
                <h3 class="margin-10px-bottom">Berita Terbaru</h3>
            </div>
            <div class="row">

                <?php foreach ($berita as $data) : ?>
                    <!-- start blog -->
                    <div class="col-lg-4 sm-margin-30px-bottom">
                        <div class="card border-0 shadow h-100">



                            <?= Html::a(Html::img('@web/common/dokumen/' . $data->image, ['class' => 'card-img-top rounded']), ['berita/view', 'id' => $data->id]); ?>

                            <div class="card-body padding-30px-all">
                                <h5 class="card-title font-size22 font-weight-500 magin-20px-bottom">
                                    <a href="blog-details.html" class="text-extra-dark-gray"><?= Html::a(implode(" ", array_slice(explode(" ", $data->judul), 0, 3)) . ' .....', ['berita/view', 'id' => $data->id]) ?></a>
                                </h5>

                                <p class="no-margin-bottom"><?= implode(" ", array_slice(explode(" ", strip_tags($data->isi)), 0, 20)) . ' .....' ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach  ?>'

                    <!-- end blog -->
                </div>
                <div class="float-right mt-4">
                    <?= Html::a('Selengkapnya...', ['berita/index']); ?>

                </div>

            </div>
    </section>


    <?php else : ?>
<?php endif; ?>

    <!-- end blog section -->
