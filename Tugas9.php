<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = $aErr = $bErr = "";
$name = $email = $gender = $comment = $website = $a = $b = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["a"])) {
        $aErr = "Nilai a is required";
    } else {
        $a = test_input($_POST["a"]);
    }

    if (empty($_POST["b"])) {
        $bErr = "Nilai b is required";
    } else {
        $b = test_input($_POST["b"]);
    }

    
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Membuat Form dengan Method POST</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  Nilai a: <input type="text" name="a">
  <span class="error">* <?php echo $aErr;?></span>
  <br><br>

  Nilai b: <input type="text" name="b">
  <span class="error">* <?php echo $bErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit">  
</form>


<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;

// Lakukan operasi penjumlahan jika nilai a dan b terisi
if (!empty($a) && !empty($b)) {
    $result = $a + $b;
    echo "<h2>Hasil Penjumlahan:</h2>";
    echo "Nilai a: " . $a . "<br>";
    echo "Nilai b: " . $b . "<br>";
    echo "Hasil: " . $result . "<br>";
}
?>

</body>
</html>