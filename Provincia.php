<?php

namespace mauriziocingolani\places;

use mauriziocingolani\yii2fmwkphp\ActiveRecord;

/**
 * @property integer $ProvinciaID
 * @property integer $RegioneID
 * @property string $Provincia
 * @property string $Sigla
 */
class Provincia extends ActiveRecord {

    public static function tableName(): string {
        return 'places_province';
    }

    /* Validators */
    /* Relazioni */
    /* Eventi */
    /* Metodi */
    /* Getters-Setters */
    /* Metodi statici */
}
