window.onerror =  
    function (msg, source, lineNo, columnNo, error) { 
       var data = new Array(
            'message='+msg,
            'filename='+source,
            'line='+lineNo,
            'col='+columnNo,
            'description='+error
            );

        // console.log(data);
        
        var xhttp = new XMLHttpRequest();
        var url = 'PATH TO PHP FILE TO LOG DATA';
        var params = data.join('&');
        xhttp.open("POST", url, true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               console.log(xhttp.responseText); // just to have feebback after Log . Can be Remove
            }
        };
        xhttp.send(params);
    }; 
            

    xxxxxx // Just make an error
