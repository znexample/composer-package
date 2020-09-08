<?php

namespace ZnExample\ComposerPackage\Domain\Interfaces\Repositories;

use ZnCore\Base\Domain\Interfaces\Repository\CrudRepositoryInterface;

/**
 * Интерфейс репозитория гарантирует поддержку контракта независимо от драйвера.
 */
interface BookRepositoryInterface extends CrudRepositoryInterface
{

}
