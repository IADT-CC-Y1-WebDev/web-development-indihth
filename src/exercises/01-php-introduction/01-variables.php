<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Exercises - PHP Introduction</title>
    <link rel="stylesheet" href="/exercises/css/style.css">
</head>
<body>
    <div class="back-link">
        <a href="index.php">&larr; Back to PHP Introduction</a>
        <a href="/examples/01-php-introduction/01-variables.php">View Example &rarr;</a>
    </div>

    <h1>Variables Exercises</h1>

    <!-- Exercise 1 -->
    <h2>Exercise 1: Personal Information</h2>
    <p>
        <strong>Task:</strong> 
        Create variables for your first name, last name, age, and city. 
        Then output a sentence using these variables that says "My name 
        is [first] [last], I am [age] years old and I live in [city]."
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        $firstName = "Ciara";
        $lastName = "Walsh";
        $age = 30;
        $city = "Galway";
        echo "My name is $firstName $lastName, I am $age years old and I live in $city.";
        ?>
    </div>

    <!-- Exercise 2 -->
    <h2>Exercise 2: Shopping Calculator</h2>
    <p>
        <strong>Task:</strong> 
        Create variables for three product prices and their quantities. 
        Calculate the subtotal for each product (price × quantity), then 
        calculate the total cost. Apply a 10% discount and display the 
        final price.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        $product1 = "Scrabble";
        $price1 = 20.00;
        $quantity1 = 2;
        $product2 = "Monopoly";
        $price2 = 15.50;
        $quantity2 = 3;
        $product3 = "Chess Set";
        $price3 = 10.00;
        $quantity3 = 5;
        $subtotal1 = $price1 * $quantity1;
        $subtotal2 = $price2 * $quantity2;
        $subtotal3 = $price3 * $quantity3;
        $total = $subtotal1 + $subtotal2 + $subtotal3;
        $discount = $total * 0.10;
        $finalPrice = $total - $discount;
        echo "Your cart contains three products: <br/>";
        echo "- $product1: €" . number_format($price1, 2) . " x $quantity1 = €" . number_format($subtotal1, 2) . "<br/>";
        echo "- $product2: €" . number_format($price2, 2) . " x $quantity2 = €" . number_format($subtotal2, 2) . "<br/>";
        echo "- $product3: €" . number_format($price3, 2) . " x $quantity3 = €" . number_format($subtotal3, 2) . "<br/>";
        echo "Total before discount: €" . number_format($total, 2) . "<br/>";
        echo "The final price after a 10% discount is €" . number_format($finalPrice, 2) . ".";
        ?>
    </div>

    <!-- Exercise 3 -->
    <h2>Exercise 3: User Status</h2>
    <p>
        <strong>Task:</strong> 
        Create boolean variables for isStudent, hasDiscount, and isPremiumMember. 
        Use the ternary operator to display "Yes" or "No" for each status.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        $isStudent = true;
        $hasDiscount = false;
        $isPremiumMember = true;
        echo "Is Student: " . ($isStudent ? "Yes" : "No") . "<br/>";
        echo "Has Discount: " . ($hasDiscount ? "Yes" : "No") . "<br/>";
        echo "Is Premium Member: " . ($isPremiumMember ? "Yes" : "No") . "<br/>";
        ?>
    </div>

</body>
</html>
