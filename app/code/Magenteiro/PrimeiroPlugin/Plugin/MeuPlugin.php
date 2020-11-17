<?php

namespace Magenteiro\PrimeiroPlugin\Plugin;

use Magenteiro\PrimeiroModulo\Console\Command\TestCommand;

class MeuPlugin
{
    public function beforeFormatText(TestCommand $command, $prefix, $suffix)
    {
        $prefix = 'UOU';
        $suffix = 'UOU';

        return [$prefix, $suffix];
    }
}
