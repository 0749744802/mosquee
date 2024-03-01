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
              <h2 class="font-md-60 white">Nous contacter</h2>

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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.13692947157!2d-3.993464624997176!3d5.3960976352369014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc194a6d23e34df%3A0xb57679beb78c7b98!2sTICAFRIQUE!5e0!3m2!1sfr!2sci!4v1709212578035!5m2!1sfr!2sci" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contact-address mt-30">
              <h3 class="font-24 font-roboto font-medium">Addresse</h3>
              <p class="mt-10 opacity-80">Côte d'ivoire Abidjan,
                Cocody Angré, cité belle fleur</p>
            </div>
            <div class="contact-phone mt-20">
              <h3 class="font-24 font-roboto font-medium">telephone</h3>
              @foreach ($site as $item)
              <p class="mt-10">{{ $item->numero1_site }}</p>
              @endforeach
             
              @foreach ($site as $item)
              <p class="mt-10 opacity-80">{!! $item->description_site !!}</p>
              @endforeach
              

            </div>
          </div>
          <div class="col-md-12 col-lg-7">
            <div class="contact-form mt-60">
                @if (session('success'))
                <script>
                    window.onload=function()
                    {
                        Swal.fire({
              // position: "top-end",
               icon: "success",
               title: "L\'e-mail a été envoyé avec succès !",
               showConfirmButton: false,
               timer: 1500
             });
                    };
                </script>
            @endif
              <form class="form" method="POST" action="Store_contactController" >
                @csrf
                <h5>Nom & prénom* </h5>
                <div class="row">
                  <div class="col-md-12">
                    <input class="form-input" type="text" placeholder="Nom" name="nom_contact">
                  </div>

                </div>
                <h5 class="mt-30">Email * </h5>
                <div class="row">
                  <div class="col-md-12">
                    <input class="form-input" type="text" placeholder="Email" name="email_contact">
                  </div>
                </div>
                <h5 class="mt-30">telephone* </h5>
                <div class="row">
                  <div class="col-md-12">
                    <input class="form-input" type="text" placeholder="numero" name="numero_contact">
                  </div>
                </div>
                <h5 class="mt-30">Subjet* </h5>
                <div class="row">
                  <div class="col-md-12">
                    <input class="form-input" type="text" placeholder="Subjet" name="sujet_contact">
                  </div>
                </div>
                <h5 class="mt-30">Message* </h5>
                <textarea class="form-input" cols="30" rows="10" placeholder="Message" name="message_contact"></textarea>
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
                <a class="btn btn-blue-3" href="logiciels">Nos logiciel <span><i class="fas fa-caret-right"></i></span></a>
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
