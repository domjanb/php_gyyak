<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if (isset($_POST["csapatok"]) && isset($_POST["darab"])){
                $cs=$_POST["csapatok"];
                $db=$_POST["darab"];
                $cs= explode(",", $cs);
                
                /*for ($index = 0; $index < count($cs); $index++) {
                    $cs[$index]=trim($cs[$index]);
                }*/
                function mytrim(&$ertek){
                    $ertek= trim($ertek);
                }
                array_walk($cs, "mytrim");
                
                /*function nemres($ertek){
                    return $ertek != "";
                }
                $cs=array_filter($cs, "nemres");*/
                $cs=array_filter($cs, function($ertek){return $ertek != "";} );
                print_r($cs);
                shuffle($cs);
                $sorsol=array_chunk($cs, $db);
                
                print_r($sorsol);
                print "<table border='1px'>";
                for ($index = 0; $index < count($sorsol); $index++) {
                    print "<tr>";
                    for ($index1 = 0; $index1 < count($sorsol[$index]); $index1++) {
                        print "<td>".$sorsol[$index][$index1]."</td>";
                    }
                    print "</tr>";
                }
                print "</table>";
            }
            else{
                print "nem megfelelo adatok";
            }
        ?>
    </body>
</html>
