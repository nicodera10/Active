<?php

require_once("../functions/functions.php");
require_once("../constants/constants.php");
$dataArray = readAll($data);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" type="text/css" href="<?= arrayCallCss("client");?>">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="../../Public/index.php">Accueil</a>
    </nav>
    <table>
        <thead>
            <tr>
                <?php
                try {
                    $data2 = constant(strtoupper($data)."_FIELDS_NAME");

                    foreach($data2 as $tableDetails){
                        print("<td>");
                        print($tableDetails);
                        print("</td>");
                    }
                } catch (Exception $e) {
                    echo "banane";
                } catch (Error $e) {
                    echo "fraise";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($dataArray as $dataDetails){
                    print("<tr>");
                    foreach($dataDetails as $key => $value){
                        print("<td>$value</td>");
                    }
                    print("</tr>");
                }
            ?>
        </tbody>

    </table>
   

</body>
</html>