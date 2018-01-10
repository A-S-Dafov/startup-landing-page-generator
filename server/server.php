<?php
    if ($_POST) {
        $errors = array();
        foreach ($_POST as $key => $value) {
            switch ($key) {
                case "subjectName":
                    if (strlen(htmlspecialchars($value)) < 1 || strlen(htmlspecialchars($value)) > 150) {
                        array_push($errors, "subjectName of invalid size");
                    }
                    break;
                case "teacher":
                    if (strlen(htmlspecialchars($value)) < 1 || strlen(htmlspecialchars($value)) > 200) {
                        array_push($errors, "teacher of invalid length");
                    }
                    break;
                case "description":
                    if (strlen(htmlspecialchars($value)) < 10) {
                        array_push($errors, "description of invalid length");
                    }
                    break;
                case "credits":
                    if (htmlspecialchars($value) <= 0) {
                        array_push($errors, "credits of invalid size");
                    }
                    break;
            }
        }
        printErrors($errors);
    }

    function printErrors($errors) {
        var_dump($errors);
    }
?>
