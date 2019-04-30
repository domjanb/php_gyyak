<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title></title>
    </head>
    <body>
	<?php
            //error_reporting(E_ERROR);
            //ini_set("display_errors", 1);
            //tipus 1 sima valtozo //tipus2 tomb
            //3 datumjatek  //4 asszociativ tomb literáls megadáse
            //5 ?:  // 6 for ciklus //7 break continue
            //8 foreach
            $fut_tipus=8;
            switch  ($fut_tipus) {
                case 1: {
                    print "hello";
                    echo "<br>";
                    print "hello2";
                    $valtozo=12;
                    echo "<br>";
                    echo $valtozo."<br>";
                    $valtozo=$valtozo+12;
                    echo $valtozo."<br />";
                    $valtozo+=12;
                    echo $valtozo."<BR>";
                    $valtozo++;
                    ++$valtozo;
                    echo $valtozo."<br>";
                    $eset1=$valtozo++;
                    $eset2=++$valtozo;
                    echo "valtozo=".$valtozo."<br>";
                    echo "eset1=".$eset1."<br>";
                    echo "eset2=".$eset2."<br>";    
                    break;
                }
                case 2:{
                    $tomb1[0]="alma";
                    $tomb1[1]="korte";
                    print_r($tomb1);
                    print $tomb1[1]."<br>";

                    $tomb2 = array("alma","korte");
                    print $tomb2[1]."<br>";
                    print_r($tomb2);
                    print "tomb elemeinek száma:".count($tomb2)."<br>";
                    //associativ tomb
                    $szemely["vnev"]="Gipsz";
                    $szemely["knev"]="Jakab";
                    $szemely["kor"]=35;
                    $szemely["fogl"]="Lakatos";
                    $szemely["atlaga"]=4.2;
                    $szemely["nyelvtudas"]=array("magyar","angol","urdu");
                    print $szemely["vnev"]." ".$szemely["knev"]."<br>";
                    print $szemely["atlaga"]."<br>";
                    print_r($szemely);

                    echo "<br>";
                    $tnev=($szemely["vnev"]." ".$szemely["knev"]);
                    ////////////////////////////
                    //////////////////////////
                    /////////////////////////////////////////
                    print "Hello $tnev!";
                    echo "<br>";
                    print 'Hello $tnev!';
                    echo "<br>";
                }
                case 3: {
                    //honap nap számítás
                    $honap = 2; // 1..12

                    if($honap == 1) $nap = 31;
                    if($honap == 2) $nap = 28;
                    if($honap == 3) $nap = 31;
                    if($honap == 4) $nap = 30;
                    if($honap == 5) $nap = 31;
                    if($honap == 6) $nap = 30;
                    if($honap == 7) $nap = 31;
                    if($honap == 8) $nap = 31;
                    if($honap == 9) $nap = 30;
                    if($honap == 10) $nap = 31;
                    if($honap == 11) $nap = 30;
                    if($honap == 12) $nap = 31;
			  
                    print "napok szama=$nap<br>";
			  
                    if($honap == 1 || $honap == 3 || $honap == 5 || $honap == 7 || $honap == 8 || $honap == 10 || $honap == 12)
			$nap = 31;
                    else 
			if($honap == 4 || $honap == 6 || $honap == 9 || $honap == 11 )
                            $nap = 30;
			else 
                            if($honap == 2) $nap = 28;
				  
                    print "napok szama=$nap<br>";

                    $n31=array(1,3,5,7,8,10,12);
                    $n30=array(4,6,9,11);
                    if (in_array($honap,$n31)) {
			echo "napok szama=31<br>";
                    }else if (in_array($honap,$n30)){
			echo "napok szama=31<br>";
                    }else{
                        echo "napok szama=28<br>";
                    }
                }
                case 4: {
                    $honap = 2;
                    $honap_nap=array(1=>31,2=>28,3=>31,4=>30,5=>31,6=>30,
                                    7=>31,8=>31,9=>30,10=>31,11=>30,12=>31);
                    print_r($honap_nap);
                    echo '<br>';
                    print "napok száma: $honap_nap[$honap]<br>";
                    echo '<br>';
                    break;
                }
                case 5:{
                    $honap = 3;
                    $tavasze="nem tavasz<br>";
                    if (in_array($honap, array(3,4,5))){
                    $tavasze=" tavasz<br>";}
                    echo"$tavasze";
                    //A ZAROJELEK NEM KELLENEK
                    //$tavasze2=(LOGIKA)? (HA IGAZ) : (HA NEM IGAZ) 
                    $tavasze2=(in_array($honap, array(3,4,5)))? ("tavasz<br>") : ("nem tavasz<br>");
                    echo"$tavasze2";
                    print "Tavasze:".((in_array($honap, array(3,4,5)))? ("tavasz<br>") : ("nem tavasz<br>"));
                    break;
                }
                case 6:{
                    for ($i=1;$i<1500;$i*=2){
                        print "$i<br>";
                    }
                    for ($i=0,$j=1;$j<1500;$j*=2,$i++){
                        print "2^$i: $j<br>";
                    }
                    print "<table border='1'>";
                    print "<tr > ";
                    print "<th></th>";
                    for($i=0;$i<11;$i++){
                        print "<th>$i</th>";
                    }
                    print "</tr>";
                    for($i=0;$i<11;$i++){
                        print "<tr>";
                        print "<th>$i</th>";
                        for($j=0;$j<11;$j++){
                            $eredmeny=$i*$j;
                            print "<td>$i*$j=$eredmeny</td>";
                        }
                        print "</tr>";
                        
                    }
                    
                    print "</table>";
                    break;
                }
                case 7:{
                    for ($i=1;$i<20;$i++){
                        print $i."<br>";
                    }
                    
                    for ($i=1;$i<20;$i++){
                        if ($i==13) break;
                        //13nál kiugrik a ciklusból
                        print $i."<br>";
                    }
                    for ($i=1;$i<20;$i++){
                        if ($i==13) continue;
                        //13nál a ciklus belsejéből már nem fut le más ezen $i esetén
                        print $i."<br>";
                    }
                    break;
                }
                case 8:{
                    $honap = 2;
                    $honap_nap=array(1=>31,2=>28,3=>31,4=>30,5=>31,6=>30,
                                    7=>31,8=>31,9=>30,10=>31,11=>30,12=>31);
                    foreach ($honap_nap as $key => $value) {
                        print "$key:$value<br>";
                    }
                    break;
                }
                case 9:{
                    break;
                }
            default : print "bee";
            }
                 
            
            

			
			
			
			
			
		?>
	</body>
</html>