<?php

namespace mauriziocingolani\places;

use mauriziocingolani\yii2fmwkphp\ActiveRecord;

/**
 * @property integer $NazioneID
 * @property string $Nazione
 */
class NazioneIt extends ActiveRecord {

    public static function tableName(): string {
        return 'places_nazioni';
    }

}
