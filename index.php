<?php

if (isset($_GET['t'])) {
	$toConvert = $_GET['t'];

	$toConvert = strtoupper($toConvert);

	$search  = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', ',');
	$replace = array(' alpha', ' bravo', ' charlie', ' delta', ' echo', ' foxtrot', ' golf', ' hotel', ' india', ' juliet', ' kilo', ' lima', ' mike', ' november', ' oscar', ' papa', ' quebec', ' romeo', ' sierra', ' tango', ' uniform', ' victor', ' whiskey', ' x-ray', ' yankee', ' zulu', ' comma');

	$final = str_replace($search, $replace, $toConvert);

}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Un simple convertisseur pour convertir des mots ou des phrases grâce à l'alphabet phonétique de l'OTAN !">
    <meta name="author" content="Edgar Caudron, eDev">

    <title>Convertisseur Alphabet Phonétique</title>

    <!-- Bootstrap core CSS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
    </style>

  </head>
  <body class="text-center">

<form action="" method="get" class="form-signin">

	<img class="mb-4" src="fichiers/otan.png" alt="" width="200" height="200">
	<h1 class="h3 mb-3 font-weight-normal">Convertisseur Alphabet Phonétique</h1>

		<label for="inputEmail" class="sr-only">Texte à convertir</label>
		  	<input type="text" name="t" id="inputEmail" class="form-control" placeholder="Texte à convertir" required="" autofocus="" autocomplete="off"><br>

		  <button class="btn btn-lg btn-primary btn-block" type="submit">Convertir</button><br>

		<?php if (isset($final)) : ?>
			<label for="inputPassword" class="sr-only">Résultat</label>
  			<div style="text-transform: capitalize; border: 1px solid grey; border-radius: 4px;">
				<?= $final ?>
			</div><br>
		<?php endif; ?>

		<p>
<div class="accordion" id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#infos" aria-expanded="false" aria-controls="infos">
          C'est quoi l'alphabet phonétique ?
        </button>
      </h2>
    </div>

    <div id="infos" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        L'alphabet phonétique de l'OTAN est un alphabet utilisé surtout par les secours (pompiers, armée, sécurité civile, police...) pour communiquer plus clairement par radio (et donc ne pas confondre les lettres à l'écoute). Il a été créé par l'OTAN.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#alphabet" aria-expanded="false" aria-controls="alphabet">
          Voir l'alphabet
        </button>
      </h2>
    </div>
    <div id="alphabet" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        

<table style="border-collapse: separate; border-spacing: 10px;">
	<tbody>
		<tr style="height: 23px;">
			<td style="height: 23px;">a</td>
			<td style="height: 23px;">alpha</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">b</td>
			<td style="height: 23px;">bravo</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">c</td>
			<td style="height: 23px;">charlie</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">d</td>
			<td style="height: 23px;">delta</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">e</td>
			<td style="height: 23px;">echo</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">f</td>
			<td style="height: 23px;">foxtrot</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">g</td>
			<td style="height: 23px;">golf</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">h</td>
			<td style="height: 23px;">hotel</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">i</td>
			<td style="height: 23px;">india</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">j</td>
			<td style="height: 23px;">juliet</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">k</td>
			<td style="height: 23px;">kilo</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">l</td>
			<td style="height: 23px;">lima</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">m</td>
			<td style="height: 23px;">mike</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">n</td>
			<td style="height: 23px;">november</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">o</td>
			<td style="height: 23px;">oscar</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">p</td>
			<td style="height: 23px;">papa</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">q</td>
			<td style="height: 23px;">quebec</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">r</td>
			<td style="height: 23px;">romeo</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">s</td>
			<td style="height: 23px;">sierra</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">t</td>
			<td style="height: 23px;">tango</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">u</td>
			<td style="height: 23px;">uniform</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">v</td>
			<td style="height: 23px;">victor</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">w</td>
			<td style="height: 23px;">whiskey</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">x</td>
			<td style="height: 23px;">x-ray</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">y</td>
			<td style="height: 23px;">yankee</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">z</td>
			<td style="height: 23px;">zulu</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">&nbsp;</td>
			<td style="height: 23px;">&nbsp;</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">0</td>
			<td style="height: 23px;">zero</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">1</td>
			<td style="height: 23px;">one</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">2</td>
			<td style="height: 23px;">two</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">3</td>
			<td style="height: 23px;">three</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">4</td>
			<td style="height: 23px;">four</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">5</td>
			<td style="height: 23px;">five</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">6</td>
			<td style="height: 23px;">six</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">7</td>
			<td style="height: 23px;">seven</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">8</td>
			<td style="height: 23px;">eight</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">9</td>
			<td style="height: 23px;">nine</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">&nbsp;</td>
			<td style="height: 23px;">&nbsp;</td>
		</tr>
		<tr style="height: 23px;">
			<td style="height: 23px;">,</td>
			<td style="height: 23px;">comma</td>
		</tr>
	</tbody>
</table>


      </div>
    </div>
  </div>
</div>
		</p>

		  <p class="mt-5 mb-3 text-muted">© Edgar Caudron 2019</p>

</form>


</body></html>
