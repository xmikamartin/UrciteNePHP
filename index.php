<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Echo</title>
    </head>
    <body>
        <?php
$string = "za tohle dostanu asi za<br>";
echo $string;
$znamka = 5;
echo $znamka;
print "<br>";
$realnaznamka = 4.99;
echo $realnaznamka;
$opravdujidostnu = true;
  if (false)  { 
      print ".<br> no to teda ne";
     
} 
if (true)  { 
      print ".<br> Ano tohle Boolean jen to nevidite";
     
} 
$možná = 1;
$text = '<br>možná dostanu za ' . $možná . ' snad.';
echo $text;
echo "<img src='https://www.emojimeanings.org/wp-content/uploads/2016/03/fml.png' />";
echo "<br>tak nějaký text \\ aby bylo vidět že to fachčí<br>";
$a = 8;
$b = 4;
var_dump($b+$a);
print "<br>";
var_dump($b-$a);
print "<br>";
var_dump($b/$a);
print "<br>";
var_dump($b*$a);
print "<br>";
var_dump($b++);
print "<br>";
var_dump(-$b);
print "<br>";
var_dump($b+=$a);
print "<br>";
var_dump($b-=$a);
print "<br>";
var_dump($b*=$a);
print "<br>";
var_dump($b/=$a);
print "<br>";
var_dump($b==$a);
print "<br>";
var_dump($b!=$a);
print "<br>";
var_dump($b>$a);
print "<br>";
var_dump($b<$a);
print "<br>";
var_dump($b||$a);
print "<br>";
var_dump($b&&$a);
print "<br>";
var_dump(!$b+$a);
print "<br>";
 $MartinMika1 = 1;
$MartinMika2 = 1;

if ($MartinMika1 == 1)
   { echo"Mika Martin";}
if ($MartinMika1==2)
       { echo"Martin";}
   else {
       if ($MartinMika1==1)
   {echo "<br>Martin";}
     else {
       if ($MartinMika1==3)
   {echo "<br>Mika";}
     else
    {echo "Mika";}}}
    switch ($MartinMika1) {
 case 1:
 echo " Perfektní";
 break;
 case 2:
 echo " Chválím tě";
 break;
 case 3:
 echo " Alespoń si prospěl";
 break;
 case 4:
 echo " Teda jen tak tak tě vyhodiy";
 break;
 case 5:
 echo " Jsi k ničemu";
 break;
 case 6:
 echo " Mám dojem že si hacknul sistém";
 break;
 default:
 echo " wth";}
echo " <br>";
$LegoKostky = array(1 => "Červená",2 => "Zelená" ,3 => "Černá",4 => "Bílá",5 => "Fialová",
6 =>"Růžová",7 => "Tirkysový",8 => "Oranžová",9 => "Žlutá",10 =>"Modrá");
var_dump($LegoKostky);
echo "<br>";
echo "<br>";
echo "<br>";
$Smartphone = array 
    ($značka = array 
    ($Samsung = array(
        $A80 = array 
    ("Jméno" => "Samsung Galaxy A80",
     "Značka" => "Samsung",
     "třída" => "Střední",
     "Barva" => "černá",
     "Hodnocení" => "Vyššý",
     "Dostupnost" => "Ano",),
         $A40 = array 
    ("Jméno" => "Samsung Galaxy A40",
     "Značka" => "Samsung",
     "třída" => "Nižší",
     "Barva" => "černá",
     "Hodnocení" => "Střední",
     "Dostupnost" => "Ano",),
         $S20= array 
    ("Jméno" => "Samsung Galaxy S20",
     "Značka" => "Samsung",
     "třída" => "Vyššý",
     "Barva" => "černá",
     "Hodnocení" => "Vyššý",
     "Dostupnost" => "Ano",),),
    $Nokia = array(
       $Nokia4 = array 
    ("Jméno" => "Nokia 4",
     "Značka" => "Nokia",
     "třída" => "¨Nižší",
     "Barva" => "černá",
     "Hodnocení" => "Nízká",
     "Dostupnost" => "Ne",),
         $Nokia2 = array 
    ("Jméno" => "Nokia 2",
     "Značka" => "Nokia",
     "třída" => "Nižší",
     "Barva" => "černá",
     "Hodnocení" => "Střední",
     "Dostupnost" => "Ano",),
         $Nokia9= array 
    ("Jméno" => "Nokia 9",
     "Značka" => "Nokia",
     "třída" => "Střední",
     "Barva" => "Modrá",
     "Hodnocení" => "Vyššý",
     "Dostupnost" => "Ano",),
    ),
    $Honor = array(
         $Pro20 = array 
    ("Jméno" => "Honor 20 PRO",
     "Značka" => "Honor",
     "třída" => "Střední",
     "Barva" => "Bílá",
     "Hodnocení" => "Vyššý",
     "Dostupnost" => "Ano",),
         $Lite20 = array 
    ("Jméno" => "Honor 20Lite",
     "Značka" => "Honor",
     "třída" => "Nižší",
     "Barva" => "černá",
     "Hodnocení" => "Střední",
     "Dostupnost" => "Ano",),
         $A8= array 
    ("Jméno" => "Honor A8",
     "Značka" => "Honor",
     "třída" => "Stření",
     "Barva" => "černá",
     "Hodnocení" => "Vyššý",
     "Dostupnost" => "Ano",),   
    ),    
    $Apple = array (
     $SIphone11= array 
    ("Jméno" => "Iphone 11",
     "Značka" => "Apple",
     "třída" => "Vyššý",
     "Barva" => "černá",
     "Hodnocení" => "Vyššý",
     "Dostupnost" => "Ano",),    
    )));

        ?>
    </body>
</html>
