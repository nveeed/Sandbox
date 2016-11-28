<?php
echo "Some error";
http_response_code(403);
exit;

echo json_encode([
    [
        'id' => 1,
        'name' => 'Shah Rukh',
    ],
    [
        'id' => 2,
        'name' => 'Basit',
    ],
    [
        'id' => 3,
        'name' => 'Ali',
    ],
    [
        'id' => 4,
        'name' => 'Naveed',
    ],
    [
        'id' => 5,
        'name' => 'Abdullah',
    ],
    [
        'id' => 6,
        'name' => 'Fawad',
    ],
    [
        'id' => 7,
        'name' => 'He who can not be named',
    ],
]);