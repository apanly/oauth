<?php
require_class("Controller");
require_class("dcookie");
require_class("uri");
class Home_ForgotController extends Controller{
    public function handle_request(){
        $cookierefer=dcookie::dgetcookie("loginreferer");
        $cookiloginoauth=dcookie::dgetcookie("loginoauth");
        if($cookiloginoauth){
            $seckey=dcookie::dgetcookie("seckey");
            $saltkey=dcookie::dgetcookie("saltkey");
            $saltprekey=Dispatcher::getInstance()->get_config("saltprekey","oauth");
            $saltkey=$saltprekey.$saltkey;
            list($username,$uid)=explode("|",$cookiloginoauth);
            $tmpseckey=md5(serialize($username.$uid.$saltkey));
            $response=Dispatcher::getInstance()->get_response();
            if($seckey==$tmpseckey){
                dcookie::dsetcookie("loginreferer",'',-86400);
                if($cookierefer){
                    $response->redirect($cookierefer);
                }else{
                    $response->redirect(uri::englishComUri());
                }
            }else{
                dcookie::dsetcookie("loginoauth",'',-86400,true);
                dcookie::dsetcookie("seckey",'',-86400,true);
            }
        }
        $request=Dispatcher::getInstance()->get_request();
        $params=$request->get_parameters();
        if(isset($params['errormsg'])){
            $request->set_attribute("errormsg",$params['errormsg']);
        }
        return "Home_Forgot";
    }
} 