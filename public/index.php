<?php

require __DIR__ .'/../app/bootstrap.php';

var_dump( (new App\Resource())->collection() );