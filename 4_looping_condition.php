<?php

$i    = 1;
while ($i <= 50) {
    if ($i % 3 == 0 and $i % 5 == 0) {
        echo "FooBar";
        echo '<br>';
    } elseif ($i % 3 == 0) {
        echo "Foo";
        echo '<br>';
    } elseif ($i % 5 == 0) {
        echo "Bar";
        echo '<br>';
    } else {
        echo $i;
        echo '<br>';
    }

    $i    = $i + 1;
}
