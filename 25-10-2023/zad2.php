

<?php
        if(!isset($_COOKIE['username']))  {
            echo "Cookie named ' username ' is not set!";
        } else {
            echo "Cookie ' username ' is set!<br>";
            echo "Value is: " . $_COOKIE['username'];
        }
        ?>
