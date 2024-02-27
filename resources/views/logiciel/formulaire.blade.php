<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
		<div class="steps" >
			<div class="step">
				<h4> PERSONNE ET DOMAINE</h4>
				<p></p>
				<div class="grid">
					<div class="col">
						<label for="name">Choix de la personne</label>
						
                        Entreperise<input type="radio" id="entreprise" name="personne" checked>Particulier
                        <input type="radio" id="personne" name="personne" >

					</div>
					<div class="col">
						<label for="email">Domaine d'activité</label>
						<input type="text" id="domaine" name="domaine">
					</div>
                    <div class="col h">
						<label for="email">Numero</label>
						<input type="text" id="numero" name="numero">
					</div>
					
				</div>
			</div>
			<div class="step">
				<h4>Localisation</h4>
				<p></p>
				<div class="grid">
					<div class="col">
						<label for="email">Pays</label>
						<input type="text" id="pays" name="pays">
					</div>
					<div class="col">
						<label for="email">Ville</label>
						<input type="text" id="ville" name="ville">
					</div>
					<div class="col">
						<label for="email">Adresse géographique</label>
						<input type="text" id="adresse" name="adresse">
					</div>
					
				</div>
			</div>
			<div class="step">
				<h4>Personne contact</h4>
				<p></p>
				<div class="grid">
					<div class="col">
						<label for="password">Nom</label>
						<input type="nom" id="nom">
					</div>
					<div class="col">
						<label for="retype-password">Numero</label>
						<input type="numero" id="numero">
					</div>
                    <div class="col">
						<label for="retype-password">email</label>
						<input type="email" id="email">
					</div>
				</div>
			</div>
			<div class="step">
				<div class="confirmation">
					<h2>Finalisation</h2>
					<p>Pour finaliser cliquer sur envoyer.</p>
					<div>
						<button>Envoyer</button>
					</div>
				</div>
			</div>
            
		</div>
	</div>
	<div class="footer">
		<button class="prev" disabled>Précedent</button>
		<button class="next">suivant</button>
	</div>
</div>
<script src="formulaire.js"></script>