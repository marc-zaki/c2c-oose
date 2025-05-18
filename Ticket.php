<?php
require_once("TransportationMethod");

class Ticket{
    private $ticketId;
    private $price;
    private $departureDate;
    private $expireDate;
    private $payment; // Composition

    public function __construct(int $ticketId, int $price, string $departureDate, string $expireDate) {
        $this->ticketId = $ticketId;
        $this->price = $price;
        $this->departureDate = $departureDate;
        $this->expireDate = $expireDate;
        $this->payment = new Payment($ticketId, $price, $departureDate, $expireDate);
    }

    
    public function generateticket(){
        
    }

    
    public function displayticketdetails(){
        
    }

    
    public function calculatePrice(){
        
    }
    
    public function requestRefund(){
        
    }
    
    public function updateTicket(){
        
    }
    
    public function purchase(){
        
    }
}
?>