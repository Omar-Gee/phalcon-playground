<?php

use Phalcon\Mvc\Controller;

/**
 * undocumented class
 */
class IndexController extends Controller
{
    public function indexAction()
    {
        $this->view->users = Users::find();
    }
    public function voltAction()
    {
    }
}
