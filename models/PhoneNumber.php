<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "phone_number".
 *
 * @property string $id
 * @property string $user_id
 * @property string $country_id
 * @property string $number
 * @property string $verification_code
 * @property int $verified
 * @property int $active
 * @property string $created
 */
class PhoneNumber extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'phone_number';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'country_id', 'number', 'verification_code'], 'required'],
            [['user_id', 'country_id', 'verified', 'active'], 'integer'],
            [['created'], 'safe'],
            [['number', 'verification_code'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'country_id' => Yii::t('app', 'Country ID'),
            'number' => Yii::t('app', 'Number'),
            'verification_code' => Yii::t('app', 'Verification Code'),
            'verified' => Yii::t('app', 'Verified'),
            'active' => Yii::t('app', 'Active'),
            'created' => Yii::t('app', 'Created'),
        ];
    }
}
