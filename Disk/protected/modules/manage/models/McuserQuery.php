<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Mcuser]].
 *
 * @see Mcuser
 */
class McuserQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Mcuser[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Mcuser|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}