<?php
    include('config.php');
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="stylesheet" href="display.css">
    <title>Display Data</title>
    
</head>
<body>
    <center>
        <h2>Display Data</h2>
        <button><a href="search.php">SEARCH</a></button>
        <button><a href="insert.php">INSERT</a></button> 
        <button><a href="insertvaild.php">INSERT With Vaildation</a></button>
        <button><a href="displaysoft.php">Display With Soft Delete</a></button>
        <!-- <button><a href="insert.php">INSERT</a></button> -->
        <br>
        <br>
        <table >
            <tr>
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
                <td>Email</td>
                <td>Operation</td>
            </tr>
        
        <?php 

                            $display='SELECT * FROM stud_regi';
                            $result = mysqli_query($conn,$display);
            
                            if($result){
                            while($row=mysqli_fetch_assoc($result)){
                                $id=$row['id'];
                                $fname=$row['fname'];
                                $mname=$row['mname'];
                                $lname=$row['lname'];
                                $dob=$row['dob'];
                                $gender=$row['gender'];
                                $chk=$row['chk'];
                                $reli=$row['reli'];
                                $age=$row['age'];
                                $nal=$row['nal'];
                                $blood=$row['blood'];
                                $bplace=$row['bplace'];
                                $grade=$row['grade'];
                                $mno=$row['mno'];
                                $pmno=$row['pmno'];
                                $adr=$row['adr'];
                                $pcode=$row['pcode'];
                                $city=$row['city'];
                                $country=$row['country'];
                                $email = $row['email'];

                                echo 
                                '<tr>
                                    <td>'.$id.'</td>
                                    <td>'.$fname.'</td>
                                    <td>'.$mname.'</td>
                                    <td>'.$lname.'</td>
                                    <td>'.date('d-m-Y',strtotime($dob)).'</td>
                                    <td>'.$gender.'</td>
                                    <td>'.$chk.'</td>                            
                                    <td>'.$reli.'</td>
                                    <td>'.$age.'</td>
                                    <td>'.$nal.'</td>
                                    <td>'.$blood.'</td> 
                                    <td>'.$bplace.'</td>
                                    <td>'.$grade.'</td>
                                    <td>'.$mno.'</td>
                                    <td>'.$pmno.'</td>
                                    <td>'.$adr.'</td>
                                    <td>'.$pcode.'</td>
                                    <td>'.$city.'</td>
                                    <td>'.$country.'</td>
                                    <td>'.$email.'</td>
                                    <td>
                                        <button><a href="edit.php?id='.$id.'">Edit</a></button>
                                        <button><a href="editvaild.php?id='.$id.'">Edit With Vaildation</a></button>
                                        <button><a href="delete.php?deleteid='.$id.'">Delete</a></button>
                                    </td>
                                    </tr>';                        ;
                }  
            }      
        ?>
        </table>
    </center>
    </body>
</html>