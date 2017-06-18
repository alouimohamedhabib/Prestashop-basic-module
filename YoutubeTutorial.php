<?php

/**
 * Class youtube.php
 */
if (!defined('_PS_VERSION_'))
    exit;

class YoutubeTutorial extends Module
{

    public function __construct()
    {
        $this->name = 'YoutubeTutorial';
        $this->tab = 'front_office_features';
        $this->version = '1';
        $this->author = 'Aloui Mohamed Habib';

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('Youtube Prestashop module');
        $this->description = $this->l('Displays a simple message in the header.');
        $this->ps_versions_compliancy = array('min' => '1.4', 'max' => '1.6.99.99');
    }

    public function install()
    {

        if (!parent::install() || !$this->registerHook('displayHeader') || !$this->registerHook('displaybanner'))
            return false;
        return true;
    }

    public function uninstall()
    {
        return parent::uninstall();
    }


    public function hookDisplayBanner()
    {

        $this->context->smarty->assign(array(
            "Message" => "This is a message",
            "description" =>
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Culpa distinctio dolores earum eum excepturi, natus, nisi perspiciatis quae quas quo saepe tenetur voluptas. Doloribus dolorum, porro qui                   suscipit veniam voluptatum?"
        ));

            return $this->display(__FILE__ , "views/banner.tpl");
    }


}