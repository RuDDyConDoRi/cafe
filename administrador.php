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
        		padding: 5% 10% 5% 10%;

        		border-radius: 10px 10px 10px 10px;
        		-moz-border-radius: 10px 10px 10px 10px;
        		-webkit-border-radius: 10px 10px 10px 10px;
        		border: 0px solid #000000;
        	}

        	#texto01{
        		color: #fff;
        	}

            .icono:hover{
                border-radius: 10px 10px 10px 10px;
                -moz-border-radius: 10px 10px 10px 10px;
                -webkit-border-radius: 10px 10px 10px 10px;
                border: 0px solid #000000;

                background-color: rgba(71, 60, 48, 0.3);
            }

        </style>

        <script type="text/javascript">
        	function ingreso(){
        		alert("message");

        		if(condition){
        			window.open("_black", '', 'width=330,height=252,scrollbars=NO,statusbar=NO,left=500,top=250');
        		}else{
        			
        		}
        	}
        </script>

		<title>Cafe del Mundo -  Inicio</title>
	</head>

	<body class="metro">
        <div class="container">
            <div class="grid fluid">
                
                <div class="row">
                    <div class="span12"><img src="images/sistem.png" ></div>
                </div>

                <div class="row">
                    <div class="span4"><img src="images/logo.png" class="rounded bd-transparent bg-transparent"></div>
                    <div class="span2">
                        <img src="images/empleado.png" class="rounded bd-transparent bg-transparent shadow span12">
                        Usuario: <b>Administrador</b>
                    </div>
                    <div class="span4"></div>
                    <div class="span2">    <br><br><br><br>
                        <div class="span10">
                            <a href="index.php"><img class="icono" src="images/Boton_Salir.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <br>

                <div class="row">
                	<div class="span2"></div>
                    <div class="span2"><a href=""><img class="icono" src="images/Boton_Configuracion.png" alt=""></a></div>
                    <div class="span2"><a href=""><img class="icono" src="images/Boton_Caja.png" alt=""></a></div>
                    <div class="span2"><a href="mesas.php"><img class="icono" src="images/Boton_Mesas.png" alt=""></a></div>
                    <div class="span2"><a href="menu_admin.php"><img class="icono" src="images/Boton_Menu.png" alt=""></a></div>
                </div>
                <div class="row">
                    <div class="span2"></div>
                    <div class="span2"><a href=""><img class="icono" src="images/Boton_Reportes.png" alt=""></a></div>
                    <div class="span2"><a href=""><img class="icono" src="images/Boton_Pedido.png" alt=""></a></div>
                    <div class="span2"><a href=""><img class="icono" src="images/Boton_Cocina.png" alt=""></a></div>
                    <div class="span2"><a href="Notify.php"><img class="icono" src="images/Boton_Restaurante.png" alt=""></a></div>
                </div>

                <div class="row">
                        <div class="grid">
                            <div class="row text-center">
        	            			<img src="images/copyright.png" alt="">
                			</div>

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