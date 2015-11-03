function tipoUsuario(tipo){
	if (tipo == 2) {
		$("#btn-drones").hide();
		$("#opt-reportesd").hide();
		$("#nvo-reporte").hide();
		$("#tab3").hide();
		$("#tab4").hide();
	} else if (tipo == 3) {
		$("#nvo-reporte").hide();
		$("#nvo-reported").hide();
		$("#nvo-drone").hide();
		$("#nvo-cuadran").hide();
		$("#tab3").hide();
		$("#tab4").hide();
	}
}