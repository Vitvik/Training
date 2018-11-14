<?php

namespace Training\Test\App;

class FrontController extends \Magento\Framework\App\FrontController
{
    protected $_routerList;
    protected $response;
    private  $logger;

    public function __construct(
        \Magento\Framework\App\RouterList $routerList,
        \Magento\Framework\App\Response\Http $response,
        \Psr\Log\LoggerInterface $logger
    )
    {
        $this->_routerList = $routerList;
        $this-> response = $response;
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