<?php

class Controller_Main extends Controller_Template {
    public function before(){
        $data['title'] = Constant::WEB_NAME;
        $this->template  = View::forge('main/template', $data);
    }
    
    // First Welcome Page
    public function action_index(){
        $data['title'] = Constant::WEB_NAME;
        $this->template->content = View::forge('main/content/index', $data);
    }
    
    public function action_show(){
        
    }
    
    public function action_error(){
        echo "Not found page";
    }
}
