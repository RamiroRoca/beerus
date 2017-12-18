window.addEventListener("load",function(){

	function validateEmail(email) {
    	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    	return re.test(email.toLowerCase());
	}


	//var miForm = document.forms[0];
	var miForm = document.querySelector("form");

	//console.log(miForm);

	var errores = [];

	miForm.addEventListener("submit",function(e){
		

		e.preventDefault();
		//console.log(miForm.elements);

		//INPUT NAME
		var inputNombre = document.querySelector(".nombre");
		if(inputNombre.value.length < 3){
			//alert("pone bien el nombre")
			errores.push("Pusiste mal el nombre")
			//inputNombre.value = "pusiste mal el nombre";
		}

		var inputEmail = document.querySelector(".email");
		validateEmail(inputEmail);
		

		var inputPass = document.querySelector(".Pass");
		if(inputNombre.value.length < 3){
			//alert("pone bien el Pass")
			errores.push("Pusiste mal el Pass")
			//inputNombre.value = "pusiste mal el Pass";
		}



		if(errores.length == 0){
			//this es el formulario
			//this.submit();
			miForm.submit();
		} else {
			//miForm.action = "errores.php";
			//miForm.submit();

			console.log("Hay errores");
			console.error(errores);

			var divErrores = document.querySelector(".errores");
			
			errores.forEach(function(error){
				var cadaError = document.createElement("p");
				cadaError.innerText = error;
				divErrores.append(cadaError);
			});

		}




	});









	/* mini ejemplo eventos del input */
	var inputNombre = document.querySelector(".nombre");
	
	//el focus se activa cuando hago click en el input
	inputNombre.addEventListener("focus",function(){
		console.log("hiciste focus");
		//inputNombre.style.borderColor = "red";
	});

	//el blur cuando hago click afuera del elemento
	inputNombre.addEventListener("blur",function(){
		console.log("hiciste blur");
	});


	//el change es cuando cambiamos el valor actual
	//y hago blur del elemento
	inputNombre.addEventListener("change",function(){
		console.log("hiciste change");
	});


	//el input se activa cuando cambiamos el valor inmediatamente
	inputNombre.addEventListener("input",function(){
		console.log("hiciste input");
	});



	/* mini ejemplo eventos del input */



});