 @php
     $pagesDefaultID = 0;
 @endphp
 <div class="app-menu navbar-menu">
     <!-- LOGO -->
     <div class="navbar-brand-box">
         <!-- Dark Logo-->
         <a href="index.html" class="logo logo-dark">
             <span class="logo-sm">
                @foreach ($site as $item)
                <img src="{{ asset('storage/' . $item->logo_site) }}" alt="" height="22"> 
                @endforeach
             </span>
             <span class="logo-lg">
                @foreach ($site as $item)
                <img src="{{ asset('storage/' . $item->logo_site) }}" alt="" height="17"> 
                @endforeach
             </span>
         </a>
         <!-- Light Logo-->
         <a href="index.html" class="logo logo-light">
             <span class="logo-sm">
                @foreach ($site as $item)
                <img src="{{ asset('storage/' . $item->logo_site) }}" alt="" height="22"> 
                @endforeach
             </span>
             <span class="logo-lg">
                @foreach ($site as $item)
                <img src="{{ asset('storage/' . $item->logo_site) }}" alt="" height="17"> 
                @endforeach
             </span>
         </a>
         <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
             id="vertical-hover">
             <i class="ri-record-circle-line"></i>
         </button>
     </div>

     <div class="dropdown sidebar-user m-1 rounded">
         <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown"
             data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <span class="d-flex align-items-center gap-2">
                 <img class="rounded header-profile-user" src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="Header Avatar">
                 <span class="text-start">
                     <span class="d-block fw-medium sidebar-user-name-text">Anna Adame</span>
                     <span class="d-block fs-14 sidebar-user-name-sub-text"><i
                             class="ri ri-circle-fill fs-10 text-success align-baseline"></i> <span
                             class="align-middle">Online</span></span>
                 </span>
             </span>
         </button>
         <div class="dropdown-menu dropdown-menu-end">
             <!-- item-->
             <h6 class="dropdown-header">Welcome Anna!</h6>
             <a class="dropdown-item" href="{{ route('profile.edit') }}"><i
                     class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                     class="align-middle">Profile</span></a>


             <div class="dropdown-divider"></div>


           <form action="{{ route('logout') }}" method="POST">
            @csrf
             <button class="dropdown-item" type="submit"><i
                     class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle"
                     data-key="t-logggout">Deconnexion</span></button>
                    </form>
         </div>
     </div>
     <div id="scrollbar">
         <div class="container-fluid">


             <div id="two-column-menu">
             </div>
             <ul class="navbar-nav" id="navbar-nav">
                 <li class="menu-title"><span data-key="t-menu">Menu</span></li>








                 <li class="nav-item">
                    <a class="nav-link menu-link" href="#site" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarForms">
                        <i class="ri-file-list-3-line"></i> <span data-key="">Site</span>
                    </a>
                    <div class="collapse menu-dropdown" id="site">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('ajout_site', $pagesDefaultID) }}" class="nav-link"
                                    daata-key="">Ajouter les informations du site</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('liste_site') }}" class="nav-link" data-key=""> Liste des information du site</a>
                            </li>

                        </ul>
                    </div>
                </li>







                 <li class="nav-item">
                     <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse" role="button"
                         aria-expanded="false" aria-controls="sidebarForms">
                         <i class="ri-file-list-3-line"></i> <span data-key="">pages</span>
                     </a>
                     <div class="collapse menu-dropdown" id="sidebarForms">
                         <ul class="nav nav-sm flex-column">
                             <li class="nav-item">
                                 <a href="{{ route('ajout_page', $pagesDefaultID) }}" class="nav-link"
                                     daata-key="">Ajouter une page</a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('liste_page') }}" class="nav-link" data-key=""> Liste des
                                     pages</a>
                             </li>

                         </ul>
                     </div>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link menu-link" href="#produit" data-bs-toggle="collapse" role="button"
                         aria-expanded="false" aria-controls="sidebarForms">
                         <i class="ri-file-list-3-line"></i> <span data-key="">produit</span>
                     </a>
                     <div class="collapse menu-dropdown" id="produit">
                         <ul class="nav nav-sm flex-column">
                             <li class="nav-item">
                                 <a href="{{ route('ajout_produit', $pagesDefaultID) }}" class="nav-link"
                                     daata-key="">Ajouter un produit</a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('liste_produit') }}" class="nav-link" data-key=""> Liste des
                                     produits</a>
                             </li>

                         </ul>
                     </div>
                 </li>


                 <li class="nav-item">
                     <a class="nav-link menu-link" href="#slide" data-bs-toggle="collapse" role="button"
                         aria-expanded="false" aria-controls="sidebarForms">
                         <i class="ri-file-list-3-line"></i> <span data-key="">Slide</span>
                     </a>
                     <div class="collapse menu-dropdown" id="slide">
                         <ul class="nav nav-sm flex-column">
                             <li class="nav-item">
                                 <a href="{{ route('ajout_slide', $pagesDefaultID) }}" class="nav-link"
                                     daata-key="">Ajouter un slide</a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('liste_slide') }}" class="nav-link" data-key=""> Liste des
                                     slides</a>
                             </li>

                         </ul>
                     </div>
                 </li>


                 <li class="nav-item">
                     <a class="nav-link menu-link" href="#service" data-bs-toggle="collapse" role="button"
                         aria-expanded="false" aria-controls="sidebarForms">
                         <i class="ri-file-list-3-line"></i> <span data-key="">Service</span>
                     </a>
                     <div class="collapse menu-dropdown" id="service">
                         <ul class="nav nav-sm flex-column">
                             <li class="nav-item">
                                 <a href="{{ route('ajout_service', $pagesDefaultID) }}" class="nav-link"
                                     daata-key="">Ajouter un service</a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('liste_service') }}" class="nav-link" data-key=""> Liste des
                                     service</a>
                             </li>

                         </ul>
                     </div>
                 </li>



                 <li class="nav-item">
                     <a class="nav-link menu-link" href="#blog" data-bs-toggle="collapse" role="button"
                         aria-expanded="false" aria-controls="sidebarForms">
                         <i class="ri-file-list-3-line"></i> <span data-key="">Blog</span>
                     </a>
                     <div class="collapse menu-dropdown" id="blog">
                         <ul class="nav nav-sm flex-column">
                             <li class="nav-item">
                                 <a href="{{ route('ajout_blog', $pagesDefaultID) }}" class="nav-link"
                                     daata-key="">Ajouter un blog</a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('liste_blog') }}" class="nav-link" data-key=""> Liste des
                                     blogs</a>
                             </li>

                         </ul>
                     </div>
                 </li>


                 <li class="nav-item">
                    <a class="nav-link menu-link" href="#membre" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarForms">
                        <i class="ri-file-list-3-line"></i> <span data-key="">Membre</span>
                    </a>
                    <div class="collapse menu-dropdown" id="membre">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('ajout_membre', $pagesDefaultID) }}" class="nav-link"
                                    daata-key="">Ajouter un membre</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('liste_membre') }}" class="nav-link" data-key=""> Liste des
                                    membres</a>
                            </li>

                        </ul>
                    </div>
                </li>



                <li class="nav-item">
                    <a class="nav-link menu-link" href="#devis" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarForms">
                        <i class="ri-file-list-3-line"></i> <span data-key="">Demande de devis</span>
                    </a>
                    <div class="collapse menu-dropdown" id="devis">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">
                                <a href="{{ route('liste_devis') }}" class="nav-link" data-key=""> Liste des devis</a>
                            </li>

                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-link" href="#contact" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarForms">
                        <i class="ri-file-list-3-line"></i> <span data-key="">Contact</span>
                    </a>
                    <div class="collapse menu-dropdown" id="contact">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">
                                <a href="{{ route('liste_contact') }}" class="nav-link" data-key=""> Liste des contacts</a>
                            </li>

                        </ul>
                    </div>
                </li>



                <li class="nav-item">
                    <a class="nav-link menu-link" href="#logiciel" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarForms">
                        <i class="ri-file-list-3-line"></i> <span data-key="">Logiciel</span>
                    </a>
                    <div class="collapse menu-dropdown" id="logiciel">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('ajout_logiciel', $pagesDefaultID) }}" class="nav-link"
                                    daata-key="">Ajouter un logiciel</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('liste_logiciel') }}" class="nav-link" data-key=""> Liste des logiciels</a>
                            </li>

                        </ul>
                    </div>
                </li>



                <li class="nav-item">
                    <a class="nav-link menu-link" href="#video" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarForms">
                        <i class="ri-file-list-3-line"></i> <span data-key="">Video</span>
                    </a>
                    <div class="collapse menu-dropdown" id="video">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('ajout_video', $pagesDefaultID) }}" class="nav-link"
                                    daata-key="">Ajouter une viedo</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('liste_video') }}" class="nav-link" data-key=""> Liste des
                                    videos</a>
                            </li>

                        </ul>
                    </div>
                </li>



                <li class="nav-item">
                    <a class="nav-link menu-link" href="#menu" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarForms">
                        <i class="ri-file-list-3-line"></i> <span data-key="">Menu</span>
                    </a>
                    <div class="collapse menu-dropdown" id="menu">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('ajout_menu', $pagesDefaultID) }}" class="nav-link"
                                    daata-key="">Ajouter un menu</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('liste_menu') }}" class="nav-link" data-key=""> Liste des
                                    menu</a>
                            </li>

                        </ul>
                    </div>
                </li>



                <li class="nav-item">
                    <a class="nav-link menu-link" href="#utilisateur" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarForms">
                        <i class="ri-file-list-3-line"></i> <span data-key="">Utilisateur</span>
                    </a>
                    <div class="collapse menu-dropdown" id="utilisateur">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link"
                                    daata-key="">Ajouter un utlisateur</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('liste_menu') }}" class="nav-link" data-key=""> Liste des
                                    utilisateur</a>
                            </li>

                        </ul>
                    </div>
                </li>



             </ul>
         </div>
         <!-- Sidebar -->
     </div>

     <div class="sidebar-background"></div>
 </div>
