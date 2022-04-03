<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $table = 'News';

    public function getNews(int $categoryId): array
    {
        return DB::table($this->table)
            ->join('Categories', 'News.category_id', '=', 'Categories.id')
            ->select('News.*', 'Categories.title as categoryTitle')
            ->where('News.category_id', '=', $categoryId)
            ->orderBy('News.id', 'desc')
            ->get()
            ->toArray();
    }

    public function getNewsById(int $id): mixed
    {
        return DB::table($this->table)->find($id);
    }
}
