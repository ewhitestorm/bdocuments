<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property string $title
 * @property string|null $text
 * @property string $url
 */
class Orders extends \yii\db\ActiveRecord
{
    const TITLE_ACTIVE_1 = 'о принятии на работу';
    const TITLE_ACTIVE_2 = 'об увольнении';
    const TITLE_ACTIVE_3 = 'о предоставлении отпуска';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'url'], 'required'],
            [['text'], 'string'],
            [['title'], 'string', 'max' => 150],
            [['url'], 'string', 'max' => 200],
            [['worker'], 'string', 'max' => 150],
            [['manager'], 'string', 'max' => 150],
        ];
    }
    
    public static function titless()
    {
        return 
        [
            static::TITLE_ACTIVE_1 => 'о принятии на работу',
            static::TITLE_ACTIVE_2 => 'об увольнении',
            static::TITLE_ACTIVE_3 => 'о предоставлении отпуска',
        ];
    }
    
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'worker' => 'Работник',
            'manager' => 'Руководитель',
            'text' => 'Текст',
            'url' => 'Ссылка',
        ];
    }
}