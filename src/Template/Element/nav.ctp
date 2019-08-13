<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('メニュー') ?></li>
        <li><?= $this->Html->link(__('メッセージ投稿'), ['controller' => 'posts','action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('投稿一覧'), ['controller' => 'posts','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('マイページ'), ['controller' => 'users', 'action' => 'view', $this->request->getSession()->read('Auth.User.id')]) ?></li>
        <li><?= $this->Html->link(__('API使用'), ['controller' => 'messages','action' => 'api']) ?></li>
        <li><?= $this->Html->link(__('myAPI'), ['controller' => 'messages','action' => 'myapi']) ?></li>
        <li><?= $this->Html->link(__('問い合わせ'), ['controller' => 'messages','action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('--管理者はこちら--'), ['controller' => 'users','action' => 'login']) ?></li>
    </ul>
</nav>
