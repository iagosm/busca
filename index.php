<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
  <title>Document</title>
</head>
<style type="css">
  .topo {
    margin-top: 15px;
  }
</style>
<body>
<div class="container topo">
		<h2 align="center">Tutorial - Busca sem refresh com PHP AJAX</h2>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-text">Buscar</span>
				<input type="text" name="buscar" id="buscar" placeholder="Digite o nome" class="form-control" />
			</div>
		</div>
		<div>
			<div id="resultado"></div>
		</div>
	</div>

  
  <script type="text/javascript">

function buscarNome(nome){
  $.ajax({
    url: "search.php",
    method: "POST",
    data: {nome:nome},
    success: function(data) {
      $('#resultado').html(data);
    }
  })
}

$(document).ready(function(){
  buscarNome();

  $('#buscar').keyup(function(){
    var nome = $(this).val();
    if(nome != '') {
      buscarNome(nome);
    } else {
      buscarNome();
    }
  })
})
  </script>
</body>
</html>