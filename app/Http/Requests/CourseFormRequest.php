<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CourseFormRequest extends Request {

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
            'course_category_id' => 'required|exists:course_categories,id',
            'name'               => 'required|unique:courses,name,' . $this->get('id'),
            'usid'               => 'min:2',
            'aim'                => 'min:2',
            'certification'      => '',
            'description'        => 'required',
            'people_per_course'  => '',
            'duration'           => '',
            'venue'              => '',
            'fee'                => '',
            'start_date'         => 'required_with:toggle_booking_info|date|before:2020-12-12|after:2015-01-01',
            'end_date'           => 'required_with:toggle_booking_info|date',
            'open_date'          => 'required_with:toggle_booking_info|date',
            'close_date'         => 'required_with:toggle_booking_info|date'
        ];
    }

}
