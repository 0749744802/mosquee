@extends('index')
@section('titre', 'liste des sites')
@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start site title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                        <h4 class="mb-sm-0">LIste des informations sites</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">liste</a></li>
                                <li class="breadcrumb-item active">site</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end site title -->



            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Listes des informations sites</h5>

                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                @if (session('success'))
                                    <div class="alert alert-success text-center">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <table id="buttons-datatables2" class="display table table-bordered buttons-datatables"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Numero principal</th>
                                            <th>Email principal</th>
                                            <th>Image</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($sites as $item)
                                            <tr id="listesite_{{ $item->id }}">
                                                <td>{{ $item->nom_site }}</td>
                                                <td>{{ $item->numero1_site }}</td>
                                                <td>{{ $item->email1_site }}</td>




                                                <td>
                                                    <center>
                                                        <img src="{{ asset('storage/' . $item->logo_site) }}"
                                                            width="80px" alt="">
                                                </td>
                                                </center>
                                                <td>{{ date('d/m/Y à H:i', strtotime($item->created_at)) }}</td>
                                                <td>
                                                    <a href="{{ route('ajout_site', $item->id) }}"
                                                        class="btn btn-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-pen"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
                                                        </svg>
                                                    </a>


                                                    <button type="button"
                                                        class="btn btn-success btn-circle supprimer_site"
                                                        id="{{ $item->id }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-trash"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                            <path
                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                        </svg>
                                                    </button>

                                                </td>
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
