class Cart {
	emptyCart (event) {
		event . preventDefault () ;
		while(productList.firstChild){
			productList.removeChild(productList.firstChild);
		}
		this.emptyLocalStorage () ;
		return false;
	}

	emptyLocalStorage(){
		localStorage.clear();
	}
}