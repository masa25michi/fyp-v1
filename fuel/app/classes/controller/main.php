<?php

class Controller_Main extends Controller_Template {
    public function before() {
        $data['title'] = Constant::WEB_NAME;
        $this->template  = View::forge('main/template', $data);
    }
    
    // First Welcome Page
    public function action_index() {
        $this->template->content = View::forge('main/content/index');
    }
    
    public function action_login() {
        $this->template->content = View::forge('main/content/login');
    }
    
    public function action_register() {
        $this->template->content = View::forge('main/content/register');
    }
    
    public function action_error() {
        echo "Not found page";
    }
}
