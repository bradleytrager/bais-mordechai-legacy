<!doctype html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>jQuery UI Slider - Snap to increments</title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css" />
    <script>
    $(function() {
        $( "#slider" ).slider({
            value:2,
            min: 0,
            max: 20,
            step: 1,
            slide: function( event, ui ) {
                $( "#amount" ).val( "$" + ui.value );
            }
        });
        $( "#amount" ).val( "$" + $( "#slider" ).slider( "value" ) );
    });
    </script>
</head>
<body>
 
<p>
    <label for="amount">Donation amount:</label>
    <input type="text" id="amount" style="border: 0; color: #f6931f; font-weight: bold;" />
</p>
 
<div id="slider"></div>
 
 
</body>
</html>