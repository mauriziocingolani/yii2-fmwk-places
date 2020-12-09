<?php

namespace mauriziocingolani\places;

use mauriziocingolani\yii2fmwkphp\ActiveRecord;

/**
 * @property integer $AreaID
 * @property string $Area
 */
class Area extends ActiveRecord {

    public static function tableName(): string {
        return 'places_aree';
    }

    /* Validators */
    /* Relazioni */
    /* Eventi */
    /* Metodi */
    /* Getters-Setters */
    /* Metodi statici */

    public static function GetAll() {
        return self::find()->orderBy('AreaID')->all();
    }

}
