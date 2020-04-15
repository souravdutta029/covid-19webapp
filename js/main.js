window.onload = function(){
	getCovidData();
}

function getCovidData(){
	fetch("https://api.covid19api.com/summary")
	.then(function(response){
		return response.json()
	}).then(function(data){
		var table_data = document.getElementById("table_data");
		for(var i = 1; i < (data["Countries"].length); i++){
			var x = table_data.insertRow();

			x.insertCell(0);
			table_data.rows[i].cells[0].innerHTML = data["Countries"][i-1]['Date'];
			table_data.rows[i].cells[0].style.background = "#83D306";

			x.insertCell(1);
			table_data.rows[i].cells[1].innerHTML = data["Countries"][i-1]['Country'];
			table_data.rows[i].cells[1].style.background = "#0C19CF";
			table_data.rows[i].cells[1].style.color = "white";

			x.insertCell(2);
			table_data.rows[i].cells[2].innerHTML = data["Countries"][i-1]['TotalConfirmed'];
			table_data.rows[i].cells[2].style.background = "#D60675";

			x.insertCell(3);
			table_data.rows[i].cells[3].innerHTML = data["Countries"][i-1]['TotalRecovered'];
			table_data.rows[i].cells[3].style.background = "#29A4F7";
			table_data.rows[i].cells[3].style.color = "white";

			x.insertCell(4);
			table_data.rows[i].cells[4].innerHTML = data["Countries"][i-1]['TotalDeaths'];
			table_data.rows[i].cells[4].style.background = "#EF0C0F";

			x.insertCell(5);
			table_data.rows[i].cells[5].innerHTML = data["Countries"][i-1]['NewConfirmed'];
			table_data.rows[i].cells[5].style.background = "#6909F1";
			table_data.rows[i].cells[5].style.color = "white";

			x.insertCell(6);
			table_data.rows[i].cells[6].innerHTML = data["Countries"][i-1]['NewRecovered'];
			table_data.rows[i].cells[6].style.background = "#09CFB1";

			x.insertCell(7);
			table_data.rows[i].cells[7].innerHTML = data["Countries"][i-1]['NewDeaths'];
			table_data.rows[i].cells[7].style.background = "#B608EC";
			table_data.rows[i].cells[7].style.color = "white";
		}
	})
	.catch(function(){
		console.log("error");
	})

	setTimeout(getCovidData, 21600000); // updates every 6 hrs.

	}
