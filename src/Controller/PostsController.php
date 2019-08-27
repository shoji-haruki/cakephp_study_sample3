<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Posts Controller
 *
 * @property \App\Model\Table\PostsTable $Posts
 *
 * @method \App\Model\Entity\Post[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PostsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $posts = $this->paginate($this->Posts);

        $this->set(compact('posts'));
    }

    // public function index()
    // {
    //     $posts = $this->paginate($this->Posts);

    //     $this->set(compact('posts'));
    // }

    /**
     * View method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('post', $post);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $post = $this->Posts->newEntity();
        if ($this->request->is('post')) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            $post->user_id = $this->Auth->user('id');
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('The post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
        }
        $user = $this->Auth->user('id');
        // セットする
        $this->set(compact('post', 'users'));
        // var_dump($user);
        $users = $this->Posts->Users->find('list', ['limit' => 200]);
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            $post->user_id = $this->Auth->user('id');
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('The post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
        }
        $users = $this->Posts->Users->find('list', ['limit' => 200]);
        $this->set(compact('post', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $post = $this->Posts->get($id);
        if ($this->Posts->delete($post)) {
            $this->Flash->success(__('The post has been deleted.'));
        } else {
            $this->Flash->error(__('The post could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function isAuthorized($user)
    {
    // 登録ユーザー全員が記事を追加できます
    // 3.4.0 より前は $this->request->param('action') が使われました。
    if ($this->request->getParam('action') === 'add') {
        return true;
    }

    // 記事の所有者は編集して削除することができます
    // 3.4.0 より前は $this->request->param('action') が使われました。
    if (in_array($this->request->getParam('action'), ['edit', 'delete'])) {
        // 3.4.0 より前は $this->request->params('pass.0')
        $postId = (int)$this->request->getParam('pass.0');
        if ($this->Articles->isOwnedBy($postId, $user['id'])) {
            return true;
        }
    }
    return parent::isAuthorized($user);
}

    public function isOwnedBy($postId, $userId)
    {
    return $this->exists(['id' => $postId, 'user_id' => $userId]);
    }
}
