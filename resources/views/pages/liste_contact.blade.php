@extends('index')
@section('titre', 'liste des contacts')
@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start contact title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                        <h4 class="mb-sm-0">LIste des contacts</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">liste</a></li>
                                <li class="breadcrumb-item active">contact</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end contact title -->



            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Listes des contacts</h5>

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
                                            <th>Nom & prenoms</th>
                                            <th>numero</th>
                                            <th>email</th>
                                            <th>sujet</th>
                                            <th>message</th>
                                            
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($contact as $item)
                                            <tr id="listecontact_{{ $item->id }}">
                                                <td>{{ $item->nom_contact }}</td>
                                                <td>{{ $item->numero_contact }}</td>
                                                <td>{{ $item->email_contact }}</td>
                                                <td>{{ $item->sujet_contact }}</td>
                                                <td>{{ $item->message_contact }}</td>
                                                



                                                <td>{{ date("d/m/Y à H:i", strtotime($item->created_at)) }}</td>
                                                <td>
                                                    

                                                        <button type="button"  class="btn btn-success btn-circle supprimer_contact" id="{{$item->id}}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
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
