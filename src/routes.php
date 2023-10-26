<?php
return [
    '~^hello/(.*)$~' => [\MyProject\Controllers\MainController::class, 'sayHello'],
    '~^bay/(.*)$~' => [\MyProject\Controllers\MainController::class, 'sayBay'],
    '~^$~' => [\MyProject\Controllers\MainController::class, 'main'],
    ];
?>