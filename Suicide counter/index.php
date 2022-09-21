<?php
//header('Content-type: text/plain');
$myfile = fopen("textfile.txt", "r") or die("Unable to open file!");
if (flock($myfile, LOCK_EX)) // funktionen "flock" ser till att endast en besökare i taget kan öppna filen
{
    $number = (int)fgets($myfile);
    $number++;
    if($number >= 100){
        if(unlink("textfile.txt")){
            echo ("Webside is dead");
     }  else{
            echo ("Some ting wong");
     }
    } else {
        $myfile = fopen("textfile.txt", "w") or die("Unable to open file!");
        fwrite($myfile, $number);
        echo ("This page has been loaded $number times. And will die in " . 100-$number);
    }
} else {
    echo ("Error locking file.");
} 
fclose($myfile);