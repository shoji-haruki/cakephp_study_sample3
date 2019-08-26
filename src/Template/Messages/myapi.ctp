<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Message $message
 */
?>
<?= $this->element('nav') ?>
<div class="users form large-9 medium-8 columns content">
    <h3><?= __('自作apiページ') ?></h3>
    <!-- <h3 class=".ajaxBtn"><?= __('myapi実行') ?></h3> -->
    <button id="ajaxBtn" type="button" name="aaa" value="aaa">
        自作api実行
    </button>
    <h5><?= __('⇩ apiレスポンス ⇩') ?></h5>
    <div id="response"></div>
</div>





