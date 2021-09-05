<?php
   $db = new mysqli("localhost", "root", "", "school_management_system_2021");
  $sql = "SELECT * FROM `seminar`";
  $datas = mysqli_query($db, $sql);
  $dat = array();
  while($data = mysqli_fetch_assoc($datas)){
    $dat[] = $data['seminar_name'];
  
  }
  //$res = json_encode($dat);

  //$res = implode(",", $dat);
  //echo $res;
 
?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Autocomplete - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    
    var phpString = "<?php echo json_encode($dat); ?>";
    var data = JSON.parse(phpString);
    alert (data);
 
  // $( function() {
  
  //   var availableTags = phpString ;
  //   $( "#tags" ).autocomplete({
  //     source: availableTags
  //   });
  // } );
  </script>
</head>
<body>
 
<div class="ui-widget">
  <label for="tags">Tags: </label>
  <input id="tags">
</div>
 
 
</body>
</html>