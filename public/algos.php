<?php

echo 'Building random data ...' . '<br />'; 
@ob_flush();flush();

$data = '';
for ($i = 0; $i < 64000; $i++)
    $data .= hash('md5', rand(), true);

echo strlen($data) . ' bytes of random data built !' . '<br />' . '<br />' . 'Testing hash algorithms ...' . '<br />'; 
@ob_flush();flush();

$results = array();
foreach (hash_algos() as $v) {
    echo $v . '<br />'; 
    @ob_flush();flush();
    $time = microtime(true);
    hash($v, $data, false);
    $time = microtime(true) - $time;
    $results[$time * 1000000000][] = "$v (hex)";
    $time = microtime(true);
    hash($v, $data, true);
    $time = microtime(true) - $time;
    $results[$time * 1000000000][] = "$v (raw)";
}

ksort($results);

echo '<br />' . '<br />' . 'Results: ' . '<br />'; 

$i = 1;
foreach ($results as $k => $v)
    foreach ($v as $k1 => $v1)
        echo ' ' . str_pad($i++ . '.', 4, ' ', STR_PAD_LEFT) . '  ' . str_pad($v1, 30, ' ') . ($k / 1000) . ' microseconds' . '<br />';

?>