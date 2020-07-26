<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rel".
 *
 * @property int|null $ordid
 * @property int|null $addserviceid
 * @property string $reldate
 */
class Rel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ordid', 'addserviceid'], 'integer'],
            [['reldate'], 'required'],
            [['reldate'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ordid' => 'Ordid',
            'addserviceid' => 'Addserviceid',
            'reldate' => 'Reldate',
        ];
    }
}
