
<?php
   $db = new mysqli("localhost", "root", "", "db_scholarchip");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1>Php With J query</h1>
    <?php
        $selectquery = "SELECT * FROM batches";
        $res = mysqli_query($db, $selectquery);
    ?>

    <form action="" method="post">
        <label for="">Batch ID</label>
        <select name="" id="batchid">
            <option value="" disabled selected>--Select Round--</option>
            <?php while($row = mysqli_fetch_assoc($res)){ ?>
                <option value="<?php echo $row['round']; ?>"><?php echo $row['round']; ?></option>
            <?php } ?>
        </select>
    </form>
    <script>
        $(document).ready(function () {
            
            $("#batchid").change(function(){
                var id = $("#batchid").val();
                //alert(id);
                $.get("studentlist.php", {bid: id}, function(data, status){
                    $("#show").html(data);
                })
            })
        });
    </script>
    <br><hr><br>
    <form action="" method="post">
        <label for="">Student Name</label>
        <select name="" id="show">
            <option value="" disabled selected>--Select Students--</option>
        </select>
    </form>
    <!-- <br><hr><br><div id="" style="height: 300px; width: 500px; border: 5px solid red"></div> -->
</body>
</html>