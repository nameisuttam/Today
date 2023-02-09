<?php
    include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data</title>
</head>
<body>
</body>
</html>

<?php
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $delete = "DELETE FROM stud_regi WHERE id='$id'";
        $query = mysqli_query($conn,$delete);
        if($query){
            header("location:display.php");
        }else{
            echo "<script>alert('Failed....!')</script>";
        }
    }
?>