<?php

namespace PhpLab\Sandbox\Example\Domain\Interfaces\Repositories;

use PhpLab\Core\Domain\Interfaces\Repository\CrudRepositoryInterface;

/**
 * Интерфейс репозитория гарантирует поддержку контракта независимо от драйвера.
 */
interface BookRepositoryInterface extends CrudRepositoryInterface
{

}
