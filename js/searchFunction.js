function showSearch() {
    var searchbox = document.getElementById("searchbox").value;
    var selects = document.getElementById("selects").value;
    
    /*var cpid = document.getElementById("cpid").checked == true ? this.value : null;
    var cpname = document.getElementById("cpname").checked == true ? this.value : null;
    var cpdivision = document.getElementById("cpdivision").checked == true ? this.value : null;
    var cpdept = document.getElementById("cpdept").checked == true ? this.value : null;
    var cpprocess = document.getElementById("cpprocess").checked == true ? this.value : null;
    var cpposition = document.getElementById("cpposition").checked == true ? this.value : null;
    var cpshift = document.getElementById("cpshift").checked == true ? this.value : null;
    var cplevel = document.getElementById("cplevel").checked == true ? this.value : null;*/
    
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
        //xmlhttp.open("GET","app/search.php?searchbox="+searchbox+"&selects="+selects+"&cpid="+cpid+"&cpname="+cpname+"&cpdivision="+cpdivision+"&cpdept="+cpdept+"&cpprocess="+cpprocess+"&cpposition="+cpposition+"&cpshift="+cpshift+"&cplevel="+cplevel,true);
        xmlhttp.open("GET","app/search.php?searchbox="+searchbox+"&selects="+selects,true);
        xmlhttp.send();
        console.log(cpid);
    }
}
