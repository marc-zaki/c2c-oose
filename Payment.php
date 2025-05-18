<?php
class Payment {
    private $paymentId;
    private $paymentDate;
    private $creditCardInfo;
    private $ticketId; // Reference to parent Ticket
    private $points; // Composition

    public function __construct(
        int $paymentId, 
        int $paymentDate, 
        int $ticketId
    ) {
        $this->paymentId = $paymentId;
        $this->paymentDate = $paymentDate;
        $this->ticketId = $ticketId;
        $this->creditCardInfo = 0;
        $this->points = new Points(); 
    }

    // Payment methods
    public function calculatePrice() {
        
    }

    public function displayTicket(){

    }
    
    public function processPayment(){

    }
    

    public function refundPayment(){
       
    }

    public function getPaymentDetails() {
       
    }
}
?>