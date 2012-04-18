<?php

class Companies_IndexController extends Eve_Controller_Action
{
    /**
     *
     * @var integer
     */
    protected $_perPage = 10;
    protected $_dir_images = 'images/companies/';

    public function init()
    {
        parent::init();
        $this->_assign('js', array(
            'jqueryTreeview'
        ));
        $this->_assign('css', array(
            'jqueryTreeview'
        ));
    }

    public function indexAction()
    {        
        $this->_display('companies/index.tpl');
    }

}