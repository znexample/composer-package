<?php

namespace ZnExample\ComposerPackage\Symfony4\Admin\Controllers;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use ZnExample\ComposerPackage\Domain\Interfaces\Services\BookServiceInterface;

class BookController extends AbstractController
{

    private $service;

    public function __construct(BookServiceInterface $bookService)
    {
        $this->service = $bookService;
    }

}