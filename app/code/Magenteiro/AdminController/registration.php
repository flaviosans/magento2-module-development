<?php

use Magento\Framework\Component\ComponentRegistrar;

$registrar = new ComponentRegistrar();
ComponentRegistrar::register(ComponentRegistrar::MODULE, 'Magenteiro_AdminController', __DIR__);
