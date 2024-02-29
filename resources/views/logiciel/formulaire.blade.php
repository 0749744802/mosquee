<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link href="{{asset("assets/plugins/sweetalert2/sweetalert2.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/plugins/sweetalert/sweetalert.css")}}" rel="stylesheet" type="text/css">
    <script src="{{ asset("assets/plugins/sweetalert2/sweetalert2.min.js") }}"></script>

        <link rel="stylesheet" href="formulaire.css">
    </head>
</html>

<div class="form" >
	<div class="header">
		<h2>Demande de devis</h2>
		<p>Merci de remplir le formualire.</p>
	</div>
	<div class="body" >
		<div class="pagination">
			<div class="number active">1</div>
			<div class="bar"></div>
			<div class="number">2</div>
			<div class="bar"></div>
			<div class="number">3</div>
			<div class="bar"></div>
			<div class="number">4</div>

		</div>



        @if (session('success'))
        <script>
            window.onload=function()
            {
                Swal.fire({
      // position: "top-end",
       icon: "success",
       title: "L\'e-mail a été envoyé avec succès !",
       showConfirmButton: false,
       timer: 1500
     });
            };
        </script>
    @endif
        <form action="Stotr_devisController" method="POST" onsubmit="afficherPopup()">
            @csrf

		<div class="steps" >
			<div class="step">
				<h4> PERSONNE ET DOMAINE</h4>
				<p></p>
				<div class="grid">
					<div class="col">
						<label for="name">Choix de la personne</label>

                        Entreperise<input type="radio" id="entreprise" name="personne_devis" checked value="entreprise">Particulier
                        <input type="radio" id="personne" name="personne_devis" value="particulier">

					</div>
					<div class="col">
						<label for="email">Domaine d'activité</label>
						<input type="text" id="domaine" name="domaine_devis">
					</div>
                    <div class="col h">
						<label for="email">Numero</label>
						<input type="text" id="numero" name="numero_devis">
					</div>

				</div>
			</div>
			<div class="step">
				<h4>Localisation</h4>
				<p></p>
				<div class="grid">
					<div class="col">
						<label for="email">Pays</label>
						<input type="text" id="pays" name="pays_devis">
					</div>
					<div class="col">
						<label for="email">Ville</label>
						<input type="text" id="ville" name="ville_devis">
					</div>
					<div class="col">
						<label for="email">Adresse géographique</label>
						<input type="text" id="adresse" name="adresse_devis">
					</div>

				</div>
			</div>
			<div class="step">
				<h4>Personne contact</h4>
				<p></p>
				<div class="grid">
					<div class="col">
						<label for="password">Nom</label>
						<input type="nom" id="nom" name="nom_devis">
					</div>
					<div class="col">
						<label for="retype-password">Numero</label>
						<input type="numero" id="numero" name="numeroc_devis">
					</div>
                    <div class="col">
						<label for="retype-password">email</label>
						<input type="email" id="email" name="emailc_devis">
					</div>
				</div>
			</div>
			<div class="step">
				<div class="confirmation">
					<h2>Finalisation</h2>
					<p>Pour finaliser cliquer sur envoyer.</p>
					<div>
						<button type="submit">Envoyer</button>
					</div>
				</div>
			</div>

		</div>
    </form>
	</div>
	<div class="footer">
		<button class="prev" disabled>Précedent</button>
		<button class="next">suivant</button>
	</div>
</div>
<script src="formulaire.js"></script>
<script src="{{asset("assets/plugins/sweetalert/sweetalert.min.js")}}"></script>
<script src="{{asset("assets/plugins/sweetalert/jquery.sweet-alert.custom.js")}}"></script>
