<?php

namespace PhpLab\Sandbox\Example\Symfony\Web\Controllers;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use PhpLab\Sandbox\Example\Domain\Interfaces\Services\BookServiceInterface;

class BookController extends AbstractController
{

    private $service;

    public function __construct(BookServiceInterface $bookService)
    {
        $this->service = $bookService;
    }

}
