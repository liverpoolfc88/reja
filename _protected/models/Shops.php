<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shops".
 *
 * @property int $id
 * @property string $name
 * @property int $user_id
 * @property int $tumans_shahars_id
 * @property string|null $photo
 * @property string|null $short
 * @property string $text
 * @property string $slug
 * @property int|null $views
 * @property int $status
 * @property string|null $tel
 * @property string|null $telegram
 * @property string|null $location
 * @property string|null $youtube_link
 * @property string|null $create_date
 * @property string|null $update_date
 *
 * @property ShopItems[] $shopItems
 * @property TumansShahars $tumansShahars
 * @property User $user
 */
class Shops extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shops';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'user_id', 'tumans_shahars_id', 'text', 'slug', 'status'], 'required'],
            [['slug'], 'unique'],
            [['user_id', 'tumans_shahars_id', 'views', 'status'], 'integer'],
            [['create_date', 'update_date'], 'safe'],
            [['name', 'photo', 'short', 'text', 'slug', 'location', 'youtube_link'], 'string', 'max' => 255],
            [['tel'], 'string', 'max' => 25],
            [['telegram'], 'string', 'max' => 128],
            [['tumans_shahars_id'], 'exist', 'skipOnError' => true, 'targetClass' => TumansShahars::className(), 'targetAttribute' => ['tumans_shahars_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'user_id' => 'User ID',
            'tumans_shahars_id' => 'Tumans Shahars ID',
            'photo' => 'Photo',
            'short' => 'Short',
            'text' => 'Text',
            'slug' => 'Slug',
            'views' => 'Views',
            'status' => 'Status',
            'tel' => 'Tel',
            'telegram' => 'Telegram',
            'location' => 'Location',
            'youtube_link' => 'Youtube Link',
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
        return $this->hasMany(ShopItems::className(), ['shop_id' => 'id']);
    }

    /**
     * Gets query for [[TumansShahars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTumansShahars()
    {
        return $this->hasOne(TumansShahars::className(), ['id' => 'tumans_shahars_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
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
