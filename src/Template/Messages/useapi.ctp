<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Message $message
 */
?>
<?= $this->element('nav') ?>
<div class="users form large-9 medium-8 columns content">
    <h3><?= __('外部apiページ') ?></h3>
    <p class="error_message">警告が出ているが支払方法を<br>登録していないためでありその他の設定は完了済み</P>
    <h5><?= __('⇩ Gogle Maps JavaScript API ⇩') ?></h5>
    <div id="map"></div>
</div>






