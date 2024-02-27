@extends('index')
@section('titre', 'ajoute de Menu')
@section('content')
<div class="page-content">
        @php
    $menu = (!empty($menu))  ? $menu : 0;
    // dd($Menu);
    $menuID = (!empty($menu)) ? $menu->id : '';
    $principale_menu = (!empty($menu)) ? ucfirst($menu->principale_menu) : '';
    $sous_menu = (!empty($menu)) ? ucfirst($menu->sous_menu) : '';
    $ordre_menu = (!empty($menu)) ? ucfirst($menu->ordre_menu) : '';
    $public_menu = (!empty($menu)) ? ucfirst($menu->public_menu) : '';


    // dd($MenuID);
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
                        <h4 class="mb-sm-0">Ajouter une Menu</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                                <li class="breadcrumb-item active">Ajouter un Menu</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end Menu title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Merci de bien remplir le formulaire</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">


                                    <!-- categorie Menu modals -->

                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <form action="/store_menu" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" value="{{ $menuID }}" name="menuID">

                                    @csrf
                                    <div class="row gy-4">

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="basiInput" class="form-label">Principale Menu</label>
                                                <select class="js-example-basic-single" name="principale_menu">
                                                    <option value=""></option>
                                                    @foreach ($data as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $item->id==$principale_menu? "selected":"" }}>
                                                        {{ $item->sous_menu }}
                                                    </option>
                                                    @endforeach


                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="basiInput" class="form-label">Sous Menu</label>
                                                <input type="text" class="form-control" id="basiInput" name="sous_menu" value="{{ $sous_menu }}">
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="basiInput" class="form-label">Ordre Menu</label>
                                                <input type="text" class="form-control" id="basiInput" name="ordre_menu" value="{{ $ordre_menu }}">
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-md-6">
                                            <label class="form-check-label" for="customSwitchsizelg">Rendre
                                                publique</label>
                                            <div class="form-check form-switch form-switch-lg" dir="ltr">
                                                <input type="checkbox" id="switch3" data-switch="bool" name="public_menu" <?php echo ($public_menu == "On")?"checked" : "" ?> />
                                                    <label for="switch3" data-on-label="Oui"
                                                           data-off-label="Non"></label>

                                            </div>
                                        </div>
                                        <!--end col-->

                                        <!--end col-->

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
    </div><!-- End Menu-content -->



    <!-- end main content-->
@endsection
