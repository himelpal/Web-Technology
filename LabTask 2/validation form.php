<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
$nameErr = $emailErr = $dobEff= $genderErr = $degreeErr = $blood_groupErr= "";
$name = $email = $dob = $gender = $degree = $bloodgroup = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  }
    else {
    $name = test_input($_POST["name"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
      
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  } 
 if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
    if (empty($_POST["degree"])) {
    $degreeErr = "Degree is required";
  } else {
    $degree = test_input($_POST["degree"]);
  }
    if (empty($_Post["bloodGroup"])) {
    $blood_groupErr="Blood group is required";
    } else {
    $bloodgroup = test_input($_POST["bloodGroup"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
  Gender:
  <input type="radio" name="gender"  <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" checked= "Male" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <br><br>
  
  Date Of Birth :
  <input type="text" size="2" name="day"> /
  <input type="text" size="2" name="month"> /
  <input type="text" size="4" name="year" maxlength="4" >
  <font size="2"><i>(dd-mm-yyyy)</i></font> <br> <br>
  
  
  Degree : <input type="checkbox" name ="degree" value = "SSC " <?php if (isset($degree) && $degree=="Ssc") echo "checked";?> checked="SSC"  >SSC
           <input type="checkbox" name ="degree" value = "HSC" <?php if (isset($degree) && $degree=="Hsc") echo "checked";?> checked="HSC" >HSC
           <input type="checkbox" name ="degree" <?php if (isset($degree) && $degree=="Bsc") echo "checked";?> value = "BSc" >BSc
           <input type="checkbox" name ="degree" <?php if (isset($degree) && $degree=="Msc") echo "checked";?> value = "MSc">MSc <br> <br>
           
  Blood Group : <select name="bloodGroup">
                    	<option value="Select">Select</option>
                        <option value="A+">A+</option>
                        <option value="A">A</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="AB+">AB+</option>
                        <option value="O+" selected>O+</option>
                        <option value="O-">O-</option>
                    </select> <br> <br>
  <input type="submit" name="submit" value="Submit">  &emsp;
  <input type="reset" name="reset" value="Reset">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $dob;
echo "<br>";
echo $degree;
echo "<br>";
echo $bloodgroup;

?>
</body>
</html>