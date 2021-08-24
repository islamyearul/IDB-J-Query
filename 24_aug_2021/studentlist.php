<?php


$db = new mysqli("localhost", "root", "", "db_scholarchip");

$id = $_GET['bid'];

$sql = "SELECT * FROM `students` WHERE  batch_id = '$id'";

$res = mysqli_query($db, $sql);

echo "<option disabled selected>--Select Students--</option>";
?>
   
<br><br><br>
<!-- <table border="1">
    <thead>
        <tr>
            <th>STID</th>
            <th>STName</th>
            <th>STPhone</th>
            <th>Programme</th>
        </tr>
    </thead>
    <tbody>
        <?php //while($row = mysqli_fetch_assoc($res)){ ?>
            <tr>
                <td><?php //echo $row['stid']; ?></td>
                <td><?php //echo $row['stname']; ?></td>
                <td><?php //echo $row['stphone']; ?></td>
                <td><?php //echo $row['programme']; ?></td>
            </tr>
         <?php //} ?>
    </tbody>
</table> -->

<?php while($row = mysqli_fetch_assoc($res)){ ?>
   
    <option value="<?php echo $row['stid']; ?>"><?php echo $row['stid']; ?></option>

<?php } ?>