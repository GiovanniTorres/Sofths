 class Cart {
	/*Create Cart*/
	buyProduct (event) {
		event . preventDefault () ;
		if (event . target . classList . contains ('add_product')) {
			const product = event . target . parentElement . parentElement ;
			console . log (product) ;
			this . readProduct (product) ;
		}
	}

	/*Read Cart*/
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
		this . showProduct (infoProduct) ;
	}

	showProduct (product) {
		const row = document . createElement ('tr') ;
		row . innerHTML = `
			<td class="td1">${product.idn}</td>
			<div class="borde border-secondary"><img src="${product.image}" height="29" width="44"></div>
			<td class="td1">${product.nameProduct}</td>
			<td class="td1">$&nbsp${product.priceProduct}</td>
			<td class="td1"><a class="icon-cancel-circle delete_product" data-id="${product.idn}" href="#"></a></td>
		` ;
		productList . appendChild (row) ;
		this . saveProductLocalStorage (product) ;
		this . clacular () ;
		Swal.fire({
			position: 'center',
			icon: 'success',
			title: 'Agregado correctamente',
			showConfirmButton: false,
			timer: 1500
		})
	}

	/*Update Cart*/
	updateProduct () {
		let loadProduct ;
		loadProduct = this . obtainProductLocalStorage () ;
		loadProduct.forEach (function (product) {
			const row = document . createElement ('tr') ;
			row . innerHTML = `
				<td class="td1">${product.idn}</td>
				<div class="borde border-secondary"><img src="${product.image}" height="29" width="44"></div>
				<td class="td1">${product.nameProduct}</td>
				<td class="td1">$&nbsp${product.priceProduct}</td>
				<td class="td1"><a class="icon-cancel-circle delete_product" data-id="${product.idn}" href="#"></a></td>
			` ;
			productList . appendChild (row) ;
		}) ;
		this . clacular () ;
	}

	/*Delete Cart*/
	deleteProduct (event) {
		event . preventDefault () ;
		let product, productIDN ;
		if (event . target . classList . contains ('delete_product')) {
			event . target . parentElement . parentElement . remove () ;
			const product = event . target . parentElement . parentElement ;
			productIDN = product . querySelector ('a') . getAttribute ('data-id')
		}
		this . deleteLocalStorage (productIDN) ;
		this . emptyCart1 (event) ;
		this . updateProduct () ;
		this . clacular () ;
	}

	emptyCart1 (event) {
		event . preventDefault () ;
		while(productList.firstChild){
			productList.removeChild(productList.firstChild);
		}
		return false;
	}

	emptyCart (event) {
		event . preventDefault () ;
		while(productList.firstChild){
			productList.removeChild(productList.firstChild);
		}
		this.emptyLocalStorage () ;
		this . clacular () ;
		return false;
	}

	clacular () {
		let productLocalStorage ;
		let total = 0, subtotal = 0, igv = 0;
		productLocalStorage = this.obtainProductLocalStorage();
		for (let i = 0; i < productLocalStorage.length; i++) {
			let element = Number(productLocalStorage[i].priceProduct * productLocalStorage[i].quantity);
			total = total + element;
		}
		igv = parseFloat(total * 0.16).toFixed(2);
		subtotal = parseFloat(total-igv).toFixed(2);

		document.getElementById('subtotal').innerHTML = "$&nbsp" + subtotal;
		document.getElementById('igv').innerHTML = "$&nbsp" + igv;
		document.getElementById('total').innerHTML = "$&nbsp" + total.toFixed(2);
	}

	propiedadMuestra (event) {
		event . preventDefault () ;
		let r ;
		r = "imprimiendo desde la función" ;
		return r ;
		//alert (r) ;
	}

	requestPurchase (event) {
		event . preventDefault () ;
		document . querySelector (".payment") . style . display = "block" ;
	}

	closePurchase (event) {
		event . preventDefault () ;
		document . querySelector (".payment") . style . display = "none" ;
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

	/*Delete LocalStorage*/
	deleteLocalStorage (productIDN) {
		let productsLocalStorage, list ;
		productsLocalStorage = this . obtainProductLocalStorage () ;
		productsLocalStorage . forEach (function (productLocalStorage, index) {
			if (productLocalStorage . idn == productIDN) {
				productsLocalStorage . splice (index, 1) ;
			}
		}) ;
		localStorage . setItem ('objectProduct', JSON . stringify (productsLocalStorage)) ;
		list = this . listAgain () ;
		localStorage . setItem ('objectProduct', JSON . stringify (list)) ;
	}

	listAgain (product) {
		let productsList ;
		productsList = this . obtainProductLocalStorage () ;
		idn = 0 ;
		productsList . forEach (function (producto) {
			idn = idn + 1 ;
			producto.idn = idn ;
		}) ;

		this . updateProduct () ;
		return productsList ;
	}

	emptyLocalStorage(){
		localStorage.clear();
	}


}