<?php

namespace ZnExample\ComposerPackage\Domain\Services;

use ZnCore\Base\Domain\Base\BaseCrudService;
use ZnExample\ComposerPackage\Domain\Interfaces\Repositories\BookRepositoryInterface;
use ZnExample\ComposerPackage\Domain\Interfaces\Services\BookServiceInterface;

class BookService extends BaseCrudService implements BookServiceInterface
{

    public function __construct(BookRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

}
