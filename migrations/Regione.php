<?php

namespace mauriziocingolani\yii2fmwkplaces\migrations;

class Regione extends \mauriziocingolani\yii2fmwkphp\Migration {

    public function create() {
        $this->createTable('places_regioni', [
            'RegioneID' => self::Pk(),
            'AreaID' => self::typeUnsignedInteger(true),
            'Regione' => self::typeVarchar(50, true),
            self::Pk('RegioneID'),
                ], self::TableOptionsLatin());
        $this->createIndex('unique_placesregioni_regione', 'places_regioni', 'Regione', true);
        $this->addForeignKey('fk_placesregioni_area', 'places_regioni', 'AreaID', 'places_aree_aree');
    }

    public function data() {
        $this->batchInsert('places_regioni', ['RegioneID', 'AreaID', 'Regione'], [
            [1, 1, 'Liguria'],
            [2, 1, 'Lombardia'],
            [3, 1, 'Piemonte'],
            [4, 1, 'Valle d\'Aosta'],
            [5, 2, 'Emilia-Romagna'],
            [6, 2, 'Friuli-Venezia Giulia'],
            [7, 2, 'Trentino-Alto Adige'],
            [8, 2, 'Veneto'],
            [9, 3, 'Lazio'],
            [10, 3, 'Marche'],
            [11, 3, 'Toscana'],
            [12, 3, 'Umbria'],
            [13, 4, 'Abruzzo'],
            [14, 4, 'Basilicata'],
            [15, 4, 'Calabria'],
            [16, 4, 'Campania'],
            [17, 4, 'Molise'],
            [18, 4, 'Puglia'],
            [19, 5, 'Sardegna'],
            [20, 5, 'Sicilia'],
        ]);
    }

    public function drop() {
        $this->dropTable('places_regioni');
    }

}
