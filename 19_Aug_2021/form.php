<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    

    <script>
        $(document).ready(function() {
            $("#sb").z(function() {
                var x = $("#fn").val();
                var y = $("#ln").val();
               var res = "Welcome To " + x + " " + y ;
               $("h3").html(res);
            });
           
        });
    

    </script>

    <form action="">
        <input type="text" placeholder="Enter First name" id="fn"><br>
        <input type="text" placeholder="Enter Last Name" id="ln"><br>
        <button id="sb">Show</button>
    </form>
    <h3 id="show">Result Will be Show Here</h3>

</body>
</html>