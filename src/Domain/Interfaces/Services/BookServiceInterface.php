<?php

namespace ZnExample\ComposerPackage\Domain\Interfaces\Services;

use ZnCore\Base\Domain\Interfaces\Service\CrudServiceInterface;

/**
 * Интерфейс репозитория гарантирует поддержку контракта для клиетского кода.
 * Так же, дает возможность подменить класс сервиса, не трогая клиентский код.
 */
interface BookServiceInterface extends CrudServiceInterface
{

}
