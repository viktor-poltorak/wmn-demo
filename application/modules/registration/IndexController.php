<?php

class Registration_IndexController extends Eve_Controller_Action
{

    public function init()
    {
        parent::init();
    }

    public function indexAction()
    {
        $this->_display('registration/index.tpl');
    }

    public function individualAction()
    {
        $this->_display('registration/registerForm.tpl');
    }

    public function companyAction()
    {
        $form = $this->_getRegisterForm();
        $this->_assign('form', $form);
        $this->_display('registration/registerForm.tpl');
    }

    public function saveAction()
    {
        var_dump($this->_request->getParams());
    }

    /**
     *
     * @return \Zend_Form 
     */
    protected function _getRegisterForm()
    {
        $form = new Zend_Form();
        $form->setMethod('post');

        $userType = new Zend_Form_Element_Select('userType');
        $userType->addMultiOption(1, 'Физическое лицо')
                ->addMultiOption(2, 'Юридическое лицо и ИП')
                ->setLabel('Тип пользователя:');
        $form->addElement($userType);

        $login = new Zend_Form_Element_Text('login');
        $login->setLabel('Логин:');
        $login->addValidators(
                array(
                    array('NotEmpty', true),
                    array('alnum')
                )
        );
        $form->addElement($login);

        $email = new Zend_Form_Element_Text('email');
        $email->setLabel('E-mail:');
        $email->addValidators(
                array(
                    array('NotEmpty', true),
                    array('email')
                )
        );
        $form->addElement($email);

        

        $form->setView(new Zend_View());
        return $form;
    }

}