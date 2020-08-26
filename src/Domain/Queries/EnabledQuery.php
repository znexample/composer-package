<?php

namespace PhpLab\Sandbox\Example\Domain\Queries;

use PhpLab\Core\Domain\Libs\Query;
use PhpLab\Sandbox\Example\Domain\Enums\StatusEnum;

class EnabledQuery extends Query
{

    public function __construct()
    {
        $this->where('status', StatusEnum::ENABLE);
    }

}
