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
           $("#miTabla").fadeToggle(2000,'swing');
           $("#miTabla").addClass("linea");

            
           $('body').on('click', '.dato_reporte', function() {
           	var id = $(this).attr('data-listadook');
				$.ajax({
					type: 'POST',
					url: 'editar-datos-reporte.php', 
					data: {ide:id},//parametros

					success: function(data){
			           $("#contenedor").html(data);
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
        }
	});
}

function llenarDiagnosticos(){
		$.ajax({			
		url: 'llenar-diagnosticos.php',
		type: 'GET',
		beforeSend: function(){
			$("#miTabla").html("");
			$("#miTabla").removeClass("linea");
		},
		success: function(data){
			console.log(data);
           $("#miTabla").html(data);
           $("#miTabla").hide();
           $("#miTabla").fadeToggle(2000,'swing');
           $("#miTabla").addClass("linea");

            
           $('body').on('click', '.dato_reporte', function() {
           	var id = $(this).attr('data-listadook');
				$.ajax({
					type: 'POST',
					url: 'editar-datos-reporte.php', 
					data: {ide:id},//parametros

					success: function(data){
			           $("#contenedor").html(data);
			           console.log(data); 
					}
				});
			});
            

            
            $('body').on('click', '.dato_elim', function() {
           	var id = $(this).attr('data-listadoE');
				$.ajax({
					type: 'POST',
					url: 'mensajeEliminar.php', 
					data: {idEliminar:id},//parametros

					success: function(data){
			           $("#contenedorE").html(data);
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
			// $("#mostrarRD").empty();
			$("#miTabla").html(data);
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