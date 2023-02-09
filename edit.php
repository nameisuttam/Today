<?php
    include("config.php");

    if(isset($_GET['id'])){
        $id=$_GET['id'];   
        $update="SELECT * FROM stud_regi WHERE id='$id'";
        $query=mysqli_query($conn,$update);
        $row=mysqli_fetch_array($query);
            $gender=$row['gender'];
            $chk=explode(",",$row['chk']);
                      
    }

?>
<?php 
         if(isset($_POST['edit'])){ 
            $fname=$_POST['fname'];  
            $mname=$_POST['mname'];  
            $lname=$_POST['lname'];  
            $dob=$_POST['dob'];
            $gender=$_POST['gender'];
            $chk=implode(",",$_POST['chk']);   
            $reli=$_POST['reli'];  
            $age=$_POST['age'];
            $nal=$_POST['nal'];
            $blood=$_POST['blood'];
            $bplace=$_POST['bplace'];
            $grade=$_POST['grade'];
            $mno =$_POST["mno"];
            $pmno =$_POST["pmno"];
            $adr=$_POST['adr'];    
            $pcode=$_POST['pcode'];
            $city=$_POST['city'];
            $country=$_POST['country'];

          
            $insert = "UPDATE stud_regi SET id='$id',fname='$fname',mname='$mname',lname='$lname',dob='$dob',gender='$gender',chk='$chk',reli='$reli',age='$age',nal='$nal',blood='$blood',bplace='$bplace',grade='$grade',mno='$mno',pmno='$pmno',adr='$adr',pcode='$pcode',city='$city',country='$country' WHERE id='$id'";
        
            $result=mysqli_query($conn,$insert);
            if($result){
                header("Location: display.php");
                    // echo "Updated";
            }else{
                echo "<script>alert('Failed...!')</script>";
            }
    }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <center>
        <form action="" method="post" autocomplete="off">
            <table>
            <tbody>
                    <h2>Student Registration Form<button><a href="display.php">Display</a></button></h2>
                    <tr>
                        <td><label for="">First Name</label></td>
                        <td><input type="text" name="fname" placeholder="Enter your first name" value="<?php echo $row['fname'];?>"></td>
                    </tr>
                    <tr>
                        <td><label for="">Middle Name</label></td>
                        <td><input type="text" name="mname" placeholder="Enter your middle name" value="<?php echo $row['mname'];?>"></td>
                    </tr>
                    <tr>
                        <td><label for="">Last Name</label></td>
                        <td><input type="text" name="lname" placeholder="Enter your last name" value="<?php echo $row['lname'];?>">
                            <span class="error">  <?php //echo $lnameErr;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">DOB</label></td>
                        <td><input type="date" name="dob" placeholder="Enter your DOB" value="<?php echo $row['dob'];?>">
                           
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Gender</label></td>
                        <td>
                            <input type="radio" name="gender" value="Male" <?php if($gender=="Male"){echo "checked";}?>>Male
                            <input type="radio" name="gender" value="Female" <?php if($gender=="Female"){echo "checked";}?>>Female
                            <input type="radio" name="gender" value="Other" <?php if($gender=="Other"){echo "checked";}?>>Other
                            
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Hobbies</label></td>
                        <td>
                            <input type="checkbox" name="chk[]" value="Playing" <?php 
                                 if(in_array("Playing",$chk)){echo "checked";}
                            ?>>Playing
                            <input type="checkbox" name="chk[]" value="Dancing" <?php 
                                 if(in_array("Dancing",$chk)){echo "checked";}
                            ?>>Dancing
                            <input type="checkbox" name="chk[]" value="Reading" <?php 
                                 if(in_array("Reading",$chk)){echo "checked";}
                             ?>>Reading
                            <input type="checkbox" name="chk[]" value="Other" <?php 
                                 if(in_array("Other",$chk)){echo "checked";}
                             ?>>Other
                             
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Religion</label></td>
                        <td><input type="text" name="reli" placeholder="Enter your religion" value="<?php echo $row['reli']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Age</label></td>
                        <td><input type="text" name="age" placeholder="Enter your age" value="<?php echo $row['age']; ?>">
                            
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Nationality</label></td>
                        <td>
                            <select name="nal" >
                                <option value="" disabled selected>--Select--</option>
                                <option value="Indian" <?php if($row['nal']=="Indian"){echo "selected";}?>>Indian</option>
                                <option value="Russian" <?php if($row['nal']=="Russian"){echo "selected";}?>>Russian</option>
                                <option value="Chinse" <?php if($row['nal']=="Chinse"){echo "selected";}?>>Chinse</option>
                                <option value="Nepali" <?php if($row['nal']=="Nepali"){echo "selected";}?>>Nepali</option>
                                <option value="Other"<?php if($row['nal']=="Other"){echo "selected";}?> >Other</option>
                            </select>
                            
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Blood Group</label></td>
                        <td><input type="text" name="blood" value="<?php echo $row['blood'];?>">
                        
                    </td>
                    </tr>
                    <tr>
                        <td><label for="">Birth Place</label></td>
                        <td><input type="text" name="bplace" placeholder="Enter your birth place" value="<?php echo $row['bplace']; ?>">
                            
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Graducation</label></td>
                        <td>
                            <select name="grade" >
                                <option value="" disabled selected>--Select--</option>
                                <option value="BCA" <?php if($row['grade']=="BCA"){echo "selected";}?>>BCA</option>
                                <option value="BCom" <?php if($row['grade']=="BCom"){echo "selected";}?>>BCom</option>
                                <option value="BBA" <?php if($row['grade']=="BBA"){echo "selected";}?>>BBA</option>
                                <option value="BA" <?php if($row['grade']=="BA"){echo "selected";}?>>BA</option>
                                <option value="Other" <?php if($row['grade']=="Other"){echo "selected";}?>>Other</option>
                            </select>
                            
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Moblie No</label></td>
                        <td><input type="number" name="mno" placeholder="Enter your moblie no" value="<?php echo $row["mno"]; ?>">   
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Parent's No</label></td>
                        <td><input type="number" name="pmno" placeholder="Enter your parent's no" value="<?php echo $row["pmno"]; ?>">
                            
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Address</label></td>
                        <td><input type="text" name="adr" value="<?php echo$row['adr']; ?>" placeholder="Enter your address">
                            
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Pin Code</label></td>
                        <td><input type="number" name="pcode" placeholder="Enter your pin code" value="<?php echo $row['pcode']; ?>">
                            
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">City</label></td>
                        <td>
                            <select name="city" >
                                <option value="" disabled selected>--Select--</option>
                                <option value="Surat" <?php if($row['city']=="Surat"){echo "selected";}?>>Surat</option>
                                <option value="Vapi" <?php if($row['city']=="Vapi"){echo "selected";}?>>Vapi</option>
                                <option value="Navsari" <?php if($row['city']=="Navsari"){echo "selected";}?>>Navsari</option>
                                <option value="Valsad" <?php if($row['city']=="Valsad"){echo "selected";}?>>Valsad</option>
                                <option value="Other" <?php if($row['city']=="Other"){echo "selected";}?>>Other</option>
                            </select>
                            
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Country</label></td>
                        <td>
                            <select name="country" >
                                <option value="">--Select--</option>
                                <option value="India" <?php if($row['country']=="India"){echo "selected";}?>>India</option>
                                <option value="Russia" <?php if($row['country']=="Russia"){echo "selected";}?>>Russia</option>
                                <option value="China" <?php if($row['country']=="China"){echo "selected";}?>>China</option>
                                <option value="Nepal" <?php if($row['country']=="Nepal"){echo "selected";}?>>Nepal</option>
                                <option value="Other" <?php if($row['country']=="Other"){echo "selected";}?>>Other</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Email</label></td>
                        <td><input type="email" name="email" placeholder="Enter your email" value="<?php echo $row['email'];?>"></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table>
                    <button type="submit" name="edit">UPDATE</button>
                    
            </table>
        </form>
        <br>
        
    </center>

</body>
</html>