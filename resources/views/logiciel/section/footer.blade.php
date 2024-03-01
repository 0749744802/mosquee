<section class="footer-area" style="background-image: url(./logiciel/assets/img/footer-bg.png);">
    <div class="footer-main section-padding">
      <div class="container">
        
        
        <div class="row mt-60">
          <div class="col-md-4">
            <div class="footer-logo">
              <a href="accueil">
                @foreach ($site as $item)
                <img src="{{ asset('storage/' . $item->logo_site) }}" alt="logo" width="200px">
                @endforeach
                
              </a>
              @foreach ($site as $item)
              <p class="font-14">{!! $item->description_site !!}</p>
              @endforeach
              <div class="footer-socile-link mt-20">
                @foreach ($site as $item)
                <a href="{{ $item->facebook_site }}"><span><i class="fab fa-facebook-f"></i></span></a>
                @endforeach
                @foreach ($site as $item)
                <a href="{{ $item->linkedin_site }}"><span><i class="fab fa-linkedin-in"></i></span></a>
                @endforeach
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="footer-menu mt-30 mt-md-0">
              <ul class="opacity-80">
                <li><a href="service&id=1">Logiciel</a></li>
                <li><a href="service&id=2">Developpement</a></li>
                <li><a href="devis">Devis</a></li>
                <li><a href="https://ticafrique.com/" target="_bank">Ticafrique</a></li>
                <li><a href="contact">Contact</a></li>
              </ul>
            </div>
          </div>
         
          <div class="col-md-6">
            <div class="footer-adress pl-0 pl-lg-30 opacity-80">
                
              <p>Côte d'ivoire Abidjan,
                Cocody Angré, cité belle fleur</p>
                @foreach ($site as $item)
                <p class="mt-10">{{ $item->numero1_site }}</p>
                @endforeach
              
                @foreach ($site as $item)
                <p class="mt-10">{{ $item->email1_site }}</p>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-site-info">
      <div class="container text-center py-30">
        <p class="opacity-80">Copyrights {{ date('Y') }}© Ticafrique</p>
      </div>
    </div>
  </section>
