<html>
<head>
    <title>Index of /bdives-webdev/templates</title>    <!-- $pwd arg is parsed in php for formatting -->
</head>
<body>
<h1>Index of /bdives-webdev/templates</h1>
<table>
    <tr>
        <th valign="top">
            <img src="/icons/blank.gif" alt="[ICO]">
        </th>
        <th>
            <a href="./">Name</a>          <!-- Names for the column headers at the top -->
        </th>
        <th>
            <a href="./">Last Modified</a>  <!-- Names for the column headers at the top -->
        </th>
        <th>
            <a href="./">Size</a>           <!-- Names for the column headers at the top -->
        </th>
    </tr>

    <tr>
        <th colspan="6"><hr></th>
    </tr>    

    <tr>
        <td valign="top">
            <img src="/icons/back.gif" alt="[PARENTDIR]">
        </td>
        <td>
            <a href="../">Parent Directory</a>
        </td>
        <td>&nbsp;</td>
        <td align="right">  - </td>
    </tr>
</table>

    <?php
        
        $directoryUpTemplate = "./parentdir.txt";
        $openFile = "./openfile.txt";
        $enterDir = "./enterdir.txt";

        function printFrom($fname) {
            $read = fopen($fname, "r");
            echo fread($read, filesize($fname));
            fclose($read);

            clearstatcache();
        }

        function getDirList($pwd) {
            $dirList = scandir(($pwd));
            foreach($dirList as $file) {
                echo "<div><p valign=\"top\"><alt=\"[DIR]\"></p><p><a href=\"css/\">css/</a></p><p align=\"right\">2023-08-02 02:12  </p><p align=\"right\">  - </p></div>";
                echo "<a href=\"$file\">$file</a>" . "<br>";
            }
        }

        function tmp() {
            $size=array("Big","Medium","Short");  
            foreach( $size as $s )  
            {  
            echo "Size is: $s<br />";  
            }  
        }


        printFrom($enterDir); */

    ?>
    
</body>
</html>