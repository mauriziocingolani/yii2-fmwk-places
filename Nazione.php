<?php

namespace mauriziocingolani\yii2fmwkplaces;

use mauriziocingolani\yii2fmwkphp\ActiveRecord;

/**
 * @property integer $NazioneID
 * @property string $Nazione
 */
class Nazione extends ActiveRecord {

    const ITALIA = 106;

    public static function tableName(): string {
        return '{{%places_nazioni}}';
    }

    /* Validators */
    /* Relazioni */
    /* Eventi */
    /* Metodi */
    /* Getters-Setters */
    /* Metodi statici */

    /**
     * @return Nazione[]
     */
    public static function GetAll() {
        return self::find()->orderBy('Nazione')->all();
    }

}
