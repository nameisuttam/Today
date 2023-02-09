<?php

    include('config.php');

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $dis="SELECT * FROM stud_regi WHERE id='$id'";
        $query=mysqli_query($conn,$dis);
        $row=mysqli_fetch_assoc($query);
        //$chk=explode(",",$row['chk']);
    }
    $fnameErr = $mnameErr = $lnameErr = $dobErr = $genderErr = $chkErr = $reliErr = $ageErr = $nalErr = $bloodErr = $bplaceErr = $gradeErr = $mnoErr = $pmnoErr = $adrErr = $pcodeErr = $cityErr = $countryErr = $emailErr="";
    $fname = $mname = $lname = $dob = $gender = $chk = $reli = $age = $nal = $blood = $bplace = $grade = $mno = $pmno = $adr = $pcode = $city = $country = $emial="";

        if(isset($_POST['insert'])){
            
            if(empty($_POST['fname'])){
                $fnameErr="First Name is required";
            }else{
                $fname=$_POST['fname'];
                if (!preg_match ("/^[a-zA-z]*$/", $fname) ) {  
                    $fnameErr = "Only alphabets and whitespace are allowed.";   
                } else {  
                    $fname=$_POST['fname'];  
                }  
            }

            if(empty($_POST['mname'])){
                $mnameErr="Midddle Name is required";
            }else{
                $mname=$_POST['mname'];
                if (!preg_match ("/^[a-zA-z]*$/", $mname) ) {  
                    $mnameErr = "Only alphabets and whitespace are allowed.";   
                } else {  
                    $mname=$_POST['mname'];  
                }  
            }

            if(empty($_POST['lname'])){
                $lnameErr="Last Name is required";
            }else{
                $lname=$_POST['lname'];
                if (!preg_match ("/^[a-zA-z]*$/", $lname) ) {  
                    $lnameErr = "Only alphabets and whitespace are allowed.";   
                } else {  
                    $lname=$_POST['lname'];  
                }  
            }

            if(empty($_POST['dob'])){
                $dobErr="DOB is required";
            }else{
                $dob=$_POST['dob'];
            }
            
            if(empty($_POST['gender'])){
                $genderErr="Gender is required";
            }else{
                $gender=$_POST['gender'];
                }
            
            if(empty($_POST['chk'])){
                $chkErr="Hobbies are required";
            }
            else{
                $chk=implode(",",$_POST['chk']);
                
                }
            
                
            if(empty($_POST['reli'])){
                $reliErr="Religion is required";
            }else{
                $reli=$_POST['reli'];
                if (!preg_match ("/^[a-zA-z]*$/", $reli) ) {  
                    $reliErr = "Only alphabets and whitespace are allowed.";   
                } else {  
                    $reli=$_POST['reli'];  
                }  
            }

            if(empty($_POST['age'])){
                $ageErr="Age is required";
            }else{
                $age=$_POST['age'];
            }

            
            if(empty($_POST['nal'])){
                $nalErr="Natinoality is required";
            }else{
                $nal=$_POST['lname'];
                if (!preg_match ("/^[a-zA-z]*$/", $nal) ) {  
                    $nalErr = "Only alphabets and whitespace are allowed.";   
                } else {  
                    $nal=$_POST['nal'];  
                }  
            }
            
            if(empty($_POST['blood'])){
                $bloodErr="Blood Group is required";
            }else{
                $blood=$_POST['blood'];
            }

            if(empty($_POST['bplace'])){
                $bplaceErr="Birth place is required";
            }else{
                $bplace=$_POST['bplace'];
            }

            if(empty($_POST['grade'])){
                $gradeErr="Graducation is required";
            }else{
                $grade=$_POST['grade'];
            }

            
            if(empty($_POST["mno"])){
                $mnoErr="Moblie no is required";
            }else {  
                $mno =$_POST["mno"];  
                if (!preg_match ("/^[0-9]*$/", $mno) ) {  
                    $mnoErr = "Only numeric value is allowed.";  
                }else{
                    $mno =$_POST["mno"];
                }
            }

            if(empty($_POST['pmno'])){
                $pmnoErr="Parents no is required";
            }else {  
                $pmno =$_POST["pmno"];  
                if (!preg_match ("/^[0-9]*$/", $pmno) ) {  
                    $pmnoErr = "Only numeric value is allowed.";  
                }else{
                    $pmno =$_POST["pmno"];
                }
            }

            if(empty($_POST['adr'])){
                $adrErr="Address is required";
            }else{
                $adr=$_POST['adr'];
            }

            if(empty($_POST['pcode'])){
                $pcodeErr="Pin code is required";
            } else {  
                $pcode = ($_POST["pcode"]);    
                if(!preg_match ("/^[0-9]*$/", $pcode )){  
                    $pcodeErr = "Only numeric value is allowed.";  
                }  
                if (strlen ($pcode) != 6) {  
                    $pcodeErr = "Pin code must contain 6 digits.";  
                    }else{
                        $pcode=$_POST['pcode'];
                    }  
            }  
        
            if(empty($_POST['city'])){
                $cityErr="City Name is required";
            }else{
                $city=$_POST['city'];
            }
            
            if(empty($_POST['country'])){
                $countryErr="Country Name is required";
            }else{
                $country=$_POST['country'];
            }
        
        //     if(empty($_POST['fname']) || empty($_POST['mname']) || empty($_POST['lname']) || empty($_POST['dob']) || empty($_POST['gender']) || empty($_POST['chk']) || empty($_POST['reli']) || empty($_POST['age']) || empty($_POST['nal']) || empty($_POST['blood']) || empty($_POST['bplace']) || empty($_POST['grade']) || empty($_POST['mno']) || empty($_POST['pmno']) || empty($_POST['adr']) || empty($_POST['pcode']) || empty($_POST['city'])|| empty($_POST['country'])){
        //             echo "Please, Fill the all field....!";
        //     }else{
        //         $insert = "UPDATE stud_regi SET id='$id',fname='$fname',mname='$mname',lname='$lname',dob='$dob',gender='$gender',chk='$chk',reli='$reli',age='$age',nal='$nal',blood='$blood',bplace='$bplace',grade='$grade',mno='$mno',pmno='$pmno',adr='$adr',pcode='$pcode',city='$city',country='$country' WHERE id='$id'";
        //         $query=mysqli_query($conn,$insert);
        //         if($query){
        //             header("location:display.php");
        //         }else{
        //             echo "Failed...!";
        //         }
        // }
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="regi.css">
</head>
<style>
    
}
</style>
<body>
    <center>
        <form action="" method="post" autocomplete="off">
            <table>
            <tbody>
                    <h2>Student Registration Form
                    <button><a href="display.php">Display</a></button>
                    </h2>
                    <tr>
                        <td><label for="">First Name</label></td>
                        <td><input type="text" name="fname" placeholder="Enter your first name" value="<?php echo $row['fname']; ?>">
                            <span class="error"> * <?php echo $fnameErr;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Middle Name</label></td>
                        <td><input type="text" name="mname" placeholder="Enter your middle name" value="<?php echo $row['mname']; ?>">
                            <span class="error"> * <?php echo $mnameErr;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Last Name</label></td>
                        <td><input type="text" name="lname" placeholder="Enter your last name" value="<?php echo $row['lname']; ?>">
                            <span class="error"> * <?php echo $lnameErr;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">DOB</label></td>
                        <td><input type="date" name="dob" placeholder="Enter your DOB" value="<?php echo $row['dob']; ?>">
                            <span class="error"> * <?php echo $dobErr;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Gender</label></td>
                        <td>
                            <input type="radio" name="gender" value="Male" <?php if($row['gender']=="Male"){echo "checked";}?>>Male
                            <input type="radio" name="gender" value="Female" <?php if($row['gender']=="Female"){echo "checked";}?>>Female
                            <input type="radio" name="gender" value="Other" <?php if($row['gender']=="Other"){echo "checked";}?>>Other
                                <span class="error"> * <?php echo $genderErr;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Hobbies</label></td>
                        <td>
                            <input type="checkbox" name="chk[]" value="Playing" <?php 
                                    if(in_array("Playing",explode(",",$row['chk']))){echo "checked";}
                                ?>>Playing
                            <input type="checkbox" name="chk[]" value="Dancing" <?php 
                                    if(in_array("Dancing",explode(",",$row['chk']))){echo "checked";}
                                ?>>Dancing
                            <input type="checkbox" name="chk[]" value="Reading" <?php 
                                    if(in_array("Reading",explode(",",$row['chk']))){echo "checked";}
                                ?>>Reading
                            <input type="checkbox" name="chk[]" value="Other" <?php 
                                    if(in_array("Other",explode(",",$row['chk']))){echo "checked";}
                                ?>>Other
                                <span class="error"> * <?php echo $chkErr;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Religion</label></td>
                        <td><input type="text" name="reli" placeholder="Enter your religion" value="<?php echo $row['reli']; ?>">
                            <span class="error"> * <?php echo $reliErr;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Age</label></td>
                        <td><input type="text" name="age" placeholder="Enter your age"value="<?php echo $row['age']; ?>">
                            <span class="error"> * <?php echo $ageErr;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Nationality</label></td>
                        <td>
                            <select name="nal" >
                                <option value="" disabled selected>--Select--</option>
                                <option value="Indian" <?php if($row['nal']=="Indian"){echo "selected";} ?>>Indian</option>
                                <option value="Russian"<?php if($row['nal']=="Russian"){echo "selected";} ?>>Russian</option>
                                <option value="Chinse"<?php if($row['nal']=="Chinse"){echo "selected";} ?>>Chinse</option>
                                <option value="Nepali"<?php if($row['nal']=="Nepali"){echo "selected";} ?>>Nepali</option>
                                <option value="Other" <?php if($row['nal']=="Other"){echo "selected";} ?>>Other</option>
                            </select>
                            <span class="error"> * <?php echo $nalErr;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Blood Group</label></td>
                        <td><input type="text" name="blood" placeholder="Enter your blood group" value="<?php echo $row['blood']; ?>">
                            <span class="error"> * <?php echo $bloodErr;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Birth Place</label></td>
                        <td><input type="text" name="bplace" placeholder="Enter your birth place" value="<?php echo $row['bplace']; ?>">
                            <span class="error"> * <?php echo $bplaceErr;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Graducation</label></td>
                        <td>
                            <select name="grade" >
                                <option value="" disabled selected>--Select--</option>
                                <option value="BCA"<?php if($row['grade']=="BCA"){echo "selected";} ?>>BCA</option>
                                <option value="BCom"<?php if($row['grade']=="BCom"){echo "selected";} ?>>BCom</option>
                                <option value="BBA"<?php if($row['grade']=="BBA"){echo "selected";} ?>>BBA</option>
                                <option value="BA"<?php if($row['grade']=="BA"){echo "selected";} ?>>BA</option>
                                <option value="Other"<?php if($row['grade']=="Other"){echo "selected";} ?>>Other</option>
                            </select>
                            <span class="error"> * <?php echo $gradeErr;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Moblie No</label></td>
                        <td><input type="number" name="mno" placeholder="Enter your moblie no" value="<?php echo $row['mno']; ?>">
                            <span class="error"> * <?php echo $mnoErr;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Parent's No</label></td>
                        <td><input type="number" name="pmno" placeholder="Enter your parent's no" value="<?php echo $row['pmno']; ?>">
                            <span class="error"> * <?php echo $pmnoErr;?></span>
                        </tr>
                    </tr>
                    <tr>
                        <td><label for="">Address</label></td>
                        <td><input type="text" name="adr" placeholder="Enter your address" value="<?php echo $row['adr'];?>" rows="5" cols="25" style="font-weight:bold; font-family: Arial, Helvetica, sans-serif;">
                            <span class="error"> * <?php echo $adrErr;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Pin Code</label></td>
                        <td><input type="number" name="pcode" placeholder="Enter your pin code" value="<?php echo $row['pcode'];?>">
                            <span class="error"> * <?php echo $pcodeErr;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">City</label></td>
                        <td>
                            <select name="city" >
                                <option value="" disabled selected>--Select--</option>
                                <option value="Surat"<?php if($row['city']=="Surat"){echo "selected";} ?>>Surat</option>
                                <option value="Vapi"<?php if($row['city']=="Vapi"){echo "selected";} ?>>Vapi</option>
                                <option value="Navsari"<?php if($row['city']=="Navsari"){echo "selected";} ?>>Navsari</option>
                                <option value="Valsad"<?php if($row['city']=="Valsad"){echo "selected";} ?>>Valsad</option>
                                <option value="Other"<?php if($row['city']=="Other "){echo "selected";} ?>>Other</option>
                            </select>
                            <span class="error"> * <?php echo $cityErr;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Country</label></td>
                        <td>
                            <select name="country" >
                                <option value="" disabled selected>--Select--</option>
                                <option value="India"<?php if($row['country']=="India"){echo "selected";} ?>>India</option>
                                <option value="Russia"<?php if($row['country']=="Russia"){echo "selected";} ?>>Russia</option>
                                <option value="China"<?php if($row['country']=="China"){echo "selected";} ?>>China</option>
                                <option value="Nepal"<?php if($row['country']=="Nepal"){echo "selected";} ?>>Nepal</option>
                                <option value="Other"<?php if($row['country']=="Other"){echo "selected";} ?>>Other</option>
                            </select>
                            <span class="error"> * <?php echo $countryErr;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Email</label></td>
                        <td><input type="email" name="email" placeholder="Enter your email" value="<?php echo $row['email'];?>"></td>
                        <!-- <span class="error"> * <?php  //echo $emailErr;?></span> -->
                    </tr>
                </tbody>
            </table>
            <br>
            <table>
                    <button type="submit" name="insert">Insert</button>
                    
            </table>
        </form>
        <br>
        
    </center>

</body>
</html>
