<?php
class TransportMethod {
    private $numberOfStations;
    private $stations;
    private $line;

    public function __construct($numberOfStations, $stations, $line) {
        $this->numberOfStations = $numberOfStations;
        $this->stations = $stations;
        $this->line = $line;
    }

    //getters for composition
    public function getNumberOfStations(): int {
        return $this->numberOfStations;
    }

    public function getStations(): string {
        return $this->stations;
    }

    public function getLine(): int {
        return $this->line;
    }
}
?>