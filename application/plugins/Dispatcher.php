<?php

class Dispatcher extends Zend_Controller_Plugin_Abstract
{

    /**
     * @var Zend_Cache_Core
     */
    protected $_cache;

    public function routeStartup(Zend_Controller_Request_Http $request)
    {
        $templater = Zend_Registry::get('templater');

        /** Assign global settings * */
        $settings = new Eve_Settings();
        $templater->assign('settings', $settings);
        $templater->assign('server', (object) $_SERVER);

        $menus = new Menus();
        $items = $menus->loadItemset(1);
        $templater->assign('requestUri', $this->_request->getRequestUri());
        foreach ($items as &$item) {
            if ($item->link == $this->_request->getRequestUri()) {
                $item->selected = true;
            } elseif (!empty($item->link) && strpos($this->_request->getRequestUri(), $item->link) === 0 && $item->link != '/') {
                $item->selected = true;
            }
        }

        $templater->assign('mainMenu', $items);
        //Set up title
        $globalTitle = $settings->commonTitle;
        $globalTitle = str_replace('{siteName}', $settings->siteName, $globalTitle);

        //Setup seo data
        $templater->assign('additionMetaTags', $settings->additionMetaTags);

        $meta = array();
        $metaModel = new Meta();
        $metaObject = new stdClass();
        $metaObject->name = 'description';
        $metaObject->content = $settings->metaDescription;
        $meta['description'] = $metaObject;

        $metaObject = new stdClass();
        $metaObject->name = 'keywords';
        $metaObject->content = $settings->metaKeywords;
        $meta['keywords'] = $metaObject;

        $customMeta = (array) $metaModel->getMetaByLink($request->getRequestUri());

        foreach ($customMeta as $v) {
            $metaObject = new stdClass();
            $metaObject->name = $v->name;
            $metaObject->content = $v->content;
            $meta[$v->name] = $metaObject;
        }

        $templater->assign('globalTitle', $globalTitle);
        $templater->assign('siteMeta', $meta);
    }

    public function preDispatch(Zend_Controller_Request_Abstract $request)
    {
        
    }

    public function postDispatch(Zend_Controller_Request_Abstract $request)
    {
        parent::postDispatch($request);
    }

}