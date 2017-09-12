<?php

class Controller_Main extends Controller_Template {

    public function before() {
        $data['title'] = Constant::WEB_NAME;
        $this->template  = View::forge('main/template', $data);
        $this->template->header = View::forge('header');
        $this->template->footer = View::forge('footer');
    }
    
    // First Welcome Page
    public function action_index() {
        $this->template->content = View::forge('main/content/index');
    }
    
    public function action_register() {
        if (Input::method() == 'POST') {
            try {
                $created = \Auth::create_user(Input::param('username'), Input::param('password'), Input::param('email'));

                // ユーザーが正常に作成された場合
                if ($created)
                {
                    // ユーザに通知
//                    \Messages::success(__('login.new-account-created'));

                    // そして、前のページか、前のページがない場合は
                    // アプリケーションのダッシュボードを表示
                    Response::redirect('student/index');
                }
                else
                {
                    // おっと、新しいユーザーの作成に失敗しました？
//                    \Messages::error(__('login.account-creation-failed'));
                    echo "failed to log in";
                }

            } catch (\SimpleUserUpdateException $e) {
                // メールアドレスが重複
                if ($e->getCode() == 2)
                {
//                    \Messages::error(__('login.email-already-exists'));
                    echo "Email address already exists";
                }

                // ユーザー名が重複
                elseif ($e->getCode() == 3)
                {
//                    \Messages::error(__('login.username-already-exists'));
                    echo "username already exists";
                }

                // これは起こり得ないが、ずっとそうとは限らない...
                else
                {
                    echo $e->getMessage();
//                    \Messages::error($e->getMessage());
                }
            }
        }

        $this->template->content = View::forge('main/content/register');
    }
    
    public function action_error() {
        echo "Not found page";
    }
}
