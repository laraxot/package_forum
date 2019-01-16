<?php



namespace XRA\Forum\Requests\ForumCat\ForumItem\ForumTopic;

use Illuminate\Foundation\Http\FormRequest;

class StoreForumPost extends FormRequest
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
        ];
    }
}
