
<!-- liste categorie modals -->

<div class="modal fade" id="liste_categorie_page" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalgridLabel">Liste des categorie de page</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="buttons-datatables2" class="display table table-bordered buttons-datatables"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>Parent</th>
                                    <th>Fils</th>
                                    <th>Date</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categorie_produit as $item)
                                    <tr>
                                        <td>{{ $item->categorie_produit_principale }}</td>
                                        <td>{{ $item->categorie_produit_secondaire }}</td>
                                        <td>San Francisco</td>
                                        <td>47</td>

                                    </tr>
                                @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fin modal liste categorie -->

<!-- liste appreciation modals -->

<div class="modal fade" id="liste_appreciation" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalgridLabel">Liste des categorie de page</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="buttons-datatables2" class="display table table-bordered buttons-datatables"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>Titre</th>

                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appreciation_produit as $item)
                                    <tr>
                                        <td>{{ $item->titre_appreciation }}</td>

                                        <td>47</td>

                                    </tr>
                                @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fin modal liste appreciation -->



