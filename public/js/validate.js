function charger (e) {
	document.querySelector("#formLogin").addEventListener("submit",valiUser);
}

function valiUser (e) {
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
}

window.addEventListener ("load",charger) ;