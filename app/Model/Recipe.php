<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    //
    protected $table = 'recipe';
    protected $primaryKey = 'id';

     public function Ingredientinfodata()
    {      
        return $this->hasmany('App\Model\Ingredient_info', 'recipe_id', 'id');
    }
    public function NutritionInfodata()
    {      
        return $this->hasmany('App\Model\NutritionInfo', 'recipe_id', 'id');
    }
    public function RecipeStepdata()
    {      
        return $this->hasmany('App\Model\RecipeStep', 'recipe_id', 'id');
    }
    public function Reviewdata()
    {      
        return $this->hasmany('App\Model\Review', 'recipe_id', 'id');
    }
     public function userdata()
    {      
        return $this->hasone('App\User', 'id', 'user_id');
    }

     public function category()
    {      
        return $this->hasone('App\Model\Category', 'id', 'category_id');
    }
    
    
}
