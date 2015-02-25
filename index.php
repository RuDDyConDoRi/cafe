<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>

		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link href="css/metro-bootstrap.css" rel="stylesheet">
        <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">
        <link href="css/iconFont.css" rel="stylesheet">
        <link href="css/docs.css" rel="stylesheet">
        <link href="js/prettify/prettify.css" rel="stylesheet">

        <!-- Load JavaScript Libraries -->
        <script src="js/jquery/jquery.min.js"></script>
        <script src="js/jquery/jquery.widget.min.js"></script>
        <script src="js/jquery/jquery.mousewheel.js"></script>
        <script src="js/prettify/prettify.js"></script>

        <script src="js/load-metro.js"></script>

        <script src="js/docs.js"></script>
        <script src="js/github.info.js"></script>	

        <style type="text/css">
        	body{
        		background: url(images/background.png);
        	}

        	#caja01{
        		background-color: #000;
        		opacity: 0.8;
        		padding: 5% 15% 5% 15%;

        		border-radius: 10px 10px 10px 10px;
        		-moz-border-radius: 10px 10px 10px 10px;
        		-webkit-border-radius: 10px 10px 10px 10px;
        		border: 0px solid #000000;

        		margin: 0% 20% 0% 20%;
        	}

        	.texto01{
        		color: #fff;
        	}

        </style>

        <script>
        	$(function(){
        		//alert("message");
        		$("#ingreso").on('click', function(){
        			$.Dialog({
        				overlay: true,
                        shadow: true,
                        flat: true,
                        draggable: true,
                        icon: '<img src="images/favic.png">',
                        title: 'Flat window',
                        content: '',
                        padding: 10,
                        onShow: function(_dialog){
                            var cargo = document.getElementById("cargo").value;
                            //var contra = document.getElementById("pass").value;
       						//alert("user: "+cargo);
                            if(cargo === "Administrador"){
                            	var content = '<form class="user-input" action="administrador.php" method="post">' +
                                            '<label>Se ha identificado como:</label><b>'+document.getElementById("cargo").value+
                                            '</b><div class="form-actions">' +
                                            '<br><button class="button primary white inverse">Entrar</button>&nbsp;'+
                                            '</div>'+
                                            '</form>';
                               	$.Dialog.title("Usuario Correcto");
                               	$.Dialog.content(content);
                            }else{
                            	var content = '<form class="user-input" action="mesero.php" method="post">' +
                                            '<label>Se ha identificado como:</label><b>' +document.getElementById("cargo").value+
                                            '</b><div class="form-actions">' +
                                            '<br><button class="button white inverse">Entrar</button>&nbsp;'+
                                            //'<button class="button" type="button" onclick="$.Dialog.close()">Cancel</button> '+
                                            '</div>'+
                                            '</form>';
                            	$.Dialog.title("Usuario Correcto");
                            	$.Dialog.content(content);
                            }                                   
                        }
                    });
        		});

        	});
        </script>
        
		<title>Cafe del Mundo -  Inicio</title>

	</head>

	<body class="metro">
        <div class="container">
            <div class="grid fluid">
                
                <div class="row">
                    <div class="span4"></div>
                    <div class="span4">
                        <div class="grid fluid">
                        	<img src="images/logo.png" alt="">
                        </div>
                    </div>
                    <div class="span4"></div>
                </div>

                <div class="row">
                	<div class="span3"></div>
                    <div class="span6">
                    	<img src="images/titu.png" alt="">
                    </div>
                	<div class="span3"></div>
                </div>

                <div class="row">
                    <div class="row">
                        <div class="span12">
                            <fieldset>
                                <div id="caja01">
                                   	<div class="texto01">Usuario</div>
                                    <div class="input-control select" data-role="input-control">
                                        <select id="cargo">
                                            <option> </option>
                                            <option>Administrador</option>
                                            <option>Empleado01</option>
                                            <option>Empleado02</option>
                                            <option>Empleado03</option>
                                            <option>Empleado04</option>
                                            <option>Empleado05</option>
                                        </select>
                                    </div>

                                    <label class="texto01" id="pass">Contraseña</label>
                                    <div class="input-control password" data-role="input-control">
                                        <input type="password" placeholder="Introduzaca su contraseña" autofocus>
                                        <button class="btn-reveal" tabindex="-1"></button>
                                    </div>
                                    <button id="ingreso" class="button white inverse large" >INGRESAR</button>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="span4"></div>
    	                <div class="span4">
        	            	<img src="images/copyright.png" alt="">
            	       	</div>
                    	<div class="span4"></div>
                	</div>

                </div>
            </div>
        </div>
    </div>

    <?php
      	echo '';
    ?>
        
    </body>
</html>