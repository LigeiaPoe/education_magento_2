<?php

namespace Training\Plugin\Plugin;

class Crumb extends \Magento\Theme\Block\Html\Breadcrumbs
{

    public function beforeAddCrumb(\Magento\Theme\Block\Html\Breadcrumbs $subject, $crumbName, $crumbInfo)
    {
        $crumbInfo['label'] = $crumbName . '(!)';
        return [ $crumbName . '(!)', $crumbInfo];
    }

}