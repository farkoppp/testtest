<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ord".
 *
 * @property int $id
 * @property string|null $createdate
 * @property string|null $username
 * @property int $orderid
 * @property string|null $paydate
 * @property int|null $cond
 * @property int $period
 */
class Ord extends \yii\db\ActiveRecord
{
    var $dop = [];
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ord';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['createdate', 'paydate'], 'safe'],
            [['orderid', 'period'], 'required'],
            [['orderid', 'cond', 'period'], 'integer'],
            [['username'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'createdate' => 'Createdate',
            'username' => 'Username',
            'orderid' => 'Orderid',
            'paydate' => 'Paydate',
            'cond' => 'Cond',
            'period' => 'Period',
        ];
    }
}
