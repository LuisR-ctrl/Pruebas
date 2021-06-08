function validar(){

	var nombre, calendario, productos, cantidad,op,costo;
	var cliente = document.getElementById("nombre");
	var s_cliente = cliente.options[cliente.selectedIndex].text;
	var cal = document.getElementById("calendario").value;
	var productos = document.getElementById("productos");
	var s_productos = productos.options[productos.selectedIndex].text;
	var cantidad = document.getElementById("cantidad");
	var s_cantidad = cantidad.options[cantidad.selectedIndex].text;	

	if (s_cliente === "") {
		alert("El campo está vacío");
		return false;
	}else if( cal < "2021-06-06"){
		alert("Fecha no permitida");
		return false;
	}
	else if( s_productos === ""){
		alert("El campo está vacío");
		return false;
	}else if( s_cantidad === ""){
		alert("El campo está vacío");
		return false;
	}


	convertirCantidad = parseInt(s_cantidad);
	//alert(convertirCantidad);
	if (s_productos === "SABORES PARIS PARIS DE NOCHE COLA 2 L$312.83") {
		costo = 312.83;
		//alert(costo);
	}else if(s_productos === "SABORES PARS KOSAKO AZUL 2 L$312.83"){
		costo = 312.83;
		//alert(costo);
	}else{
		costo = 112.24;
		//alert(costo);
	}
	op = costo * convertirCantidad;

	alert(s_cliente+" compró:"+"\n"+ s_productos+ "."+"\n"+"Total:"+op );

	document.getElementById("nombre").value = "";
	document.getElementById("calendario").value = "";
	document.getElementById("productos").value = "";
	document.getElementById("cantidad").value = "";

}

