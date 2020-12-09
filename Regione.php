<?php

namespace mauriziocingolani\places;

use mauriziocingolani\yii2fmwkphp\ActiveRecord;

/**
 * @property integer $RegioneID
 * @property integer $AreaID
 * @property string $Regione
 */
class Regione extends ActiveRecord {

    public static function tableName(): string {
        return 'places_regioni';
    }

    /* Validators */
    /* Relazioni */
    /* Eventi */
    /* Metodi */
    /* Getters-Setters */
    /* Metodi statici */
}
