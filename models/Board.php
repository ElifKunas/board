<?php

namespace kouosl\board\models;

use Yii;

/**
 * This is the model class for table "board".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $priority
 * @property string $date
 * @property int $author
 */
class Board extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'board';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'priority'], 'required'],
            [['content', 'priority'], 'string'],
            [['date'], 'safe'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'priority' => 'Priority',
            'date' => 'Date',
            'author' => 'Author',
        ];
    }
}
