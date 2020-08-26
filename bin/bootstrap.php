<?php

use Symfony\Component\Console\Application;
use PhpLab\Eloquent\Db\Helpers\Manager;
use PhpLab\Sandbox\Example\Symfony\Console\Commands\BookCommand;
use PhpLab\Sandbox\Example\Domain\Services\BookService;
use PhpLab\Sandbox\Example\Domain\Repositories\Eloquent\BookRepository;

/**
 * @var Application $application
 */

$eloquentConfigFile = $_ENV['ELOQUENT_CONFIG_FILE'];
$capsule = new Manager(null, $eloquentConfigFile);

$bookRepository = BookRepository($capsule);
$bookService = BookService($bookRepository);
$bookCommand = new BookCommand(BookCommand::getDefaultName(), $bookService);
$application->add($bookCommand);
