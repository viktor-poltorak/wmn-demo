<?php

class IndexController extends Eve_Controller_Action
{
    /**
     *
     * @var integer
     */
    protected $_perPage = 6;
    protected $_dir_images = 'images/products/';

    public function init()
    {
        parent::init();
    }

    public function indexAction()
    {
        $this->_assign('indexPage', 1);
        $this->_assign('tab', 'index');

        $settings = new Eve_Settings();
        $this->_assign('globalTitle', $settings->siteName);
        
        $this->_display('default/index.tpl');
    }

}