<?php
    session_start();
    if (isset($_SESSION['nickname'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>VALE - Cambiar mi mundo</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/hover.css">
	<meta charset="utf-8">
	
	<!--jquery-->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<!--Bootstrap-->
	<!--css-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">	


	<script type="text/javascript" src="js/funciones.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="source/img/favicon.png" />
</head>
<body>
	<div class="container-fluid">
        &nbsp;
		<div class="row justify-content-md-center">
    		<div class="col-7">
    			<audio src="source/audio/Corncob_Country.mp3" autoplay loop></audio>
		    	<div id="img-juego"><img id="sala" class="img-fluid" src="source/img/sala.jpg"></div>
		    	<div id="cuadro-florero"></div>
		    	<div id="cuadro-cuadros"></div>
    		</div>
            <div class="col-5">
                <table>
                    <tr>
                        <td><img id="florero" style="width: 74px;" src="source/img/florero.png" class="img-fluid"></td>
                        <td><img id="cuadros" style="width: 226px;" src="source/img/cuadros.png" class="img-fluid"></td>
                    </tr>
                    <tr>
                        <td id="s3"><img id="lib3" style="width: 200px;" src="source/img/libros-3.png" class="img-fluid"></td>
                        <td id="s1"><img id="lib2" style="width: 220px;" src="source/img/libros-2.png" class="img-fluid"></td>
                    </tr>
                    <tr>
                        <td colspan="2" id="s2"><img id="lib1" style="width: 200px;" src="source/img/libros-1.png" class="img-fluid"></td>
                    </tr>
                </table>
            </div>
    		<!--<div class="col-3">
    			<table>
    				<tr>
    					<td><img id="florero" style="width: 74px;" src="source/img/florero.png" class="img-fluid"></td>
    				</tr>
    				<tr>
                        <td><img id="cuadros" style="width: 226px;" src="source/img/cuadros.png" class="img-fluid"></td>
    				</tr>
    			</table>
    		</div>
    		<div class="col-2">
    			<table>
                    <tr>
                        <td id="s3"><img id="lib3" style="width: 280px;" src="source/img/libros-3.png" class="img-fluid"></td>
                    </tr>
                    <tr>
                        <td id="s1"><img id="lib1" style="width: 220px;" src="source/img/libros-1.png" class="img-fluid"></td>
                    </tr>
    				<tr>
    					<td id="s2"><img id="lib2" style="width: 240px;" src="source/img/libros-2.png" class="img-fluid"></td>
    				</tr>
    			</table>
    		</div>-->
  		</div>
	</div>
    <div id="dialog-error-message" title="PERDISTE">
    </div>
    <script LANGUAGE="JavaScript">setTimeout ("ayuda()", 1000);</script>
    <div id="dialog-win-message" title="GANASTE"></div>
</body>
</html>
<?php
}
?>