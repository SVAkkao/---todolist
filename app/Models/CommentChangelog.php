<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentChangelog extends Model
{
    use HasFactory;
    protected $table = "comment_changelogs";
    // protected $primaryKey = "cid";
}