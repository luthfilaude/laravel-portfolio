<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
        'name_project',
        'description',
        'project_image',
        'programming_language'
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function getImageUrlAttribute()
    {
        return $this->project_image
            ? asset('storage/' . $this->project_image)
            : asset('images/default-thumbnail.jpg'); // Thumbnail default jika tidak ada
    }
}
