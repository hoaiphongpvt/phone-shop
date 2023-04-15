		var billList = []

		var count = 2340

        function loadAllBill(){
		loadBill('2340','user-image-4.png','PhaMorax','Đã xử lý','18.490.000đ');
		loadBill('2341','user-image-3.png','RNGGod','Đã xử lý','123.456.789đ');
		loadBill('2342','user-image-5.png','Giang Chấn Phong','Đã xử lý','32.990.000đ');
		loadBill('2343','user-image-2.png','Huỳnh Xiêm','Đã xử lý','8.806.600đ');
		loadBill('2344','user-image.jpg','Nguyễn Hoài Phong','Đang chờ xử lý','22.807.211đ');
		}
		function loadBill(index,billCusPic,billCusName,billStatus,billPrice) {
			
			var bill = {
				'billCusPic' : billCusPic,
				'billCusName': billCusName,
				'billStatus': billStatus,
				'billPrice': billPrice,
			}

			if(index != '') {
				billList[index] = bill
				showBill()
				return;
			}

			billList.push(bill)

			document.getElementById('result').innerHTML += `<tr>
						<td>${++count}</td>
						<td><img src=images\\${billCusPic}></td>
						<td>${billCusName}</td>
						<td>${billStatus}</td>
						<td>${billPrice}</td>
						<td><button class="btn btn-warning" onclick="finishBill(${count - 1})">Xử lý</button></td>
						<td><button class="btn btn-danger" onclick="deleteBill(${count - 1})">Xóa</button></td>
					</tr>`
		}
		
		function deleteBill(index) {
			console.log(index)
			billList.splice(index, 1)
			showBill();
		}

		function showBill() {
			document.getElementById('result').innerHTML = ''

			for (var i = 2340; i < billList.length; i++) {
				document.getElementById('result').innerHTML += `<tr>
						<td>${i+1}</td>
						<td><img src=images\\${billList[i].billCusPic}></td>
						<td>${billList[i].billCusName}</td>
						<td>${billList[i].billStatus}</td>
						<td>${billList[i].billPrice}</td>
						<td><button class="btn btn-warning" onclick="finishBill(${i})">Xử lý</button></td>
						<td><button class="btn btn-danger" onclick="deleteBill(${i})">Xóa</button></td>
					</tr>`
			}
		}

		function finishBill(index) {
			var bill = billList[index]
			console.log(bill)
			billList[index].billStatus = 'Đã xử lý'
			showBill();
		}