<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "place".
 *
 * @property string $id
 * @property string $place_id
 * @property string $lat
 * @property string $lon
 * @property string $country_code
 * @property int $is_country_code
 */
class Place extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'place';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['place_id', 'lat', 'lon', 'country_code', 'is_country_code'], 'required'],
            [['is_country_code'], 'integer'],
            [['place_id', 'lat', 'lon'], 'string', 'max' => 45],
            [['country_code'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'place_id' => Yii::t('app', 'Place ID'),
            'lat' => Yii::t('app', 'Lat'),
            'lon' => Yii::t('app', 'Lon'),
            'country_code' => Yii::t('app', 'Country Code'),
            'is_country_code' => Yii::t('app', 'Is Country Code'),
        ];
    }
}
