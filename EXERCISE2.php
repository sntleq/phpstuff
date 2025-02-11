<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP EXERCISE 2</title>
    <link rel="stylesheet" href="https://sntleq.github.io/activityjs/style.css">
</head>
<body>
    <section>
        <div class="marquee center">
            <div>
                <h2>EXERCISE 2</h2>
                <h2>EXERCISE 2</h2>
                <h2>EXERCISE 2</h2>
                <h2>EXERCISE 2</h2>
                <h2>EXERCISE 2</h2>
                <h2>EXERCISE 2</h2>
                <h2>EXERCISE 2</h2>
                <h2>EXERCISE 2</h2>
                <h2>EXERCISE 2</h2>
                <h2>EXERCISE 2</h2>
            </div>
        </div>
        <div class="content" style="background-color: rgb(255, 215, 196); padding-bottom: 0;">
            <?php
                $cities = [ 'Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul',
                            'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London' ];
            ?>
            <p>
                <?php
                    foreach ($cities as $city) {
                        echo $city;
                        if ($city != end($cities)) {
                            echo ", ";
                        }
                    }
                ?>
            </p>
            <div class="fit" style="width: 100%; flex-direction: row; justify-content: space-evenly; text-align: left;">
                <ul>
                    <?php
                        sort($cities);
                        foreach ($cities as $city) {
                            echo "<li>$city</li>";
                        }
                    ?>
                </ul>
                <?php
                    array_push($cities, 'Los Angeles', 'Calcutta', 'Osaka', 'Beijing');
                ?>
                <ul>
                    <?php
                        sort($cities);
                        foreach ($cities as $city) {
                            echo "<li>$city</li>";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </section>
</body>
</html>