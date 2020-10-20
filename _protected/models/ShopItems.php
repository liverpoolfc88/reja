<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shop_items".
 *
 * @property int $id
 * @property string $name
 * @property int $tuman_shahar_id
 * @property int $shop_id
 * @property int $user_id
 * @property string $title
 * @property string|null $photo
 * @property string|null $short
 * @property int|null $views
 * @property string $slug
 * @property int $status
 * @property int|null $price
 * @property int|null $sale
 * @property string|null $created_date
 * @property string|null $updated_date
 *
 * @property Shops $shop
 * @property TumansShahars $tumanShahar
 * @property User $user
 */
class ShopItems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shop_items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'tuman_shahar_id', 'shop_id', 'user_id', 'title', 'slug', 'status'], 'required'],
            [['tuman_shahar_id', 'shop_id', 'user_id', 'views', 'status', 'price', 'sale'], 'integer'],
            [['slug'], 'unique'],
            [['created_date', 'updated_date'], 'safe'],
            [['name', 'title', 'short'], 'string', 'max' => 255],
            [['photo', 'slug'], 'string', 'max' => 128],
            [['shop_id'], 'exist', 'skipOnError' => true, 'targetClass' => Shops::className(), 'targetAttribute' => ['shop_id' => 'id']],
            [['tuman_shahar_id'], 'exist', 'skipOnError' => true, 'targetClass' => TumansShahars::className(), 'targetAttribute' => ['tuman_shahar_id' => 'id']],
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
            'tuman_shahar_id' => 'Tuman Shahar ID',
            'shop_id' => 'Shop ID',
            'user_id' => 'User ID',
            'title' => 'Title',
            'photo' => 'Photo',
            'short' => 'Short',
            'views' => 'Views',
            'slug' => 'Slug',
            'status' => 'Status',
            'price' => 'Price',
            'sale' => 'Sale',
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
        ];
    }

    /**
     * Gets query for [[Shop]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShop()
    {
        return $this->hasOne(Shops::className(), ['id' => 'shop_id']);
    }

    /**
     * Gets query for [[TumanShahar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTumanShahar()
    {
        return $this->hasOne(TumansShahars::className(), ['id' => 'tuman_shahar_id']);
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

            $this->created_date = date('Y-m-d');
        }else{

            $this->updated_date = date('Y-m-d');
        }
        return parent::beforeSave($insert);
    }

}
