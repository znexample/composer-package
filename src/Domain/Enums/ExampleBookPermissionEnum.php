<?php

namespace PhpLab\Sandbox\Example\Domain\Enums;

use PhpLab\Core\Domain\Base\BaseEnum;

class ExampleBookPermissionEnum extends BaseEnum
{

    const WRITE = 'oExampleBookWrite';
    const READ = 'oExampleBookRead';

    public static function getLabels()
    {
        return [
            self::WRITE => I18Next::t('example', 'book.permissions.write'),
            self::READ => I18Next::t('example', 'book.permissions.read'),
        ];
    }

}
