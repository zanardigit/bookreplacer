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
		</table>
		<script src="js/prenotazioni.js"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>