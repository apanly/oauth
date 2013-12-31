<?php
require_class("Controller");
class Home_RegController extends Controller{
    public function handle_request(){
        $request=Dispatcher::getInstance()->get_request();
        $params=$request->get_parameters();
        if(isset($params['errormsg'])){
            $request->set_attribute("errormsg",$params['errormsg']);
        }
        return "Home_Reg";
    }
} 