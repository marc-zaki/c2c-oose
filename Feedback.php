<?php
class Feedback {
    private $feedbackId;
    private $userId;
    private $rating;
    private $comment;

    public function __construct(string $feedbackId, string $userId, int $rating, string $comment) {
        $this->feedbackId = $feedbackId;
        $this->userId = $userId;
        $this->rating = $rating;
        $this->comment = $comment;
    }

    
    public function submitFeedback(){
        
    }

    
    public function viewFeedback(){
        
    }

}
?>