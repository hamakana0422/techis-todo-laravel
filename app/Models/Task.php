<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['name']; //nameはタスク名のカラム（本を買う、など） 指定したカラムに対してのみ、create()update()fill()が可能

    /**
    * タスクを保持するユーザーの取得 これでタスクモデルから、ユーザーの情報を取得することができる　以下、紐付けのコード
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
