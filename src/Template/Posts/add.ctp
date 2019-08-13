<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<!-- 部分テンプレート呼び出し -->
<?= $this->element('nav') ?>
<div class="posts form large-9 medium-8 columns content">
    <?= $this->Form->create($post) ?>
    <fieldset>
        <legend><?= __('新規投稿') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('text');
            // echo $this->Form->hidden( 名前 ,['value'=> 値 ]) ;
            // echo $this->Form->hidden('user_id', ['options' => $users]);
            echo $this->Form->hidden('user_id', ['value' => $user]);
            // var_dump($user);
        ?>
    </fieldset>
    <?= $this->Form->button(__('送信')) ?>
    <?= $this->Form->end() ?>
</div>
