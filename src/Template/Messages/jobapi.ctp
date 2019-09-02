<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Message $message
 */
?>
<?= $this->element('nav') ?>
<div class="users form large-9 medium-8 columns content">
    <h3><?= __('職業ナビapi') ?></h3>
    <!-- <h3 class=".ajaxBtn"><?= __('職業ナビapi実行') ?></h3> -->
    <button id="ajaxBtn2" type="button" name="aaa" value="aaa">
        職業ナビapi実行
    </button>
    <h5><?= __('⇩ apiレスポンス ⇩') ?></h5>
    <div id="response2"></div>
</div>





