var ajax = null ;

function AJAXObject () {
	if (window.XMLHttpRequest) {
		return new XMLHttpRequest () ;
	} else if (window.ActiveXObject) {
		return new ActiveXObject ("Microsoft.XMLHTTP") ;
	}
}

function AJAXExecute () {
	ajax = AJAXObject () ;
	ajax.onreadystatechange = function () {
		if(ajax . readyState == 4) {
			if(ajax . status == 200) {
				document . querySelector ('.categories_ajax') . innerHTML = ajax.responseText ;
			}
			else {
				alert("El servidor NO contestó\nError "+ajax . status+": "+ajax . statusText);
			}	
		}
	}
	ajax.open ("POST","http://localhost/ajax/AjaxCategory.php") ;
	ajax.send () ;
}

window . addEventListener ("load", AJAXExecute) ;