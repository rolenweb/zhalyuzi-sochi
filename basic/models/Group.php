<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "group".
 *
 * @property integer $id
 * @property integer $sub_category_id
 * @property string $title
 * @property integer $created_at
 * @property integer $updated_at
 */
class Group extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'group';
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
            [['sub_category_id', 'created_at', 'updated_at'], 'integer'],
            [['title', 'structure', 'density', 'composition', 'cleaning', 'country'], 'string', 'max' => 255],
            [['price', 'max_height'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sub_category_id' => 'Sub Category ID',
            'title' => 'Title',
            'structure' => 'Structure',
            'density' => 'Density',
            'composition' => 'Composition',
            'cleaning' => 'Cleaning',
            'country' => 'Country',
            'price' => 'Price',
            'max_height' => 'Max height',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getSubCategory()
    {
        return $this->hasOne(SubCategory::className(), ['id' => 'sub_category_id']);
    }

    public function getMaterials()
    {
        return $this->hasMany(Material::className(), ['group_id' => 'id']);
    }

    public static function listGroups()
    {
        return self::find()->all();
    }
}
