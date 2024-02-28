
@php
    $video = (!empty($video))  ? $video : 0;
    // dd($video);
    $videoID = (!empty($video)) ? $video->id : '';
    $titre_video = (!empty($video)) ? ucfirst($video->titre_video) : '';
    $lien_video = (!empty($video)) ? ucfirst($video->lien_video) : '';
    $resume_video = (!empty($video)) ? ucfirst($video->resume_video) : '';
    $description_video = (!empty($video)) ? ucfirst($video->description_video) : '';
    $public_video = (!empty($video)) ? ucfirst($video->public_video) : '';
    $image_video = (!empty($video)) ? ucfirst($video->image_video) : '';

    // dd($videoID);
@endphp

@extends('index')
@section('titre', 'ajoute de video')
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
                        <h4 class="mb-sm-0">Ajouter une video</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">video</a></li>
                                <li class="breadcrumb-item active">Ajouter une video</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end video title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Merci de bien remplir le formulaire</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">


                                    <!-- categorie video modals -->

                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <form action="/store_video" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" value="{{ $videoID }}" name="videoID">

                                    @csrf
                                    <div class="row gy-4">

                                        <div class="col-xxl-4 col-md-4">
                                            <div>
                                                <label for="basiInput" class="form-label">Titre de la video</label>
                                                <input type="text" class="form-control" id="basiInput" name="titre_video" value="{{ $titre_video }}">
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-xxl-4 col-md-4">
                                            <div>
                                                <label for="basiInput" class="form-label">Lien de la video</label>
                                                <input type="text" class="form-control" id="basiInput" name="lien_video" value="{{ $lien_video }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-4 col-md-4">
                                            <label class="form-check-label" for="customSwitchsizelg">Rendre
                                                publique</label>
                                            <div class="form-check form-switch form-switch-lg" dir="ltr">
                                                <input type="checkbox" id="switch3" data-switch="bool" name="public_video" <?php echo ($public_video == "On")?"checked" : "" ?> />
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

                                                    <textarea name="resume_video" id="mymce" style="height: 300px; width: 100%;">{{ $resume_video }}</textarea> <!-- end Snow-editor-->
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

                                                    <textarea name="description_video" id="mymce" style="height: 300px; width: 100%;">{{ $description_video }}</textarea> <!-- end Snow-editor-->
                                                </div><!-- end card-body -->
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <img src="{{ asset('storage/' .$image_video) }}" width="100px" alt=""></div>
                                            <input type="file" name="image_video" id="input-file-max-fs" multiple class="dropify" data-max-file-size="2M" />
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
    </div><!-- End video-content -->



    <!-- end main content-->
@endsection
