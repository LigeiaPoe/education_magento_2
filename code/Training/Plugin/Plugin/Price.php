<?php

namespace Training\Plugin\Plugin;

class Price extends \Magento\Catalog\Model\Product
{


    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        return round($result);
    }


}