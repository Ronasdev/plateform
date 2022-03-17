<?php

namespace Controllers;
use Framework\Controller ;

 class ArticleController extends Controller {
    public $model = "article";
    public $action = "index";

    public function __construct()
    {
        
    }

    public function index()
    {
        
        echo "Je suis index de article";
    }
    public function show($id)
    {
        $id = $id[0];
        echo "J'affiche un article n° $id";
    }
    public function update($id)
    {
        $id = $id[0];
       echo "Je met à jour de $id";
    }
    public function delete($id)
    {
        $id = $id[0];
        echo "Je supprime l'article $id";
    }
}