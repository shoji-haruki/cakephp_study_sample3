<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('メッセージ') ?></li>
        <li><a herf="" >新規登録またはログインしてください</a></li>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Flash->render() ?>
    <div class="user-login">ログインページ</div>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('ユーザー名とパスワードを入力してください') ?></legend>
        <?= $this->Form->control('username') ?>
        <?= $this->Form->control('password') ?>
    </fieldset>
    <?= $this->Html->link(__('新規登録へ'), ['action' => 'add']) ?>
    <?= $this->Form->button(__('ログイン')) ?>
    <?= $this->Form->end() ?>

</div>
