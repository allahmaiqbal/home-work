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
         
        ];

        
    }


     /**
     * Get the validated data from the request.
     *
     * @param  string|null  $key
     * @param  mixed  $default
     * @return mixed
     */
    public function validated($key = null, $default = null)
    {
        $validated = parent::validated();

        // return [
        //     ...$validated,
        //     'slug'=>Str::uniqueSlug(post::class,$this->title),
        //     'published_at'=>$this->boolean('is_published')?now():null,
        //     'user_id'=>auth()->id(),
        // ];

        return $validated + [
            'slug'=>Str::uniqueSlug(post::class,$this->title),
            'published_at'=>$this->boolean('is_published')?now():null,
            'user_id'=>auth()->id(),
        ];
    }
    
    protected function prepareForValidation()
    {
    //    $marge_items = [
    //     [
          
    //         'published_at' => $this->isPublished === '0' ? null : now(),
    //         'user_id' => auth()->id(),
    //     ],

    //    ];

        
    //      if(!empty($this->title)){
    //         $marge_items['slug'] =  Str::uniqueSlug(Post::class, $this->title, 'slug');

    //      }

    //     $this->merge($marge_items);
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
