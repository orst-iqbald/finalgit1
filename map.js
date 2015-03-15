function mapfunction(){
    var country = document.getElementById("country").value;

    var url = 'http://restcountries.eu/rest/v1/name';
    var finalurl = url + '/' + country;
    
    var request = new XMLHttpRequest();


    request.open('GET', finalurl);
    request.send();

request.onreadystatechange=function(){

	var responseObject = JSON.parse(this.responseText);
	var vlat = responseObject[0]["latlng"][0];
	var vlng = responseObject[0]["latlng"][1];

	var map = new GMaps({
      		el: '#map',
      		lat: vlat,
      		lng: vlng
    		});
	}
}
