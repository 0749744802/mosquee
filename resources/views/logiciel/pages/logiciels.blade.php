@extends('logiciel.index')
@section('titre', 'Logiciel')
@section('content')
  <!-- =====================================
  ============ Header Area End ============
  ====================================== -->
  <main>

    <!-- =====================================
    ============ Page Banner Area Start ============
    ====================================== -->
    <section class="banner-area page-banner-2" style="background-image: url(./logiciel/assets/img/casess-banner.png);">
        <div class="container">
          <div class="banner-content d-flex justify-content-center flex-column text-center">
              <h2 class="font-md-60 white text-center">Cases</h2>
              <h4 class="white font-20 font-light text-center font-roboto opacity-80 mt-15">Some of our most loved Case Study</h4>
          </div>
        </div>
    </section>
    <!-- =====================================
    ============ Page Banner Area End ============
    ====================================== -->

    <!-- =====================================
    ======== Cases Page Area Start ==========
    ====================================== -->
    <section class="cases-page section-padding">
        <div class="container">
           


           @foreach ($logiciels as $item)
           <div class="cases-box cases-box-1">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cases-img">
                        <img src="{{ asset('storage/' . $item->image_logiciel) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cases-content">
                        <h3 class="font-30 font-medium">{{ $item->titre_logiciel }}</h3>
                        <p class="mt-20 opacity-80">{!! $item->description_logiciel !!}</p>
                        <div class="cases-btn mt-20">
                            <a class="btn btn-overlay-2" href="{{ $item->lien_logiciel }} " target="_bank">Voir la demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           @endforeach
            
            
        </div>
    </section>
    <!-- =====================================
    ======== Cases Page Area End ==========
    ====================================== -->

    <!-- =====================================
    ======== pta Area Start ==========
    ====================================== -->
   
    <!-- =====================================
    ======== video Area End ==========
    ====================================== -->

  </main>
  @endsection
  <!-- =====================================
  ======== Footer Area Start ==========
  ====================================== -->
 