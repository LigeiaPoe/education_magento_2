<?php

namespace Training\Plugin\Plugin;

class Copyright extends \Magento\Theme\Block\Html\Footer
{

    public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject, $result)
    {
        return 'Customized copyright!';
    }

}