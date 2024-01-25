@extends('index')
@section('titre', 'ajoute de page')
@section('content')


    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                        <h4 class="mb-sm-0">Ajouter une page</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Page</a></li>
                                <li class="breadcrumb-item active">Ajouter une page</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Merci de bien remplir le formulaire</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">


                                    <!-- categorie page modals -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#categorie_page">
                                        Ajouter une categorie
                                    </button>
                                    <div class="modal fade" id="categorie_page" tabindex="-1"
                                        aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalgridLabel">Categorie des pages
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('store') }}" method="POST">
                                                        @csrf
                                                        <div class="row g-3">
                                                            <div class="col-xxl-6">
                                                                <div>
                                                                    <label for="firstName" class="form-label">Parent</label>
                                                                    <select class="js-example-basic-single" name="parent">
                                                                        <option value=""></option>
                                                                        @foreach ($data as $item)
                                                                            <option value="{{ $item->id }}">
                                                                                {{ $item->fils }}
                                                                            </option>
                                                                        @endforeach


                                                                    </select>
                                                                </div>
                                                            </div><!--end col-->
                                                            <div class="col-xxl-6">
                                                                <div>
                                                                    <label for="lastName" class="form-label">fils</label>
                                                                    <input type="text" class="form-control"
                                                                        id="lastName" placeholder="..." name="fils">
                                                                </div>
                                                            </div><!--end col-->



                                                            <div class="col-lg-12">
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <button type="button" class="btn btn-light"
                                                                        data-bs-dismiss="modal">Fermé</button>
                                                                    <button type="submit" class="btn btn-primary">
                                                                        Valider</button>
                                                                </div>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-3 col-md-4">
                                        <div>
                                            <label for="basiInput" class="form-label">Titre de la page</label>
                                            <input type="password" class="form-control" id="basiInput" name="titre_page">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-4">
                                        <div>
                                            <label for="labelInput" class="form-label">Categorie page</label>
                                            <select class="js-example-basic-single" name="categorie_page_id">
                                                @foreach ($data as $item)
                                                    <option value="{{ $item->id }}">
                                                        {{ $item->fils }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-4">
                                        <div class="form-check form-switch form-switch-lg" dir="ltr">
                                            <input type="checkbox" class="form-check-input" id="customSwitchsizelg"
                                                checked="">
                                            <label class="form-check-label" for="customSwitchsizelg">Rendre publique</label>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title mb-0">Resumé</h4>
                                            </div><!-- end card header -->

                                            <div class="card-body">

                                                <textarea name="resume_page" class="snow-editor" style="height: 300px; width: 100%;">




                                                </textarea> <!-- end Snow-editor-->
                                            </div><!-- end card-body -->
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title mb-0">Description</h4>
                                            </div><!-- end card header -->

                                            <div class="card-body">

                                                <div name="resume_page" class="snow-editor"
                                                    style="height: 300px; width: 100%;">




                                                </div> <!-- end Snow-editor-->
                                            </div><!-- end card-body -->
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title mb-0">Photo</h4>
                                            </div><!-- end card header -->

                                            <div class="card-body">


                                                <div class="dropzone">
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple="multiple">
                                                    </div>
                                                    <div class="dz-message needsclick">
                                                        <div class="mb-3">
                                                            <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                                        </div>

                                                        <h4>Importer la photo ici</h4>
                                                    </div>
                                                </div>

                                                <ul class="list-unstyled mb-0" id="dropzone-preview">
                                                    <li class="mt-2" id="dropzone-preview-list">
                                                        <!-- This is used as the file preview template -->
                                                        <div class="border rounded">
                                                            <div class="d-flex p-2">
                                                                <div class="flex-shrink-0 me-3">
                                                                    <div class="avatar-sm bg-light rounded">
                                                                        <img data-dz-thumbnail
                                                                            class="img-fluid rounded d-block"
                                                                            src="assets/images/new-document.png"
                                                                            alt="Dropzone-Image" />
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="pt-1">
                                                                        <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                                                                        <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                                                        <strong class="error text-danger"
                                                                            data-dz-errormessage></strong>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-shrink-0 ms-3">
                                                                    <button data-dz-remove
                                                                        class="btn btn-sm btn-danger">Delete</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!-- end dropzon-preview -->
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>

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
    </div><!-- End Page-content -->



    <!-- end main content-->
@endsection
