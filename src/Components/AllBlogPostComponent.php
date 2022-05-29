<?php

namespace App\Components;

use App\Repository\BlogRepository;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('all_blogpost')]
class AllBlogPostComponent
{
    public int $id;
    
    public function __construct(
        private BlogRepository $blogRepository
    ) {
    }

    public function getAllBlogPost(): array
    {
        return $this->blogRepository->findAll();
    }
}