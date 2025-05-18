<?php
class Trip {
    private $startPoint;
    private $endPoint;
    private $price;
    private $user; // aggregation
    private $transportMethod; // composition

    public function __construct(User $user, $startPoint, $endPoint, $price) {
        $this->user = $user;
        $this->startPoint = $startPoint;
        $this->endPoint = $endPoint;
        $this->price = $price;
        $this->transportMethod = new TransportMethod($numberOfStations, $stations, $line);
        // since they cant exists w/o eachother so ull set during construction and get from the Transportation method.

    }
    // how theyll  be accessed.
    public function getNumberOfStations(): int {
        return $this->transportMethod->getNumberOfStations();
    }

    public function getStations(): string {
        return $this->transportMethod->getStations();
    }

    public function getLine(): int {
        return $this->transportMethod->getLine();
    }

    public function calculateThePrice() {
        // Implementation
    }

    public function displayThePrice() {
        //Implementation
    }

    public function bookTrip() {
        // Implementation
    }

    public function editTrip($newStartPoint, $newEndPoint, $newPrice) {
        // Implementation
    }

    public function cancelTrip() {
        // Implementation
    }

    public function displayTrip() {
        // Implementation
    }

    //not too sure about this since its composition , but this is what i understood
    public function getTransportMethod(): TransportMethod {
        return $this->transportMethod;
    }


    // Getter for the aggregated User
    // public function getUser(): User {
    //     return $this->user;
    // }

    // Setters and getters for other properties
    // public function getStartPoint(): string {
    //     return $this->startPoint;
    // }

    // public function setStartPoint(string $startPoint): void {
    //     $this->startPoint = $startPoint;
    // }
}
?>
