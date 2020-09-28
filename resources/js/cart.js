const formSelect = document.querySelector('.form-select');

const markSelect = document.querySelector('.mark-select');

const modelSelect = document.querySelector('.model-select');

const showMoreCars = document.querySelector('.show-more-cars');

//const findYouCar = document.querySelector('.find-your-car');

//console.log(findYouCar);

// if(findYouCar) {
// 	findYouCar.addEventListener('submit', function(e){
// 		e.preventDefault();
// 		const yourCar = new FormData(this); 
// 		console.log(yourCar);
// 		axios.post('/', yourCar)
// 			.then(function(response){
// 				console.log(response);
// 			});
// 	});
// }

	// document.getElementById('latestAdded').addEventListener('DOMContentLoaded', function(){
	// 	axios.post('/')
	// 		.then(function(response){
	// 			let someText = '<?php echo $latests; ?>'
	// 			console.log(someText);
	// 		})
	// })




if(markSelect) {
	// if(modelSelect.children) {
	// 	// while (modelSelect.firstChild) {
	// 	// 	modelSelect.removeChild(modelSelect.firstChild);
	// 	// }
	// 	modelSelect.children = [];
	// };
		markSelect.addEventListener('change', function(e){
			let chkVolume = e.target.value;
			let modelNameArr = [];
			modelSelect.innerHTML = '';
			axios.post('/category/' + chkVolume)
				.then(function(response){
					modelNameArr = response.data;
					let chooseModelText = document.createElement('option');
					chooseModelText.innerHTML = 'Choose model';
					chooseModelText.selected = true;
					chooseModelText.disabled = true;
					modelSelect.append(chooseModelText);
	
					for (let key in modelNameArr) {
						let newNode = document.createElement('option');
						newNode.value = modelNameArr[key].replace(/\s/gi, '-');
						newNode.innerHTML = modelNameArr[key];
						modelSelect.append(newNode);
					};
			});
	});
};

	// carNameSelect.addEventListener('change', function(e){
	// 	e.preventDefault();
		//const data = new FormData(this); //т.е. this это qty: 2, product_id: 14 - данные из формы
		//console.log (data);
		// axios.post('/', data)
		// 	.then (function (response) {
		// 		//changeCart(response.data);
		// 		console.log(response);
		// 	});
// 	});
// }
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
//console.log(document.querySelector('.clear-cart'));
document.querySelector('.clear-cart').addEventListener('click', function(e){
	e.preventDefault();
	axios.post('/cart/clear')
			.then (function (response) {
				changeCart(response.data);
				//console.log(response);
			});

})


document.querySelector('body').addEventListener('submit', function(e){
    
    if(e.target.classList.contains('product-delete')){
    	//alert(123);
    	e.preventDefault();
    	const data = new FormData(e.target); //- данные из формы, которая отправляется

		axios.post('/cart/remove', data)
			.then (function (response) {
				changeCart(response.data);
				//console.log(response);
			});
    }
    
});