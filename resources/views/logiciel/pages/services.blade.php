@php
    $service = (!empty($service))  ? $service : 0;
    // dd($service);
    $serviceID = (!empty($service)) ? $service->id : '';
    $titre_service = (!empty($service)) ? ucfirst($service->titre_service) : '';
    $resume_service = (!empty($service)) ? ucfirst($service->resume_service) : '';
    $description_service = (!empty($service)) ? ucfirst($service->description_service) : '';
    $public_service = (!empty($service)) ? ucfirst($service->public_service) : '';
    $image_service = (!empty($service)) ? ucfirst($service->image_service) : '';

    // dd($serviceID);
@endphp
@extends('logiciel.index')
@section('titre', 'services')
@section('content')
  <!-- =====================================
  ============ Header Area End ============
  ====================================== -->
  <main>

    <!-- =====================================
    ============ Page Banner Area Start ============
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
    ============ Page Banner Area End ============
    ====================================== -->

    <!-- =====================================
    ============ About Page Area Start ============
    ====================================== -->

    <!-- =====================================
    ============ About Page Area Start ============
    ====================================== -->

    <!-- =====================================
    ======== Service Area Start ==========
    ====================================== -->

    <!-- =====================================
    ======== Service Area End ==========
    ====================================== -->

    <!-- =====================================
    ======== About Manager Area End ==========
    ====================================== -->
    <section class="manager-area section-padding about-page">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-6">
              <div class="manager-content">
                <h2 class=" font-medium">{{ $titre_service }}</h2>

                <p class="mt-20 opacity-80">{!! $description_service !!} </p>

            </div>
            </div>
            <div class="col-md-12 col-lg-6">
              <div class="manager-img mt-30 mt-lg-0">
                <img src="{{ asset('storage/' .$image_service) }}" alt="">
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- =====================================
    ======== About Manager Area End ==========
    ====================================== -->

    <!-- =====================================
    ======== About big image Area End ==========
    ====================================== -->

    <!-- =====================================
    ======== About big image Area End ==========
    ====================================== -->

    <!-- =====================================
    ======== process Area Start ==========
    ====================================== -->

    <!-- =====================================
    ======== process Area Start ==========
    ====================================== -->

    <!-- =====================================
    ======== Testimonial Area Start ==========
    ====================================== -->

    <!-- =====================================
    ======== Testimonial Area End ==========
    ====================================== -->

    <!-- =====================================
    ======== pta Area Start ==========
    ====================================== -->
    <section class="pta-area pta-area-3 section-padding" style="background-image: url(./logiciel/assets/img/pta-bg.jpg);">
      <div class="pta-check">
        <div class="container">
          <div class="pta-box d-lg-flex">
            <h3 class="white font-light font-30 font-md-40">crea et texte </h3>
            <div class="pta-btn mt-30 mt-md-0">
              <a class="btn btn-blue-3" href="devis">Devis</a>
            </div>
          </div>
        </div>
      </div>
    </section>
     <!-- =====================================
    ======== Pta Area End ==========
    ====================================== -->

    <!-- =====================================
    ======== Count Area Start ==========
    ====================================== -->

    <!-- =====================================
    ======== Count Area End ==========
    ====================================== -->

  </main>
  @endsection
  <!-- =====================================
  ======== Footer Area Start ==========
  ====================================== -->
