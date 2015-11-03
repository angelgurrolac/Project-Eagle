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
	
	$.ajax({
		type: 'POST',
		url: 'mostrar-datos-fecha.php', 
		data: {fecha:fecha},//parametros
		success: function(data){
			// alert(data);
			if (data==false) {
				document.getElementById("numvictimas").value = "0";
				deshabilitarCampos();
			}else{
				contarVictimas(fecha);
				$("#miTablaVic").html(data);
				document.getElementById("numvictimas").disabled = false;
				document.getElementById("numdecesos").disabled = false;
				document.getElementById("tipoempresa").disabled = false;
				document.getElementById("titularminero").disabled = false;
				document.getElementById("concesion").disabled = false;
				document.getElementById("observaciones").disabled = false;
				document.getElementById("empresa").disabled = false;

			}
		}
	});
}

function contarVictimas(fecha){
	$.ajax({
		type: 'POST',
		url: 'contar-victimas.php', 
		data: {fecha:fecha},//parametros
		success: function(data){
			document.getElementById("numvictimas").value = data;
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

// function usuarioReportes(tipo){
// 	alert();

// }

function deshabilitarCampos(){
	document.getElementById("numvictimas").disabled = true;
	document.getElementById("numdecesos").disabled = true;
	document.getElementById("tipoempresa").disabled = true;
	document.getElementById("titularminero").disabled = true;
	document.getElementById("concesion").disabled = true;
	document.getElementById("observaciones").disabled = true;
	document.getElementById("empresa").disabled = true;
}