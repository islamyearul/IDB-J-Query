<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
    <style>
            .selected{
                color: red;
            }
    </style>
</head>
<body>
    

    <script>
        $(document).ready(function(){
            $("li").eq(2).addClass("selected");

           
        });
    

    </script>

  <div>
      <ul>
          <li>List Item 1</li> 
          <li>List Item 2</li> 
          <li>List Item 3</li> 
          <li>List Item 4</li> 
          <li>List Item 5</li> 
          <li>List Item 6</li> 
      </ul>
  </div>

</body>
</html>