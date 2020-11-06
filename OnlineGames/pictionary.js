function loadXMLDoc(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = 
        function() {
            if(this.readyState == 4 && this.status == 200){
                myFunction(this);
            }
        };
        xmlhttp.open("GET", "pictionary.xml", true);
        xmlhttp.send();
    function myFunction(xml) {
        var i;
        var xmlDoc = xml.responseXML;
        var output = xmlDoc;
        var data = "<div class='row'><div class='col-lg-6'><p>" + output[0] + "</p></div><div class='col-lg-2'><img src='" + output[1] + "' alt='promptImageA'></div><div class='col-lg-2;><img src='" + output[2] + "' alt='promptImageB'></div><div class='col-lg-2>'<img src='" + output[3] + "' alt = 'promptImageC'></div></div>"
    }
    document.getElementById("prompt").innerHTML=table;
}