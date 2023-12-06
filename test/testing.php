<?php
use Thealgoslingers\AlgoslingFileanew;
/*
## For file(s) being uploaded to server
## Please upload the file first
## Then use AlgoslingFileanew to rename it

------ HOW TO RENAME FILE AND/OR SAVE TO DIRECTORY ------ 
       $file = "path-to-your-file.extension";
       $AlgoslingFileanew = new AlgoslingFileanew;
       $newFile = $AlgoslingFileanew->renameFile($file,"Alnum");
       ## SAVE TO DIRECTORY (OPTIONAL) ##
       fopen("directory-path/$newFile","a");
*/
require "../vendor/autoload.php";

$AlgoslingFileanew = new AlgoslingFileanew();
$newFile = strtolower($AlgoslingFileanew->renameFile("textfile.txt","Alnum"));
echo "Your new file is: $newFile";
?>
