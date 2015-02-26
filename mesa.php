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

    <script src="js/jquery/jquery.dataTables.js"></script>

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
            function limpiar_seccion(){   
                var d = document.getElementById("lista");
                while( d.hasChildNodes() ){
                    var hijo = d.firstChild;
                    hijo.parentNode.removeChild(hijo);                        
                }
            }

            $(function(){
                
                $("#breakfast").on('click', function(){
                    //evento
                });

                $("#crepes").on('click', function(){
                    //evento
                });
                
                $("#hotdrinks").on('click', function(){
                    //evento
                });

                $("#colddrinks").on('click', function(){
                    //evento
                });

                $("#mexico").on('click', function(){
                    //evento
                });

                $("#sandwi").on('click', function(){
                    //evento
                });        

            });

        </script>

		<title>Cafe del Mundo -  Inicio</title>
	</head>

	<body class="metro">
        <div class="container">
            <div class="grid fluid">
                
                <div class="row">
                    <div class="span12"><img src="images/sistem.png" alt=""></div>
                </div>

                <div class="row">
                    <div class="span4"><img src="images/logo.png" class="rounded bd-transparent bg-transparent"></div>
                    <div class="span6"></div>
                    <div class="span2">
                        <br><br><br><br>
                        <div class="span10">
                            <a href="index.php"><img class="icono" src="images/Boton_Salir.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <br>

                <div class="row">
                    
                    <div class="span12">
                        <div id="lista">
                            <table class="table striped hovered dataTable" id="dataTables-1">
                                <thead>
                                    <tr>
                                        <th class="text-left">Nro.</th>
                                        <th class="text-left">Producto</th>
                                        <th class="text-left">Cantidad</th>
                                        <th class="text-left">Tiempo</th>
                                        <th class="text-left">Precio</th>
                                    </tr>
                                </thead>
                            </table>    

            <script>
                $(function(){
                    $('#dataTables-1').dataTable( {
                        "bProcessing": true,
                        "sAjaxSource": "data/dataTables-mesa.txt",
                        "aoColumns": [
                            { "mData": "engine" },
                            { "mData": "browser" },
                            { "mData": "platform" },
                            { "mData": "version" },
                            { "mData": "grade" }
                        ]
                    } );
                });
            </script>
                        </div>
                    </div>
                </div>

                
                <div class="row">
                        <div class="grid">
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
        </div>

        <?php
        	echo '';
        ?>
        
    </body>
</html>