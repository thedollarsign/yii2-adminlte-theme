<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html class="bg-black" lang="<?= Yii::$app->language ?>">
<head>
    <?= $this->render('//layouts/head') ?>
</head>
<body class="bg-black">
    <?php $this->beginBody(); ?>
    <?= $content; ?>
    <?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
