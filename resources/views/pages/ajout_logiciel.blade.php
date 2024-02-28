
@php
    $logiciel = (!empty($logiciel))  ? $logiciel : 0;
    // dd($logiciel);
    $logicielID = (!empty($logiciel)) ? $logiciel->id : '';
    $titre_logiciel = (!empty($logiciel)) ? ucfirst($logiciel->titre_logiciel) : '';
    $lien_logiciel = (!empty($logiciel)) ? ucfirst($logiciel->lien_logiciel) : '';
    $resume_logiciel = (!empty($logiciel)) ? ucfirst($logiciel->resume_logiciel) : '';
    $description_logiciel = (!empty($logiciel)) ? ucfirst($logiciel->description_logiciel) : '';
    $public_logiciel = (!empty($logiciel)) ? ucfirst($logiciel->public_logiciel) : '';
    $image_logiciel = (!empty($logiciel)) ? ucfirst($logiciel->image_logiciel) : '';

    // dd($logicielID);
@endphp

@extends('index')
@section('titre', 'ajoute de logiciel')
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
                        <h4 class="mb-sm-0">Ajouter une logiciel</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">logiciel</a></li>
                                <li class="breadcrumb-item active">Ajouter une logiciel</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end logiciel title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Merci de bien remplir le formulaire</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">


                                    <!-- categorie logiciel modals -->

                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <form action="/store_logiciel" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" value="{{ $logicielID }}" name="logicielID">

                                    @csrf
                                    <div class="row gy-4">

                                        <div class="col-xxl-4 col-md-4">
                                            <div>
                                                <label for="basiInput" class="form-label">Titre de la logiciel</label>
                                                <input type="text" class="form-control" id="basiInput" name="titre_logiciel" value="{{ $titre_logiciel }}">
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-xxl-4 col-md-4">
                                            <div>
                                                <label for="basiInput" class="form-label">Lien de la logiciel</label>
                                                <input type="text" class="form-control" id="basiInput" name="lien_logiciel" value="{{ $lien_logiciel }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-4 col-md-4">
                                            <label class="form-check-label" for="customSwitchsizelg">Rendre
                                                publique</label>
                                            <div class="form-check form-switch form-switch-lg" dir="ltr">
                                                <input type="checkbox" id="switch3" data-switch="bool" name="public_logiciel" <?php echo ($public_logiciel == "On")?"checked" : "" ?> />
                                                    <label for="switch3" data-on-label="Oui"
                                                           data-off-label="Non"></label>

                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-12 col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title mb-0">Resumé</h4>
                                                </div><!-- end card header -->

                                                <div class="card-body">

                                                    <textarea name="resume_logiciel" id="mymce" style="height: 300px; width: 100%;">{{ $resume_logiciel }}</textarea> <!-- end Snow-editor-->
                                                </div><!-- end card-body -->
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-12 col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title mb-0">Description</h4>
                                                </div><!-- end card header -->

                                                <div class="card-body">

                                                    <textarea name="description_logiciel" id="mymce" style="height: 300px; width: 100%;">{{ $description_logiciel }}</textarea> <!-- end Snow-editor-->
                                                </div><!-- end card-body -->
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <img src="{{ asset('storage/' .$image_logiciel) }}" width="100px" alt=""></div>
                                            <input type="file" name="image_logiciel" id="input-file-max-fs" multiple class="dropify" data-max-file-size="2M" />
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
    </div><!-- End logiciel-content -->



    <!-- end main content-->
@endsection
