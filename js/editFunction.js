function showSearch() {
    var searchbox = document.getElementById("searchbox").value;
    var selects = document.getElementById("selects").value;
    
    if(searchbox == ""){
        document.getElementById("showsearch").innerHTML = "";
        return;
    }else{
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        }else{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("showsearch").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET","app/edit.php?searchbox="+searchbox+"&selects="+selects,true);
        xmlhttp.send();
    }
}
