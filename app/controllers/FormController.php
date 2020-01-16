
<?php
use Phalcon\Mvc\Controller;

/**
 * undocumented class
 */

class FormController extends Controller
{
    public function indexAction()
    {
        $messages = $this->request->getPost();

        echo $messages;

        //     if (!$form->isValid($_POST)) {
        //     $messages = $form->getMessages();

        //     foreach ($messages as $message) {
        //         echo $message, '<br>';
        //     }
        // }
    }
}

