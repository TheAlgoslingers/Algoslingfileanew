# Algoslingfileanew
The package <strong>Algoslingfileanew</strong> allows you to give a unique name to your file. The mechanism is strong that no matter how many files you rename, even if they're millions they will still have their unique name preventing duplication of files.
The package gives 4 options to rename file.
(ie alphabets/numbers/hash/unique/alphanumeric)
You can rename your file in unique way.

<p>Contribution is allowed ❤️</p>

<h3>How to install</h3>
-- composer require thealgoslingera/algoslingfileanew

<h5>HOW TO RENAME FILE AND/OR SAVE TO DIRECTORY</h5>


       <?php
       use Thealgoslingers\AlgoslingFileanew
       
       ## For file(s) being uploaded to server
       ## Please upload the file first
       ## Then use AlgoslingFileanew to rename it

       require "../vendor/autoload.php";
       
       $file = "path-to-your-file.extension";
       $AlgoslingFileanew = new AlgoslingFileanew;
       $newFile = $AlgoslingFileanew->renameFile($file,"Alnum");
       ## SAVE TO DIRECTORY (OPTIONAL) ##
       fopen("directory-path/$newFile","a");
       $AlgoslingFileanew = new AlgoslingFileanew();
       ?>

## Tips
You may use <i>strtolower($newFile)</i> to rename in lowercase or
<i>strtoupper($newFile)</i> to rename in uppercase
