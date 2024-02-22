
@php
    $slide = (!empty($slide))  ? $slide : 0;
    // dd($slide);
    $slideID = (!empty($slide)) ? $slide->id : '';
    $titre_slide = (!empty($slide)) ? ucfirst($slide->titre_slide) : '';
    $sous_titre_slide = (!empty($slide)) ? ucfirst($slide->sous_titre_slide) : '';
    $lien_slide = (!empty($slide)) ? ucfirst($slide->lien_slide) : '';
    $description_slide = (!empty($slide)) ? ucfirst($slide->description_slide) : '';
    $public_slide = (!empty($slide)) ? ucfirst($slide->public_slide) : '';
    $image_slide = (!empty($slide)) ? ucfirst($slide->image_slide) : '';

    // dd($slideID);
@endphp

@extends('index')
@section('titre', 'ajoute de slide')
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
                        <h4 class="mb-sm-0">Ajouter une slide</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">slide</a></li>
                                <li class="breadcrumb-item active">Ajouter une slide</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end slide title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Merci de bien remplir le formulaire</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">


                                    <!-- categorie slide modals -->

                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <form action="/store_slide" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" value="{{ $slideID }}" name="slideID">

                                    @csrf
                                    <div class="row gy-4">

                                        <div class="col-xxl-3 col-md-3">
                                            <div>
                                                <label for="basiInput" class="form-label">Titre de la slide</label>
                                                <input type="text" class="form-control" id="basiInput" name="titre_slide" value="{{ $titre_slide }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-3 col-md-3">
                                            <div>
                                                <label for="basiInput" class="form-label">Sous Titre de la slide</label>
                                                <input type="text" class="form-control" id="basiInput" name="sous_titre_slide" value="{{ $sous_titre_slide }}">
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-3">
                                            <div>
                                                <label for="basiInput" class="form-label">Lien de la slide</label>
                                                <input type="text" class="form-control" id="basiInput" name="lien_slide" value="{{ $lien_slide }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-3 col-md-3">
                                            <label class="form-check-label" for="customSwitchsizelg">Rendre
                                                publique</label>
                                            <div class="form-check form-switch form-switch-lg" dir="ltr">
                                                <input type="checkbox" id="switch3" data-switch="bool" name="public_slide" <?php echo ($public_slide == "On")?"checked" : "" ?> />
                                                    <label for="switch3" data-on-label="Oui"
                                                           data-off-label="Non"></label>

                                            </div>
                                        </div>
                                        <!--end col-->

                                        <!--end col-->
                                        <div class="col-xxl-12 col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title mb-0">Description</h4>
                                                </div><!-- end card header -->

                                                <div class="card-body">

                                                    <textarea name="description_slide" id="mymce" style="height: 300px; width: 100%;">{{ $description_slide }}</textarea> <!-- end Snow-editor-->
                                                </div><!-- end card-body -->
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <img src="{{ asset('storage/' .$image_slide) }}" width="100px" alt=""></div>
                                            <input type="file" name="image_slide" id="input-file-max-fs" multiple class="dropify" data-max-file-size="2M" />
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
    </div><!-- End slide-content -->



    <!-- end main content-->
@endsection
