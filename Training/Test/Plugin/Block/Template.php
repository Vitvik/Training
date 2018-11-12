<?php
namespace Training\Test\Plugin\Block;

class Template
{
    public function afterToHtml(
        \Magento\Framework\View\Element\Template $subject,
        $result
    ){
        return $result = '<div><p>'. $subject->getTemplate() . '</p>'.'<p>' . get_class($subject) . '</p>' . $result .'</div>>';
    }
}