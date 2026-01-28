<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Exercises - PHP Introduction</title>
    <link rel="stylesheet" href="/exercises/css/style.css">
</head>
<body>
    <div class="back-link">
        <a href="index.php">&larr; Back to PHP Introduction</a>
        <a href="/examples/01-php-introduction/03-arrays.php">View Example &rarr;</a>
    </div>

    <h1>Arrays Exercises</h1>

    <!-- Exercise 1 -->
    <h2>Exercise 1: Favorite Movies</h2>
    <p>
        <strong>Task:</strong> 
        Create an indexed array with 5 of your favorite movies. Use a for 
        loop to display each movie with its position (e.g., "Movie 1: 
        The Matrix").
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        $favoriteMovies = [
            "My Left Foot",
            "The Commitments",
            "Intermission",
            "Brooklyn",
            "An Cailín Ciúin"
        ];
        for ($i = 0; $i < count($favoriteMovies); $i++) {
            $position = $i + 1;
            echo "Movie $position: " . $favoriteMovies[$i] . "<br/>";
        }
        ?>
    </div>

    <!-- Exercise 2 -->
    <h2>Exercise 2: Student Record</h2>
    <p>
        <strong>Task:</strong> 
        Create an associative array for a student with keys: name, studentId, 
        course, and grade. Display this information in a formatted sentence.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        $student = [
            "name" => "Emma O'Sullivan",
            "studentId" => "S1234567",
            "course" => "Computer Science",
            "grade" => "A"
        ];
        $sentence = $student['name'] . " (ID: " . $student['studentId'] . ") is enrolled in " . $student['course'] . " and has received a grade of " . $student['grade'] . ".";
        echo $sentence . "<br/>";
        ?>
    </div>

    <!-- Exercise 3 -->
    <h2>Exercise 3: Country Capitals</h2>
    <p>
        <strong>Task:</strong> 
        Create an associative array with at least 5 countries as keys and their 
        capitals as values. Use foreach to display each country and capital 
        in the format "The capital of [country] is [capital]."
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        $countryCapitals = [
            "Ireland" => "Dublin",
            "France" => "Paris",
            "Germany" => "Berlin",
            "Italy" => "Rome",
            "Spain" => "Madrid"
        ];
        foreach ($countryCapitals as $country => $capital) {
            echo "The capital of $country is $capital.<br/>";
        }
        ?>
    </div>

    <!-- Exercise 4 -->
    <h2>Exercise 4: Menu Categories</h2>
    <p>
        <strong>Task:</strong> 
        Create a nested array representing a restaurant menu with at least 
        2 categories (e.g., "Starters", "Main Course"). Each category should 
        have at least 3 items with prices. Display the menu in an organized 
        format.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        $menu = [
            "Starters" => [
                ["item" => "Bruschetta", "price" => 6.50],
                ["item" => "Caesar Salad", "price" => 7.00],
                ["item" => "Garlic Bread", "price" => 5.00]
            ],
            "Main Course" => [
                ["item" => "Grilled Salmon", "price" => 15.00],
                ["item" => "Vegetarian Tagine", "price" => 12.50],
                ["item" => "Chicken Parmesan", "price" => 14.00]
            ],
            "Desserts" => [
                ["item" => "Tiramisu", "price" => 6.00],
                ["item" => "Cheesecake", "price" => 5.50],
                ["item" => "Gelato", "price" => 4.50]
            ]
        ];
        foreach ($menu as $category => $items) {
            echo "<strong>$category:</strong><br/>";
            foreach ($items as $menuItem) {
                echo "- " . $menuItem['item'] . ": €" . number_format($menuItem['price'], 2) . "<br/>";
            }
            echo "<br/>";
        }
        ?>
    </div>

</body>
</html>
