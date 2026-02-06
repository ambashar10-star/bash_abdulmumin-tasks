<?php include 'header.php'; ?>
<h1>Exercise 3: Variables, Strings & Operators</h1>

<!-- Form to collect Firstname and Lastname -->
<form method="POST" class="form-inline">
    <div class="form-group">
        <label for="fname">Firstname:</label>
        <input type="text" class="form-control" name="fname" id="fname" required>
    </div>
    <div class="form-group">
        <label for="lname">Lastname:</label>
        <input type="text" class="form-control" name="lname" id="lname" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    echo "<h3>Hello $fname $lname, You are welcome to my site.</h3>";
}

// String operations
$str1 = "Hello";
$str2 = "World";
$combined = $str1 . " " . $str2;
echo "<p>Combined string: $combined</p>";
echo "<p>Length of combined string: " . strlen($combined) . "</p>";

// Number addition
$num1 = 298; $num2 = 234; $num3 = 46;
$sum = $num1 + $num2 + $num3;
echo "<p>Sum of numbers: $sum</p>";

// Browser detection
$browser = $_SERVER['HTTP_USER_AGENT'];
echo "<p>Browser Info: $browser</p>";
?>

<?php include 'footer.php'; ?>
