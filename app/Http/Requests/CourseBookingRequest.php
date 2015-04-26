<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CourseBookingRequest extends Request {

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
            'name'         => 'required',
            'email'        => 'required|email',
            'phone'        => 'required',
            'course_names' => 'required_without:course_usids',
            'course_uids'  => 'required_without:course_names'
        ];
    }

}
