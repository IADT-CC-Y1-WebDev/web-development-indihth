<?php
function formatPhoneNumber($number) {
    // Remove any non-digit characters
    $digits = preg_replace('/\D/', '', $number);
    
    // Check if we have 10 digits
    if (strlen($digits) !== 10) {
        return "Invalid phone number -- needs to be 10 digits.";
    }
    
    // Format the number as (XXX) XXX-XXXX
    $formatted = sprintf("(%s) %s-%s",
        substr($digits, 0, 3),
        substr($digits, 3, 3),
        substr($digits, 6, 4)
    );
    
    return $formatted;
}
?>