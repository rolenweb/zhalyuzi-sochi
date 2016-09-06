<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "material".
 *
 * @property integer $id
 * @property integer $group_id
 * @property string $title
 * @property string $code
 * @property double $price
 * @property string $unit
 * @property string $extension
 * @property integer $created_at
 * @property integer $updated_at
 */
class Material extends \yii\db\ActiveRecord
{

    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'material';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['group_id', 'created_at', 'updated_at'], 'integer'],
            [['price'], 'number'],
            [['title', 'code', 'unit', 'extension'], 'string', 'max' => 255],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'group_id' => 'Group ID',
            'title' => 'Title',
            'code' => 'Code',
            'price' => 'Price',
            'unit' => 'Unit',
            'extension' => 'Extension',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getGroup()
    {
        return $this->hasOne(Group::className(), ['id' => 'group_id']);
    }

    
}
