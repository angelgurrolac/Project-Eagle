
$(function(){
	$("body").on('click','#no, #CerrarElim, #eliminar', function() {
		$('#msgElim').fadeOut();
	})

	$("body").on('click','#cerrarE', function() {
		$('#EditLlenar').fadeOut();
	})

	$('#buscador').keyup(function(){
	 	var buscar= this.value;
	    var dataString = 'buscarpalabra='+ buscar;

	    console.log(buscar);

	    if(buscar=='')
	    {
	    	$("#listadoUsers tbody tr").show();
	    }
	    else{

			$("#listadoUsers tbody tr").each(function(){
				var filtro = $(this).find('td').eq(1);
				filtro = filtro.filter(':contains(' + buscar + ')');
				if(filtro.length > 0)
					$(this).show();
				else
					$(this).hide();
				console.log(filtro);
			})
		}   
	});

});

function registrarHotel(){

	$("form").on('submit', function(e) {
		e.preventDefault();
		var nombre = $("#nombre").val();
		var descripcion = $("#descripcion").val();
		var imagen = $("#imagen").val();
		var estrellas = $("#estrellas").val();
		var direccion = $("#direccion").val();
		var telefono = $("#telefono").val();
		var web = $("#web").val();
		var horario = $("#horario").val();
		var horariof = $("#horariof").val();

		$.ajax({
			  type: "POST",
			  url: "registrarHotel.php",
			  data: { nombre: nombre, descripcion: descripcion, imagen: imagen, estrellas: estrellas,
			  		  direccion: direccion, telefono: telefono, web: web, horario: horario, horariof: horariof }
		  
		}).done(function(msg) {
			console.log(msg)
			$("#mensaje").html("<div class='alert alert-success'> Hotel registrado con éxito </div>");
			llenarHoteles();

			$("#nombre").val("");
			$("#descripcion").val("");
			$("#imagen").val("");
			$("#estrellas").val("");
			$("#direccion").val("");
			$("#telefono").val("");
			$("#web").val("");
			$("#horario").val("");
			$("#horariof").val("");
			$('#myModal').modal('hide');
		  });
	});
}

function llenarHoteles(){
	 
	$.ajax({			
		url: 'llenarHotel.php',
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

           $('body').on('click', '.dato_hotel', function() {

           	var id = $(this).attr('data-listadook');
				$.ajax({

					type: 'POST',
					url: 'editarLlenarHotel.php', 
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


function EC(){//Eliminar Hotel
	var id = $("#idhot").val();
	$.ajax({
		type: 'POST',
		url: 'eliminarHotel.php',
		data: {idhot:id},//parametros			
		success: function(data){
           if(data == 'Correcto'){
				$("div").removeClass('modal-backdrop');
				$("#miTabla").removeClass("linea");
				llenarHoteles();
				$('#myModal-Delete').modal('hide'); 
           	}
           	else{
           		$('#myModal-Delete').modal('hide'); 
           	}

           		
            
		}
	});

}

function MD(){//Modificar ó Editar Cliente
	var id = $("#ideditar").val();
	var nom_edit = $("#nom_edit").val();
	var des_edit = $("#des_edit").val();
	var est_edit = $("#est_edit").val();
	var dir_edit = $("#dir_edit").val();
	var tel_edit = $("#tel_edit").val();
	var web_edit = $("#web_edit").val();
	var hor_edit = $("#hor_edit").val();
	var horf_edit = $("#horf_edit").val();


	$.ajax({
		type: 'POST',
		url: 'editarHotel.php',
		data: {ideditar:id, nom_edit:nom_edit, des_edit:des_edit, est_edit:est_edit, 
		dir_edit:dir_edit, tel_edit:tel_edit, web_edit:web_edit, hor_edit:hor_edit, horf_edit:horf_edit},//parametros			
		success: function(data){
           if(data == 'Correcto'){
				$("div").removeClass("modal-backdrop");
				$("#miTabla").removeClass("linea");
				llenarHoteles();
            }
		}
	});	
}




