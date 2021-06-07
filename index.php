<?php

$bancoDados = require 'core/bootstrap.php';


require Rota::load('rotas.php')->direct(Request::uri(), Request:: method());