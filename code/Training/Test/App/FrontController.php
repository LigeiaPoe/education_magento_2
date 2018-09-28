<?php

namespace Training\Test\App;

use Magento\Framework\App\RouterListInterface;

class FrontController extends \Magento\Framework\App\FrontController
{
    /**
     * @var \Magento\Framework\App\RouterList
     */
    protected $routerList;
    /**
     * @var \Magento\Framework\App\Response\Http
     */
    protected $response;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;
    /**
     * @param RouterListInterface $routerList
     * @param \Magento\Framework\App\ResponseInterface $response
     * @param \Psr\Log\LoggerInterface $logger
     */

    public function __construct(
        RouterListInterface $routerList,
        \Magento\Framework\App\ResponseInterface $response,
        \Psr\Log\LoggerInterface $logger
    )
    {
        $this->logger = $logger;
        parent::__construct($routerList, $response);
    }

    /**
     * @param \Magento\Framework\App\RequestInterface $request
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request) {
        foreach ($this->routerList as $router) {
            $this->logger->debug(get_class($router));
        }
        return parent::dispatch($request);
    }

}