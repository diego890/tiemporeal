<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>actualizacion en tiempo real</title>
	
</head>
<body style="background:#F0FFFD">
	

                
                <div id="contenido" >
                	
                </div>                
                
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	
	<script language="javascript">
		var timestamp = null;
		function cargar_push(){
			$.ajax({
				async: true,
				type: "POST",
				url: "httpush.php",
				data: "&timestamp="+timestamp,
				dataType: "html",
				success: function(data){
					var json  = eval("(" + data + ")");
					timestamp = json.timestamp;
					mensaje   = json.mensaje;

					if(timestamp == null){

					}else{
						$.ajax({
							async: true,
							type: "POST",
							url: "mensajes.php",
							data: "",
							dataType: "html",
							success: function(data){
								$('#contenido').html(data);
							}
						});
					}
					setTimeout('cargar_push()',1000);
				}
			});
		}

		$(document).ready(function()
		{
			cargar_push();
		});
	</script>
</body>
</html>