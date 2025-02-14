<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP EXERCISE 2</title>
    <link rel="stylesheet" href="https://sntleq.github.io/phpstuff/style.css">
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
        <div class="content">
            <div class="bg"></div>
            <?php
                $cities = [ 'Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul',
                            'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London' ];
                
                function getUnorderedList($list) {
                    echo "<ul class='card'>";
                    foreach ($list as $item) {
                        echo "<li>$item</li>";
                    }
                    echo "</ul>";
                }
            ?>
            <div class="fit flex">
                <p class="card m btn tight">
                    <?php
                        foreach ($cities as $city) {
                            echo $city;
                            if ($city != end($cities)) {
                                echo ", ";
                            }
                        }
                    ?>
                </p>
                <?php
                    sort($cities);
                    getUnorderedList($cities);
                    array_push($cities, 'Los Angeles', 'Calcutta', 'Osaka', 'Beijing');
                    sort($cities);
                    getUnorderedList($cities);
                ?>
            </div>
        </div>
    </section>
</body>
</html>
