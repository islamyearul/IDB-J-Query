<?php
   $db = new mysqli("localhost", "root", "", "db_scholarchip");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <title>Document</title>
</head>

<body>
    <div class="container my-5">
        <h1 class="text-danger">Php With J query</h1>
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
    </div>
    <script>
    $(document).ready(function() {

        $("#batchid").change(function() {
            var id = $("#batchid").val();
            //alert(id);
            $.get("studentlist.php", {
                bid: id
            }, function(data, status) {
                $("#show").html(data);
            })
        })
    });
    </script>
    <br>
    <hr><br>
    <form action="" method="post">
        <label for="">Student Name</label>
        <select name="" id="show">
            <option value="" disabled selected>--Select Students--</option>
        </select>
    </form>
    <!-- <br><hr><br><div id="" style="height: 300px; width: 500px; border: 5px solid red"></div> -->












    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>