<?php

namespace ZnExample\ComposerPackage\Symfony4\Api\Controllers;

use ZnLib\Rest\Base\BaseCrudApiController;
use ZnExample\ComposerPackage\Domain\Interfaces\Services\BookServiceInterface;

class BookController extends BaseCrudApiController
{

    public function __construct(BookServiceInterface $bookService)
    {
        $this->service = $bookService;
    }

}
