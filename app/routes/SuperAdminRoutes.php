<?php

// SuperAdminRoutes
$router->map('POST', '/superadmin', 'app/controllers/SuperAdminController@create');
$router->map('GET', '/superadmin', 'app/controllers/SuperAdminController@show');
$router->map('PUT', '/superadmin', 'app/controllers/SuperAdminController@update');
$router->map('DELETE', '/superadmin', 'app/controllers/SuperAdminController@delete');
