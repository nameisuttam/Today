<?php
    include("config.php");
?>
 <?php
    if(isset($_POST['submit'])){
        $date=$_POST['date'];

        $insert="INSERT INTO vaild_test(date) VALUES ('$date')";
        mysqli_query($conn,$insert);
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title> 
</head>
<body>
   <center>
        <form action="" method="post" autocomplete="off">
            
            <h1>Date format</h1>
                <input type="date" name="date">
                <input type="submit" name="submit">
            
        </form>
        <br><br>
        <table>
            <tr>date</tr>
        
        <?php
                $sel="SELECT * FROM vaild_test";
                $result=mysqli_query($conn,$sel);
                while($row=mysqli_fetch_assoc($result)){
                echo "
                <center>    
                <table border='1'>
                <tr>
                    <td>".date("d-m-Y",strtotime($row['date']))."</td>
                </tr>
                
                </table>
                </center>";
        }
        ?>
        </table>
   </center> 
  
</body>
</html>