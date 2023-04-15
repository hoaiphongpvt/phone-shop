		var customerList = []

		var count = 0

        function loadAllCustomer() {
			loadCustomer('0','user-image-4.png','PhaMorax','IWillHaveOrder');
			loadCustomer('1','user-image-3.png','RNGGod','AnythingIsPossible');
			loadCustomer('2','user-image-5.png','ChanPhong02','HeartOfTheCard');
			loadCustomer('3','user-image-2.png','HuynhXiem','idkMyPassword');
			loadCustomer('4','user-image.jpg','HoaiPhongPVT','Top1Nakroth');
		}
		function loadCustomer(index,customerPic,customerName,customerPass) {

			var customer = {
				'customerPic': customerPic,
				'customerName': customerName,
				'customerPass': customerPass,
			}

			if(index != '') {
				customerList[index] = customer
				showCustomer()
				return;
			}

			customerList.push(customer)

			document.getElementById('result').innerHTML += `<tr>
						<td>${++count}</td>
						<td><img src=images\\${customerPic}></td>
						<td>${customerName}</td>
						<td>${customerPass}</td>
						<td><button class="btn btn-danger" onclick="deleteCustomer(${count - 1})">Xóa</button></td>
					</tr>`
		}

		function deleteCustomer(index) {
			console.log(index)
			customerList.splice(index, 1)
			showCustomer();
		}

		function showCustomer() {
			document.getElementById('result').innerHTML = ''

			for (var i = 0; i < customerList.length; i++) {
				document.getElementById('result').innerHTML += `<tr>
						<td>${i+1}</td>
						<td><img src=images\\${customerList[i].customerPic}></td>
						<td>${customerList[i].customerName}</td>
						<td>${customerList[i].customerPass}</td>
						<td><button class="btn btn-danger" onclick="deleteCustomer(${i})">Xóa</button></td>
					</tr>`
			}
		}
