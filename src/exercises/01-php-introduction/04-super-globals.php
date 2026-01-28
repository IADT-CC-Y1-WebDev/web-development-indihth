<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globals Exercises - PHP Introduction</title>
    <link rel="stylesheet" href="/exercises/css/style.css">
</head>
<body>
    <div class="back-link">
        <a href="index.php">&larr; Back to PHP Introduction</a>
        <a href="/examples/01-php-introduction/04-super-globals.php">View Example &rarr;</a>
    </div>

    <h1>Super Globals Exercises</h1>

    <!-- Exercise 1 -->
    <h2>Exercise 1: Server Information</h2>
    <p>
        <strong>Task:</strong> 
        Display the following information from $_SERVER: PHP_SELF, 
        REQUEST_METHOD, HTTP_HOST, and HTTP_USER_AGENT. Format them 
        nicely with labels.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<thead><tr><th>Parameter</th><th>Value</th></tr></thead>";
        echo "<tr><td>PHP_SELF</td><td>" . $_SERVER['PHP_SELF'] . "</td></tr>";
        echo "<tr><td>REQUEST_METHOD</td><td>" . $_SERVER['REQUEST_METHOD'] . "</td></tr>";
        echo "<tr><td>HTTP_HOST</td><td>" . $_SERVER['HTTP_HOST'] . "</td></tr>";
        echo "<tr><td>HTTP_USER_AGENT</td><td>" . $_SERVER['HTTP_USER_AGENT'] . "</td></tr>";
        echo "</table>";
        ?>
    </div>

    <!-- Exercise 2 -->
    <h2>Exercise 2: URL Parameters</h2>
    <p>
        <strong>Task:</strong> 
        Check if a 'name' parameter exists in the URL. If it does, 
        display "Hello, [name]!". If not, display "Hello, Guest!". 
        Try adding ?name=YourName to the URL for this page.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        if (isset($_GET['name']) && !empty($_GET['name'])) {
            $name = htmlspecialchars($_GET['name']);
            echo "Hello, $name!";
        } else {
            echo "Hello, Guest!";
        }
        ?>
    </div>

    <!-- Exercise 3 -->
    <h2>Exercise 3: Multiple URL Parameters</h2>
    <p>
        <strong>Task:</strong> 
        Check for 'product' and 'quantity' parameters in the URL. 
        If both exist, display "You ordered [quantity] [product](s)". 
        If either is missing, display appropriate error messages. 
        Try adding ?product=Widget&quantity=5 to the URL for this page.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        if (isset($_GET['product']) && isset($_GET['quantity'])) {
            $product = htmlspecialchars($_GET['product']);
            $quantity = (int)$_GET['quantity'];
            if (!empty($product) && $quantity > 0) {
                echo "You ordered $quantity $product(s).";
            } else {
                if (empty($product)) {
                    echo "Error: Product name is missing.<br/>";
                }
                if ($quantity <= 0) {
                    echo " Error: Quantity must be a positive number.<br/>";
                }
            }
        } else {
            if (!isset($_GET['product'])) {
                echo "Error: Product parameter is missing.<br/>";
            }
            if (!isset($_GET['quantity'])) {
                echo " Error: Quantity parameter is missing.<br/>";
            }
        }
        ?>
    </div>

</body>
</html>
