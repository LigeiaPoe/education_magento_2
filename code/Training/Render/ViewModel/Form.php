<?php

namespace Training\Render\ViewModel;

class Form
{
    private $urlBuilder;

    public function __construct(
        \Magento\Framework\UrlInterface $urlBuilder
    )
    {
        $this->urlBuilder = $urlBuilder;
    }

    public function getSubmitUrl()
    {
        return $this->urlBuilder->getUrl('customer/account/login');
    }

}