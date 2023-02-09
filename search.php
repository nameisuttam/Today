<?php
    include("config.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    
    <title>Search</title>
    <style>
        input{
            height: 42px;
            width : 300px;
            border: 2px solid black;
            border-radius: 5px;
        }
        tr,td{
            border: 1px solid ;
            padding: 15px;
            font-weight:bold;
            text-align: left;
            font-family: Arial, Helvetica, sans-serif;
        }
        table {
            caption-side: bottom;
            border-collapse: collapse;
        }  
        tr,td{
            border: 1px solid ;
            padding: 15px;
            font-weight:bold;
            text-align: left;
            font-family: Arial, Helvetica, sans-serif;
        }
        button{
            background-color: white;
            color: black;
            border: 3px solid #555555;
            border-radius: 18px;
            padding: 8px 21px;
            font-size: 14px;
            margin: 2px;
            text-decoration: none;
        }
        a{
            text-decoration: none;  
        }
        ::placeholder {
            font-weight:bold;
        }
    </style>
</head>
<body>
    <center>
        <form action="" method="post" autocomplete="off">
            <h2>Student Registration Data
                <br><br>
                
                <input type="text"  name="search" value="<?php if(isset($_POST['search'])){echo $_POST['search'];} ?>" placeholder="First Name, Middle Name, Last Name, Email ">
                
                <button type="submit"  >Search</button>
                <button><a href="searchdob.php">Search By DOB</a></button>
                <button><a href="display.php">Display</a></button>
            </h2>
        </form>
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
            </tr>
    </center> 

           <?php
            if(isset($_POST['search'])){
                $search=$_POST['search'];
                $search="select * from stud_regi where concat(fname,mname,lname,email) like '%$search%'";
                $query=mysqli_query($conn,$search);
                $result=mysqli_num_rows($query);
                if($result > 0){
                   while($row = mysqli_fetch_assoc($query)){

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
        
                    echo "<tr>
                                <td>".$id."</td>
                                <td>".$fname."</td>
                                <td>".$mname."</td>
                                <td>".$lname."</td>
                                <td>".date("d-m-Y",strtotime($dob))."</td>
                                <td>".$gender."</td>
                                <td>".$chk."</td>                  
                                <td>".$reli."</td>
                                <td>".$age."</td>
                                <td>".$nal."</td>
                                <td>".$blood."</td> 
                                <td>".$bplace."</td>
                                <td>".$grade."</td>
                                <td>".$mno."</td>
                                <td>".$pmno."</td>
                                <td>".$adr."</td>
                                <td>".$pcode."</td>
                                <td>".$city."</td>
                                <td>".$country."</td>
                                <td>".$email."</td>
                            </tr>";
                   } 
                }else{
                    echo "Not Found...!";
                }
            }
        ?>
    </table>
</body>
</html>