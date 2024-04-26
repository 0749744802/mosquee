<!-- modal categorie page -->
<div class="modal fade" id="menu_principale" tabindex="-1"
aria-labelledby="exampleModalgridLabel" aria-modal="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalgridLabel">Menu principale
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('store_menu_principale') }}" method="POST">
                @csrf
                <div class="row g-3">

                    <div class="col-xxl-12">
                        <div>
                            <label for="lastName" class="form-label">Menu principale</label>
                            <input type="text" class="form-control"
                                id="lastName" placeholder="..." name="titre_menu_principale">
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
<!-- fin modal-->



