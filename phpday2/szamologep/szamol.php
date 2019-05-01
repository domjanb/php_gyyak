<?php

if (isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["muvelet"])){
    $a=$_GET["a"];
    $b=$_GET["b"];
    $m=$_GET["muvelet"];

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
                $e=$a/$b;
                break;
            default:
                $e="valami vihar van";
                break;
        }
    print "eredmeny=$e<br>";    
    }else{
        print "vihar2";
    }    
}elseif  (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["muvelet"])){
    $a=$_POST["a"];
    $b=$_POST["b"];
    $m=$_POST["muvelet"];

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
                $e=$a/$b;
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
        
