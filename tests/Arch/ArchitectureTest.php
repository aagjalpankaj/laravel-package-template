<?php

declare(strict_types=1);

arch('naming > commands')
    ->expect('Aagjalpankaj\LaravelPackageTemplate\Commands')
    ->toHaveSuffix('Command');

arch('naming > middlewares')
    ->expect('Aagjalpankaj\LaravelPackageTemplate\Middlewares')
    ->toHaveSuffix('Middleware');
