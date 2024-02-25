@extends('index')
@section('titre', 'ajoute de blog')
@section('content')
<div class="page-content">
        @php
    $blog = (!empty($blog))  ? $blog : 0;
    // dd($blog);
    $blogID = (!empty($blog)) ? $blog->id : '';
    $titre_blog = (!empty($blog)) ? ucfirst($blog->titre_blog) : '';
    $resume_blog = (!empty($blog)) ? ucfirst($blog->resume_blog) : '';
    $description_blog = (!empty($blog)) ? ucfirst($blog->description_blog) : '';
    $public_blog = (!empty($blog)) ? ucfirst($blog->public_blog) : '';
    $image_blog = (!empty($blog)) ? ucfirst($blog->image_blog) : '';

    // dd($blogID);
@endphp

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
                        <h4 class="mb-sm-0">Ajouter une blog</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">blog</a></li>
                                <li class="breadcrumb-item active">Ajouter un blog</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end blog title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Merci de bien remplir le formulaire</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">


                                    <!-- categorie blog modals -->

                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <form action="/store_blog" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" value="{{ $blogID }}" name="blogID">

                                    @csrf
                                    <div class="row gy-4">

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="basiInput" class="form-label">Titre de la blog</label>
                                                <input type="text" class="form-control" id="basiInput" name="titre_blog" value="{{ $titre_blog }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        
                                        
                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6">
                                            <label class="form-check-label" for="customSwitchsizelg">Rendre
                                                publique</label>
                                            <div class="form-check form-switch form-switch-lg" dir="ltr">
                                                <input type="checkbox" id="switch3" data-switch="bool" name="public_blog" <?php echo ($public_blog == "On")?"checked" : "" ?> />
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

                                                    <textarea name="resume_blog" id="mymce" style="height: 300px; width: 100%;">{{ $resume_blog }}</textarea> <!-- end Snow-editor-->
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

                                                    <textarea name="description_blog" id="mymce" style="height: 300px; width: 100%;">{{ $description_blog }}</textarea> <!-- end Snow-editor-->
                                                </div><!-- end card-body -->
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <img src="{{ asset('storage/' .$image_blog) }}" width="100px" alt=""></div>
                                            <input type="file" name="image_blog" id="input-file-max-fs" multiple class="dropify" data-max-file-size="2M" />
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
    </div><!-- End blog-content -->



    <!-- end main content-->
@endsection
