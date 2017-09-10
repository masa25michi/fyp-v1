<?php

class Controller_Student extends Controller_Template {

    public function before() {
        $data['title'] = Constant::WEB_NAME;
        $this->template  = View::forge('main/template', $data);
    }
    
    public function action_index() {
        $auth = Auth::instance();
        $error = null;

        if (Input::method() == 'POST') {

            if ($auth->login(Input::param('username'), Input::param('password'))) {
                Response::redirect('student/success');
            } else {
                $error = "Failed to log in";
            }
        }
        
        $view = View::forge('student/index');
        $view->set('error', $error);

        $this->template->content = $view;

    }
    
    public function action_success() {
        $this->template->content = View::forge('student/success');
    }
    
    
}