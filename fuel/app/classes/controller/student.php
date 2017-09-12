<?php

class Controller_Student extends Controller_Template {

    public function before() {
        $data['title'] = Constant::WEB_NAME;
        $this->template  = View::forge('main/template', $data);
        $this->template->header = View::forge('header');
        $this->template->footer = View::forge('footer');

    }
    
    public function action_index() {
        $auth = Auth::instance();
        $error = null;

        if (Input::method() == 'POST') {

            if ($auth->login(Input::param('username'), Input::param('password'))) {
                Response::redirect('student/dashboard');
            } else {
                $error = "Failed to log in";
            }
        }

        $view = View::forge('student/index');
        $view->set('error', $error);

        $this->template->content = $view;

    }
    
    public function action_dashboard() {
        $this->template->header = View::forge('logout_header');
        $this->template->content = View::forge('student/dashboard');
    }

    public function action_course() {
        $this->template->header = View::forge('logout_header');
        $this->template->content = View::forge('student/course');
    }

    public function action_contact() {
        $this->template->header = View::forge('logout_header');
        $this->template->content = View::forge('student/contact');
    }

    public function action_setting() {
        $this->template->header = View::forge('logout_header');
        $this->template->content = View::forge('student/setting');
    }

    public function action_create() {
        $this->template->header = View::forge('logout_header');
        $this->template->content = View::forge('student/create');
    }

    public function post_course() {
        $post_data = Input::post('value');

        if (empty($post_data) ) {
            return "No result...";
        }

        $query = 'select course_name from course where course_id like "%' . $post_data . '%";';
        $result = DB::query($query)->as_object('Model_Course')->execute();

        if ($result->count() >0 ) {
            return $result[0]['course_name'];
        } else {
            return "No result...";
        }


    }

}