<html>
    <?php include 'header.php'; ?>
        <h1>Exercise 1: Getting Started with PHP - Bashar</h1>

        <?php
        $string1 = "Bashar Abdul Mumin";
        echo "<h3>Hello world! My name is \"$string1\"</h3>";

        $title = "PHP is interesting.";
        echo "<h4>$title</h4>";

        $g1 = 5; $g2 = 4; $g3 = 5;

        echo "<table class='table table-bordered'>
                <tr><th>S.n.</th><th>Name</th><th>Grade</th></tr>
                <tr><td>1</td><td>John</td><td>$g1</td></tr>
                <tr><td>2</td><td>Alice</td><td>$g2</td></tr>
                <tr><td>3</td><td>Bob</td><td>$g3</td></tr>
            </table>";

        echo "<br><img src='ex1.png' alt='Screenshot' style='max-width: 50%;'>";
        ?>
    <?php include 'footer.php'; ?>
</html>
