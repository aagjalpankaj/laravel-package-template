<?php

declare(strict_types=1);

arch('naming > commands')
    ->expect('Aagjalpankaj\LaravelPackageTemplate\Commands')
    ->toHaveSuffix('Command');

arch('naming > formatters')
    ->expect('Aagjalpankaj\LaravelPackageTemplate\Formatters')
    ->toHaveSuffix('Formatter');

arch('naming > middlewares')
    ->expect('Aagjalpankaj\LaravelPackageTemplate\Middlewares')
    ->toHaveSuffix('Middleware');

arch('naming > processors')
    ->expect('Aagjalpankaj\LaravelPackageTemplate\Processors')
    ->toHaveSuffix('Processor');

arch('naming > validators')
    ->expect('Aagjalpankaj\LaravelPackageTemplate\Validators')
    ->toHaveSuffix('Validator');

arch('implements > validators')
    ->expect('Aagjalpankaj\LaravelPackageTemplate\Formatters')
    ->toImplement('Monolog\Formatter\FormatterInterface');
