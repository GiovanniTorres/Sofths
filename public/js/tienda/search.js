/*
function executer () {
}

document . querySelector (".box_search") . addEventListener ("keyup", executer) ;
*/

var ajaxSearch = null ;

function AJAXObjectSearch () {
	if (window.XMLHttpRequest) {
		return new XMLHttpRequest () ;
	} else if (window.ActiveXObject) {
		return new ActiveXObject ("Microsoft.XMLHTTP") ;
	}
}

function AJAXExecuteSearch () {
	var box_search = document . getElementById ("bsearch") . value ;
	document . querySelector (".list_search") . style . display = "block";
	
	if (box_search === '') {
		document . querySelector (".list_search") . style . display = "none";
	}
	ajaxSearch = AJAXObjectSearch () ;
	ajaxSearch.onreadystatechange = function () {
		if(ajaxSearch . readyState == 4) {
			if(ajaxSearch . status == 200) {
				document . querySelector ('.list_search') . innerHTML = ajaxSearch.responseText ;
			}
			else {
				alert("El servidor NO contestó\nError "+ajaxSearch . status+": "+ajaxSearch . statusText);
			}	
		}

	}
	ajaxSearch.open ("POST","http://localhost/ajax/AjaxSearch.php", true) ;
	ajaxSearch.setRequestHeader ("Content-Type","application/x-www-form-urlencoded") ;
	ajaxSearch.send ("l=" + box_search) ;
}

document . querySelector (".box_search") . addEventListener ("keyup", AJAXExecuteSearch) ;
