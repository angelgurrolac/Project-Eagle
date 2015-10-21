function llenarCuadrantes(){
	$.ajax({			
		url: 'llenar-cuadrante.php',
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

            
           $('body').on('click', '.dato_cuadrante', function() {
           	// document.location.href = "tabla-drones.php#contenedor";
           	var id = $(this).attr('data-listadook');
           	// alert(id);
				$.ajax({
					type: 'POST',
					url: 'editar-datos-cuadrante.php', 
					data: {ide:id},//parametros

					success: function(data){
						// document.location.href = "tabla-drones.php#contenedor";
			           $("#contenedo-modicuadrante").html(data);
			           console.log(data); 
					}
				});
			});
            

            
            $('body').on('click', '.dato_elimC', function() {
           	var id = $(this).attr('data-listadoE');
           	// alert(id);
				$.ajax({
					type: 'POST',
					url: 'mensajeEliminarC.php', 
					data: {idEliminar:id},//parametros

					success: function(data){
						window.location.href="tabla-cuadrantes.php"
			           $("#contenedor-eliminarC").html(data);
			           console.log(data); 
					}
				});
			});

			$('body').on('click', '.ver_cuadrante', function() {
           	var id = $(this).attr('data-listadoVer');
				$.ajax({
					type: 'POST',
					url: 'ver-cuadrante.php', 
					data: {idVer:id},//parametros

					success: function(data){
			           $("#contenedorVCua").html(data);
			           console.log(data); 
					}
				});
			});
        }
	});
}

function buscarCuadrantes(busqueda){
	var letra = busqueda;
	$.ajax({
		type: 'POST',
		url: 'busqueda-cuadrante.php', 
		data: {busqueda:letra},//parametros
		success: function(data){
			$("#miTabla").html(data);
           $("#miTabla").hide();
           $("#miTabla").fadeToggle(1000,'swing');
           $("#miTabla").addClass("linea");
		}
	});
}