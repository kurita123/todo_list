<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Todo extends Model
{
    use HasFactory;

    protected $_name ="todos";

    public $aColumns = array(
        "t.`id`",
        "t.`comment`",
        "t.`complete`",
        "t.`hold`",
        "t.`created_at`",
        "t.`updated_at`",
    );

    public function getTodo(){

        $aWhere = array();
        $aWhere[] = "t.`delete_flag` = 0";

        $sSql = ""
            . "SELECT \n"
            . " " . join( ",", $this->aColumns ) . " \n"
            . "FROM \n"
            . " " . $this->_name . " AS t \n"
            . "WHERE \n"
            . " " . join( " AND ", $aWhere );

        $aResult = DB::select( $sSql );

        $aResult = isset( $aResult ) && is_array( $aResult ) && count( $aResult ) > 0 ? json_decode( json_encode( $aResult ), true ) : NULL;

        if( !isset( $aResult ) ){
           return array();
        }

        return $aResult;
    }
}
