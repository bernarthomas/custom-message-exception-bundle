CustomMessageExceptionBundle
=============

The `CustomMessageExceptionBundle` provides integration of a CustomException that render the exception message in error html template. 

License
=======

This bundle is released under the [MIT license](LICENSE)

Installation
============

Step 1: Download the Bundle
---------------------------
Set "minimum-stability": "dev-master" in the composer.lock file of your project.

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require bernarthomas/custom-message-exception-bundle
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2 : Enable the Bundle
-------------------------

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new Bt\Bundle\CustomMessageExceptionBundle\CustomMessageExceptionBundle(),
        );

        // ...
    }

    // ...
}
```


Usage
============

Throw a CustomException with message somwhere in your application. In case of exception is thrown, you can see the error
 page containing the exception message.
 
For example in a controller action, you can write in src/AppBundle/Controller/DefaultController.php:
```php
<?php

namespace AppBundle\Controller;

use Bt\Bundle\CustomMessageExceptionBundle\Exception\CustomException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * Default indexAction that throws a custom exception
     * 
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        throw new CustomException('My custom message');

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}
```
Then render the page matching the controller action. 
```console
$ cd my_project_name/
$ php bin/console server:run
```
In your browser : [http://localhost:8000/app.php](http://localhost:8000/app.php) or [http://localhost:8000/app_dev.php](http://localhost:8000/app_dev.php)

If you use app_dev.php, you see the debug exception page with CustomException message.
If you use app.php, you see the default error page with CustomException message.