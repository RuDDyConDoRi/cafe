<!DOCTYPE html>
<html>
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

        <title>Hoteles</title>

    </head>
    <body class="metro">

        <div class="container">
            <h1>
                Notificaciones<small class="on-right">prueba</small>
            </h1>

            <div class="example">
                <button class="button primary" id="notify_btn_1">Notificacion</button>
                <button class="button success" id="notify_btn_2">Unas Notificaciones</button>
                <button class="button success" id="notify_btn_3">Mis Notificaciones</button>
                <button class="button primary" id="notify_btn_4">Resetear</button>
				<br><br>
				<input id="caja" type="text" placeholder="Nro. Mesa" autofocus>
                <script>
					
                    $(function() {
                        $('#notify_btn_1').on('click', function() {
                            $.Notify({
                                shadow: true,
                                position: 'bottom-right',
                                content: "Orden Lista...!!"
                            });
                        });
                        
                        $('#notify_btn_2').on('click', function() {
                            setTimeout(function() {
                                $.Notify({
                                    style: {background: '#1ba1e2', color: 'white'}, 
                                    caption: 'Atencion...', 
                                    content: "Orden Lista"
                                });
                            }, 1000);
                            
                            setTimeout(function() {
                                $.Notify({
                                    style: {background: 'red', color: 'white'}, 
                                    content: "La orden Mesa "+document.getElementById("caja").value+" esta lista!!!"});
                            }, 2000);
                            
                            setTimeout(function() {
                                $.Notify({style: {background: 'green', color: 'white'}, content: "Orden Lista!!!"});
                            }, 3000);
                            
                            setTimeout(function() {
                                $.Notify({content: "Default style for notify"});
                            }, 4000);
                        });
                        /////////////////////////////////////
                        $('#notify_btn_3').on('click', function() {
                            var not1 = $.Notify({
                                style: {background: '#1ba1e2', color: 'white'}, 
                                caption: 'Atencion...', 
                                content: "Orden Lista"
                            });
                            
                            not1.close(10000);
                            
                            var not3 = $.Notify.show("La orden esta lista!!!", "Info...");
                        });
                        
                        $('#notify_btn_4').on('click', function() {
                           var not2 = $.Notify.show("Una Orden Esta Lista!!!");
                           not2.closeAll().init({caption:"Done", content:"Finally"});
                        });
                    });
                </script>
            </div>
        </div>
        <?php
            echo ' ';
        ?>
    </body>
</html>
