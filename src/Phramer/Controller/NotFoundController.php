<?php
/**
 * Created by Daniel Lowhorn <daniel@ltwproductions.com>
 * User: daniel
 * Date: 10/23/19
 * Time: 2:13 PM
 */

namespace Phramer\Controller;

use Phramer\Interfaces\ControllerInterface;
use Phramer\Interfaces\ExceptionReportingInterface;
use Symfony\Component\HttpFoundation\Request;

class NotFoundController extends AbstractController implements ControllerInterface, ExceptionReportingInterface {

    /** @var \Exception|null */
    protected $exception;

    public function handleRequest(Request $request)
    {
        if ($this->exception == null) {
            $this->exception = new \Exception('Unknown error!');
        }

        $this->exception($this->exception);
    }

//    public function exception(\Exception $e)
//    {
//        echo '<p style="font-weight:bold;">Ran into a problem here</p> <br /><pre>';
//        print_r($e);
//        echo '</pre>';
//    }

}