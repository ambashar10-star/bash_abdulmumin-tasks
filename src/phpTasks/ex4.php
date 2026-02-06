<?php include 'header.php'; ?>
<h1>Exercise 4: Control Flow & Loops</h1>

<!-- If-Else: Voting Eligibility -->
<form method="POST" class="form-inline">
    <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" class="form-control" name="age" id="age" required>
    </div>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" id="name" required>
    </div>
    <button type="submit" class="btn btn-primary">Check Eligibility</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $age = (int)$_POST['age'];
    $name = htmlspecialchars($_POST['name']);
    if ($age >= 18) {
        echo "<h3>$name, you are eligible to vote.</h3>";
    } else {
        echo "<h3>$name, you are not eligible to vote.</h3>";
    }
}

// Switch Case: Check month
$month = date("F");
switch($month){
    case "August":
        echo "<p>It's August, so it's still holiday.</p>";
        break;
    default:
        echo "<p>Not August, this is $month so I don't have any holidays.</p>";
}

// For Loop: Multiplication table
$n = 5; // example number
echo "<h4>Multiplication table of $n</h4><ul>";
for($i=1; $i<=10; $i++){
    echo "<li>$n x $i = " . ($n*$i) . "</li>";
}
echo "</ul>";

// While Loop: Print numbers 1 to n
$i=1;
echo "<p>Numbers from 1 to $n:</p>";
while($i <= $n){
    echo "$i ";
    $i++;
}

// Foreach Loop: Print array elements
$myarray = array("HTML", "CSS", "PHP", "JavaScript");
echo "<h4>Array Elements:</h4><ul>";
foreach($myarray as $val){
    echo "<li>$val</li>";
}
echo "</ul>";
?>

<?php include 'footer.php'; ?>
