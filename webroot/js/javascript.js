window.onload = function() {
	var bool = 0;
	var container = null;
	var ancho;
	var ancho2;
	//ancho1 = window.innerWidth;
	ancho1 = $("#container-page").width();
	ancho2 = $("#container-menu").width();
	ancho = ancho1 - ancho2 - 60 - 300;
	$(".container-view").css("width", ancho);
	
	$(".nav.nav-list.affix-top li").click(function(event) {
		//$(this).find("ul").css("display", "block");
		if((container == null) || (container == this)){
			if(bool == 0){
				$(this).find("ul").show("slow");
				$(this).find(".icon-chevron-down").css("background-position", "-288px -120px");
				container = this;
				bool = 1;
			}else{
				$(this).find("ul").hide("slow");
				$(this).find(".icon-chevron-down").css("background-position", "-313px -119px");
				container = null;
				bool = 0;
			}
		}else{
			$(container).find("ul").hide("slow");
			$(container).find(".icon-chevron-down").css("background-position", "-313px -119px");
			$(this).find("ul").show("slow");
			$(this).find(".icon-chevron-down").css("background-position", "-288px -120px");
			container = this;
			bool = 1;
		}
	});

	$("select").change(function() {
		if($(this).val() == 2){
			$("#newPublication").load("nueva_memoria");
			$("#newPublication").show();
		}else{
			if($(this).val() == 1){
				$("#newPublication").load("nuevo_evento");
				$("#newPublication").show();
			}else{
				if($(this).val() == 3){
					$("#newPublication").load("nuevo_articulo");
					$("#newPublication").show();
				}else{
					if($(this).val() == 4){
						$("#newPublication").load("nuevo_proyecto");
						$("#newPublication").show();
					}else{
						$("#newPublication").hide();
					}
				}
			}
		}
	});

	$(".nav.nav-tabs > li").click(function() {
		if($(this).attr("class") != "active"){
			var id = $(this).attr("id");
			$(".nav.nav-tabs > .active").removeClass("active");
			$(this).addClass("active");
			if(id == "datosPersonales"){
				$("#configurar-cuenta").load("datos_personales");
			}else{
				if(id == "datosAcademicos"){
					$("#configurar-cuenta").load("datos_academicos");
				}else{
					$("#configurar-cuenta").load("cambiar_contrasena");
				}
			}
		}
	})

	$(".nav.nav-list li").click(function() {
		if($(this).attr("class") != "active"){
			var id = $(this).attr("id");
			$(".nav.nav-list > .active").removeClass("active");
			$(this).addClass("active");
			
		}
	});
};

/*$(".container-publicacion").ready(function (){
		var altura;
		altura = $(".container-publicacion").height();
		alert(altura);
});*/

