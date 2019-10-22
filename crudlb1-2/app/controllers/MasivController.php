<?php
require_once 'app/models/Masiv.php';
require_once 'app/views/View.php';

class MasivController
{
    public function actionIndex (){
        $masiv = new Masiv();
        return View::render( "masiv/show_all",$masiv->show() );

    }
    public function actionShowOne (){
        $masiv = new Masiv();
        return View::render( "masiv/show_all", $masiv->show() );
    }
    public function actionAddMenu (){
        $masiv = new Masiv();
        return View::render( "masiv/addMenu", null);
    }
    public function actionAdd (){
        $masiv = new Masiv();
        return View::render( "masiv/addMenu", $masiv->add());
    }
    public function actionDeleteMenu (){
        $masiv = new Masiv();
        return View::render( "masiv/deletMenu", null);
    }
    public function actionDelete (){
        $masiv = new Masiv();
        return View::render( "masiv/deletMenu", $masiv->del());
    }
    
}
