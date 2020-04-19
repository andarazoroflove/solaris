<?

/**
 * Change the path to your folder.
 *
 * This must be the full path from the root of your
 * web space. If you're not sure what it is, ask your host.
 *
 * Name this file index.php and place in the directory.
 */

    // Define the full path to your folder from root
    $path = "/homepages/21/d99922209/htdocs/arol/solaris/packages/linux";

    // Open the folder
    $dir_handle = @opendir($path) or die("Unable to open $path");

    // Loop through the files
    while ($file = readdir($dir_handle)) {

    if($file == "." || $file == ".." || $file == "index.php" )

        continue;
        echo "<a href=\"$file\">$file</a><br />";

    }

    // Close
    closedir($dir_handle);

?> 
