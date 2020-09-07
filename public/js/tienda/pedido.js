var idn ;
let r ;
const control = new Cart () ;
const cart = new Cart () ;
const elementsCart = document.getElementById('carrito');
const productList = document.querySelector('#lista-carrito tbody');
const featuresProduct = document.getElementById('features_product');
const emptyCartBtn = document.getElementById('empty_cart');
const btnRequestPurchase = document.getElementById('request_purchase') ;
const btnClosePurchase = document.getElementById ("btn_closes") ;
const pay = document.getElementById ("pay") ;

document . querySelectorAll ('.lol') . forEach ((a) => {
	a . addEventListener ('click', () => {
		location.href = a ;
	})
})

window.onload = alCerrarElNavegador () ;
cargarEventos();

function cargarEventos () {
	featuresProduct . addEventListener ('click', (event)=>{cart . buyProduct (event)});
	document . addEventListener ('DOMContentLoaded', cart . updateProduct ()) ;
	elementsCart . addEventListener ('click', (event)=>{cart . deleteProduct (event)}) ;
	emptyCartBtn . addEventListener ('click', (event)=>{cart . emptyCart (event)}) ;
	btnRequestPurchase . addEventListener ('click', (event)=>{cart . requestPurchase (event)}) ;
	btnClosePurchase . addEventListener ('click', (event)=>{cart . closePurchase (event)}) ;
	pay . addEventListener ('click', (event)=>{alto (event)}) ;
}

function alCerrarElNavegador () {
	if (usuarioConectadoJava == 0) {
		document . addEventListener ('DOMContentLoaded', (event)=>{control . emptyCart (event)}) ;     //cart . vaciarCarritoAlCerrarSesion ()) ;
	} 
}

function alto (event) {
	event . preventDefault () ;
	document . addEventListener ('DOMContentLoaded', cart . propiedadMuestra (event)) ;
	//tot = "result" ;
	//alert (tot) ;

}