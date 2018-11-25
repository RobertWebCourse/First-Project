function getMasAjax() {
	$.ajax({
		dataType: "json",
		url: "http://localhost:8000/beer",
		beforeSend: function(req) {
			req.setRequestHeader("Authorization", "VerySecretToken");
		}
	}).done(function (data) {

		for (var i = 0; i < data.items.length; i++) {
			console.log(data.items[i]);
		}

		var div = document.createElement('div');
		div.className = "table_beer";
		document.body.insertBefore(div, document.body.firstChild);

		var table = document.createElement('table');
		var tr = document.createElement('tr');
		var th = document.createElement('th');

		div.appendChild(table);
		table.appendChild(tr);
		tr.appendChild(th);
		th.appendChild(document.createTextNode("Nr."));

		var pavadinimas = document.createElement('th');
		div.appendChild(table);
		table.appendChild(tr);
		tr.appendChild(pavadinimas);
		pavadinimas.appendChild(document.createTextNode("Pavadinimas"));

		var tipas = document.createElement("th");
		div.appendChild(table);
		table.appendChild(tr);
		tr.appendChild(tipas);
		tipas.appendChild(document.createTextNode("Tipas"));

		var alkohol = document.createElement("th");
		div.appendChild(table);
		table.appendChild(tr);
		tr.appendChild(alkohol);
		alkohol.appendChild(document.createTextNode("Alkohol"));

		var spalva = document.createElement("th");
		div.appendChild(table);
		table.appendChild(tr);
		tr.appendChild(spalva);
		spalva.appendChild(document.createTextNode("Spalva"));

		function getCellFromTable() {
			
			for(var key in data.items[0].id) {

				var row = document.createElement('tr');
				var cell = document.createElement('td');
				var cellName = document.createElement('td');
				var cellBitterness = document.createElement('td');
				var cellColor = document.createElement('td');
				var cellAlc = document.createElement('td');

				cell.appendChild(document.createTextNode(data.items[0].id));
				cellName.appendChild(document.createTextNode(data.items[0].name));
				cellBitterness.appendChild(document.createTextNode(data.items[0].bitterness));
				cellColor.appendChild(document.createTextNode(data.items[0].color));
				cellAlc.appendChild(document.createTextNode(data.items[0].alc));
				table.appendChild(row);
				row.appendChild(cell);
				row.appendChild(cellName);
				row.appendChild(cellBitterness);
				row.appendChild(cellColor);
				row.appendChild(cellAlc);



				var row = document.createElement('tr');
				var cell = document.createElement('td');
				var cellName = document.createElement('td');
				var cellBitterness = document.createElement('td');
				var cellColor = document.createElement('td');
				var cellAlc = document.createElement('td');

				cell.appendChild(document.createTextNode(data.items[1].id));
				cellName.appendChild(document.createTextNode(data.items[1].name));
				cellBitterness.appendChild(document.createTextNode(data.items[1].bitterness));
				cellColor.appendChild(document.createTextNode(data.items[1].color));
				cellAlc.appendChild(document.createTextNode(data.items[1].alc));
				table.appendChild(row);
				row.appendChild(cell);
				row.appendChild(cellName);
				row.appendChild(cellBitterness);
				row.appendChild(cellColor);
				row.appendChild(cellAlc);;



				
				var row = document.createElement('tr');
				var cell = document.createElement('td');
				var cellName = document.createElement('td');
				var cellBitterness = document.createElement('td');
				var cellColor = document.createElement('td');
				var cellAlc = document.createElement('td');

				cell.appendChild(document.createTextNode(data.items[2].id));
				cellName.appendChild(document.createTextNode(data.items[2].name));
				cellBitterness.appendChild(document.createTextNode(data.items[2].bitterness));
				cellColor.appendChild(document.createTextNode(data.items[2].color));
				cellAlc.appendChild(document.createTextNode(data.items[2].alc));
				table.appendChild(row);
				row.appendChild(cell);
				row.appendChild(cellName);
				row.appendChild(cellBitterness);
				row.appendChild(cellColor);
				row.appendChild(cellAlc);;


				
				var row = document.createElement('tr');
				var cell = document.createElement('td');
				var cellName = document.createElement('td');
				var cellBitterness = document.createElement('td');
				var cellColor = document.createElement('td');
				var cellAlc = document.createElement('td');

				cell.appendChild(document.createTextNode(data.items[3].id));
				cellName.appendChild(document.createTextNode(data.items[3].name));
				cellBitterness.appendChild(document.createTextNode(data.items[3].bitterness));
				cellColor.appendChild(document.createTextNode(data.items[3].color));
				cellAlc.appendChild(document.createTextNode(data.items[3].alc));
				table.appendChild(row);
				row.appendChild(cell);
				row.appendChild(cellName);
				row.appendChild(cellBitterness);
				row.appendChild(cellColor);
				row.appendChild(cellAlc);;


			}	
		}
		getCellFromTable();
	})
}