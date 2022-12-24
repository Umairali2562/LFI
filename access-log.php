<?php
//reads ok.txt , takes users from it and write in ok1.txt
$tobe=$_GET['thepath'];
$domain=$_GET['domain'];
if(($tobe=="access-logs")&&(isset($domain))) {
    $file1 = fopen("ok.txt", "r");
    $file2 = fopen("path.txt", "w");
    $handle = $file1;


    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $ok = explode(":", $line);
            echo $ok[5];
            echo "<br>";
            fwrite($file2, $ok[5] . "/$tobe/$domain" . "\n");
        }

        fclose($handle);

    } else {
        echo "error Opening the file";
    }
}

else if($tobe=="access-logs") {
    $file1 = fopen("ok.txt", "r");
    $file2 = fopen("path.txt", "w");
    $handle = $file1;


    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $ok = explode(":", $line);
            echo $ok[5];
            echo "<br>";
            fwrite($file2, $ok[5] . "/$tobe/$ok[0].com" . "\n");
        }

        fclose($handle);

    } else {
        echo "error Opening the file";
    }
}else{
    $file1 = fopen("ok.txt", "r");
    $file2 = fopen("path.txt", "w");
    $handle = $file1;


    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $ok = explode(":", $line);
            echo $ok[5];
            echo "<br>";
            fwrite($file2, $ok[5] . "/$tobe" . "\n");
        }

        fclose($handle);

    } else {
        echo "error Opening the file";
    }
}
?>