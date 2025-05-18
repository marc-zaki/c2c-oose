<?php
require_once("TransportMethod.php");

class MwasalatMisr extends TransportMethod {
    private $cardBalance;

    public function __construct(int $numberOfStations, string $stations, int $line, int $cardBalance = 0) {
        parent::__construct($numberOfStations, $stations, $line);
        $this->cardBalance = $cardBalance;
    }

  
    public function rechargeCard(){
        
    }

    public function showBalance(){
        
    }

    public function getMwasalatyCard(){
       
    }
}
?>