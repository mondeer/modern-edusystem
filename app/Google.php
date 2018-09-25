<?php

namespace imond;

use Illuminate\Database\Eloquent\Model;

class Google extends Model
{
    protected $fillable = ['title',
                            'subject',
                            'class',
                            'author',
                            'document',
                            'published'];
}
