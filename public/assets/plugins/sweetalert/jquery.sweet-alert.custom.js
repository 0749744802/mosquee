
!function ($) {
    "use strict";

    var SweetAlert = function () { };

    $('select.statutcommande').change(function () {
        var id = $(this).children("option:selected").val();
        // var order = $('#id').val();
        var order = $(this).attr("pid");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La validation!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, J'enregistre l'action!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/change_statut.php', { id: id, order: order }, function () {

                });

                $("#selectorder").load(".option");


                swal("confirmé!", "Votre article a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });



    $('.supprimer_realisation').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, realisation supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/supp_realisation.php', { id: id }, function () {
                    $("#listerealisation_" + id).hide();
                });


                swal("Supprimé!", "Votre  realisation a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });




    $('.removeproduct').click(function () {
        var id = $(this).attr("id");
        // var order = $('#order').val();
        var order = $(this).attr("pid");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, Article supprimé!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/delete_produitcommande.php', { id: id, order: order }, function () {
                    $("#product_" + id).hide();
                });


                swal("Supprimé!", "Produit a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });





    $('.updateproduct').click(function () {
        var id = $(this).attr("id");
        var order = $(this).attr("pid");
        var qaty = $('#qaty' + id).val();
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, Article supprimé!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/update_produitcommande.php', { id: id, order: order, qaty: qaty }, function () {
                    $("#product_" + id).reload();
                });


                swal("Supprimé!", "Produit a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });




    $('.supprimer_temoignage').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui,temoignage supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/supp_temoignage.php', { id: id }, function () {
                    $("#listetemoignage_" + id).hide();
                });


                swal("Supprimé!", "Votre temoignage a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });



    $('.supprimer_configuration').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui,configuration supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/supp_configuration.php', { id: id }, function () {
                    $("#listeconfiguration_" + id).hide();
                });


                swal("Supprimé!", "Votre configuration a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });



    $('.supprimer_categorie_produits').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui,categorie produit supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/supp_categorie_produit.php', { id: id }, function () {
                    $("#listecategorieproduit_" + id).hide();
                });


                swal("Supprimé!", "Votre categorie prosuit a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });




    $('.supprimer_produit').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui,produit supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/supp_produit.php', { id: id }, function () {
                    $("#listeproduit_" + id).hide();
                });


                swal("Supprimé!", "Votre prosuit a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });




    $('.supprimer_client').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui,client supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/supp_client.php', { id: id }, function () {
                    $("#listeclient_" + id).hide();
                });


                swal("Supprimé!", "Votre client a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });



    $('.valide_commande').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui,valider commande!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/valide_commande.php', { id: id }, function () {
                    $("#listecommandess_" + id).hide();
                });


                swal("Supprimé!", "Votre commande a été validée correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });



    $('.valide_reservation').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui,valider reservation!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/valide_reservation.php', { id: id }, function () {
                    $("#listereservation_" + id).hide();
                });


                swal("Supprimé!", "Votre commande a été validée correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });




    $('.supprimer_panier').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui,produit supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('backoffices/ajax/supppanier.php', { id: id }, function () {
                    $(".listepanier_" + id).hide();

                });


                swal("Supprimé!", "Votre produit à éte  supprimé correctement.", "success");


            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });

    $('.ajouter_panier').click(function () {
        var id = $(this).attr("id");
        var quantity = $(this).attr("quantity");
        //Parameter





        $.post('models/panier.model.php', { id: id }, function () { });











    });







    $('.supprimer_categorie_fourniture').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui,categorie fourniture supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/supp_categorie_fourniture.php', { id: id }, function () {
                    $("#listecategoriefourniture_" + id).hide();
                });


                swal("Supprimé!", "Votre categorie fourniture a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });


    $('.supprimer_fourniture').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui,fourniture supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/supp_fourniture.php', { id: id }, function () {
                    $("#listefourniture_" + id).hide();
                });


                swal("Supprimé!", "Votre fourniture a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });


    $('.supprimer_conseil').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui,conseil supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/supp_conseil.php', { id: id }, function () {
                    $("#listeconseil_" + id).hide();
                });


                swal("Supprimé!", "Votre conseil a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });



    $('.supprimer_service').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui,service supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/supp_service.php', { id: id }, function () {
                    $("#listeservice_" + id).hide();
                });


                swal("Supprimé!", "Votre service a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });


    $('.supprimer_location').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui,location supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/supp_location.php', { id: id }, function () {
                    $("#listelocation_" + id).hide();
                });


                swal("Supprimé!", "Votre location a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });



    $('.supprimer_galerie_location').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui,supprimer de la galerie des location supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/supp_galerie_location.php', { id: id }, function () {
                    $("#gallocation_" + id).hide();
                });


                swal("Supprimé!", "Votre photo a été supprimé correctement de la galerie de  location .", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });



    $('.supprimer_type_location').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui,type de location supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/supp_type_location.php', { id: id }, function () {
                    $("#listetypelocation_" + id).hide();
                });


                swal("Supprimé!", "Votre type de location a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });


    $('.supprimer_categorie_location').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui,categorie location supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/supp_categorie_location.php', { id: id }, function () {
                    $("#listecategorielocation_" + id).hide();
                });


                swal("Supprimé!", "Votre categorie de location a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });





    $('.supprimer_categorie_pages').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui,categorie page supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/supp_categorie_page.php', { id: id }, function () {
                    $("#listecategoriepage_" + id).hide();
                });


                swal("Supprimé!", "Votre categorie de page a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });




    $('.supprimer_pages').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, page supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.get('supprimer_page', { id: id }, function () {
                    $("#listepage_" + id).hide();
                });


                swal("Supprimé!", "Votre  page a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });


    $('.supprimer_produits').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, produit supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.get('supprimer_produit', { id: id }, function () {
                    $("#listeproduit_" + id).hide();
                });


                swal("Supprimé!", "Votre  produit a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });



    $('.supprimer_categorie_page').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, categorie page supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.get('supprimer_categorie_page', { id: id }, function () {
                    $("#listecategorie_page_" + id).hide();
                });


                swal("Supprimé!", "Votre  categorie page a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });


    $('.supprimer_appreciation_produit').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, appreciation produit supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.get('supprimer_appreciation_produit', { id: id }, function () {
                    $("#listeappreciation_produit_" + id).hide();
                });


                swal("Supprimé!", "Votre  categorie page a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });



    $('.supprimer_slide').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, slide supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.get('supprimer_slide', { id: id }, function () {
                    $("#listeslide_" + id).hide();
                });


                swal("Supprimé!", "Votre  slide a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });



    $('.supprimer_service').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, service supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.get('supprimer_service', { id: id }, function () {
                    $("#listeservice_" + id).hide();
                });


                swal("Supprimé!", "Votre  service a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });






    $('.supprimer_blog').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, blog supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.get('supprimer_blog', { id: id }, function () {
                    $("#listeblog_" + id).hide();
                });


                swal("Supprimé!", "Votre  blog a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });




    $('.supprimer_devis').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, demande de devis supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.get('supprimer_devis', { id: id }, function () {
                    $("#listedevis_" + id).hide();
                });


                swal("Supprimé!", "Votre  demande de devis a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });



    $('.supprimer_contact').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, contact supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.get('supprimer_contact', { id: id }, function () {
                    $("#listecontact_" + id).hide();
                });


                swal("Supprimé!", "Votre  contact a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });




    $('.supprimer_site').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, information du site supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.get('supprimer_site', { id: id }, function () {
                    $("#listesite_" + id).hide();
                });


                swal("Supprimé!", "Votre  information du site a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });



    $('.supprimer_membre').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, membre supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.get('supprimer_membre', { id: id }, function () {
                    $("#listemembre_" + id).hide();
                });


                swal("Supprimé!", "Votre  membre a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });





    $('.supprimer_menu').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, menu supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.get('supprimer_menu', { id: id }, function () {
                    $("#listemenu_" + id).hide();
                });


                swal("Supprimé!", "Votre  menu a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });



    $('.supprimer_video').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, video supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.get('supprimer_video', { id: id }, function () {
                    $("#listevideo_" + id).hide();
                });


                swal("Supprimé!", "Votre  video a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });


    $('.supprimer_categorie_produit').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, categorie produit supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.get('supprimer_categorie_produit', { id: id }, function () {
                    $("#listecategorie_produit_" + id).hide();
                });


                swal("Supprimé!", "Votre  categorie produit a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });


    $('.supprimer_slides').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, slide/banniere supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/supp_slide.php', { id: id }, function () {
                    $("#listeslide_" + id).hide();
                });



                swal("Supprimé!", "Votre  slide / banniere a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });


    $('.supprimer_utilisateur').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, utilisateur supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/supp_utilisateur.php', { id: id }, function () {
                    $("#listeutilisateur_" + id).hide();
                });


                swal("Supprimé!", "Votre  utilisateur a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });












    $('.deleteclasse').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, eleve supprimé!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/delete_classe.php', { id: id }, function () {
                    $("#classe_" + id).hide();
                });


                swal("Supprimé!", "Votre eleve a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });




    $('.deletematiere').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, matiere supprimé!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/delete_livre.php', { id: id }, function () {
                    $("#matiere_" + id).hide();
                });


                swal("Supprimé!", "Votre matire a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });




    $('.articledelete').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr de votre action?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, Article supprimé!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/delete_article.php', { id: id }, function () {
                    $("#article_" + id).hide();
                });


                swal("Supprimé!", "Votre article a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });



    $('.deleteeleve').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, eleve supprimé!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/delete_eleve.php', { id: id }, function () {
                    $("#lteleve_" + id).hide();
                });


                swal("Supprimé!", "Votre eleve a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });



    $('.deletescolarite').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr?",
            text: "La suppression est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, scolarite validée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/delete_scolarite.php', { id: id }, function () {
                    $("#lteleve_" + id).hide();
                });


                swal("Supprimé!", "Votre scolarite a été supprimée correctement.", "success");
            } else {
                swal("Annulé", "Appreciation annulée", "error");
            }
        });


    });



    $('.deleteclient').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr?",
            text: "La suppression est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, commande validée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/delete_client.php', { id: id }, function () {
                    $("#client_" + id).hide();
                });


                swal("Supprimé!", "Votre appreciation a été supprimée correctement.", "success");
            } else {
                swal("Annulé", "Appreciation annulée", "error");
            }
        });


    });

















    $('.deletecommande').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr?",
            text: "La suppression est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, commande validée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/delete_commande.php', { id: id }, function () {
                    $("#commande_" + id).hide();
                });


                swal("Supprimé!", "Votre commande a été supprimée correctement.", "success");
            } else {
                swal("Annulé", "Commande annulée", "error");
            }
        });


    });


    $('.validecommande').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr?",
            text: "La validation est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, commande validée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/valide_commande.php', { id: id }, function () {
                    $("#commande_" + id).hide();
                });


                swal("Validée!", "Votre commande a été validée correctement.", "success");
            } else {
                swal("Annulé", "Commande annulée", "error");
            }
        });


    });



    $('.deleteville').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr?",
            text: "ATTENTION TOUTES LES COMMUNES SERONT SUPPRIME AUSSI!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, ville supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/delete_ville.php', { id: id }, function () {
                    $("#ville_" + id).hide();
                });


                swal("Supprimée!", "Votre ville a été validée correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });





    $('.deletepointvente').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr?",
            text: "Suppression du point de vente!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, point de vente supprimé!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/delete_pointvente.php', { id: id }, function () {
                    $("#pointvente_" + id).hide();
                });


                swal("Supprimée!", "point de vente supprimé.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });












    $('.deletecommune').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr?",
            text: "ATTENTION VOTRE COMMUNE SERA SUPPRIME!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui,commune supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/delete_commune.php', { id: id }, function () {
                    $("#commune_" + id).hide();
                });


                swal("Supprimée!", "Votre commune a été validée correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });




    $('.deletefaq').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, FAQ supprimé!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/delete_faq.php', { id: id }, function () {
                    $("#faq_" + id).hide();
                });


                swal("Supprimé!", "Votre FAQ a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });




    $('.categoriepagedelete').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, Catégorie supprimé!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/delete_categoriepage.php', { id: id }, function () {
                    $("#categorie_" + id).hide();
                });


                swal("Supprimé!", "Votre catégorie a été supprimée correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });




    });






    $('.deletesouscategorie').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, Catégorie supprimé!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/delete_souscategorieproduit.php', { id: id }, function () {
                    $("#categorie_" + id).hide();
                });


                swal("Supprimé!", "Votre sous catégorie a été supprimée correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });




    });






    $('.deletecatpointvente').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, Catégorie supprimé!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/delete_catpointvente.php', { id: id }, function () {
                    $("#categorie_" + id).hide();
                });


                swal("Supprimé!", "Votre sous catégorie a été supprimée correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });




    });




    $('.deletecategoriearticle').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, Catégorie supprimé!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/delete_categoriearticle.php', { id: id }, function () {
                    $("#categorie_" + id).hide();
                });


                swal("Supprimé!", "Votre catégorie a été supprimée correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });

    });






    $('.pagedelete').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, page supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/delete_page.php', { id: id }, function () {
                    $("#page_" + id).hide();
                });


                swal("Supprimé!", "Votre page a été supprimée correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });




    });





    $('.deleteclasse1').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, classe supprimé!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/delete_classe1.php', { id: id }, function () {
                    $("#classe_" + id).hide();
                });


                swal("Supprimé!", "Votre classe a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });





    $('.valideproduit').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr?",
            text: "La validation est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, Produit validé!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/valide_produit.php', { id: id }, function () {
                    $("#produit_" + id).hide();
                });


                swal("Supprimé!", "Votre produit a été validé correctement.", "success");
            } else {
                swal("Annulé", "Validation annulée", "error");
            }
        });


    });





    $('.deletecategorieproduit').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr?",
            text: "La validation est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, Produit validé!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/delete_categorieproduit.php', { id: id }, function () {
                    $("#categorie_" + id).hide();
                });


                swal("Supprimé!", "Votre catégorie a été validée correctement.", "success");
            } else {
                swal("Annulé", "Validation annulée", "error");
            }
        });


    });






    $('.deleteslide').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, SLIDESHOW supprimé!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/delete_slideshow.php', { id: id }, function () {
                    $("#slide_" + id).hide();
                });


                swal("Supprimé!", "Votre SLIDESHOW a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });








    $('.deletemarque').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui,MARQUE supprimé!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/delete_marque.php', { id: id }, function () {
                    $("#marque_" + id).hide();
                });


                swal("Supprimé!", "Votre CLIENT a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });


    });










    $('.deletecontact').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, contact supprimé!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/delete_contact.php', { id: id }, function () {
                    $("#contact_" + id).hide();
                });


                swal("Supprimé!", "Votre contact a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });




    });






    $('.validearticle').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr?",
            text: "La validation!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, Catégorie validée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/valide_article.php', { id: id }, function () {
                    //  $("#article_"+id).hide();
                });


                swal("Supprimé!", "Votre Catégorie a été supprimée correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });




    });






    $('.deletecategorie').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr?",
            text: "La suppresion est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, categorie supprimée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/delete_categorie.php', { id: id }, function () {
                    $("#categorie_" + id).hide();
                });


                swal("Supprimé!", "Votre article a été supprimé correctement.", "success");
            } else {
                swal("Annulé", "Suppression annulée", "error");
            }
        });




    });

    $('.deleteservice').click(function () {
        var id = $(this).attr("id");
        //Parameter

        swal({
            title: "Etes vous sûr?",
            text: "La suppression est irréverssible!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, service validée!",
            cancelButtonText: "Non, Annuler!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {


                $.post('ajax/delete_service.php', { id: id }, function () {
                    $("#service_" + id).hide();
                });


                swal("Supprimé!", "Service a été supprimée correctement.", "success");
            } else {
                swal("Annulé", "Service annulée", "error");
            }
        });


    });








    //examples
    SweetAlert.prototype.init = function () {

        //Basic
        $('#sa-basic').click(function () {
            swal("Here's a message!");
        });

        //A title with a text under
        $('#sa-title').click(function () {
            swal("Here's a message!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.")
        });

        //Success Message
        $('#sa-success').click(function () {
            swal("Good job!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.", "success")
        });

        //Warning Message
        $('#sa-warning').click(function () {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            }, function () {
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
            });
        });

        //Parameter
        $('.sa-params').click(function () {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function (isConfirm) {
                if (isConfirm) {
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
        });









        //Custom Image
        $('#sa-image').click(function () {
            swal({
                title: "Govinda!",
                text: "Recently joined twitter",
                imageUrl: "../assets/images/users/1.jpg"
            });
        });

        //Auto Close Timer
        $('#sa-close').click(function () {
            swal({
                title: "Auto close alert!",
                text: "I will close in 2 seconds.",
                timer: 2000,
                showConfirmButton: false
            });
        });


    },
        //init
        $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
}(window.jQuery),

    //initializing
    function ($) {
        "use strict";
        $.SweetAlert.init()
    }(window.jQuery);
