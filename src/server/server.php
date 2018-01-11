<?php
    if ($_POST) {
        $errors = array();
        foreach ($_POST as $key => $value) {
            switch ($key) {
                case "username":
                    if (strlen(htmlspecialchars($value)) < 6 || strlen(htmlspecialchars($value)) > 30) {
                        array_push($errors, "username must be between 6 and 30 symbols long");
                    }
                    break;
                case "password":
                    if (strlen(htmlspecialchars($value)) < 6 || strlen(htmlspecialchars($value)) > 30) {
                        array_push($errors, "password must be between 6 and 30 symbols long");
                    }
                    break;
            }
        }
        
        showErrors($errors);
    }

    function showErrors($errors) {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
?>
