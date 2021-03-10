<!doctype html>
<html>
	<head>
		<title>
			Le_mie_prenotazioni/BookReplacer
		</title>
		<script src="js/script.js"></script>
		<link href="css/stile-default.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<nav id="menuPrincipale" style="height:10%">
			<h1 class="">
				BookReplacer
			</h1>
			<h2 class="">
			
				<a href="trova-libri.php" class="bianco">Trova libri</a>
			</h2>
			<h2 class="">
				Le mie prenotazioni
			</h2>
			<h2 class="">
				<a href="profilo.php" class="bianco">Profilo</a>
			</h2>
			<h2 class="">
				<a href="index.php" class="bianco">Esci</a>
			</h2>
		</nav>
		<input type="button" id="bottone1" onClick="cambiamento(1)" value="Annullato">
		<input type="button" id="bottone2" onClick="cambiamento(2)" value="In Sospeso">
		<input type="button" id="bottone3" onClick="cambiamento(3)" value="In Prestito">
		<input type="button" id="bottone4" onClick="cambiamento(4)" value="Respinto">
		<input type="button" id="bottone5" onClick="cambiamento(5)" value="In Ritardo">
		<input type="button" id="bottone6" onClick="cambiamento(6)" value="Restituito">

		<table id="tabellaPrenotazioni">
			<th>
				<tr>
					<td>
						<h3>COPERTINA</h3>
					</td>
					<td>
						<h3>STATO</h3>
					</td>
					<td>
						<h3>TITOLO</h3>
					</td>
					<td>
						<h3>ANNO DI EDIZIONE</h3>
					</td>
					<td>
						<h3>AZIONE</h3>
					</td>
				</tr>
			</th>
			<tr id="riga1">
				<td>
					<input type="button" id="pulsante1" onClick="appareScompare(1)" class="btn btn-info" value="Copertina">
					<input type="image"  id="immagine1" onClick="appareScompare(1)" src="img/harry-potter-e-il-calice-di-fuoco.jpg">
				</td>
				<td>
					<small class="badge badge-primary" id="insospeso1">In sospeso</small>
				</td>
				<td>
					Harry Potter e il calice di fuoco
				</td>
				<td>
					2000
				</td>
				<td>
					<input type="button" class="btn btn-danger"  id="annulla1"   onClick="insospesoAnnulla(1)" value="ANNULLA">
					<input type="button" class="btn btn-primary" id="riprenota1" onClick="Riprenota(1)"        value="RIPRENOTA" style="display: none;">
					<input type="button" class="btn btn-danger"  id="elimina1"   onClick="Elimina(1)"          value="ELIMINA"   style="display: none;">
				</td>
			</tr>
			<tr id="riga2">
				<td>
					<input type="button" id="pulsante2" onClick="appareScompare(2)"class="btn btn-info" value="Copertina">
					<input type="image"  id="immagine2" onClick="appareScompare(2)" src="img/harry-potter-e-i-doni-della-morte.jpg">
				</td>
				<td>
				<small class="badge badge-danger" id="insospeso2">Respinto</small>
				</td>
				<td>
					Harry Potter e i doni della morte
				</td>
				<td>
					2007
				</td>
				<td>
					<input type="button" class="btn btn-danger"  id="annulla2"   onClick="insospesoAnnulla(2)" value="ANNULLA" style="display: none;">
					<input type="button" class="btn btn-primary" id="riprenota2" onClick="Riprenota(2)"        value="RIPRENOTA">
					<input type="button" class="btn btn-danger"  id="elimina2"   onClick="Elimina(2)"          value="ELIMINA">
				</td>
			</tr>
			<tr id="riga3">
				<td>
					<input type="button" id="pulsante3" onClick="appareScompare(3)"class="btn btn-info" value="Copertina">
					<input type="image"  id="immagine3" onClick="appareScompare(3)" src="img/harry-potter-e-la-camera-dei-segreti.jpg">	
				</td>
				<td>
					<small class="badge badge-primary" id="insospeso3">In Prestito</small>
				</td>
				<td>
					Harry Potter e la camera dei segreti
				</td>
				<td>
					1998
				</td>
				<td>
					<p></p>
				</td>
			</tr>
			<tr id="riga4">
				<td>
					<input type="button" id="pulsante4" onClick="appareScompare(4)"class="btn btn-info" value="Copertina">
					<input type="image"  id="immagine4" onClick="appareScompare(4)" src="img/harry-potter-e-la-pietra-filosofale.jpg">
				</td>
				<td>
				<small class="badge badge-danger" id="insospeso4">Annullato</small>
				</td>
				<td>
					Harry Potter e la pietra filosofale
				</td>
				<td>
					1997
				</td>
				<td>
					<input type="button" class="btn btn-danger"  id="annulla4"   onClick="insospesoAnnulla(4)" value="ANNULLA" style="display: none;">
					<input type="button" class="btn btn-primary" id="riprenota4" onClick="Riprenota(4)"        value="RIPRENOTA">
					<input type="button" class="btn btn-danger"  id="elimina4"   onClick="Elimina(4)"          value="ELIMINA">
				</td>
			</tr>
			<tr id="riga5">
				<td>
					<input type="button" id="pulsante5" onClick="appareScompare(5)"class="btn btn-info" value="Copertina">
					<input type="image"  id="immagine5" onClick="appareScompare(5)" src="img/harry-potter-e-l'ordine-della-fenice.jpg">
				</td>
				<td>
					<small class="badge badge-danger" id="insospeso5">In Ritardo</small>
				</td>
				<td>
					Harry Potter e l'ordine della fenice
				</td>
				<td>
					2003
				</td>
				<td>
					<p></p>
				</td>
			</tr>
			<tr id="riga6">
				<td>
					<input type="button" id="pulsante6" onClick="appareScompare(6)"class="btn btn-info" value="Copertina">
					<input type="image"  id="immagine6" onClick="appareScompare(6)" src="img/harry-potter-e-il-prigioniero-di-azkaban.jpg">
				</td>
				<td>
					<small class="badge badge-primary" id="insospeso6">Restituito</small>
				</td>
				<td>
					Harry Potter e il prigioniero di Azkaban
				</td>
				<td>
					1999
				</td>
				<td>
					<p></p>
				</td>
			</tr>
		</table>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>