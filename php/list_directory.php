<!DOCTYPE html>
<html>
    <head>
        <title>Index of /</title>
    </head>
    <body>
        <h1>Index of /Projects
        <?php

            function listDirs($directory)
            {
                $directoryContents = scandir(__DIR__);
                $filteredContents = array_diff($directoryContents, array('.', '..'));
                sort($filteredContents);
            
                echo "<ul>";
                foreach ($filteredContents as $entry) {
                    $entryPath = $directory . '/' . $entry;
                    if (is_dir($entryPath)) {
                        echo "<li><a href='$entryPath/'>$entry/</a></li>";
                        listDirs($entryPath);
                    } else {
                        echo "<li><a href='$entryPath'>$entry</a></li>";
                    }
                }
                echo "</ul>";
            }
        
            echo "<h1>Directory Listing</h1>";
            listDirs(__DIR__);

        ?>
    </body>
</html>

