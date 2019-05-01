<?php
if (isset($_GET["a"])) $p=$_GET; else $p=$_POST;
    
if (isset($p["a"]) && isset($p["b"]) && isset($p["muvelet"])){
    $a=$p["a"];
    $b=$p["b"];
    $m=$p["muvelet"];

    if (is_numeric($a) && is_numeric($b) ){
        print "a=$a<br>";
        print "b=$b<br>";
        print "m=$m<br>";

        switch ($m) {
            case "+":
                $e=$a+$b;
                break;
            case "-":
                $e=$a-$b;
                break;
            case "*":
                $e=$a*$b;
                break;
            case "/":
                $e=(($b==0) ? "nullas osztas":  $a/$b);
                break;
            default:
                $e="valami vihar van";
                break;
        }
    print "eredmeny=$e<br>";    
    }else{
        print "vihar2";
    }    

}else{
    print "vihar3";
}
print "<br>";
print "<hr>";
print "<a href='index.php'>Új számolás";
print "<br>";
?>
        
