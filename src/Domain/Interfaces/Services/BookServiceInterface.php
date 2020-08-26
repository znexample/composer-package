<?php

namespace PhpLab\Sandbox\Example\Domain\Interfaces\Services;

use PhpLab\Core\Domain\Interfaces\Service\CrudServiceInterface;

/**
 * Интерфейс репозитория гарантирует поддержку контракта для клиетского кода.
 * Так же, дает возможность подменить класс сервиса, не трогая клиентский код.
 */
interface BookServiceInterface extends CrudServiceInterface
{

}
