<?php

namespace pg\auth;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\web\NotFoundHttpException;

class Model extends ActiveRecord implements IdentityInterface
{
    /**
     * Documentation for this.
     */
    public function getId()
    {
        return $this->getAttribute('id');
    }

    /**
     * Documentation for this.
     */
    public function getAuthKey()
    {
        return $this->getAttribute('token');
    }

    /**
     * Documentation for this.
     */
    public function validateAuthKey($key)
    {
        return $this->getAuthKey() === $key;
    }

    /**
     * Documentation for this.
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * Documentation for this.
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotFoundHttpException();
    }
}
