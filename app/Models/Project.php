<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'description', 'dev_lang', 'framework', 'diff_lvl', 'team', 'git_link', 'cover_image'];

    public static function generateSlug($name)
    {
        return Str::slug($name, '-');
    }
}
