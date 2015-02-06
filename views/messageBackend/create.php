<?php
$this->pageTitle = Yii::t('MessageModule.message', 'Private messages - create message');

$this->breadcrumbs = array(
    Yii::t('MessageModule.message', 'Private messages') => array('/message/messageBackend/index'),
    Yii::t('MessageModule.message', 'Create'),
);
$this->menu = array(
    array(
        'label' => Yii::t('MessageModule.message', 'Private messages'),
        'items' => array(
            array(
                'icon'  => 'fa fa-fw fa-list-alt',
                'label' => Yii::t('MessageModule.message', 'Manage messages'),
                'url'   => array('/message/messageBackend/index')
            )
        )
    )
);
?>
<div class="page-header">
    <h1>
        <?php echo Yii::t('MessageModule.message', 'Private messages'); ?>
        <small><?php echo Yii::t('MessageModule.message', 'Create'); ?></small>
    </h1>
</div>
<?php $this->renderPartial('_form', ['model' => $model]); ?>