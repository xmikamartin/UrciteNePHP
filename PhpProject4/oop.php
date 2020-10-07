<html>
<body>
  <?php
    class User{
        private $Praha;
        private $Brno;
        
        protected $Ostrava;
        protected $Plzneň;
        protected $Olomouc;

        public $Liberec = 6;
        public $UstínadLabem = 7;
        public $ČeskéBudějovice = 8;
        public $HradecKrálové = 9;
        public $Pardubice = 10;



        public function __constructor() {}
        public function setPrahaHlavníMěsto($Praha);
        $this->Praha = $Praha}
        public function setBrnoHlavníVesnice($Brno)
            {$this->Brno = $Brno} 
        public function getHlavníMěstoSlezka()
            {return $this->Ostrava} 
        public function getHlavníMěstoPiva()
            {return $this->Plzeň}
        public function getHlavníMěstoNičeho()
            {return $this->Olomouc}  
        public function getHlavníMěstoBílíchTigrů()
            {return $this->Liberec}       
        public function getHlavníMěstoKpců()
            {return $this->UstínadLabem}
        

}

$User = new User();
$User->setPrahaHlavníMěsto("Klenot");
$User->setBrnoHlavníVesnice(2);
echo $User->getHlavníMěstoSlezka() . "<br><br>";
echo $User->getHlavníMěstoPiva() . "<br><br>";
echo $User->getHlavníMěstoNičeho() . "<br><br>";
echo $User->getHlavníMěstoBílíchTigrů() . "<br><br>";
echo $User->getHlavníMěstoKpců() . "<br><br>";

var_dump($User);

?>
  
</body>
</html>
