myFunction();

function myFunction(){
	var ajax = new XMLHttpRequest();

	ajax.open("GET", "data.php", true);
	ajax.send();
	
	ajax.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200){

			var data = JSON.parse(this.responseText);
			var left_squers = data["enemy_state"];
			var right_squers = data["state"];
			var revil = data["found"];
			var turn = data["turn"];

			if(is_winning(left_squers)) location = "/winning.html";

			for(var i = 0; i < 100; i++){ 
				var div = document.getElementById(i + 100);

				if(revil.charAt(i) == "r") {
					div.style.backgroundColor = "red";
				} else if(revil.charAt(i) == "g") {
					div.style.backgroundColor = "gray";
				}

				div.onclick = function() {
					if(is_winning(left_squers)) location = "/winning.html";
					if(turn == 0 ){
						alert("its not your turn");
					} else {
						turn = 0; //switching the turn localy
						if(left_squers.charAt(this.id - 100) == "b"){
							this.style.backgroundColor = "red";
							left_squers = left_squers.substr(0, this.id - 100) + 'o' + left_squers.substr(this.id - 100 + 1);
							console.log(left_squers);
							revil = revil.substr(0, this.id - 100) + 'r' + revil.substr(this.id-100 + 1);
						} else {
							this.style.backgroundColor = "gray";
							left_squers = left_squers.substr(0, this.id - 100) + 'g' + left_squers.substr(this.id-100 + 1);
							revil = revil.substr(0, this.id-100) + 'g' + revil.substr(this.id-100 + 1);
						}

						var http = new XMLHttpRequest();
						var params = "turn=0&enemy_state=" + left_squers + "&found=" + revil; // turn
						http.onload = function() {
							data = JSON.parse(this.responseText);
							left_squers = data["enemy_state"];
							right_squers = data["state"];
							turn = data["turn"]; //another switch
							//document.location.reload();
						}
						http.open("POST", "data_update.php", true);
						http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
						http.send(params);
					}
				}
			}
			
			for(var i = "0"; i < "100"; i++) {
				var div = document.getElementById(i);
				if(right_squers.charAt(i) == "b"){
					div.style.backgroundColor = "red";
				} else if(right_squers.charAt(i) == "o") {
					div.style.backgroundColor = "orange";
				} else if(right_squers.charAt(i) == "g") {
					div.style.backgroundColor = "grey";
				}
			}        
		}
	}
}

function is_winning(x) {
	for(var i = 0; i < x.length; i++) {
		if(x.charAt(i) == 'b') return false;
	}
	
	return true;
}