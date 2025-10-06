<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'content',
        'author',
        'published_at',
    ];
    public static $beritas = [
        [
            'id' => 1,
            'title' => 'Berita Pertama',
            'content' => 'Ini adalah isi dari berita pertama.',
            'author' => 'Admin',
            'published_at' => '2023-10-01 10:00:00',
        ],
        [
            'id' => 2,
            'title' => 'Berita Kedua',
            'content' => 'Ini adalah isi dari berita kedua.',
            'author' => 'Editor',
            'published_at' => '2023-10-02 11:00:00',
        ],
        [
            'id' => 3,
            'title' => 'Berita Ketiga',
            'content' => 'Ini adalah isi dari berita ketiga.',
            'author' => 'Reporter',
            'published_at' => '2023-10-03 12:00:00',
        ],
    ];

    public static function allBeritas()
    {
        return self::$beritas;
    }

}
