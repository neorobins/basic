<?php
/**
 * Created by PhpStorm.
 * User: Hamed
 * Date: 3/13/2016
 * Time: 5:36 PM
 */

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}