<?php
require_class("Controller");
require_class("dcookie");
require_class("uri");
require_class("Bll_User");
class Home_LogOutController extends Controller{
    public function handle_request(){
        $request=Dispatcher::getInstance()->get_request();
        $response=Dispatcher::getInstance()->get_response();
        dcookie::dsetcookie("loginoauth",'',-86400,true);
        dcookie::dsetcookie("seckey",'',-86400,true);
        $params=$request->get_parameters();
        if($params['from']){
            $oauthfrom=$params['from'];
            switch($oauthfrom){
                case "book":
                    $referer=uri::bookUri();
                    break;
                case "english":
                    $referer=uri::englishComUri();
                    break;
                default:
                    $referer=uri::englishComUri();
                    break;
            }
        }else{
            $referer=uri::englishComUri();
        }
        $response->redirect($referer);exit();
    }
} 