class Car {
	/*Create Cart*/
	buyProduct (event) {
		event . preventDefault () ;
		if (event . target . classList . contains ('add_product1')) {
			const product = event . target . parentElement . parentElement ;
			console . log (product) ;
			this . readProduct (product) ;
		}
	}

	readProduct (product) {
		this . obtainProductLocalStorage () ;
		const infoProduct = {
			idn : idn ,
			image : product . querySelector ('.img_product') . src ,
			nameProduct : product . querySelector ('.name_product') . textContent ,
			priceProduct : product . querySelector ('.price_product') . textContent ,
			id : product . querySelector ('a') . getAttribute ('data-id') ,
			quantity : 1
		}
		this . saveProductLocalStorage (infoProduct) ;
		Swal.fire({
			position: 'center',
			icon: 'success',
			title: 'Agregado correctamente',
			showConfirmButton: false,
			timer: 1500
		})
	}

	/*Crate LocalStorage*/
	saveProductLocalStorage (product) {
		let products ;
		products = this . obtainProductLocalStorage () ;
		products . push (product) ;
		localStorage . setItem ('objectProduct', JSON . stringify (products)) ;
	}

	/*Read LocalStorage*/
	obtainProductLocalStorage () {
		let productLocalStorage ;
		if (localStorage . getItem ('objectProduct') === null) {
			productLocalStorage = [] ;
			idn = productLocalStorage . length + 1 ;
		} else {
			productLocalStorage = JSON . parse (localStorage . getItem ('objectProduct')) ;
			idn = productLocalStorage . length +  1;
		}
		return productLocalStorage ;
	}
}

