<?php
/**
 * CustomException
 *
 * Used to display CustomException in error.html.twig template
 *
 * @package      Bt
 * @subpackage   Bundle/CustomMessageExceptionBundle
 * @category     Exception
 * @author       B Thomas <bernarthomas@free.fr>
 * @version      master
 * @licence      MIT license
 */
namespace Bt\Bundle\CustomMessageExceptionBundle\Exception;

    use \Exception;

    /**
     * Class CustomException
     * @package Bt\Bundle\CustomMessageExceptionBundle\Exception
     */
    class CustomException extends \Exception
    {
        /**
         * @var int 1 by default for CustomException
         */
        private $id;

        /**
         * CustomException constructor.
         *
         * @param null $message
         * @param int $code
         * @param Exception|null $previous
         */
        public function __construct($message = null, $code = 0, Exception $previous = null)
        {
            parent::__construct($message, $code,  $previous);
            $this->id = 1;
        }

        /**
         * Getter for id
         *
         * @return int
         */
        public function getid()
        {
            return $this->id;
        }
    }