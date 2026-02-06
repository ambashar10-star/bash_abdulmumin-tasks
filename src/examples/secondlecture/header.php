<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $md; ?>" >

    <title><?php echo $title; ?></title>

    <title>
        <?php if(isset($title) && !empty ($title))
        {
            echo $title;
        }
        else{
            echo "HANDS ON EXERCISE";
        }
        ?>
    </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        main {
            padding: 20px;
            text-align: center;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
        }

        li a {
            display: block;
            color: black;
            padding: 8px 16px;
            text-decoration: none;
        }

        /* Change the link and background color on hover */
        li a:hover {
            background-color: #555555;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <ul>
            <li><a href="index1.php">Home</a></li>
            <li><a href="contactus.php">Contact</a></li>
            <li><a href="aboutus.php">About</a></li>
        </ul>

        <h1>Welcome to My Website</h1>
        <p>Your go-to source for web development tutorials</p>
    </header>