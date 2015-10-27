var otroTipo = false;
function llenarReportes(){
	$.ajax({			
		url: 'llenar-reporte.php',
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

            
           $('body').on('click', '.dato_reporte', function() {
           	var id = $(this).attr('data-listadook');
				$.ajax({
					type: 'POST',
					url: 'editar-datos-reporte.php', 
					data: {ide:id},//parametros

					success: function(data){
						$("#contenedo-modiregistro").empty();
			           $("#contenedo-modiregistro").html(data);
			           console.log(data); 
					}
				});
			});
            

            
            $('body').on('click', '.dato_elimR', function() {
           	var id = $(this).attr('data-listadoE');
           	// alert(id);
				$.ajax({
					type: 'POST',
					url: 'mensajeEliminarR.php', 
					data: {idEliminar:id},//parametros

					success: function(data){
			           $("#contenedorE").html(data);
			           console.log(data); 
			           window.location.href="tabla-reportes.php";
					}
				});
			});

			$('body').on('click', '.ver_reporte', function() {
           	var id = $(this).attr('data-listadoVer');
           	// alert(id);
				$.ajax({
					type: 'POST',
					url: 'ver-reporte.php', 
					data: {idVer:id},//parametros

					success: function(data){
						$("#contenedo-modiregistro").empty();
			           $("#contenedo-modiregistro").html(data);
			           console.log(data); 
					}
				});
			});
        }
	});
}

function cambiarFecha(fecha){
	// alert(fecha);
	$.ajax({
		type: 'POST',
		url: 'mostrar-datos-fecha.php', 
		data: {fecha:fecha},//parametros
		success: function(data){
				$("#miTablaVic").html(data);
			console.log(data); 
		}
	});
}

function otraOpt(opt){
	if (opt =="otro") {
		// $("#otroOpt").display.none;
		document.getElementById("lbl-otro").style.display = "block";
		document.getElementById("input-otro").style.display = "block";
		otroTipo=true;
	}else{
		document.getElementById("lbl-otro").style.display = "none";
		document.getElementById("input-otro").style.display = "none";
		otroTipo=false;
	}
}

function buscarReportes(busqueda){
	var letra = busqueda;
	$.ajax({
		type: 'POST',
		url: 'busqueda-reporte.php', 
		data: {busqueda:letra},//parametros
		success: function(data){
			$("#miTabla").html(data);
           $("#miTabla").hide();
           $("#miTabla").fadeToggle(1000,'swing');
           $("#miTabla").addClass("linea");
		}
	});

}