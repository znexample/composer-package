<?php

namespace ZnExample\ComposerPackage\Domain\Enums;

use ZnCore\Domain\Base\BaseEnum;

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
