<?php

    include('config.php');

        if(isset($_POST['insert'])){
            $fname=$_POST['fname'];  
            $mname=$_POST['mname'];  
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
            $email = $_POST['email'];

            pre($_POST);
            echo $insert="insert into stud_regi(fname,mname,lname,dob,gender,chk,reli,age,nal,blood,bplace,grade,mno,pmno,adr,pcode,city,country,email) values('$fname','$mname','$lname','$dob','$gender','$chk','$reli','$age','$nal','$blood','$bplace','$grade','$mno','$pmno','$adr','$pcode','$city','$country','$email') "; 
            // die;
            $query=mysqli_query($conn,$insert);
            if($query){
                header("location:display.php");
            }else{
                echo "Failed...!";
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
                    <h2>Student Registration Form</h3>
                    <tr>
                        <td><label for="">First Name</label></td>
                        <td><input type="text" name="fname" placeholder="Enter your first name"></td>
                    </tr>
                    <tr>
                        <td><label for="">Middle Name</label></td>
                        <td><input type="text" name="mname" placeholder="Enter your middle name"></td>
                    </tr>
                    <tr>
                        <td><label for="">Last Name</label></td>
                        <td><input type="text" name="lname" placeholder="Enter your last name"></td>
                    </tr>
                    <tr>
                        <td><label for="">DOB</label></td>
                        <td><input type="date" name="dob" placeholder="Enter your DOB"></td>
                    </tr>
                    <tr>
                        <td><label for="">Gender</label></td>
                        <td>
                            <input type="radio" name="gender" value="Male" >Male
                            <input type="radio" name="gender" value="Female" >Female
                            <input type="radio" name="gender" value="Other">Other
                                
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Hobbies</label></td>
                        <td>
                            <input type="checkbox" name="chk[]" value="Playing" >Playing
                            <input type="checkbox" name="chk[]" value="Dancing" >Dancing
                            <input type="checkbox" name="chk[]" value="Reading" >Reading
                            <input type="checkbox" name="chk[]" value="Other" >Other
                                
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Religion</label></td>
                        <td><input type="text" name="reli" placeholder="Enter your religion">
                           
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Age</label></td>
                        <td><input type="text" name="age" placeholder="Enter your age">
                           
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Nationality</label></td>
                        <td>
                            <select name="nal" >
                                <option value="" disabled selected>--Select--</option>
                                <option value="Indian">Indian</option>
                                <option value="Russian">Russian</option>
                                <option value="Chinse">Chinse</option>
                                <option value="Nepali">Nepali</option>
                                <option value="Other">Other</option>
                            </select>
                           
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Blood Group</label></td>
                        <td><input type="text" name="blood" placeholder="Enter your blood group">
                           
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Birth Place</label></td>
                        <td><input type="text" name="bplace" placeholder="Enter your birth place">
                           
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Graducation</label></td>
                        <td>
                            <select name="grade" >
                                <option value="" disabled selected>--Select--</option>
                                <option value="BCA">BCA</option>
                                <option value="BCom">BCom</option>
                                <option value="BBA">BBA</option>
                                <option value="BA">BA</option>
                                <option value="Other">Other</option>
                            </select>
                           
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Moblie No</label></td>
                        <td><input type="number" name="mno" placeholder="Enter your moblie no">
                           
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Parent's No</label></td>
                        <td><input type="number" name="pmno" placeholder="Enter your parent's no">
                           
                        </tr>
                    </tr>
                    <tr>
                        <td><label for="">Address</label></td>
                        <td><textarea type="text" name="adr" placeholder="Enter your address" rows="5" cols="25" style="font-weight:bold; font-family: Arial, Helvetica, sans-serif;"></textarea>
                           
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Pin Code</label></td>
                        <td><input type="number" name="pcode" placeholder="Enter your pin code">
                           
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">City</label></td>
                        <td>
                            <select name="city" >
                                <option value="" disabled selected>--Select--</option>
                                <option value="Surat">Surat</option>
                                <option value="Vapi">Vapi</option>
                                <option value="Navsari">Navsari</option>
                                <option value="Valsad">Valsad</option>
                                <option value="Other">Other</option>
                            </select>
                           
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Country</label></td>
                        <td>
                            <select name="country" >
                                <option value="" disabled selected>--Select--</option>
                                <option value="India">India</option>
                                <option value="Russia">Russia</option>
                                <option value="China">China</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Other">Other</option>
                            </select>
                            
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Email</label></td>
                        <td><input type="email" name="email" placeholder="Enter your email"></td>
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
