<?php
// controllers/HomeController.php

require_once __DIR__ . '/../models/ContentModel.php';

class HomeController
{
    protected $contentModel;

    public function __construct()
    {
        $this->contentModel = new ContentModel();
    }

    /**
     * Render the homepage (featured + related blocks)
     */
    public function index()
    {
        $featured     = $this->contentModel->getFeatured();
        $related      = $this->contentModel->getRelatedItems();
        include __DIR__ . '/../views/layout.php';
    }
}
