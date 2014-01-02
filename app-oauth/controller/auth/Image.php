<?php
require_class("Controller");
require_class("authImage");
class Auth_ImageController extends Controller{
    public function handle_request(){
        $authImage=new authImage();
        $authImage->getEchoImage();
        exit();
    }
} 