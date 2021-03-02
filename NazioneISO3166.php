<?php

namespace mauriziocingolani\yii2fmwkplaces;

use mauriziocingolani\yii2fmwkphp\ActiveRecord;

/**
 * @property integer $NazioneID
 * @property string $NazioneIT
 * @property string $NazioneEN
 * @property string $NazioneCodice
 */
class NazioneISO3166 extends ActiveRecord {

    const ITALIA = 106;

    public static function tableName(): string {
        return 'places_nazioni_iso3166';
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
    public static function GetAll($orderByNation = 'It') {
        return self::find()->orderBy("Nazione$orderByNation")->all();
    }

}
