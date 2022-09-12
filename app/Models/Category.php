<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'parent_id'
    ];

    public function children()
    {
        return $this->hasMany(Category::class,'parent_id', 'id');
    }

    public function deleteChild()
    {
        if ($this->children()->count()) {
            foreach ($this->children as $child) {
                $child->deleteChild();
            }
        }
        $this->delete();
    }

    public function getChildren()
    {
        $categories = Category::where('parent_id', '=', $this->id)->get();
        
        foreach ($categories as $cat)
        {
            $new = $cat->getChildren();
            $categories = $categories->concat($new);
        }

        return $categories;
    }

    public function checkIfChild($id)
    {
        foreach ($this->getChildren() as $child)
        {
            if ($id == $child->id) { return true; }
        }
        return false;
    }
}