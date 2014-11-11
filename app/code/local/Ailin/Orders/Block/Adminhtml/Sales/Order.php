<?php

class Ailin_Orders_Block_Adminhtml_Sales_Order extends
Mage_Adminhtml_Block_Widget_Grid_Container
{
    public  function __construct()
    {
        $this-> _blockGroup = 'ailin_orders';
        $this-> _controller = 'adminhtml_sales_order';
        $this-> _headerText = Mage::helper('ailin_orders')->__('Ailin-Orders');

        parent::__construct();
        $this->_removeButton('add');
    }
}