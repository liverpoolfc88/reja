<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tumans_shahars".
 *
 * @property int $id
 * @property string $name
 * @property string $img
 * @property string $slug
 * @property int $status
 * @property int $template_id
 * @property int $viloyat_id
 * @property string|null $create_date
 * @property string|null $update_date
 *
 * @property ShopItems[] $shopItems
 * @property Shops[] $shops
 * @property User[] $users
 * @property Viloyats $viloyat
 */
class TumansShahars extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tumans_shahars';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name',  'slug', 'status', 'template_id', 'viloyat_id'], 'required'],
            [['status', 'template_id', 'viloyat_id'], 'integer'],
            [['create_date', 'update_date'], 'safe'],
            [['name', 'img', 'slug'], 'string', 'max' => 255],
            [['viloyat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Viloyats::className(), 'targetAttribute' => ['viloyat_id' => 'id']],
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
            'slug' => 'Slug',
            'status' => 'Status',
            'template_id' => 'Template ID',
            'viloyat_id' => 'Viloyat ID',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
        ];
    }

    /**
     * Gets query for [[ShopItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShopItems()
    {
        return $this->hasMany(ShopItems::className(), ['tuman_shahar_id' => 'id']);
    }

    /**
     * Gets query for [[Shops]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShops()
    {
        return $this->hasMany(Shops::className(), ['tumans_shahars_id' => 'id']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['tuman_shahar_id' => 'id']);
    }

    /**
     * Gets query for [[Viloyat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getViloyat()
    {
        return $this->hasOne(Viloyats::className(), ['id' => 'viloyat_id']);
    }
    public function template()
    {
        switch ($this->template_id) {
            case 1:
                $template = 'post';
                break;

            case 2:
                $template = 'catalog';
                break;

            default:
                $template = '';
                break;
        }
        return $template;
    }

    public function beforeSave($insert){
        if($insert){

            $this->create_date = date('Y-m-d');
        }else{

            $this->update_date = date('Y-m-d');
        }
        return parent::beforeSave($insert);
    }

    public static function Menu(){
        return ['0'=>'---tanlang---'] + ArrayHelper::map(self::find()->all(), 'id', 'name');
    }
}
