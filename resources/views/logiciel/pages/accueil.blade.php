@extends('logiciel.index')
@section('titre', 'Accuel')
@section('content')
<main>

    <!-- =====================================
    ============ Banner Area Start ============
    ====================================== -->
    <section class="about-page banner-area page-banner-2" style="background-image: url(./logiciel/assets/img/about-banner.png);">
        <div class="container">
          <div class="banner-content d-flex justify-content-center flex-column text-center">
              <h2 class="font-md-60 white text-center">Where Dreamers & Doers</h2>
              <h4 class="white font-20 font-light text-center font-roboto mt-15">A young and fearless superteam, powered by our ideals</h4>
          </div>
        </div>
      </section>
    <!-- =====================================
    ============ Banner Area End ============
    ====================================== -->

    <!-- =====================================
    ======== Service Area Start ==========
    ====================================== -->
    <section class="service-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="service-box text-center px-12 px-lg-40 py-30">
              <div class="service-icon">
                <span><i class="far fa-check-square"></i></span>
                <div class="service-icon-shap">
                  <img src="./logiciel/assets/img/service-img-shap.png" alt="">
                </div>
              </div>
              <div class="service-content">
                <h4>Site web</h4>
                <p class="opacity-80 font-14 mt-15">En cour...</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box text-center px-12 px-lg-40 py-30">
              <div class="service-icon service-icon-2">
                <span><i class="far fa-lightbulb"></i></span>
                <div class="service-icon-shap">
                  <img src="./logiciel/assets/img/service-img-shap.png" alt="">
                </div>
              </div>
              <div class="service-content">
                <h4>Logiciel sur mesure</h4>
                <p class="opacity-80 font-14 mt-15">En cour...</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box text-center px-12 px-lg-40 py-30 ">
              <div class="service-icon service-icon-3">
                <span><i class="fas fa-globe"></i></span>
                <div class="service-icon-shap">
                  <img src="./logiciel/assets/img/service-img-shap.png" alt="">
                </div>
              </div>
              <div class="service-content">
                <h4>Assistance</h4>
                <p class="opacity-80 font-14 mt-15">En cour...</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- =====================================
    ======== Service Area End ==========
    ====================================== -->
    <section class="pta-area">
        <div class="pta-check">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="pta-box">
                  <h3 class="white font-medium font-20">Titre de la video</h3>
                </div>
              </div>
              <div class="col-md-6">
                <div class="pta-btn mt-30 mt-md-0">
                  <a class="btn btn-blue-3" href="devis">Nous joindre <span><i class="fas fa-caret-right"></i></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- =====================================
    ======== business Area Start ==========
    ====================================== -->
    <section class="video-area section-padding" style="background-image: url(./logiciel/assets/img/video-bg.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-lg-7">
              <div class="video-content">

                <p class="white mt-30 opacity-80 font-300">Descriptife de la video</p>
              </div>
            </div>
            <div class="col-md-4 col-lg-5 justify-content-center">
              <div class="video-icon d-flex justify-content-center align-items-center mt-50 mt-md-0">
                <a class="d-flex justify-content-center align-items-center video-popup" href="https://www.youtube.com/watch?v=1jCuRGOfrNc">
                  <img src="./logiciel/assets/img/play.svg" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- =====================================
    ======== business Area Start ==========
    ====================================== -->

    <!-- =====================================
    ======== Skill Area Start ==========
    ====================================== -->
    <section class="skill-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-5">
            <div class="skill-img">
              <img src="./logiciel/assets/img/skill.jpg" alt="">
            </div>
          </div>
          <div class="col-md-12 col-lg-7 pl-15 pl-lg-50 pl-xl-100">
            <div class="skill-content mt-30 mt-lg-0">
              <h2 class="font-medium">Nos different logiciel & site developper</h2>
              <p class="mt-20 opacity-80">description</p>
              <div class="skill-btn mt-30">
                <a class="btn btn-red" href="">Voir + </a>
              </div>
            </div>
            <div class="skill-bar mt-50">

                <p class="mb-5">Logiciel ecole</p>
                <div id="bar1" class="barfiller">
                    <div class="tipWrap">
                        <span class="tip">90%</span>
                    </div>
                    <span class="fill" data-percentage="90"></span>
                </div>

                <p class="mb-5">Logiciel de stock</p>
                <div id="bar2" class="barfiller">
                    <div class="tipWrap">
                        <span class="tip">95%</span>
                    </div>
                    <span class="fill" data-percentage="95"></span>
                </div>

                <p class="mb-5">Logiciel de vote</p>
                <div id="bar3" class="barfiller">
                    <div class="tipWrap">
                        <span class="tip">80%</span>
                    </div>
                    <span class="fill" data-percentage="80"></span>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="skill-shap skill-shap-left">
        <img src="./logiciel/assets/img/skill-shap-left.png" alt="">
      </div>
      <div class="skill-shap skill-shap-right">
        <img src="./logiciel/assets/img/skill-shap-right.png" alt="">
      </div>
      <div class="skill-shap skill-shap-left-2">
        <img src="./logiciel/assets/img/skill-shap-left-2.png" alt="">
      </div>
      <div class="skill-shap skill-shap-right-2">
        <img src="./logiciel/assets/img/skill-shap-right-2.png" alt="">
      </div>
    </section>
    <!-- =====================================
    ======== Skill Area End ==========
    ====================================== -->

    <!-- =====================================
    ======== Manager Area End ==========
    ====================================== -->

    <!-- =====================================
    ======== Manager Area End ==========
    ====================================== -->

    <!-- =====================================
    ======== pta Area Start ==========
    ====================================== -->

     <!-- =====================================
    ======== Pta Area End ==========
    ====================================== -->

    <!-- =====================================
    ======== video Area Start ==========
    ====================================== -->

    <!-- =====================================
    ======== video Area End ==========
    ====================================== -->

    <!-- =====================================
    ======== Testimonial Area Start ==========
    ====================================== -->
    <section class="testimonial-area section-padding">
      <div class="container">
        <div class="section-title-center">
          <h2 class="font-medium">Avis de nos clients!!</h2>
          <span><i class="fas fa-quote-left"></i></span>
        </div>
      </div>
      <div class="container">
        <div class="testimonial-slide mt-60 carousel owl-carousel" data-nav="false" data-dots='true' data-autoplay='true' data-responsive='{"0":{"items": "1"}, "768":{"items": "1"}, "1024":{"items": "1"}}'>
         <div class="testimonial-item text-center">
           <div class="testimonial-img">
             <img src="./logiciel/assets/img/testimonial.png" alt="">
           </div>
           <div class="testimonial-content mt-30">
             <p class="opacity-80">Get in touch to see how we can help you grow your business online. We  listen to what our clients want and help them decide what they need. Our aim is to create the best app, website</p>
            </div>
            <div class="testimonial-devider d-flex">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="testimonial-info mt-30">
              <h4>Mahfuz Riad</h4>
              <p class="opacity-80 font-15">Ux designer at template_mr</p>
            </div>
            <div class="testimonial-numder testimonial-numder-left">
              <span>1</span>
            </div>
         </div>
         <div class="testimonial-item text-center">
          <div class="testimonial-img">
            <img src="./logiciel/assets/img/skill.jpg" alt="">
          </div>
          <div class="testimonial-content mt-30">
            <p class="opacity-80">Get in touch to see how we can help you grow your business online. We  listen to what our clients want and help them decide what they need. Our aim is to create the best app, website</p>
           </div>
           <div class="testimonial-devider d-flex">
             <span></span>
             <span></span>
             <span></span>
           </div>
           <div class="testimonial-info mt-30">
             <h4>Mahfuz Riad</h4>
             <p class="opacity-80 font-15">Ux designer at template_mr</p>
           </div>
           <div class="testimonial-numder testimonial-numder-center">
            <span>2</span>
          </div>
        </div>
        <div class="testimonial-item text-center">
          <div class="testimonial-img">
            <img src="./logiciel/assets/img/testimonial.png" alt="">
          </div>
          <div class="testimonial-content mt-30">
            <p class="opacity-80">Get in touch to see how we can help you grow your business online. We  listen to what our clients want and help them decide what they need. Our aim is to create the best app, website</p>
           </div>
           <div class="testimonial-devider d-flex">
             <span></span>
             <span></span>
             <span></span>
           </div>
           <div class="testimonial-info mt-30">
             <h4>Mahfuz Riad</h4>
             <p class="opacity-80 font-15">Ux designer at template_mr</p>
           </div>
           <div class="testimonial-numder testimonial-numder-right">
             <span>3</span>
           </div>
        </div>
        </div>
      </div>
      <div class="testiomnial-shap testiomnial-shap-left">
        <img src="./logiciel/assets/img/testimonial-shap-right.png" alt="">
      </div>
      <div class="testiomnial-shap testiomnial-shap-right">
        <img src="./logiciel/assets/img/testimonial-shap-right.png" alt="">
      </div>
      <div class="testiomnial-shap testiomnial-shap-1">
        <img src="./logiciel/assets/img/testimonial-shap-1.png" alt="">
      </div>
      <div class="testiomnial-shap testiomnial-shap-2">
        <img src="./logiciel/assets/img/testimonial-shap-1.png" alt="">
      </div>
    </section>
    <!-- =====================================
    ======== Testimonial Area End ==========
    ====================================== -->

    <!-- =====================================
    ======== Count Area Start ==========
    ====================================== -->

    <!-- =====================================
    ======== Count Area End ==========
    ====================================== -->

    <!-- =====================================
    ======== Contact Area Start ==========
    ====================================== -->
    <section class="contact-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="contact-form">
              <h2 class=" font-light white">Nous conctacter</h2>
              <form class="form mt-20">
                <div class="row">
                  <div class="col-md-6">
                    <input class="form-input white" type="text" placeholder="Email">
                  </div>
                  <div class="col-md-6 mt-30 mt-md-0">
                    <input class="form-input white" type="text" placeholder="Subject">
                  </div>
                </div>
                <textarea class="form-input mt-30 white" cols="30" rows="10" placeholder="Message"></textarea>
                <button class="btn btn-sent mt-20">Send Request</button>
              </form>
            </div>
          </div>
          <div class="col-md-6">
            <div class="contact-news white py-30 px-15 py-lg-100 text-center mt-40 mt-lg-0 tilt">
              <h2 class=" font-light white">Pour toutes demande </h2>
              <p class="opacity-80 font-300">Merci de remplir le formulaire.</p>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- =====================================
    ======== Contact Area End ==========
    ====================================== -->

  </main>
  @endsection
