<?php
namespace App\Http\Controllers;
use Theme;
class HomeController extends Controller {
    public function getIndex()
    {
        $theme = Theme::uses('default')->layout('default');
        $view = array('name' => 'Teepluss');
        return $theme->of('welcome', $view)->render();
    }

    public function add(){
        $theme = Theme::uses('default')->layout('default');
        $view = array('name' => 'Teepluss');
        return $theme->of('add', $view)->render();
    }

    public function portfolio(){
        $theme = Theme::uses('default')->layout('default');
        $view = array('name' => 'Teepluss');
        return $theme->of('portfolio', $view)->render();
    }

}
