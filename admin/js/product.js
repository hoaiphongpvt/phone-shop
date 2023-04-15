		var manufactureList = {
			"Apple":'',"SamSung":'',"XiaoMi":'',"OPPO":'',"VIVO":''
		}

		var productList = []

		var manuafaturerTag = document.getElementById('manuafaturer_name')
		for(var key in manufactureList) {
			manuafaturerTag.innerHTML += `<option value='${key}'>${key}</option>`
		}


		var count = 0
		
		function loadAllProduct() {
			loadProduct('0','iphone-12-mini.jpg','iPhone 12 Mini','Apple','16.490.000đ');
			loadProduct('1','iphone-13-pro-max-3.jpg','IPhone 13 Pro Max','Apple','32.990.000đ');
			loadProduct('2','oppo-a94.jpg','OPPO A94','OPPO','7.690.000đ');
			loadProduct('3','samsung-galaxy-a52.jpg','Samsung Galaxy A52 5G','SamSung','10.990.000đ');
			loadProduct('4','Vivo-V23e.jpg','Vivo V23e jpg','VIVO','8.490.000đ');
		}
		function loadProduct(index,pic,productName,manufactureName,price) {

			var product = {
				'pic': pic,
				'productName': productName,
				'manufactureName': manufactureName,
				'price': price,
			}

			if(index != '') {
				productList[index] = product
				showProduct()
				return;
			}

			productList.push(product)

			document.getElementById('result').innerHTML += `<tr>
						<td>${++count}</td>
				    	<td><img src=upload\\${pic} width="40" height="30"></td>
						<td>${productName}</td>
						<td>${manufactureName}</td>
						<td>${price}</td>
						<td><button class="btn btn-warning" onclick="editProduct(${count - 1})">Sửa</button></td>
						<td><button class="btn btn-danger" onclick="deleteProduct(${count - 1})">Xóa</button></td>
					</tr>`
		}
		count = 5
		function addProduct() {
			var index = document.getElementById('index').value
	        var pic = document.getElementById("pic").files[0].name; 
			var productName = document.getElementById('product_name').value
			var manufactureName = document.getElementById('manuafaturer_name').value
			var price = document.getElementById('price').value

			var product = {
				'pic': pic,
				'productName': productName,
				'manufactureName': manufactureName,
				'price': price,
			}

			if(index != '') {
				productList[index] = product
				showProduct()
				return;
			}

			productList.push(product)

			document.getElementById('result').innerHTML += `<tr>
						<td>${++count}</td>
						<td><img src=upload\\${pic} width="40" height="30"></td>
						<td>${productName}</td>
						<td>${manufactureName}</td>
						<td>${price}</td>
						<td><button class="btn btn-warning" onclick="editProduct(${count - 1})">Sửa</button></td>
						<td><button class="btn btn-danger" onclick="deleteProduct(${count - 1})">Xóa</button></td>
					</tr>`
		}

		function deleteProduct(index) {
			console.log(index)
			productList.splice(index, 1)
			showProduct();
		}

		function showProduct() {
			document.getElementById('result').innerHTML = ''

			for (var i = 0; i < productList.length; i++) {
				document.getElementById('result').innerHTML += `<tr>
						<td>${i+1}</td>
						<td><img src=upload\\${productList[i].pic} width="40" height="30"></td>
						<td>${productList[i].productName}</td>
						<td>${productList[i].manufactureName}</td>
						<td>${productList[i].price}</td>
						<td><button class="btn btn-warning" onclick="editProduct(${i})">Sửa</button></td>
						<td><button class="btn btn-danger" onclick="deleteProduct(${i})">Xóa</button></td>
					</tr>`
			}
		}

		function editProduct(index) {
			var product = productList[index]
			console.log(product)
			document.getElementById('index').value = index
			document.getElementById('pic').value = product.pic
			document.getElementById('product_name').value = product.productName
			document.getElementById('manuafaturer_name').value = product.manufactureName
			changeManufaturer()
			document.getElementById('price').value = product.price
		}
		function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#read').attr('src', e.target.result).width(40).height(30);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }