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
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'title' => 'Название',
            'worker' => 'Работник',
            'manager' => 'Руководитель',
            'text' => 'Текст',
            'url' => 'Ссылка',
        ];
    }
}