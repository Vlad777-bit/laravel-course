<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class About extends Model
{
    use HasFactory;

    protected $table = 'Comments';

    public function getComments(): array
    {
        return DB::table($this->table)
            ->select("id", "author", "image", "comment")
            ->get()
            ->toArray();
    }
}
