@php
    $site = !empty($site) ? $site : 0;
    // dd($site);
    $siteID = !empty($site) ? $site->id : '';
    $nom_site = !empty($site) ? ucfirst($site->nom_site) : '';
    $numero1_site = !empty($site) ? ucfirst($site->numero1_site) : '';
    $numero2_site = !empty($site) ? ucfirst($site->numero2_site) : '';
    $numero3_site = !empty($site) ? ucfirst($site->numero3_site) : '';
    $fixe1_site = !empty($site) ? ucfirst($site->fixe1_site) : '';
    $fixe2_site = !empty($site) ? ucfirst($site->fixe2_site) : '';
    $facebook_site = !empty($site) ? ucfirst($site->facebook_site) : '';
    $whatsapp_site = !empty($site) ? ucfirst($site->whatsapp_site) : '';
    $linkedin_site = !empty($site) ? ucfirst($site->linkedin_site) : '';
    $google_site = !empty($site) ? ucfirst($site->google_site) : '';
    $tag_site = !empty($site) ? ucfirst($site->tag_site) : '';
    $map_site = !empty($site) ? ucfirst($site->map_site) : '';
    $description_site = !empty($site) ? ucfirst($site->description_site) : '';
    $email1_site = !empty($site) ? ucfirst($site->email1_site) : '';
    $email2_site = !empty($site) ? ucfirst($site->email2_site) : '';
    $email3_site = !empty($site) ? ucfirst($site->email3_site) : '';
    $logo_site = !empty($site) ? ucfirst($site->logo_site) : '';


    // dd($siteID);

@endphp

@extends('index')
@section('titre', 'ajoute des informations du site')
@section('content')


    <div class="page-content">

        @if (session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                        <h4 class="mb-sm-0">Ajouter les informations du site</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">site</a></li>
                                <li class="breadcrumb-item active">Ajouter les informations du site</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end site title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Merci de bien remplir le formulaire</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">


                                    <!-- categorie site modals -->

                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <form action="/store_site" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" value="{{ $siteID }}" name="siteID">

                                    @csrf
                                    <div class="row gy-4">

                                        <div class="col-xxl-3 col-md-3">
                                            <div>
                                                <label for="basiInput" class="form-label">Nom du site</label>
                                                <input type="text" class="form-control" id="basiInput" name="nom_site"
                                                    value="{{ $nom_site }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-3 col-md-3">
                                            <div>
                                                <label for="basiInput" class="form-label">Numero principal du site</label>
                                                <input type="text" class="form-control" id="basiInput"
                                                    name="numero1_site" value="{{ $numero1_site }}">
                                            </div>
                                        </div>

                                        <!--end col-->
                                        <div class="col-xxl-3 col-md-3">
                                            <div>
                                                <label for="basiInput" class="form-label">Numero secondaire du site</label>
                                                <input type="text" class="form-control" id="basiInput"
                                                    name="numero2_site" value="{{ $numero3_site }}">
                                            </div>
                                        </div>


                                        <div class="col-xxl-3 col-md-3">
                                            <div>
                                                <label for="basiInput" class="form-label">Numero tertiaire du site</label>
                                                <input type="text" class="form-control" id="basiInput"
                                                    name="numero3_site" value="{{ $numero3_site }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-3 col-md-3">
                                            <div>
                                                <label for="basiInput" class="form-label">numero fixe principal du site</label>
                                                <input type="text" class="form-control" id="basiInput"
                                                    name="fixe1_site" value="{{ $fixe1_site }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-3 col-md-3">
                                            <div>
                                                <label for="basiInput" class="form-label">Numero fixe secondaire du site</label>
                                                <input type="text" class="form-control" id="basiInput"
                                                    name="fixe2_site" value="{{ $fixe2_site }}">
                                            </div>
                                        </div>


                                        <div class="col-xxl-3 col-md-3">
                                            <div>
                                                <label for="basiInput" class="form-label">Facebook du site</label>
                                                <input type="text" class="form-control" id="basiInput"
                                                    name="facebook_site" value="{{ $facebook_site }}">
                                            </div>
                                        </div>


                                        <div class="col-xxl-3 col-md-3">
                                            <div>
                                                <label for="basiInput" class="form-label">Whatsapp du site</label>
                                                <input type="text" class="form-control" id="basiInput"
                                                    name="whatsapp_site" value="{{ $whatsapp_site }}">
                                            </div>
                                        </div>


                                        <div class="col-xxl-3 col-md-3">
                                            <div>
                                                <label for="basiInput" class="form-label">Linkedin du site</label>
                                                <input type="text" class="form-control" id="basiInput"
                                                    name="linkedin_site" value="{{ $linkedin_site }}">
                                            </div>
                                        </div>


                                        <div class="col-xxl-3 col-md-3">
                                            <div>
                                                <label for="basiInput" class="form-label">Google du site</label>
                                                <input type="text" class="form-control" id="basiInput"
                                                    name="google_site" value="{{ $google_site }}">
                                            </div>
                                        </div>


                                        <div class="col-xxl-3 col-md-3">
                                            <div>
                                                <label for="basiInput" class="form-label">Tag du site</label>
                                                <input type="text" class="form-control" id="basiInput"
                                                    name="tag_site" value="{{ $tag_site }}">
                                            </div>
                                        </div>


                                        <div class="col-xxl-3 col-md-3">
                                            <div>
                                                <label for="basiInput" class="form-label">Email principal du site</label>
                                                <input type="text" class="form-control" id="basiInput"
                                                    name="email1_site" value="{{ $email1_site }}">
                                            </div>
                                        </div>


                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="basiInput" class="form-label">Email secondaire du site</label>
                                                <input type="text" class="form-control" id="basiInput"
                                                    name="email2_site" value="{{ $email2_site }}">
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="basiInput" class="form-label">Email tertiaire du site</label>
                                                <input type="text" class="form-control" id="basiInput"
                                                    name="email3_site" value="{{ $email3_site }}">
                                            </div>
                                        </div>


                                        <div class="col-xxl-12 col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title mb-0">Map du site</h4>
                                                </div><!-- end card header -->

                                                <div class="card-body">

                                                    <textarea name="map_site" id="mymce" style="height: 300px; width: 100%;">{{ $map_site }}</textarea> <!-- end Snow-editor-->
                                                </div><!-- end card-body -->
                                            </div>
                                        </div>


                                        <div class="col-xxl-12 col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title mb-0">Description du site</h4>
                                                </div><!-- end card header -->

                                                <div class="card-body">

                                                    <textarea name="description_site" id="mymce" style="height: 300px; width: 100%;">{{ $description_site }}</textarea> <!-- end Snow-editor-->
                                                </div><!-- end card-body -->
                                            </div>
                                        </div>


                                        <div class="col-lg-12">
                                            <img src="{{ asset('storage/' . $logo_site) }}" width="100px"
                                                alt="">
                                        </div>
                                        <input type="file" name="logo_site" id="input-file-max-fs" multiple
                                            class="dropify" data-max-file-size="2M" />
                                        <div class="invalid-tooltip">
                                            Please provide a valid city.
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <div class="input-group">

                                        <button class="btn btn-success" type="submit">Valider</button>
                                    </div>
                                </form>
                                <!--end col-->

                                <!--end col-->

                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <div class="d-none code-view">

                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->


        <!--end row-->


        <!--end row-->



        <!--end row-->


        <!--end row-->


        <!--end row-->


        <!--end row-->


        <!--end row-->


        <!--end row-->

    </div> <!-- container-fluid -->
    </div>
    </div><!-- End site-content -->



    <!-- end main content-->
@endsection
