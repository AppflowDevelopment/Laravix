<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute трябва да бъде приет.',
    'active_url'           => ':attribute не е валиден URL адрес.',
    'after'                => ':attribute трябва да бъде дата след :date.',
    'alpha'                => ':attribute може да съдържа само букви.',
    'alpha_dash'           => ':attribute може да съдържа само букви, цифри и тирета.',
    'alpha_num'            => ':attribute може да съдържа само букви и цифри.',
    'array'                => ':attribute трябва да бъде масив.',
    'before'               => ':attribute трябва да бъде дата преди :date.',
    'between'              => [
        'numeric' => ':attribute трябва да бъде между :min и :max.',
        'file'    => ':attribute трябва да бъде между :min и :max килобайта.',
        'string'  => ':attribute трябва да бъде между :min и :max знака.',
        'array'   => ':attribute трябва да има между :min и :max елемента.',
    ],
    'boolean'              => ':attribute трябва да бъде true или false.',
    'confirmed'            => ':attribute потвърждението не съвпада.',
    'date'                 => ':attribute не е валидна дата.',
    'date_format'          => ':attribute не съответства на формата :format.',
    'different'            => ':attribute и :other трябва да бъдат различни.',
    'digits'               => ':attribute трябва да бъде :digits цифри.',
    'digits_between'       => ':attribute трябва да бъде между :min и :max цифри.',
    'dimensions'           => ':attribute има невалидни размери на изображение.',
    'distinct'             => 'Полето :attribute има дублирана стойност.',
    'email'                => ':attribute трябва да бъде валидна е-поща.',
    'exists'               => 'Избрания :attribute е невалиден.',
    'filled'               => ':attribute е задължително поле.',
    'image'                => ':attribute трябва да е изображение.',
    'in'                   => 'Избрания :attribute е невалиден.',
    'in_array'             => 'Полето :attribute не съществува в :other.',
    'integer'              => ':attribute трябва да е цяло число.',
    'ip'                   => ':attribute трябва да бъде валиден IP адрес.',
    'json'                 => ':attribute трябва да бъде валиден JSON стринг.',
    'max'                  => [
        'numeric' => ':attribute не може да бъде по-голям от :max.',
        'file'    => ':attribute не може да бъде по-голям от :max килобайта.',
        'string'  => ':attribute не може да бъде по-голям от :max знака.',
        'array'   => ':attribute не може да има повече от :max елемента.',
    ],
    'mimes'                => ':attribute трябва да бъде файл от тип: :values.',
    'min'                  => [
        'numeric' => ':attribute трябва да бъде поне :min.',
        'file'    => ':attribute трябва да бъде поне :min килобайта.',
        'string'  => ':attribute трябва да бъде поне :min знака.',
        'array'   => ':attribute трябва да има поне :min елемента.',
    ],
    'not_in'               => 'Избрания :attribute е невалиден.',
    'numeric'              => ':attribute трябва да бъде число.',
    'present'              => 'Полето :attribute трябва да присъства.',
    'regex'                => ':attribute формат е невалиден.',
    'required'             => ':attribute е задължително поле.',
    'required_if'          => ':attribute е задължително поле когато :other е :value.',
    'required_unless'      => ':attribute е задължително поле ако :other е в :values.',
    'required_with'        => ':attribute е задължително поле когато :values присъства.',
    'required_with_all'    => ':attribute е задължително поле когато :values присъства.',
    'required_without'     => ':attribute е задължително поле когато :values не присъства.',
    'required_without_all' => ':attribute е задължително поле когато нито един от :values присъства.',
    'same'                 => ':attribute и :other трябва да съвпадат.',
    'size'                 => [
        'numeric' => ':attribute трябва да бъде :size.',
        'file'    => ':attribute трябва да бъде :size килобайта.',
        'string'  => ':attribute трябва да бъде :size знака.',
        'array'   => ':attribute трябва да съдържа :size елемента.',
    ],
    'string'               => ':attribute трябва да бъде стринг.',
    'timezone'             => ':attribute трябва да бъде валидна зона.',
    'unique'               => ':attribute е вече зает.',
    'url'                  => 'Формата на :attribute е невалиден.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
