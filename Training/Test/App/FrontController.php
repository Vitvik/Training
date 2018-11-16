<?php

namespace Training\Test\App;

use Magento\Framework\App\RouterListInterface;
use Magento\Framework\App\ResponseInterface;

class FrontController extends \Magento\Framework\App\FrontController
{
    protected $_routerList;
    protected $response;
    private  $logger;

    public function __construct(
        RouterListInterface $routerList,
        ResponseInterface $response,
        \Psr\Log\LoggerInterface $logger
    )
    {
        parent::__construct($routerList, $response);
        $this->_routerList = $routerList;
        $this->response = $response;
        $this->logger = $logger;
    }

    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        foreach ($this->_routerList as $router){
            $this->logger->info(get_class($router));
        }
        return parent::dispatch($request);
    }
}