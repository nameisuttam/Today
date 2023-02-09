<?php
    include("config.php");
?>
<?php
    if(isset($_GET['id']) && $_GET['id'] > 0){
        $id=mysqli_real_escape_string($conn,$_GET['id']);
        mysqli_query($conn,"UPDATE stud_regi SET status='0' WHERE id='$id'");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="regi.css">
    <style>
        a{
            text-decoration: none;  
        }
    </style>
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Soft-Delete</h1>
            <button><a href="search.php">SEARCH</a></button>
            <button><a href="insert.php">INSERT</a></button> 
            <button><a href="insertvaild.php">INSERT With Vaildation</a></button>
            <button><a href="display.php">Display With Hard Delete</a></button>
        <br><br>
        <table>
            <td>Id</td>
            <td>First Name</td>
            <td>Middle Name</td>
            <td>Last Name</td>
            <td>DOB</td>
            <td>Gender</td>
            <td>Hobbies</td>
            <td>Religion</td>
            <td>Age</td>
            <td>Nationality</td>
            <td>Blood Group</td>
            <td>Birth Place</td>
            <td>Graducation</td>
            <td>Moblie No</td>
            <td>Parents Moblie No</td>
            <td>Address</td>
            <td>Pin Code</td>
            <td>City</td>
            <td>Country</td>
            <td>Operation</td>

            <?php 
                $query=mysqli_query($conn,"SELECT * FROM stud_regi WHERE status=1;");
                while($row=mysqli_fetch_assoc($query)){
                    echo "
                        <tr>
                            <td>".$row['id']."</td>
                            <td>".$row['fname']."</td>
                            <td>".$row['mname']."</td>
                            <td>".$row['lname']."</td>
                            <td>".date("d-m-Y",strtotime($row['dob']))."</td> 
                            <td>".$row['gender']."</td>
                            <td>".$row['chk']."</td>
                            <td>".$row['reli']."</td>
                            <td>".$row['age']."</td>
                            <td>".$row['nal']."</td>
                            <td>".$row['blood']."</td>
                            <td>".$row['bplace']."</td>
                            <td>".$row['grade']."</td>
                            <td>".$row['mno']."</td>
                            <td>".$row['pmno']."</td>
                            <td>".$row['adr']."</td>
                            <td>".$row['pcode']."</td>
                            <td>".$row['city']."</td>
                            <td>".$row['country']."</td>
                            <td>       
                            <button><a href='?id=".$row['id']."'>Delete</a></button>
                            </td>
                        </tr>
                    ";
                }
            ?>
        </table>
    </center>
  
</body>
</html>