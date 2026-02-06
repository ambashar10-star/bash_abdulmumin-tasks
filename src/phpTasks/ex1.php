<html>
    <?php include 'header.php';?>
        <body>
            <?php
            echo"<h1 class= 'specialH3'> Exercise 1: Getting Started with PHP - Bashar</h1>";
            
            $string1="David";
            echo"<h3 class= 'specialH3'> Hello world! My name is \"" . $string1 . "\"</h3>";

            $title="PHP is interesting.";
            echo"<h4 class= 'specialH4'> \"" . $title . "\"</h4>";

            $g1 = 5;
            $g2 = 4;
            $g3 = 5;

            echo"<style>
                table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 20%;
                }

                td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
                }

                tr:nth-child(even) {
                background-color: #dddddd;
                }
                </style>";

            echo"<table>
                <tr>
                    <th>S.n.</th>
                    <th>Name</th>
                    <th>Grade</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John</td>
                    <td>$g1</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Alice</td>
                    <td>$g2</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Bob</td>
                    <td>$g3</td>
                </tr>
            </table>";

            echo"<br>";
            echo"<img src='ex1.png' alt='Screenshot'>";


            ?>
        </body>
    <?php include 'footer.php'; ?> 
</html>
