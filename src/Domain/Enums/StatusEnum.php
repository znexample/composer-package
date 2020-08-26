<?php

namespace PhpLab\Sandbox\Example\Domain\Enums;

use PhpLab\Core\Domain\Base\BaseEnum;
use PhpLab\Core\Libs\I18Next\Facades\I18Next;

class StatusEnum extends BaseEnum
{

    const DELETED = -10;
    const DISABLE = 0;
    const REJECTED = 10;
    const BLOCKED = 20;
    const WAIT_APPROVING = 90;
    const ENABLE = 100;

    public static function getLabels()
    {
        return [
            self::DELETED => I18Next::t('example', 'book.statuses.deleted'),
            self::DISABLE => I18Next::t('example', 'book.statuses.disable'),
            self::REJECTED => I18Next::t('example', 'book.statuses.rejected'),
            self::BLOCKED => I18Next::t('example', 'book.statuses.blocked'),
            self::WAIT_APPROVING => I18Next::t('example', 'book.statuses.wait_approving'),
            self::ENABLE => I18Next::t('example', 'book.statuses.enable'),
        ];
    }

}
