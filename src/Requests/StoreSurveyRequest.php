<?php

namespace Mbagri\Survey\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSurveyRequest extends FormRequest
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
            'survey_title' => 'required|max:255',
            'q1' => 'required|max:255',
            'radiochoice0_q1' => 'required|max:255',
            'radiochoice1_q1' => 'required|max:255',
            'radiochoice2_q1' => 'nullable|max:255',
            'radiochoice3_q1' => 'nullable|max:255',
            'radiochoice4_q1' => 'nullable|max:255',
            'radiochoice5_q1' => 'nullable|max:255',
            'radiochoice6_q1' => 'nullable|max:255',
            'radiochoice7_q1' => 'nullable|max:255',
            'width' => 'numeric|nullable|min:0|max:1000',
            'height' => 'numeric|nullable|min:0|max:1000',
            'colorText' => 'nullable|max:255',
            'colorBackground' => 'nullable|max:255',
            'colorBorder' => 'nullable|max:255',
            'colorTitle' => 'nullable|max:255',
            'colorBackgroundTitle' => 'nullable|max:255',
        ];
    }
}
