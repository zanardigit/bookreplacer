<!doctype html>
<html>
	<head>
		<title>
			//PublicBookReplacer.org/utente
		</title>
		<script src="js/script.js"></script>
		<link href="css/stile-default.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<nav id="menuPrincipale">
			<h1>
				BookReplacer
			</h1>
			<h2>
				Trova libri
			</h2>
			<h2>
				<a href="le-mie-prenotazioni.php">Le mie prenotazioni</a>
			</h2>
			<h2>
				<a href="profilo.php">Profilo</a>
			</h2>
			<h2>
				<a href="index.php">Esci</a>
			</h2>
		</nav>
		<input type="search" placeholder="Cerca per autore, titolo o casa editrice." id="cerca" size="50px">
		<input type="submit" class="biancoSuRosso" value="Cerca">
		<table id="tabellaPrenotazioni">
			<tr id="nomiColonne">
				<td>
					<h3>COPERTINA</h3>
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
			<tr>
				<td style="text-align: center;">
					<input type="button" id="pulsante1" onClick="appareScompare(1)"class="btn btn-info" value="Copertina">
					<input type="image"  id="immagine1" onClick="appareScompare(1)" style="display: none;" src="img/harry-potter-e-il-principe-mezzosangue.jpg">
				</td>
				<td>
					Harry Potter e il principe mezzosangue
				</td>
				<td>
					2005
				</td>
				<td>
					<input type="button" class="btn btn-primary" value="PRENOTAZIONE">
				</td>
			</tr>
		</table>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>