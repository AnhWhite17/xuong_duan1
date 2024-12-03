<?php

class CatalogController
{
    private $catalogModel;

    public function __construct()
    {
        $this->catalogModel = new CatalogModel();
    }

    public function showCatalogs()
    {
        $catalogs = $this->catalogModel->getAllCatalogs();
    }

    public function showProductsByCatalog($id_catalog)
    {
        $products = $this->catalogModel->getProductsByCatalog($id_catalog);
    }
}
