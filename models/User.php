<?php

namespace giicms\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 */
class User extends ActiveRecord implements IdentityInterface
{

    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;
    const ROLE_ADMIN = 'admin';
    const ROLE_MEMBER = 'member';
    const ROLE_USER = 'user';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'giicms_user';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Tên đăng nhập',
            'firstname' => 'Họ',
            'lastname' => 'Tên',
            'email' => 'Email',
            'phone' => 'Điện thoại',
            'address' => 'Địa chỉ',
            'city' => 'Tỉnh/thành'
        ];
    }

}
