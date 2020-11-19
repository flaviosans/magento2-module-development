<?php

use Magento\Framework\Component\ComponentRegistrar;

$registrar = new ComponentRegistrar();
ComponentRegistrar::register(ComponentRegistrar::MODULE, 'Magenteiro_JavaScript', __DIR__);
