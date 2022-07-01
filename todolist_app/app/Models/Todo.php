<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'comment',
    ];

    protected $_name ="todos";

    public $aColumns = array(
        "t.`id`",
        "t.`comment`",
        "t.`complete`",
        "t.`hold`",
        "t.`created_at`",
        "t.`updated_at`",
    );

    //削除済み以外のリストを取得
    public function getTodo(){

        $aWhere = array();
        $aWhere[] = "t.`deleted_at` = NULL";

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

    //Todo新規登録
    public function registerTodo( $hParameter ){

        $sTitle = array_key_exists("title",$hParameter ) && isset( $hParameter[ "title" ] ) ? $hParameter[ "title" ] : NULL;
        $sComment = array_key_exists("comment",$hParameter ) && isset( $hParameter[ "comment" ] ) ? $hParameter[ "comment" ] : NULL;

        if( !isset( $sTitle ) && !isset( $sComment ) ){
            return array();
        }

        try{
            DB::beginTransaction();

            $insertCount = $this->create([
                'title' => $sTitle,
                'comment' => $sComment,
            ]);

            DB::commit();

        }catch ( \Throwable $e ){
            DB::rollBack();
        }

        return true;

    }
}
