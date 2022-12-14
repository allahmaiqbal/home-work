<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class UniqueSlugGenerator
{

    public $slug;

    /**
     * Build self instance
     *
     * @param string $model
     * @param string $value
     * @param string $column
     *
     * @return static
     */
    public static function builder(
        string $model, 
        string $value, 
        string $column = 'slug',
        ? int $except = null , 
        ? string $exceptColumnName = 'id',
        ): static
    {
        return new static($model, $value, $column ,$except ,$exceptColumnName);
    }

    public function __construct(
        protected string $model,
        protected string $value, 
        protected string $column = 'slug',
        protected ? int $except= null,
        protected ? string $exceptColumnName = 'id'
        )
    {
        $this->slug = Str::slug($value);
    }

    /**
     * Return generated slug value
     *
     * @return string
     */
    public function generate(): string
    {
        return $this->checkUnique();
    }

    /**
     * Validate and generate slug
     *
     * @param string $slug
     *
     * @return string
     */
    private function checkUnique(int $attempt = 1): string
    {
        $model = new $this->model;

        // if($this->except != null){
 
        //    $model = $model->whereNot($this->exceptColumnName,$this->except);
        // }
      
      

        if ($attempt > 1) {
            $slug = $this->slug . '-' . $attempt;
        } else {
            $slug = $this->slug;
        }

        $is_exists = $model->where($this->column, $slug)
        // ->when($this->except != null ,function($query)
        // {
        //     $query->whereNot($this->exceptColumnName,$this->except);

        // }

        ->when($this->except ,fn(Builder $query):Builder=> $query->whereNot($this->exceptColumnName,$this->except))
        // ->toSql();
        // dd($is_exists);
        ->exists();

        if (!$is_exists) {
            return $slug;
        }

        return $this->checkUnique($attempt + 1);
    }
}
