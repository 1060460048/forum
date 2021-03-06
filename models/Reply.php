<?php

namespace app\models;

/**
 * This is the model class for table "tbl_reply".
 *
 * @property integer $id
 * @property integer $topic_id
 * @property string $content
 * @property string $source
 * @property integer $user_id
 * @property integer $created_at
 * @property integer $updated_at
 */
class Reply extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_reply';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['source'], 'required'],
			[['source'], 'string']
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'topic_id' => 'Topic ID',
			'content' => 'Content',
			'source' => 'source',
			'user_id' => 'User ID',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
		];
	}
}
