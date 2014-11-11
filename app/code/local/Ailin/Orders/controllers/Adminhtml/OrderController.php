<?php

class Ailin_Orders_Adminhtml_OrderController extends
Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_title($this->__('Sales'))->_title($this->__('Ailin Orders'));
        $this->loadLayout();
        $this->_setActiveMenu('sales/sales');
        $this->_addContent($this->getLayout()->createBlock('ailin_orders/adminhtml_sales_order'));
        $this->renderLayout();
    }

    public  function gridAction()
    {
        $this->loadLayout();
        $this->getResponse()->setBody(
            $this->getLayout()->createBlock('ailin_orders/adminhtml_sales_order_grid')->toHtml()
        );
    }
    public function exportAilinCsvAction()
    {
        $fileName = 'orders_ailin.csv';
        $grid = $this->getLayout()->createBlock('ailin_orders/adminhtml_sales_order_grid');
        $this->_prepareDownloadResponse($fileName, $grid->getCsvFile());
    }

    public function exportAilinExcelAction()
    {
        $fileName = 'orders_ailin.xml';
        $grid = $this->getLayout()->createBlock('ailin_orders/adminhtml_sales_order_grid');
        $this->_prepareDownloadResponse($fileName, $grid->getExcelFile($fileName));
    }


}