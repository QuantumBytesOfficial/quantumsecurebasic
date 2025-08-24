<?php
// Deal of the Day functionality
function getDailyDeal() {
    include_once 'products.php';
    if (!empty($dailyDeals)) {
        // Get a random daily deal
        return $dailyDeals[array_rand($dailyDeals)];
    }
    return null;
}

// Monthly deals with countdown
function getMonthlyDeals() {
    include_once 'products.php';
    return $monthlyDeals;
}

// Deal countdown timer
function dealCountdown($expiryDate) {
    $now = new DateTime();
    $expiry = new DateTime($expiryDate);
    $interval = $now->diff($expiry);
    
    return [
        'days' => $interval->format('%a'),
        'hours' => $interval->format('%h'),
        'minutes' => $interval->format('%i')
    ];
}
?>