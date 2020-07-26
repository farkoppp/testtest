<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Service */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-form">

    <?php
    $form = ActiveForm::begin();

// получаем все тарифы
    $items = app\models\Service::find()->all();
    $tarifs = ArrayHelper::map($items, 'id', 'name');


    $params = [
        'prompt' => 'Выберите тариф...'
    ];



    echo $form->field($ord, 'orderid')->dropDownList($tarifs, $params)->label('тариф');

    echo $form->field($ord, 'period')->dropDownList([
        0 => 'за месяц',
        1 => 'за год',
            ],
            ['prompt' => 'Выберите оплату'])->label('оплата');
    
// получаем все доп услуги
    $items2 = app\models\Addservice::find()->all();
    $list = ArrayHelper::map($items2, 'id', 'addname');
    echo $form->field($ord, 'dop')->checkboxList($list)->label('доп услуги');
//    echo var_dump($list);
    ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
