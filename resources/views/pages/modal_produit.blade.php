<!-- modal categorie page -->
<div class="modal fade" id="categorie_page" tabindex="-1"
aria-labelledby="exampleModalgridLabel" aria-modal="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalgridLabel">Categorie des produit
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('store_ajout_produit_categorie') }}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-xxl-6">
                        <div>
                            <label for="firstName" class="form-label">Categorie principale</label>
                            <select class="js-example-basic-single" name="categorie_produit_principale">
                                <option value=""></option>
                                @foreach ($categorie_produit as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->categorie_produit_secondaire }}
                                    </option>
                                @endforeach


                            </select>
                        </div>
                    </div><!--end col-->
                    <div class="col-xxl-6">
                        <div>
                            <label for="lastName" class="form-label">Categorie secondaire</label>
                            <input type="text" class="form-control"
                                id="lastName" placeholder="..." name="categorie_produit_secondaire">
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
<!-- modal appreciation -->
<div class="modal fade" id="categorie_appreciation" tabindex="-1"
aria-labelledby="exampleModalgridLabel" aria-modal="true">
<div class="modal-dialog">
 <div class="modal-content">
     <div class="modal-header">
         <h5 class="modal-title" id="exampleModalgridLabel">Appreciation des produits
         </h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal"
             aria-label="Close"></button>
     </div>
     <div class="modal-body">
         <form action="{{ route('store_appreciation') }}" method="POST">
             @csrf
             <div class="row g-3">

                 </div><!--end col-->
                 <div class="col-xxl-12">
                     <div>
                         <label for="lastName" class="form-label">Titre</label>
                         <input type="text" class="form-control"
                             id="lastName" placeholder="..." name="titre_appreciation">
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
