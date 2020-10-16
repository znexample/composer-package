<?php

use Symfony\Component\Console\Application;
use ZnLib\Db\Capsule\Manager;
use ZnExample\ComposerPackage\Symfony4\Console\Commands\BookCommand;
use ZnExample\ComposerPackage\Domain\Services\BookService;
use ZnExample\ComposerPackage\Domain\Repositories\Eloquent\BookRepository;
use Illuminate\Container\Container;
use ZnLib\Console\Symfony4\Helpers\CommandHelper;

/**
 * @var Application $application
 * @var Container $container
 */

CommandHelper::registerFromNamespaceList([
    'ZnExample\ComposerPackage\Symfony4\Console\Commands',
], $container);
