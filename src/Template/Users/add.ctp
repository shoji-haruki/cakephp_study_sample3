<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('メッセージ') ?></li>
        <li><a herf="" >新規登録またはログインしてください</a></li>
</nav>
<div class="users form large-9 medium-8 columns content">
    <div class="user-login">新規登録ページ</div>
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('必須項目（全て）を入力して登録してください') ?></legend>
        <?= $this->Form->control('username') ?>
        <?= $this->Form->control('password') ?>
        <?= $this->Form->control('role', [
            'options' => ['admin' => 'Admin', 'author' => 'Author']
        ]) ?>
    </fieldset>
        <?= $this->Html->link(__('ログインへ'), ['action' => 'login']) ?>
        <?= $this->Form->button(__('登録')) ?>
        <?= $this->Form->end() ?>
</div>
