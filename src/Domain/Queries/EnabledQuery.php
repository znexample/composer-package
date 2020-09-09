<?php

namespace ZnExample\ComposerPackage\Domain\Queries;

use ZnCore\Domain\Libs\Query;
use ZnExample\ComposerPackage\Domain\Enums\StatusEnum;

class EnabledQuery extends Query
{

    public function __construct()
    {
        $this->where('status', StatusEnum::ENABLE);
    }

}
