<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Echo</title>
    </head>
    <body>
        <?php
require 'tracy/tracy.phar';
use Tracy\Debugger;
Debugger::enable();
Debugger::$strictMode = true;
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
dump($b+$a);
print "<br>";
dump($b-$a);
print "<br>";
dump($b/$a);
print "<br>";
dump($b*$a);
print "<br>";
dump($b++);
print "<br>";
dump(-$b);
print "<br>";
dump($b+=$a);
print "<br>";
dump($b-=$a);
print "<br>";
dump($b*=$a);
print "<br>";
dump($b/=$a);
print "<br>";
dump($b==$a);
print "<br>";
dump($b!=$a);
print "<br>";
dump($b>$a);
print "<br>";
dump($b<$a);
print "<br>";
dump($b||$a);
print "<br>";
dump($b&&$a);
print "<br>";
dump(!$b+$a);
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
dump($LegoKostky);
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
echo "<table border=\"1\">";
for($radekJmenoPrijmeni = 1; $radekJmenoPrijmeni < 12; $radekJmenoPrijmeni ++){
echo "<tr>";
for($sloupecJmenoPrijmeni = 1; $sloupecJmenoPrijmeni < 19; $sloupecJmenoPrijmeni ++){
echo "<td>$sloupecJmenoPrijmeni - $radekJmenoPrijmeni </td>";}
echo "</tr>";}
echo "</table>";
echo "Matematické<br>";
echo(abs(-3) . "<br>");
echo(ceil(2.5) . "<br>");
echo "Řetězové<br>";
$zkouška = addslashes('A co to mám  "rozdělit" teda ?');
echo"$zkouška<br>"; 
echo strrev("Co to je ?");
echo "<br>";
foreach ( $LegoKostky as $klíč => $hodnota )
{
echo "$klíč=$hodnota<br>";
}
Echo "Rod Blecků<br>";
function Jméno($Jméno, $věk) {
  echo("$Jméno Black <br>".ceil($věk)."<br>");
}
Jméno("Jenet","6.5");
Jméno("Catarina","24,5");
Jméno("Thomas","28,3"); 
        ?>
    </body>
</html>
