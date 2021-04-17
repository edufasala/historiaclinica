	function mostrarsss(){
    	// alertify.success("Hola desde funciones .");
    	alert("Hola");
    	console.log("entro aca");
    }
    function validar2(){
		$('#btningresar').attr('disabled','true');
		$('#content').html('<div class="content"></div>');
		var cr=document.getElementById("carga");
		cr.style.display='block';
		correo=$('#corre').val();
		clave=$("#lacl").val();
		c=$("#g-recaptcha-response").val();

		var aux2=Cr(correo);

		if(aux2=="nd")
		{
			$('#corre').focus();
			alertify.error("El correo no es valido");
			cr.style.display='none';
			$('#btningresar').removeAttr('disabled');
			$('#content').fadeIn(2000).html('');
			//grecaptcha.reset();
			return false;
		}
		else
		{

		}
		console.log(correo);
		// alertify.alert(correo+''+clave);
		// cadena="usuario="+correo+
		// 		"&clave="+clave+"&captcha="+c;
		// $.ajax({
		//     type: "POST",
		//     url: "https://compcasaips.com/historiasclinicas/entrar/ingresar",
		//     data: cadena,
		//     success: function(respu) {
		//     	//respu es la respuesta que recibo del modelo al hacer la consulta
		//         //$('#resultado').html(respu);
		//         // alertify.alert(respu);
		//         $('#btningresar').removeAttr('disabled');
		// 		$('#content').fadeIn(1000).html('');
		// 		// $('#content').fadeOut("slow");
		//         cr.style.display='none';
		//     	// console.log("rta:"+respu);
		//         mjacceder(respu);
		//     }
		// });
		// return false;
	}

	function mjacceder2(texto){
		var aux=texto;
		var aux2="";
		aux2=aux.substr(1,3);//aux.length;
		// alertify.error(aux2+" :"+texto);//4 4 7
		// console.log(aux2+" : "+texto);
		var nomentidad="Nombre de la entidad";
		if(texto==0)
		{
			alertify.alert(nomentidad,'<span class="alert-warning" role="alert"><strong>¡El Usuario No esta Registrado!</strong></span>', 
			function(){ location.reload() }).set('closable',false);
		}
		else if(texto==2)
		{
			alertify.alert(nomentidad,'<span class="alert-warning" role="alert"><strong>¡Debes Validar el Captcha!</strong></span>', 
			function(){  }).set('closable',false);
			grecaptcha.reset();
		}
		else if(texto==3)
		{
			alertify.alert(nomentidad,'<span class="alert-warning" role="alert"><strong>¡Captcha Incorrecto!</strong></span>', 
			function(){ location.reload()  }).set('closable',false);
		}
		else if(texto==4)
		{
			alertify.alert(nomentidad,'<span class="alert-danger" role="alert"><strong>¡EL Usuario es Incorrecto!</strong></span>').set('closable',true);
			grecaptcha.reset();
		}
		else if(texto==5)
		{
			alertify.alert(nomentidad,'<span class="alert-danger" role="alert"><strong>¡La Contraseña es Incorrecta!</strong></span>').set('closable',true);
			grecaptcha.reset();
		}
		else if(texto==6)
		{
			alertify.alert(nomentidad,'<span class="alert-danger" role="alert"><strong>¡El Usuario y Contraseña son Incorrectos!</strong></span>').set('closable',true);
			grecaptcha.reset();
		}
		// else if(texto=="noe")
		// {
		// 	alertify.alert(nomentidad,'<span class="alert-warning" role="alert"><strong>¡El Usuario Ha sido Desactivado!</strong></span>', 
		// 	function(){ location.reload() }).set('closable',false);
		// }
		
		else if(texto==8)
		{
			alertify.alert(nomentidad,'<span class="alert-warning" role="alert"><strong>¡El Usuario Ha sido Desactivado!</strong></span>', 
			function(){ location.reload() }).set('closable',false);
		}
		// else if(texto=="noestasm")
		// {
		// 	alertify.alert(nomentidad,'<span class="alert-warning" role="alert"><strong>¡El Usuario Ha sido Desactivado!</strong></span>', 
		// 	function(){ location.reload() }).set('closable',false);
		// }
		else 
		{
			tam=texto.length;
			tam=tam-2;
			location.href=texto.substr(1,tam);
			// location.href=estaeslabaseurl+texto.substr(1,tam);
			// window.location.replace(estaeslabaseurl+texto.substr(1,tam));
			console.log(estaeslabaseurl+texto.substr(1,tam)); 
			console.log(texto.substr(1,tam)); 
			// if(texto.substr(1,tam)=='inicio_empleado')
			// {
			// 	console.log('empl'+texto.substr(1,tam));
			// }
			// else
			// {
			// 	console.log('empl 2');
			// 	// location.href='entrar';
			// }
			
		}
	}