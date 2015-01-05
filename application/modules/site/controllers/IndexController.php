<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexController
 *
 * @author Eli Alejandro
 */
class Site_IndexController extends Zend_Controller_Action
{
    public function indexAction()
    {
        
    }
    
    public function ajaxUploadAction()
    {
        $this->view->layout()->disableLayout();
        $upload_handler = new Site_Service_UploadHandler(array(
            'upload_dir' => realpath(APPLICATION_PATH . '/../public/uploads/personal') . '/',
            'upload_url' => $this->view->baseUrl() . '/uploads/personal/',
            'param_name' => 'foto',
            'image_versions' => array(
                'thumbnail'  => array(
                    'max_width' => 200,
                    'max_height' => 180
                ),
            ),
        ));
    }
}
