<?php

namespace App\Http\Requests\Admin;

use App\Category;
use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'desc' => 'required',
            'parent_id' => 'sometimes',
        ];
    }

    /**
     * Check if main categories has reached the limit.
     *
     * @return bool
     */
    public function canAddCategory()
    {
        $maxCategories = config('dukaan.max_categories');
        $mainCategoriesCount = Category::main()->count();

        return !request('parent_id') ? $mainCategoriesCount < $maxCategories : true;
    }
}
