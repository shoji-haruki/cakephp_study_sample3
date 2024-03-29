<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */

    public function initialize()
    {
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'authorize' => ['Controller'],
                'controller' => 'Messages',
                'action' => 'top' ,
                'home'
            ],
            // ログアウト時
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login',
            ]
        ]);
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['login','add','display','myapicustum']);
    }

    public function isAuthorized($user)
    {
    // 管理者はすべての操作にアクセスできます
    if (isset($user['role']) && $user['role'] === 'admin') {
        return true;
    }
    // デフォルトは拒否
    return false;
    }
    // public function beforeFilter() {
    //     // 認証コンポーネントをViewで利用可能にしておく
    //     $this->set('auth',$this->Auth);
    // }

    // public $this->request->session() = array(
    //     'Session',
    //     'Auth' => array(
    //         'loginRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
    //         'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
    //         'authorize' => array('Controller')
    //     )
    // );
    // public function isAuthorized($user) {
    //     if (isset($user['role']) && $user['role'] === 'admin') {
    //         return true;
    //     }

    //     return false;
    // }
    // $this->request->getSession()->read('Auth.User.id')
    // public function initialize()
    // {
    //     parent::initialize();

        // $this->loadComponent('RequestHandler', [
        //     'enableBeforeRedirect' => false,
        // ]);
        // if ($this->request->prefix == 'admin') {
        //     $this->loadComponent('Flash');
        //     // ログイン、ログアウト情報取得
        //     // $user = $this->Auth->user();
        //     // $this->set('user', $user);

        //     $this->loadComponent(
        //         'Auth', [
        //         // ログイン時のリダイレクト先の定義
        //         // コントローラーとアクションを書き換えで設定可能
        //         'loginRedirect' => [
        //             'controller' => 'admin',
        //             'action' => 'top',

        //         ],
        //         // ログアウト時
        //         'logoutRedirect' => [
        //             'controller' => 'admin',
        //             'action' => 'login'
        //         ],
        //         'authenticate' => [
        //             'Form' => [
        //                 'userModel' => 'Users',
        //                 'fields' => [
        //                     'username' => 'username',
        //                     'password' => 'password'
        //                 ]
        //             ]
        //         ],
        //         'authError' => 'ログインできませんでした。ログインしてください。'
        //     ]);
        //     $this->Auth->sessionKey = 'Admin';
        // }


    //     public function initialize()
    //     {
    //         parent::initialize();

    //         $this->loadComponent('RequestHandler', [
    //             'enableBeforeRedirect' => false,
    //         ]);
    //         if ($this->request->prefix == 'admin') {
    //             $this->loadComponent('Flash');
    //             // ログイン、ログアウト情報取得
    //             // $user = $this->Auth->user();
    //             // $this->set('user', $user);

    //             $this->loadComponent(
    //                 'Auth', [
    //                 // ログイン時のリダイレクト先の定義
    //                 // コントローラーとアクションを書き換えで設定可能
    //                 'loginRedirect' => [
    //                     'controller' => 'admin',
    //                     'action' => 'top',

    //                 ],
    //                 // ログアウト時
    //                 'logoutRedirect' => [
    //                     'controller' => 'admin',
    //                     'action' => 'login'
    //                 ],
    //                 'authenticate' => [
    //                     'Form' => [
    //                         'userModel' => 'Users',
    //                         'fields' => [
    //                             'username' => 'username',
    //                             'password' => 'password'
    //                         ]
    //                     ]
    //                 ],
    //                 'authError' => 'ログインできませんでした。ログインしてください。'
    //             ]);
    //             $this->Auth->sessionKey = 'Admin';
    //         } else {
    //             $this->loadComponent('Flash');
    //             // ログイン、ログアウト情報取得
    //             // $user = $this->Auth->user();
    //             // $this->set('user', $user);

    //             $this->loadComponent(
    //                 'Auth', [
    //                 // ログイン時のリダイレクト先の定義
    //                 // コントローラーとアクションを書き換えで設定可能
    //                 'loginRedirect' => [
    //                     'controller' => 'messages',
    //                     'action' => 'top',
    //                     'home'
    //                 ],
    //                 // ログアウト時
    //                 'logoutRedirect' => [
    //                     'controller' => 'Users',
    //                     'action' => 'login'
    //                 ],
    //                 'authenticate' => [
    //                     'Form' => [
    //                         'userModel' => 'Users',
    //                         'fields' => [
    //                             'username' => 'username',
    //                             'password' => 'password'
    //                         ]
    //                     ]
    //                 ],
    //                 'authError' => 'ログインできませんでした。ログインしてください。'
    //             ]);
    //         }

        // 認証例外ページの指定
        // $this->Auth->allow(['login','add','display','myapicustum']);


        // 初期
        // $this->loadComponent('RequestHandler');
        // $this->loadComponent('Flash');

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
}

