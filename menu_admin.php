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
            function limpiar_seccion(){   
                var d = document.getElementById("lista");
                while( d.hasChildNodes() ){
                    var hijo = d.firstChild;
                    hijo.parentNode.removeChild(hijo);                        
                }
            }

            function operacion(){
                //alert("Agregar o borrar")
                //$('#producto').on('',function(){
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
                            //var contra = document.getElementById("pass").value;
                            //alert("user: ");
                                var content = '<form class="user-input text-center">' +
                                            '<img src="images/beer.png" class="rounded bd-transparent bg-transparent shadow span1">'+
                                            '<label>Que desea hacer con el Producto</label><b>'+
                                            '</b><div class="form-actions">' +
                                            '<br><button class="button primary white inverse">Agregar</button>&nbsp;'+
                                            '<button class="button primary white inverse" type="button" onclick="$.Dialog.close()">Quitar</button>' 
                                            '</div>'+
                                            '</form>';
                                $.Dialog.title("Usuario Correcto");
                                $.Dialog.content(content);
                                                               
                        }
                    });
                //});
            }

            
            $(function(){
                
                
                $("#breakfast").on('click', function(){
                    limpiar_seccion();

                    var seccion = document.getElementById("lista");
                    var elemento = document.createElement("a");
                    elemento.innerHTML= "<div class='grid fluid'>"+
                        "<div class='row'>"+
                            "<div class='span2'></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                        "</div>"+
                        "<div class='row'>"+
                            "<div class='span2'></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                        "</div>"+
                
                    "</div>";
                    seccion.appendChild(elemento);
                });

                $("#crepes").on('click', function(){
                    //alert("Mucha...");
                    limpiar_seccion();

                    var d2 = document.getElementById("lista");
                    var elemento  = document.createElement("a");
                    elemento.innerHTML= "<div class='grid fluid'>"+
                        "<div class='row'>"+
                            "<div class='span2'></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                        "</div>"+
                        "<div class='row'>"+
                            "<div class='span2'></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                        "</div>"+
                
                    "</div>";
                    elemento.size = 1;
                    d2.appendChild( elemento );
                });
                
                $("#hotdrinks").on('click', function(){
                    limpiar_seccion();

                    var seccion = document.getElementById("lista");
                    var elemento = document.createElement("a");
                    
                    elemento.innerHTML= "<div class='grid fluid'>"+
                        "<div class='row'>"+
                            "<div class='span2'></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                        "</div>"+
                        "<div class='row'>"+
                            "<div class='span2'></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                        "</div>"+
                
                    "</div>";

                    seccion.appendChild(elemento);
                });

                $("#colddrinks").on('click', function(){
                    limpiar_seccion();

                    var seccion = document.getElementById("lista");
                    var elemento = document.createElement("a");
                    
                    elemento.innerHTML= "<div class='grid fluid'>"+
                        "<div class='row'>"+
                            "<div class='span2'></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                        "</div>"+
                        "<div class='row'>"+
                            "<div class='span2'></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                        "</div>"+
                
                    "</div>";

                    seccion.appendChild(elemento);
                });

                $("#mexico").on('click', function(){
                    limpiar_seccion();

                    var seccion = document.getElementById("lista");
                    var elemento = document.createElement("a");
                    
                    elemento.innerHTML= "<div class='grid fluid'>"+
                        "<div class='row'>"+
                            "<div class='span2'></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                        "</div>"+
                        "<div class='row'>"+
                            "<div class='span2'></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                        "</div>"+
                
                    "</div>";

                    seccion.appendChild(elemento);
                });

                $("#sandwi").on('click', function(){
                    limpiar_seccion();

                    var seccion = document.getElementById("lista");
                    var elemento = document.createElement("a");
                    
                    elemento.innerHTML= "<div class='grid fluid'>"+
                        "<div class='row'>"+
                            "<div class='span2'></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                        "</div>"+
                        "<div class='row'>"+
                            "<div class='span2'></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                            "<div class='span2' onClick='operacion()' id='producto'><a ><img class='icono' src='images/beer.png' alt=''></a></div>"+
                        "</div>"+
                
                    "</div>";
        

                    seccion.appendChild(elemento);
                });        

            });

        	function listas(){
        		alert("message");

        		if(1>0){
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
                    <div class="span3">
                        <div class="row">
                            <div class="span6"><img id="breakfast" class="icono" src="images/Boton_Breakfast.png" alt=""></div>
                            <div class="span6"><img id="crepes" class="icono" src="images/Boton_Crepes.png" alt=""></div>
                        </div>
                        <div class="row">
                            <div class="span6"><img id="hotdrinks" class="icono" src="images/Boton_hotdrinks.png" alt=""></div>
                            <div class="span6"><img id="colddrinks" class="icono" src="images/Boton_colddrinks.png" alt=""></div>
                        </div>
                        <div class="row">
                            <div class="span6"><img id="mexico" class="icono" src="images/Boton_mexico.png" alt=""></div>
                            <div class="span6"><img id="sandwi" class="icono" src="images/Boton_sandwiches.png" alt=""></div>
                        </div>
                    </div>
                    <div class="span8">
                        <div id="lista">
                            
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