function llenarUsuarios(){
	$.ajax({			
		url: 'llenarUsuarios.php',
		type: 'GET',
		beforeSend: function(){
			$("#miTabla").html("");
			$("#miTabla").removeClass("linea");
		},
		success: function(data){
           $("#miTabla").html(data);
           $("#miTabla").hide();
           $("#miTabla").fadeToggle(1000,'swing');
           $("#miTabla").addClass("linea");

            
           $('body').on('click', '.dato_usuario', function() {
           	// document.location.href = "tabla-drones.php#contenedor";
           	var id = $(this).attr('data-listadook');
				$.ajax({
					type: 'POST',
					url: 'editar-datos-usuario.php', 
					data: {ide:id},//parametros

					success: function(data){
						// document.location.href = "tabla-drones.php#contenedor";
						$("#contenedor").empty();
			           $("#contenedor").html(data);
			           console.log(data); 
					}
				});
			});
            

            
            $('body').on('click', '.dato_elim', function() {
           	var id = $(this).attr('data-listadoE');
				$.ajax({
					type: 'POST',
					url: 'mensajeEliminarU.php', 
					data: {idEliminar:id},//parametros

					success: function(data){
						window.location.href="configuracion-admin.php"
			           $("#contenedorE").html(data);
			           console.log(data); 
					}
				});
			});

            $('body').on('click', '.ver_drone', function() {
           	var id = $(this).attr('data-listadoVer');
				$.ajax({
					type: 'POST',
					url: 'ver-drone.php', 
					data: {idVer:id},//parametros

					success: function(data){
						$("#contenedor").empty();
			           $("#contenedor").html(data);
			           console.log(data); 
					}
				});
			});
        }
	});
}