<?php
// models/ContentModel.php

class ContentModel
{
    protected $data;

    public function __construct()
    {
        //$json = file_get_contents(__DIR__ . '/../content/data.json');
        //$this->data = json_decode($json, true);
    }

    public function getFeatured()
    {
        return $this->data['featured'] ?? [];
    }

    public function getRelatedItems()
    {
        return $this->data['related'] ?? [];
    }
}
