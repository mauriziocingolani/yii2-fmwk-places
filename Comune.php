<?php

namespace mauriziocingolani\places;

use mauriziocingolani\yii2fmwkphp\ActiveRecord;

/**
 * @property integer $ComuneID
 * @property integer $ProvinciaID
 * @property string $Comune
 */
class Comune extends ActiveRecord {

    public static function tableName(): string {
        return 'places_comuni';
    }

    /* Validators */
    /* Relazioni */
    /* Eventi */
    /* Metodi */
    /* Getters-Setters */
    /* Metodi statici */
}
