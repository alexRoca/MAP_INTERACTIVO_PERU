<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
			<div class="map">Alternative content</div>
		</div>
		<script src="http://localhost:8080/MAP_INTERACTIVO_PERU/jquery.min.js"></script>
		<script src="http://localhost:8080/MAP_INTERACTIVO_PERU/maps/raphael-min.js"> </script> 
		<script src="http://localhost:8080/MAP_INTERACTIVO_PERU/maps/jquery.mapael.min.js"></script>
		<script src="http://localhost:8080/MAP_INTERACTIVO_PERU/maps/mapael-maps-master/peru/peru.js"></script>
		<script>
			$(".container").mapael({
				map : {
					name : "peru",
					width : 400
				},
				areas : {
					"tacna" : {
						"value" : "123",
						/*"attrs" : {
							"href" : "#"
						},*/
						tooltip : {
							content : "<span style=\"font-weight:bold;\">TACNA<\/span><br> poblacion: 123456"
						}
					},
					"tumbes" : {
						"value" : "321",
						/*"attrs" : {
							"href" : "#"
						},*/
						tooltip : {
							content : "<span style=\"font-weight:bold;\">TUMBES<\/span><br> poblacion: 654321"
						}
					}
				}
			});
		</script>
		
		
    </body>
</html>