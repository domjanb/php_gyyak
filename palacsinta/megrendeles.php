<?php
/*foreach ($_POST as $key => $value) {
    $truefalse=(is_array($key) ? "true" : "false");
    print $truefalse;
    if(!is_array($key)){
        print "$key : $value<br>";
    }
    
}
*/

include_once 'common.php';
print "<h2>Kedves ".$_POST['neve']."</h2><br>";
print "megr. rogzitve<br>";
print "megr. palcsik:<br>";
$osszar=0;
if (isset($_POST['palacsinta'])){
    print "<ul>";
    
    foreach ($_POST['palacsinta'] as $key => $value) {
        print "<li>$value Ára: $palacsintaar[$value]</li> <br>";
        $osszar+=$palacsintaar[$value];
    }
    
    print "</ul>";
}
//$extrak=array("tejszinhab","meggy","porcukor");
foreach ($extrak as $ext => $value ) {
    //print "e:$ext   $value<br>";
    if (isset($_POST[$ext])){
        print "Extra: $ext<br>";
        //print $extrak[$value];
        $osszar+=$value;
    }
        
}
print "Osszár: $osszar";
        
?>
