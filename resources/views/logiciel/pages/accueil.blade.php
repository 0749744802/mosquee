@extends('logiciel.index')
@section('titre', 'Accuel')
@section('content')
<main>

    <!-- =====================================
    ============ Banner Area Start ============
    ====================================== -->
    @foreach ($slides as $item)
    <section class="about-page banner-area page-banner-2" style="background-image: url({{ asset('storage/' . $item->image_slide) }});">
        <div class="container">
          <div class="banner-content d-flex justify-content-center flex-column text-center">
              <h2 class="font-md-60 white text-center">{{ $item->titre_slide }}</h2>
              <h4 class="white font-20 font-light text-center font-roboto mt-15">{{ $item->sous_titre_slide }}</h4>
          </div>
        </div>
      </section>
    @endforeach

    <!-- =====================================
    ============ Banner Area End ============
    ====================================== -->

    <!-- =====================================
    ======== Service Area Start ==========
    ====================================== -->
    <section class="service-area section-padding">
      <div class="container">
        <div class="row">
            @foreach ($services as $item)
            <div class="col-md-4">
                <div class="service-box text-center px-12 px-lg-40 py-30">
                  <div class="service-icon service-icon-2">
                    <span><img src="{{ asset('storage/' . $item->image_service) }}" alt=""></span>
                    <div class="service-icon-shap">
                      
                    </div>
                  </div>
                  <div class="service-content">
                    <h4>{{ $item->titre_service }}</h4>
                    <p class="opacity-80 font-14 mt-15">{!! html_entity_decode($item->resume_service) !!}</p>

                  </div>
                </div>
              </div>

            @endforeach

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

                @foreach ($videos as $item)
                <div class="col-md-6">
                    <div class="pta-box">
                      <h3 class="white font-medium font-20">{{ $item->titre_video }}</h3>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="pta-btn mt-30 mt-md-0">
                      <a class="btn btn-blue-3" href="devis">Nous joindre <span><i class="fas fa-caret-right"></i></span></a>
                    </div>
                  </div>
                @endforeach
             
            </div>
          </div>
        </div>
      </section>
    <!-- =====================================
    ======== business Area Start ==========
    ====================================== -->
    @foreach ($videos as $item)
    <section class="video-area section-padding" style="background-image: url(./logiciel/assets/img/video-bg.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-lg-7">
              <div class="video-content">

                <p class="white mt-30 opacity-80 font-300">{!! $item->resume_video !!}</p>
              </div>
            </div>
            <div class="col-md-4 col-lg-5 justify-content-center">
              <div class="video-icon d-flex justify-content-center align-items-center mt-50 mt-md-0">
                <a class="d-flex justify-content-center align-items-center video-popup" href="{{ $item->lien_video }}">
                  <img src="./logiciel/assets/img/play.svg" alt="">
                </a>
                
              </div>
            </div>
          </div>
        </div>
      </section>
    @endforeach
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
              <div class="skill-btn mt-30">
                <a class="btn btn-red" href="logiciels">Voir + </a>
              </div>
            </div>
            <div class="skill-bar mt-50">

               @foreach ($logiciels as $item)
              <a href="{{$item->lien_logiciel}}" target="_bank"><p class="mb-5">{{$item->titre_logiciel}}</p></a> 
               <div id="bar" class="barfiller">
                   <div class="tipWrap">
                       <span class="tip">100%</span>
                   </div>
                   <span class="fill" data-percentage="100"></span>
               </div>
               @endforeach

               

               
            </div>
          </div>
        </div>
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
    <!--<section class="testimonial-area section-padding">
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
    </section>-->
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
