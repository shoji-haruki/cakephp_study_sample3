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
