<?php
require_page("Home_Base");
class Home_ForgotView extends Home_BaseView
{
    public function get_view()
    {
        $req=Dispatcher::getInstance()->get_request();
        $datas=$req->get_attributes();
        foreach($datas as $key=>$data){
            $this->assign_data($key,$data);
        }
        return "Forgot";
    }
} 