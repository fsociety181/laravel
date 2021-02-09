<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */
    private $article;
    /**
     * @var mixed
     */
    private $text;
    /**
     * @var mixed|string
     */
    private $image;
}
