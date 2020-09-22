<?php

namespace ZnExample\ComposerPackage\Yii2\Api\controllers;

use ZnExample\ComposerPackage\Domain\Enums\ExampleBookPermissionEnum;
use ZnExample\ComposerPackage\Domain\Interfaces\Services\BookServiceInterface;
use ZnLib\Rest\Yii2\Base\BaseCrudController;
use yii\base\Module;

class BookController extends BaseCrudController
{

    public function __construct(
        string $id,
        Module $module,
        array $config = [],
        BookServiceInterface $bookService
    )
    {
        parent::__construct($id, $module, $config);
        $this->service = $bookService;
    }

    public function access(): array
    {
        return [
            [
                [ExampleBookPermissionEnum::WRITE], ['create', 'update', 'delete']
            ],
        ];
    }

    public function authentication(): array
    {
        return [
            'create',
            'update',
            'delete',
        ];
    }

}
