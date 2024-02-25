@php
    $membre = !empty($membre) ? $membre : 0;
    // dd($membre);
    $membreID = !empty($membre) ? $membre->id : '';
    $nom_membre = !empty($membre) ? ucfirst($membre->nom_membre) : '';
    $fonction_membre = !empty($membre) ? ucfirst($membre->fonction_membre) : '';
    $email_membre = !empty($membre) ? ucfirst($membre->email_membre) : '';
    $numero_membre = !empty($membre) ? ucfirst($membre->numero_membre) : '';
    $public_membre = !empty($membre) ? ucfirst($membre->public_membre) : '';
    $image_membre = !empty($membre) ? ucfirst($membre->image_membre) : '';

    // dd($membreID);

@endphp

@extends('index')
@section('titre', 'ajoute de membre')
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
                        <h4 class="mb-sm-0">Ajouter une membre</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">membre</a></li>
                                <li class="breadcrumb-item active">Ajouter un membre</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end membre title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Merci de bien remplir le formulaire</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">


                                    <!-- categorie membre modals -->

                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <form action="/store_membre" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" value="{{ $membreID }}" name="membreID">

                                    @csrf
                                    <div class="row gy-4">

                                        <div class="col-xxl-4 col-md-4">
                                            <div>
                                                <label for="basiInput" class="form-label">Nom du membre</label>
                                                <input type="text" class="form-control" id="basiInput" name="nom_membre"
                                                    value="{{ $nom_membre }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-4 col-md-4">
                                            <div>
                                                <label for="basiInput" class="form-label">Fonction du membre</label>
                                                <input type="text" class="form-control" id="basiInput"
                                                    name="fonction_membre" value="{{ $fonction_membre }}">
                                            </div>
                                        </div>

                                        <!--end col-->
                                        <div class="col-xxl-4 col-md-4">
                                            <label class="form-check-label" for="customSwitchsizelg">Rendre
                                                publique</label>
                                            <div class="form-check form-switch form-switch-lg" dir="ltr">
                                                <input type="checkbox" id="switch3" data-switch="bool"
                                                    name="public_membre" <?php echo $public_membre == 'On' ? 'checked' : ''; ?> />
                                                <label for="switch3" data-on-label="Oui" data-off-label="Non"></label>

                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="basiInput" class="form-label">Email du membre</label>
                                                <input type="text" class="form-control" id="basiInput"
                                                    name="email_membre" value="{{ $email_membre }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="basiInput" class="form-label">Numero du membre</label>
                                                <input type="text" class="form-control" id="basiInput"
                                                    name="numero_membre" value="{{ $numero_membre }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <img src="{{ asset('storage/' . $image_membre) }}" width="100px"
                                                alt="">
                                        </div>
                                        <input type="file" name="image_membre" id="input-file-max-fs" multiple
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
    </div><!-- End membre-content -->



    <!-- end main content-->
@endsection
