@php
    $produit = (!empty($produit))  ? $produit : 0;
    // dd($produit);
    $produitID = (!empty($produit)) ? $produit->id : '';
    $titre_produit = (!empty($produit)) ? ucfirst($produit->titre_produit) : '';
    $public_produit = (!empty($produit)) ? ucfirst($produit->public_produit) : '';
    $categorie_produit_id = (!empty($produit)) ? ucfirst($produit->categorie_produit_id) : '';
    $stock_produit = (!empty($produit)) ? ucfirst($produit->stock_produit) : '';
    $prix_produit = (!empty($produit)) ? ucfirst($produit->prix_produit) : '';
    $reduction_produit = (!empty($produit)) ? ucfirst($produit->reduction_produit) : '';
    $appreciation_produit_id = (!empty($produit)) ? ucfirst($produit->appreciation_produit_id) : '';
    $resume_produit = (!empty($produit)) ? ucfirst($produit->resume_produit) : '';
    $description_produit = (!empty($produit)) ? ucfirst($produit->description_produit) : '';
    $image_produit = (!empty($produit)) ? ucfirst($produit->image_produit) : '';




@endphp


@extends('index')

@section('titre', 'ajoute de produit')

@section('content')


    <div class="page-content">
        @include('pages.modal_produit')
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
                        <h4 class="mb-sm-0">Ajouter un produit</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Produit</a></li>
                                <li class="breadcrumb-item active">Ajouter une produit</li>
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


                                    <!-- categorie produit modals -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#categorie_page">
                                        Ajouter une categorie
                                    </button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#categorie_appreciation">
                                    Ajouter une appreciation
                                </button>

                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <form action="/store_produit" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" value="{{ $produitID }}"  name="produitID">


                                    @csrf
                                    <div class="row gy-4">

                                        <div class="col-xxl-4 col-md-4">
                                            <div>
                                                <label for="basiInput" class="form-label">Titre du produit</label>
                                                <input type="text" class="form-control" id="basiInput" name="titre_produit" value="{{ $titre_produit }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-4 col-md-4">
                                            <div>
                                                <label for="labelInput" class="form-label">Categorie du produit</label>
                                                <select class="js-example-basic-single" name="categorie_produit_id">
                                                    @foreach ($categorie_produit as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ $item->id== $categorie_produit_id ? "selected":"" }}>
                                                            {{ $item->categorie_produit_secondaire }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-4 col-md-4">
                                            <label class="form-check-label" for="customSwitchsizelg">Rendre
                                                publique</label>
                                            <div class="form-check form-switch form-switch-lg" dir="ltr">
                                                <input type="checkbox" id="switch3" data-switch="bool" name="public_produit" <?php echo ($public_produit == "On")?"checked" : "" ?> />
                                                    <label for="switch3" data-on-label="Oui"
                                                           data-off-label="Non"></label>

                                            </div>
                                        </div>
                                        <div class="row gy-4">

                                            <div class="col-xxl-4 col-md-4">
                                                <div>
                                                    <label for="basiInput" class="form-label">Stock du produit</label>
                                                    <input type="text" class="form-control" id="basiInput" name="stock_produit" value="{{ $stock_produit }}" >
                                                </div>
                                            </div>


                                                <div class="col-xxl-4 col-md-4">
                                                    <div>
                                                        <label for="basiInput" class="form-label">Prix du produit</label>
                                                        <input type="text" class="form-control" id="basiInput" name="prix_produit" value="{{ $prix_produit }}" >
                                                    </div>
                                                </div>


                                                <div class="col-xxl-4 col-md-4">
                                                    <div>
                                                        <label for="basiInput" class="form-label">Reduction du produit</label>
                                                        <input type="text" class="form-control" id="basiInput" name="reduction_produit" value="{{ $reduction_produit }}" >
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-md-4">
                                                    <div>
                                                        <label for="labelInput" class="form-label">Apreciation</label>
                                                        <select class="js-example-basic-single" name="appreciation_produit_id">
                                                            @foreach ($appreciation_produit as $item)
                                                                <option value="{{ $item->id }}"
                                                                    {{ $item->id== $appreciation_produit_id? "selected":"" }}>
                                                                    {{ $item->titre_appreciation }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                        <!--end col-->
                                        <div class="col-xxl-12 col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title mb-0">Resumé</h4>
                                                </div><!-- end card header -->

                                                <div class="card-body">

                                                    <textarea name="resume_produit"  id="mymce" style="height: 300px; width: 100%;">
                                                        {{ $resume_produit }}
                                                    </textarea>
                                                    <!-- end Snow-editor-->
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

                                                    <textarea name="description_produit" id="mymce" style="height: 300px; width: 100%;">{{ $description_produit }}</textarea> <!-- end Snow-editor-->
                                                </div><!-- end card-body -->
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <img src="{ asset('storage/' . $image_produit) }}" width="100px" alt=""></div>
                                            <input type="file" name="image_produit" id="input-file-max-fs" multiple class="dropify" data-max-file-size="2M" />
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
    </div><!-- End Page-content -->



    <!-- end main content-->
@endsection
