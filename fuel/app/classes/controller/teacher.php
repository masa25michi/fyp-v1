<?php

class Controller_Teacher extends Controller_Template {
    public function before() {
        $data['title'] = Constant::WEB_NAME;
        $this->template  = View::forge('teacher/template', $data);
        $this->template->header = View::forge('teacher/header');
        $this->template->footer = View::forge('teacher/footer');
    }
    
    public function action_index() {
        $this->template->content = View::forge('teacher/dashboard');
    }
    
}