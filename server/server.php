<?php
    if ($_POST) {
        $errors = array();
        foreach ($_POST as $key => $value) {
            switch ($key) {
                case "username":
                    if (strlen(htmlspecialchars($value)) < 6 || strlen(htmlspecialchars($value)) > 30) {
                        array_push($errors, "subjectName of invalid size");
                    }
                    break;
                case "password":
                    if (strlen(htmlspecialchars($value)) < 6 || strlen(htmlspecialchars($value)) > 30) {
                        array_push($errors, "teacher of invalid length");
                    }
                    break;
            }
        }
        // we'll put the errors in the DOM later
        printErrors($errors);
    }

    function printErrors($errors) {
        var_dump($errors);
    }
?>
