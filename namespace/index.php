<?php 

    require __DIR__.'/RequestInterface.php';
    require __DIR__.'/Http/Request.php';
    require __DIR__.'/Api/Request.php';

    // use Http\Request;
    $request = new Http\Request();
    $request->handle();
    echo PHP_EOL;

    // use Api\Request;
    $request = new Api\Request();
    $request->handle();

?>