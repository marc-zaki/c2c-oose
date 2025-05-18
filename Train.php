<?php
require_once("TransportMethod.php");


class Train extends TransportMethod{
    private $Availability;

    public function __construct(int $numberOfStations, string $stations, int $line, bool $availability) {
        parent::__construct($numberOfStations, $stations, $line);
        $this->availability = $availability;
    }

    private function showCategory(){
        //
    }

    private function showSubscription(){
        //
    }
    
    private function showFrequentTrips(){
        //
    }

}
