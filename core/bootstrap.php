<?php

$app = [];

$app['config'] = require 'config.php';

require 'core/Rota.php';
require 'core/Request.php';
require 'core/database/coneccao.php';
require 'core/database/contrutorBusca.php';


$app['database'] = new ConstrutorBusca(
    Coneccao::make($app['config']['database'])
);