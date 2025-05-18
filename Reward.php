<?php
class Reward {
    private $typeOfReward;
    private $description;
    private $points; // Composition

    public function __construct(string $type, string $description) {
        $this->typeOfReward = $type;
        $this->description = $description;
        $this->points = new Points(); // Points cannot exist without Reward
    }

    public function checkPoints(int $required): bool {
        
    }

    public function redeemReward(int $cost): string {
        
    }

   
    public function getPoints(): Points {
        return $this->points;
    }
}
?>