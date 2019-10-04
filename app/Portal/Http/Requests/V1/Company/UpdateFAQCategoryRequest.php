<?php

namespace App\Portal\Http\Requests\V1\Company;

use App\Http\Requests\ApiRequest;
use App\Portal\Models\User;
use App\Portal\Models\Role;
use Illuminate\Validation\Rule;

/**
 * Class UpdateUserRequest
 *
 * @package App\Portal\Http\Requests\V1
 */
class UpdateFaqCategoryRequest extends ApiRequest
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
            'name' => 'required|string',
            'description' => 'required|string|max:300',
        ];
    }
}
