@extends('index')
@section('titre', 'liste des pages')
@section('content')
    @include('pages.modal')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                        <h4 class="mb-sm-0">LIste des pagess</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">liste</a></li>
                                <li class="breadcrumb-item active">Page</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->



            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Listes des pages</h5>

                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#liste_categorie_page">
                            liste des categories de pages
                        </button>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="buttons-datatables2" class="display table table-bordered buttons-datatables"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Titre</th>
                                            <th>Categorie</th>
                                           
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            @foreach ($data1 as $item)
                                            <tr>
                                            <td>{{$item->titre_page}}</td>
                                            <td>{{$item->categorie_page_id}}</td>
                                           
                                            <td><center>
                                                <img src="{{asset('storage/'.$item->image)}}" width="80px" alt=""></td>
                                            </center>
                                            <td>$85,675</td>
                                        </tr>
                                            @endforeach
                                           
                                       
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->

        </div>
        <!-- container-fluid -->
    </div>
@endsection
