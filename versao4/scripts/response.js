
function obtendoouf(){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("uf").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "json/uf.json", true);
    xhttp.send();
}


