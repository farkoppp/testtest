<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "addservice".
 *
 * @property int $id
 * @property string|null $addname
 * @property string|null $adddesc
 * @property int $price
 */
class Addservice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'addservice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adddesc'], 'string'],
            [['price'], 'required'],
            [['price'], 'integer'],
            [['addname'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'addname' => 'Addname',
            'adddesc' => 'Adddesc',
            'price' => 'Price',
        ];
    }
}
