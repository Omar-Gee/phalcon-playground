<?php

use Phalcon\Mvc\Controller;

class SignupController extends Controller
{
    public function indexAction()
    {
    }
    public function registerAction()
    {

        $user = new Users();
        $success = $user->save($this->request->getPost(), [
            "name",
            "lastName",
            "email"
        ]);

        if ($success) {
            //TODO: Make redirect to success view; Look into routing maybe?

            echo '<p>Thanks for registering</p>';
        } else {
            echo "Sorry, the following problems were generated: ";

            $messages = $user->getMessages();

            foreach ($messages as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }

        // TODO: ask what this does?
        $this->view->disable();
    }
    public function successAction(){
        echo '<p>Thanks for registering</p>';
    }
}
