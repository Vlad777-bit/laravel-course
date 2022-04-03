<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $table = 'Categories';

    public function getCategories(): array
    {
        return DB::table($this->table)
                ->select("id", "title", "description")
                ->get()
                ->toArray();
    }

    public function getCategoryById(int $id): mixed
    {
        return DB::table($this->table)->find($id);
    }
}