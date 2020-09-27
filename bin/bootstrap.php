<?php

use Symfony\Component\Console\Application;
use ZnLib\Db\Capsule\Manager;
use ZnExample\ComposerPackage\Symfony4\Console\Commands\BookCommand;
use ZnExample\ComposerPackage\Domain\Services\BookService;
use ZnExample\ComposerPackage\Domain\Repositories\Eloquent\BookRepository;

/**
 * @var Application $application
 */

$eloquentConfigFile = $_ENV['ELOQUENT_CONFIG_FILE'];
$capsule = new Manager(null, $eloquentConfigFile);

$bookRepository = BookRepository($capsule);
$bookService = BookService($bookRepository);
$bookCommand = new BookCommand(BookCommand::getDefaultName(), $bookService);
$application->add($bookCommand);
