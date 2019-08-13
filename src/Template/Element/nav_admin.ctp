<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('管理者メニュー') ?></li>
        <li><?= $this->Html->link(__('問い合わせ一覧'), ['controller' => 'messages','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('ユーザー一覧'), ['controller' => 'users','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('管理者ログアウト'), ['controller' => 'users','action' => 'logout']) ?></li>
    </ul>
</nav>
