<?php

namespace mauriziocingolani\yii2fmwkplaces\migrations;

class Area extends \mauriziocingolani\yii2fmwkphp\Migration {

    public function create() {
        $this->createTable('places_aree', [
            'AreaID' => self::Pk(),
            'Area' => self::typeVarchar(50, true),
            self::Pk('AreaID'),
                ], self::TableOptionsLatin());
        $this->createIndex('unique_ciaree_area', 'places_aree', 'Area', true);
    }

    public function data() {
        $this->batchInsert('places_aree', ['AreaID', 'Area'], [
            [1, 'Italia Nord Occidentale'],
            [2, 'Italia Nord Orientale'],
            [3, 'Italia Centrale'],
            [4, 'Italia Meridionale'],
            [5, 'Italia Insulare'],
        ]);
    }

    public function drop() {
        $this->dropTable('places_aree');
    }

}
