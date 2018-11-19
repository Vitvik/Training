<?php
namespace Training\TestBlock\Controller\Block;


class Index extends \Magento\Framework\App\Action\Action
{
    private $layoutFactory;

    public function __construct(

        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\LayoutFactory $layoutFactory

)   {
        $this->layoutFactory = $layoutFactory;
        parent::__construct($context);
    }

    public function Execute()
    {
       $layout = $this->layoutFactory->create();
       $block =  $layout->createBlock('Training\TestBlock\Block\Test');
       $this->getResponse()->appendBody($block->toHtml());
    }
}