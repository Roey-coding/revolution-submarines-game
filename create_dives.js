for(var i = 0; i < 100; i++){ 
    var div = document.createElement("div");
    var text = document.getElementsByClassName("squers");
    div.id = i  + 100;
    div.onclick = function() {}

    text[0].appendChild(div);
}

for(var i = "0"; i < "100"; i++) {
    var div = document.createElement("div");
    div.id = i;
    var text = document.getElementsByClassName("squers");
    text[1].appendChild(div);
}        