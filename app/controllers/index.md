> By default Phalcon will look for a controller named IndexController. It is the starting point when no controller or action has been added in the request (eg. http://localhost:8000/). An IndexController and its IndexAction should resemble the following example:

> `app/controllers/IndexController.php`

```
<?php

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        $this->view->users = Users::find();
    }
}
```

> NOTE: The controller classes must have the suffix Controller and controller actions must have the suffix Action. If you access the application from your browser, you should see something like this:
