var ajax = null ;

function AJAXObject (datos, loading) {
	if (window.XMLHttpRequest) {
		return new XMLHttpRequest () ;
	} else if (window.ActiveXObject) {
		return new ActiveXObject ("Microsoft.XMLHTTP") ;
	}
}

function AJAXExecute (datos, form, loading) {
	ajax = AJAXObject () ;
	ajax.open ("POST","./ajax/AjaxController.php") ;
	ajax.onreadystatechange = image (form, loading) ;
	ajax.setRequestHeader ("Content-Type","application/x-www-form-urlencoded") ;
	ajax.send (datos) ;
}

function image (form, loading) {
	
	loading . style . display = "block" ;
	loading . innerHTML = "<img width='35' src='./images/loader4.gif'>" ;
	setTimeout(sendData,800, form, loading);
}

function sendData (form, loading) {
	if(ajax . readyState == 4) {
		if(ajax . status == 200) {
			loading.innerHTML = null;
			loading.style.display = "none";
			form.innerHTML = ajax.responseText;
			/*if (ajax.responseText.indexOf("data-insert")>-1) {
				alert ("response") ;
				document.querySelector("#altaUser").addEventListener("submit",insertUser);
			}*/
		}
		else {
			alert("El servidor NO contestó\nError "+ajax . status+": "+ajax . statusText);
		}	
	}
}

function loadFunctions (e) {
	e.preventDefault () ;
	document.querySelector("#altaUser").addEventListener("submit",insertUser);
	//document.querySelector("#formLogin").addEventListener("submit",valiUser);
}

/*function valiUser (e) {
	var login_name = document.getElementById ("user").value ;
	var login_password = document.getElementById ("password").value ;

	var login_mensaje1 = document.getElementById ("login-mensaje1") ;
	var login_mensaje2 = document.getElementById ("login-mensaje2") ;

	if (login_name === "") {
		e.preventDefault () ;
		login_mensaje1.style.display = "flex" ;
		return false ;
	} else if (login_name != "") {
		login_mensaje1.style.display = "none" ;
		if (login_password === "") {
			e.preventDefault () ;
			login_mensaje2.style.display = "flex" ;
		}
	}
}*/

function insertUser (e) {
	e.preventDefault();
	var nombre = new Array();
	var valor = new Array();
	var hijosForm = e.target;
	var datos = "";
	var loading = document.querySelector ("#loading2") ;

	var register_name = document.getElementById ("register-name").value ;
	var register_user = document.getElementById ("register-user").value ;
	var register_password = document.getElementById ("register-password").value ;
	var register_telephone = document.getElementById ("register-telephone").value ;
	var register_mail = document.getElementById ("register-mail").value ;

	var register_mensaje1 = document.getElementById("register-mensaje1");	
	var register_mensaje2 = document.getElementById("register-mensaje2");
	var register_mensaje3 = document.getElementById("register-mensaje3");
	var register_mensaje4 = document.getElementById("register-mensaje4");
	var register_mensaje5 = document.getElementById("register-mensaje5");

	if (register_name === "") {
		e.preventDefault () ;
		register_mensaje1.style.display = "flex" ;
		return false ;
	} else if (register_name != "") {
		e.preventDefault () ;
		register_mensaje1.style.display = "none" ;
		if (register_user === "") {
			e.preventDefault () ;
			register_mensaje2.style.display = "flex" ;
			return false ;
		} else if (register_user != "") {
			e.preventDefault () ;
			register_mensaje2.style.display = "none" ;
			if (register_password === "") {
				e.preventDefault () ;
				register_mensaje3.style.display = "flex" ;
				return false ;
			} else if (register_password != "") {
				e.preventDefault () ;
				register_mensaje3.style.display = "none" ;
				if (register_telephone === "") {
					e.preventDefault () ;
					register_mensaje4.style.display = "flex" ;
					return false ;
				} else if (register_telephone != "") {
					e.preventDefault () ;
					register_mensaje4.style.display = "none" ;
					if (register_mail === "") {
						e.preventDefault () ;
						register_mensaje5.style.display = "flex" ;
						return false ;
					} else {
						e.preventDefault () ;
						register_mensaje5.style.display = "none" ;
						//return false ;
					}
				}
			}
		}
	}

	for(var i=0; i<hijosForm.length; i++)
	{
		nombre[i] = hijosForm[i].name;
		valor[i] = hijosForm[i].value;
		datos += nombre[i]+"="+valor[i]+"&";
		form = document.getElementById("altaUser") ;
		loading = document.querySelector ("#loading2") ;
	}
	AJAXExecute(datos, form, loading);
}

window . addEventListener ("load",loadFunctions) ;