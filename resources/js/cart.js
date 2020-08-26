const formAddToCart = document.querySelector('.add-to-cart');

if(formAddToCart) {
	formAddToCart.addEventListener('submit', function(e){
		e.preventDefault();
		const data = new FormData(this); //т.е. this это qty: 2, product_id: 14 - данные из формы

		axios.post('/cart/add', data)
			.then (function (response) {
				changeCart(response.data);
				//console.log(response);
			});
	});
}

function changeCart(data) {
	document.querySelector('.modal-body').innerHTML = data;
}