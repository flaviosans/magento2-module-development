<?php

use Magento\Framework\Component\ComponentRegistrar;

$registrar = new ComponentRegistrar();
ComponentRegistrar::register(ComponentRegistrar::MODULE, 'Magenteiro_InventoryUpdate', __DIR__);
