<?php
return [
    '~^hello/(.*)$~' => [\MyProject\Controllers\MainController::class, 'sayHello'],
    '~^bay/(.*)$~' => [\MyProject\Controllers\MainController::class, 'sayBay'],
    '~^$~' => [\MyProject\Controllers\MainController::class, 'main'],
    '~^articles/(\d+)$~' => [\MyProject\Controllers\ArticlesController::class, 'view'],
    '~^articles/(\d+)/edit$~' => [\MyProject\Controllers\ArticlesController::class, 'edit'],
    '~^articles/add$~' => [\MyProject\Controllers\ArticlesController::class, 'add'],
    '~^articles/(\d+)/delete$~' => [MyProject\Controllers\ArticlesController::class, 'delete'],
    '~^users/register$~' => [\MyProject\Controllers\UsersController::class, 'signUp'],
    '~^users/login~' => [\MyProject\Controllers\UsersController::class, 'login'],
    '~^users/exit~' => [\MyProject\Controllers\UsersController::class, 'exit'],
    '~^users/(\d+)/activate/(.+)$~' => [\MyProject\Controllers\UsersController::class, 'activate']
];
?>