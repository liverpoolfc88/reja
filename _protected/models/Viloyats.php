<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "viloyats".
 *
 * @property int $id
 * @property string $name
 * @property string|null $img
 * @property string|null $create_date
 * @property string|null $update_date
 *
 * @property TumansShahars[] $tumansShahars
 */
class Viloyats extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'viloyats';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['create_date', 'update_date'], 'safe'],
            [['name', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'img' => 'Img',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
        ];
    }

    /**
     * Gets query for [[TumansShahars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTumansShahars()
    {
        return $this->hasMany(TumansShahars::className(), ['viloyat_id' => 'id']);
    }

    public function beforeSave($insert){
        if($insert){

            $this->create_date = date('Y-m-d');
        }else{

            $this->update_date = date('Y-m-d');
        }
        return parent::beforeSave($insert);
    }
}
