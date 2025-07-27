<?php
function getTotalCount(array $data)
{
    return count($data);
}

$foo1 = getTotalCount([1, 2, 3, 5, 5, 8]);
$foo2 = getTotalCount([]);
$foo3 = getTotalCount(['banan', 'olma', 'shaftoli']);
<!doctype html>
<head>
    <title>Count</title>
    <style>
    </style>
</head>
<body>
    <h1>Count</h1>
    <p>Total count: <?php echo $foo1; ?></p>
    <p>Total count: <?php echo $foo2; ?></p>
    <p>Total count: <?php echo $foo3; ?></p>
</body>
</html>
