@extends('logiciel.index')
@section('titre', 'Contact')
@section('content')
  <!-- =====================================
  ============ Header Area End ============
  ====================================== -->
  <main>

    <!-- =====================================
    ============ Page Banner Area Start ============
    ====================================== -->
    <section class="price-banner banner-area" style="background-image: url(./logiciel/assets/img/price-bg.png);">
        <div class="container">
          <div class="banner-content d-flex justify-content-center flex-column">
              <h2 class="font-md-60 white">Contact us</h2>

          </div>
        </div>
    </section>
    <!-- =====================================
    ============ Page Banner Area End ============
    ====================================== -->

    <!-- =====================================
    ============ Contact Page Area Start ============
    ====================================== -->
    <section class="contact-page section-padding">
      <div class="container">
        <div class="contact-content">

            <p class="opacity-80">Merci de remplir tout les champs</p>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-5">
            <div class="contact-img mt-60">
              <img src="./logiciel/assets/img/contant-img.png" alt="">
            </div>
            <div class="contact-address mt-30">
              <h3 class="font-24 font-roboto font-medium">Addresse</h3>
              <p class="mt-10 opacity-80">535 Talbot Street (at Kent Street) London,
                Ontario</p>
            </div>
            <div class="contact-phone mt-20">
              <h3 class="font-24 font-roboto font-medium">telephone</h3>
              <p class="mt-10">(+880) 616481</p>
              <p class="mt-10 opacity-80">This is no easy task – often compliance tends to suffer the faster you move in your organization</p>

            </div>
          </div>
          <div class="col-md-12 col-lg-7">
            <div class="contact-form mt-60">
              <form class="form">
                <h5>Nom* </h5>
                <div class="row">
                  <div class="col-md-6">
                    <input class="form-input" type="text" placeholder="First Name">
                  </div>
                  <div class="col-md-6 mt-30 mt-md-0">
                    <input class="form-input" type="text" placeholder="Last Name">
                  </div>
                </div>
                <h5 class="mt-30">Email * </h5>
                <div class="row">
                  <div class="col-md-12">
                    <input class="form-input" type="text" placeholder="Email">
                  </div>
                </div>
                <h5 class="mt-30">telephone* </h5>
                <div class="row">
                  <div class="col-md-12">
                    <input class="form-input" type="text" placeholder="Phone Number">
                  </div>
                </div>
                <h5 class="mt-30">Subjet* </h5>
                <div class="row">
                  <div class="col-md-12">
                    <input class="form-input" type="text" placeholder="Subject">
                  </div>
                </div>
                <h5 class="mt-30">Message* </h5>
                <textarea class="form-input" cols="30" rows="10" placeholder="Message"></textarea>
                <button class="btn btn-theme white" type="submit">Envoyer</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- =====================================
    ============ Contact Page Area End ============
    ====================================== -->

    <!-- =====================================
    ======== pta Area Start ==========
    ====================================== -->
    <section class="pta-area">
      <div class="pta-check">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="pta-box">
                <h3 class="white font-medium font-20">message a inscrit</h3>
              </div>
            </div>
            <div class="col-md-6">
              <div class="pta-btn mt-30 mt-md-0">
                <a class="btn btn-blue-3" href="#">Nos logiciel <span><i class="fas fa-caret-right"></i></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
     <!-- =====================================
    ======== Pta Area End ==========
    ====================================== -->

  </main>
  @endsection

  <!-- =====================================
  ======== Footer Area Start ==========
  ====================================== -->
