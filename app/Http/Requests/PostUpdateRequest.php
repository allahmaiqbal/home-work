<?php

namespace App\Http\Requests;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
        
            'title' => 'required|string|max:191',
            'content' => 'required|string|max:5000',
            'is_published' => 'required|boolean',
            'slug' => '',
            'published_at' => '',
            
           
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'published_at' => $this->is_published !== '0' ? now(): null, 
            'slug' => Str::uniqueSlug(Post::class, $this->title, 'slug'),  
        ]);
    }

    

}
