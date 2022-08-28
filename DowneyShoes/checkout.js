var total = 0;

function update_cart()
	{
		var item1Unit = 0;
		var item2Unit = 0;
		var item3Unit = 0;
		var item4Unit = 0;
		var item5Unit = 0;
		var item6Unit = 0;
		var item7Unit = 0;
		var item8Unit = 0;
		var item9Unit = 0;
		
		if(document.getElementById("qtyitem1"))
			{
				item1Unit = document.getElementById("qtyitem1").value;
			}
		if(document.getElementById("qtyitem2"))
			{
				item2Unit = document.getElementById("qtyitem2").value;
			}
		if(document.getElementById("qtyitem3"))
			{
				item3Unit = document.getElementById("qtyitem3").value;
			}
		if(document.getElementById("qtyitem4"))
			{
				item4Unit = document.getElementById("qtyitem4").value;
			}
		if(document.getElementById("qtyitem5"))
			{
				item5Unit = document.getElementById("qtyitem5").value;
			}
		if(document.getElementById("qtyitem6"))
			{
				item6Unit = document.getElementById("qtyitem6").value;
			}
		if(document.getElementById("qtyitem7"))
			{
				item7Unit = document.getElementById("qtyitem7").value;
			}
		if(document.getElementById("qtyitem8"))
			{
				item8Unit = document.getElementById("qtyitem8").value;
			}
		if(document.getElementById("qtyitem9"))
			{
				item9Unit = document.getElementById("qtyitem9").value;
			}

		var amount1 = item1Unit * 675;
		var amount2 = item2Unit * 405;
		var amount3 = item3Unit * 375;
		var amount4 = item4Unit * 575;
		var amount5 = item5Unit * 375;
		var amount6 = item6Unit * 425;
		var amount7 = item7Unit * 875;
		var amount8 = item8Unit * 505;
		var amount9 = item9Unit * 675;

		total = amount1 + amount2 + amount3 + amount4 + amount5 + amount6 + amount7 + amount8 + amount9;

		if(document.getElementById("product_1_price"))
			{
				document.getElementById("product_1_price").innerHTML = "&#8377;" + amount1;
			}
		if(document.getElementById("product_2_price"))
			{
				document.getElementById("product_2_price").innerHTML = "&#8377;" + amount2;
			}
		if(document.getElementById("product_3_price"))
			{
				document.getElementById("product_3_price").innerHTML = "&#8377;" + amount3;
			}
		if(document.getElementById("product_4_price"))
			{
				document.getElementById("product_4_price").innerHTML = "&#8377;" + amount4;
			}
		if(document.getElementById("product_5_price"))
			{
				document.getElementById("product_5_price").innerHTML = "&#8377;" + amount5;
			}
		if(document.getElementById("product_6_price"))
			{
				document.getElementById("product_6_price").innerHTML = "&#8377;" + amount6;
			}
		if(document.getElementById("product_7_price"))
			{
				document.getElementById("product_7_price").innerHTML = "&#8377;" + amount7;
			}
		if(document.getElementById("product_8_price"))
			{
				document.getElementById("product_8_price").innerHTML = "&#8377;" + amount8;
			}
		if(document.getElementById("product_9_price"))
			{
				document.getElementById("product_9_price").innerHTML = "&#8377;" + amount9;
			}

		document.getElementById("total").innerHTML = "&#8377;" + total;
	}

function remove(rowID)
	{
		document.getElementById("my_table").deleteRow(document.getElementById(rowID).rowIndex);
		updateCart();
	}
