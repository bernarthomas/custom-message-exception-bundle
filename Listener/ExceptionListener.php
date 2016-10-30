<?php
/**
 * CustomMessageException ExceptionListener
 *
 * Listen to CustomMessageException
 *
 * @package      Bt
 * @subpackage   Bundle/CustomMessageExceptionBundle
 * @category     Listener
 * @author       B Thomas <bernarthomas@free.fr>
 * @version      master
 * @licence      MIT license
 */

namespace Bt\Bundle\CustomMessageExceptionBundle\Listener;

use Symfony\Bundle\TwigBundle\TwigEngine;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\Kernel;

/**
 * Class ExceptionListener
 * @package Bt\Bundle\CustomMessageExceptionBundle\Listener
 */
class ExceptionListener
{
    /**
     * @var TwigEngine template Engine
     */
    protected $templating;

    /**
     * @var Kernel Application Kernel
     */
    private $kernel;

    /**
     * ExceptionListener constructor.
     *
     * @param TwigEngine $templating
     * @param Kernel $kernel
     */
    public function __construct(TwigEngine $templating, Kernel $kernel)
    {
        // assign value(s)
        $this->kernel = $kernel;
        $this->templating = $templating;
    }

    /**
     * Pass the CustomException instead of regular FlatException to template
     *
     * @param GetResponseForExceptionEvent $event
     */
    public function onKernelException(GetResponseForExceptionEvent $event)
    {

        if ('dev' !== $this->kernel->getEnvironment()) {
            $exception = $event->getException();
            $code = 500;
            $message = $this->templating->render('CustomMessageExceptionBundle:Exception:error.html.twig',
                array(
                    'status_code' => $code,
                    'status_text' => Response::$statusTexts[$code],
                    'exception' => $exception,
                    'logger' => null,
                    'currentContent' => '',
                ));
            $response = new Response($message, $code);
            $event->setResponse($response);
        }
    }
}