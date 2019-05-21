<?php
namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    //Разрешаем работать со следующими атрибутами:
    protected $fillable = [
  'title',
  'content',
  'user_id',
  ];
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
