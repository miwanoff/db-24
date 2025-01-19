<?php
$city = "'s Hertogenbosch";
/* цей запит викликає помилку, оскільки ми не екранували $city */
if (!$mysqli->query("INSERT into myCity (Name) VALUES ('$city')")) {
    printf("Помилка: %s\n", $mysqli->sqlstate);
}
$city = $mysqli->real_escape_string($city);

/* цей запит відпрацює нормально */
if ($mysqli->query("INSERT into myCity (Name) VALUES ('$city')")) {
   printf("%d рядків вставлено.\n", $mysqli->affected_rows);
}