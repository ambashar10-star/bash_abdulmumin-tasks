    <footer>
        <hr>
        <p>&copy; 2026 Bashar Abdul Mumin | PHP Exercises</p>
        <?php
            $file = basename($_SERVER['PHP_SELF']); // get current file name
            echo "<p>Last modified: " . date("F d Y H:i:s", filemtime($file)) . "</p>";
        ?>
    </footer>
  </body>
</html>