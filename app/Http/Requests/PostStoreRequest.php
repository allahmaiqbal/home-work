<?php

namespace App\Http\Requests;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
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
            'slug'=>'',
            'published_at'=>'',
            'user_id'=>''
        ];

        
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::uniqueSlug(Post::class, $this->title, 'slug'),
            'published_at' => $this->is_published === '0' ? null : now(),
            'user_id' => auth()->id(),
        ]);
    }

    // public function messages()
    // {
    //     return [
    //         'title.required' => 'Title must be needed', 
            
    //     ];
    // }

    // public function attributes()
    // {
    //     return [
    //         'content' => 'email address',
    //     ];
    // }
}
