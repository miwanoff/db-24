<?php

require "db-connection.php";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
try {
    $result = $conn->query("SELECT countries.country_id, cities.city_name, cities.city_population,
            countries.country_name, countries.country_area, countries.capital FROM cities JOIN countries ON
            cities.country_id=countries.country_id;");

    printf("%s\t  %s\t  %s\t  %s\t  %s \n\n", "Місто", "Населення", "Країна", "Площа", "Столиця");
    while ($row = $result->fetch_assoc()) {
        printf("%s\t  %f\t  %s\t  %f\t\t  %s \n", $row["city_name"], $row["city_population"], $row["country_name"], $row["country_area"], $row["capital"]);
    }
    echo "\n";
    printf("%s\t  %s\t  %s\t  %s\t  %s \n\n", "Місто", "Населення", "Країна", "Площа", "Столиця");

    $result = $conn->query("SELECT countries.country_id, cities.city_name, cities.city_population,
        countries.country_name, countries.country_area, countries.capital FROM cities JOIN countries ON
        cities.country_id=countries.country_id WHERE countries.country_area < 600000;");

    while ($row = $result->fetch_assoc()) {
        printf("%s\t  %f\t  %s\t  %f\t\t  %s \n", $row["city_name"], $row["city_population"], $row["country_name"], $row["country_area"], $row["capital"]);
    }
    mysqli_close($conn);
} catch (Exception $e) {
    $e->getMessage();
}