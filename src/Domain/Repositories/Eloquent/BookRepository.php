<?php

namespace ZnExample\ComposerPackage\Domain\Repositories\Eloquent;

use ZnCore\Db\Db\Base\BaseEloquentCrudRepository;
use ZnExample\ComposerPackage\Domain\Entities\BookEntity;
use ZnExample\ComposerPackage\Domain\Interfaces\Repositories\BookRepositoryInterface;

class BookRepository extends BaseEloquentCrudRepository implements BookRepositoryInterface
{

    protected $tableName = 'example_book';

    public function getEntityClass(): string
    {
        return BookEntity::class;
    }

}
