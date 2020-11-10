window.onerror =  
    function (msg, source, lineNo, columnNo, error) {
       var data = new Array(
            'prc='+ <?= rand(1,1000);?>,
            'message='+msg,
            'filename='+source,
            'line='+lineNo,
            'col='+columnNo,
            'description='+error
            );

        console.log(data);

        var xhttp = null;

        if (window.XMLHttpRequest)
          {
          // for Firefox, Chrome, >=IE7, etc.
          xhttp = new XMLHttpRequest();
          }
        else if (window.ActiveXObject)
          {
          // for IE6, IE5
          xhttp = new ActiveXObject("Microsoft.XMLHTTP");
          }
        
        var url = 'https://error-reporting-fqvtst6pfa-ey.a.run.app/';
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
            

   // ddddxx // Uncomment to make error in JS or make another Error to Other JS file
