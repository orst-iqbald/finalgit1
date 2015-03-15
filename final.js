var xhr = new XMLHttpRequest();

xhr.onload = function countrydrop()
{
  var select = document.createElement('select');
/*
  var request = new XMLHttpRequest();

  request.open('GET', 'http://restcountries.eu/rest/v1/all');
  request.send();
*/
  var responseObject = JSON.parse(xhr.responseText);
  var random = Math.floor(Math.random()*responseObject.length);

  //var countrylist = list[0]['capital'];

  document.getElementById('myList').appendChild(select);
  for(var i=0; i<responseObject.length; i++){
    var option =document.createElement('option');
    option.text = responseObject[i]['name'];
    option.value = responseObject[i]['name'];
    select.appendChild(option);
    select.name='country';
//    select.onchange=function(){
 //       document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
  //      xmlhttp.open("GET", "add_country.php?country="+str, true);
   //     xmlhttp.send();		
//addCountry(this.value));
  //	};
   }
}


function countryStats(countryinput)
{
    var url = 'http://restcountries.eu/rest/v1/name';
    var country = countryinput;//document.getElementById('Afghanistan').id;

    var finalurl = url + '/' + country;

    var request = new XMLHttpRequest();
    var idtoelement = country+0;

 //   request.open('GET', finalurl);
 //   request.send();

    request.onreadystatechange= function(){
      var list = JSON.parse(this.responseText);
      var countrylist = list[0]['capital'];

      document.getElementById(idtoelement).innerHTML = countrylist;
  }

    request.open('GET', finalurl);
    request.send();


}

function addCountry(str){	

//	document.getElementById("table1").appendChild(row);

	var xmlhttp = new XMLHttpRequest();
//	document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
	xmlhttp.open("GET", "add_country.php?country="+str, true);
	xmlhttp.send();


	var row = document.createElement('tr');

	var cell=document.createElement('td');	
	var cellText = document.createTextNode(str);
	cell.appendChild(cellText);
	
	var cell1=document.createElement('td');
	var cell2=document.createElement('td');
	var cell3=document.createElement('td');
        cell3.id=str;	

	var statusbutton = document.createElement('button');
//	var cell3Text=document.createTextNode("one");
statusbutton.onclick = function(){
	
    var url = 'http://restcountries.eu/rest/v1/name';
    var country = str;//document.getElementById('Afghanistan').id;

    var finalurl = url + '/' + country;

    var request = new XMLHttpRequest();
    var idtoelement = country+0;

    request.open('GET', finalurl);
    request.send();

    request.onreadystatechange= function(){
      var list = JSON.parse(this.responseText);
      var countrylist = list[0]['capital'];
	
    //  document.getElementById(idtoelement).innerHTML = countrylist;


	var cell3Text=document.createTextNode(countrylist);
	cell3.appendChild(cell3Text);
	row.appendChild(cell3);	
// countryStats(countryinput);
	};
	};
	
	var buttontext = document.createTextNode("Get Capital");
	statusbutton.appendChild(buttontext);

        row.appendChild(cell);
	row.appendChild(cell1);
	cell1.appendChild(statusbutton);
	row.appendChild(cell2);
//	cell3.appendChild(cell3Text);
//	row.appendChild(cell2);

        document.getElementById("table1").appendChild(row);	

// save to db and then display to client
}


xhr.open('GET', 'http://restcountries.eu/rest/v1/all', true);
xhr.send();
