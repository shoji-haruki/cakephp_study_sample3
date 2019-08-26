<?php
namespace App\Controller;

use App\Controller\AppController;
// クライアント読み込み
use Cake\Http\Client;

/**
 * Messages Controller
 *
 * @property \App\Model\Table\MessagesTable $Messages
 *
 * @method \App\Model\Entity\Message[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MessagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */

    public function isAuthorized($user) {
        if ($this->action === 'index') {
            return true;
        }

        return parent::isAuthorized($user);
    }
    public function index()
    {
        $messages = $this->paginate($this->Messages);

        $this->set(compact('messages'));
    }

    /**
     * View method
     *
     * @param string|null $id Message id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function show($id = null)
    {
        $message = $this->Messages->get($id, [
            'contain' => []
        ]);

        $this->set('message', $message);
    }


    public function useapi(){
    }
    // apiリクエストアクション
    // public function api()
    // {
    //     $http = new Client();
    //     $response = $http->get('https://maps.googleapis.com/maps/api/js?key=AIzaSyAx9ceDdfuZPzme_j7SKVy0stkdpo5Qc44&callback=initMap ');
    //     // var_dump($response);
    //     // $this->set(compact( $response);
    //     // if ($http->isOk) {
    //     //     $json = json_decode($response->body());
    //     // }
    //     // var_dump($json);
    // }
    // public $uses = array('User');


    // 自作APIページ表示
    public function myapi(){
    }
    // 自作api処理
    public function myapicustum()
    {
        echo 'コントローラー通過';
        // 今回はJSONのみを返すためViewのレンダーを無効化
        $this->autoRender = false;
        $result = $this->users->find()->where( username );
        // var_dump($result);
        return json_encode(compact('result'));
    }
         // Ajax以外の通信の場合
        // if(!$this->request->is('ajax')) {
        // throw new BadRequestException();
        // }
        /*  ここでDBアクセスなど何かの処理をする */
        // $result = $this->$message->find('all');
        // $result = $this->$message->find('all');
        // 値が入っているかを確認。
        // 値によっては(bool)でキャストしてしまうのも可

        // var_dump($result);
        // $status = !empty($result);
        // if(!$status) {
        // $error = array(
        //     'message' => 'データがありません',
        //     'code' => 404
        // );
        // }
        // JSON形式で返却。errorが定義されていない場合はstatusとresultの配列になる。

        // $this->autoRender = false;
        // // レスポンスの形式をJSONで指定
        // $this->response->type('application/json');
        // // $http = new Client();
        // $response = $http->get('https://qiita.com/');
        // var_dump($response);
        // if ($http->isOk) {
        //     $json = json_decode($response->body());
        // }
        // var_dump($json);



    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $message = $this->Messages->newEntity();
        if ($this->request->is('post')) {
            $message = $this->Messages->patchEntity($message, $this->request->getData());
            if ($this->Messages->save($message)) {
                $this->Flash->success(__('The message has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The message could not be saved. Please, try again.'));
        }
        $this->set(compact('message'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Message id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $message = $this->Messages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $message = $this->Messages->patchEntity($message, $this->request->getData());
            if ($this->Messages->save($message)) {
                $this->Flash->success(__('The message has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The message could not be saved. Please, try again.'));
        }
        $this->set(compact('message'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Message id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $message = $this->Messages->get($id);
        if ($this->Messages->delete($message)) {
            $this->Flash->success(__('The message has been deleted.'));
        } else {
            $this->Flash->error(__('The message could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function top()
    {
        // $ = $this->paginate($this->Messages);

        // $this->set(compact('messages'));
    }
}
