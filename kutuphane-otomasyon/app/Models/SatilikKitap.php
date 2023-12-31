<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatilikKitap extends Model
{
    
    use HasFactory;
    protected $table = 'user_kitap'; // Tablo adını kullanıcı_kitap tablosuyla eşleştirin

    // Modeldeki sütunları tanımlayın
    protected $fillable = ['id', 'kitap_adi', 'kitap_yazar','kitap_ISBN'];

    public function kullanici()
    {
        return $this->belongsToMany(User::class, 'user_kitap', 'kitap_id', 'user_id');
    }

    public function satilik()
{
    return $this->belongsTo(Satilik::class, 'kitap_id', 'id');
}

public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}
}
