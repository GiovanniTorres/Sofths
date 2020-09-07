var idn ;
const car = new Car () ;
const featuresProduct = document.getElementById('features_product1');
cargarEventos();


function cargarEventos () {
	featuresProduct . addEventListener ('click', (event)=>{car . buyProduct (event)});
}