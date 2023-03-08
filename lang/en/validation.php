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

    'accepted' => 'O :attribute deve ser aceito
.',
    'accepted_if' => 'The :attributedeve ser aceito quando :para outro :value.
',
    'active_url' => 'The :attributenão é um URL válido
.',
    'after' => 'The :attribute deve ser uma data depois
 :date.',
    'after_or_equal' => 'The :attribute deve ser uma data posterior ou igual a
 :date.',
    'alpha' => 'The :attribute deve apenas conter letras.',
    'alpha_dash' => 'The :attribute deve conter apenas letras, números, traços e sublinhados
.',
    'alpha_num' => 'The :attribute deve conter apenas letras e números
.',
    'array' => 'The :attribute deve ser um array.',
    'before' => 'The :attribute deve ser uma data antes
 :date.',
    'before_or_equal' => 'The :attribute deve ser uma data anterior ou igual a
 :date.',
    'between' => [
        'array' => 'The :attribute deve ter entre :min e
 :max items.',
        'file' => 'The :attribute deve ter between :min and :max kilobytes.',
        'numeric' => 'The :attribute deve ter between :min and :max.',
        'string' => 'The :attribute deve ter between :min and :max characters.',
    ],
    'boolean' => 'The :attribute field deve ter true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'current_password' => 'The password is incorrect.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute deve ter a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'declined' => 'The :attribute deve ter declined.',
    'declined_if' => 'The :attribute deve ter declined when :other is :value.',
    'different' => 'The :attribute and :other deve ter different.',
    'digits' => 'The :attribute deve ter :digits digits.',
    'digits_between' => 'The :attribute deve ter between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute deve ser um válido email address.',
    'ends_with' => 'The :attribute deve terminar com um dos seguintes: :values.',
    'enum' => 'The selected :attribute é inválido.',
    'exists' => 'The selected :attribute é inválido.',
    'file' => 'The :attribute deve ter a file.',
    'filled' => 'The :attribute campo deve ter um valor
.',
    'gt' => [
        'array' => 'The :attribute must have more than :value items.',
        'file' => 'The :attribute deve ser maior que :value kilobytes.',
        'numeric' => 'The :attribute deve ser maior que :value.',
        'string' => 'The :attribute deve ser maior que :value characters.',
    ],
    'gte' => [
        'array' => 'The :attribute must have :value items or more.',
        'file' => 'The :attribute deve ser maior ou igual a :value kilobytes.',
        'numeric' => 'The :attribute deve ser maior ou igual a :value.',
        'string' => 'The :attribute deve ser maior ou igual a :value characters.',
    ],
    'image' => 'The :attribute deve ter an image.',
    'in' => 'The selected :attribute é inválido.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute deve ter an integer.',
    'ip' => 'The :attribute deve ser um válido IP address.',
    'ipv4' => 'The :attribute deve ser um válido IPv4 address.',
    'ipv6' => 'The :attribute deve ser um válido IPv6 address.',
    'json' => 'The :attribute deve ser um válido JSON string.',
    'lt' => [
        'array' => 'The :attribute must have less than :value items.',
        'file' => 'The :attribute deve ser menor que :value kilobytes.',
        'numeric' => 'The :attribute deve ser menor que :value.',
        'string' => 'The :attribute deve ser menor que :value characters.',
    ],
    'lte' => [
        'array' => 'The :attribute não deve ter mais do que :value items.',
        'file' => 'The :attribute deve ser menor ou igual a :value kilobytes.',
        'numeric' => 'The :attribute deve ser menor ou igual a :value.',
        'string' => 'The :attribute deve ser menor ou igual a :value characters.',
    ],
    'mac_address' => 'The :attribute deve ser um válido MAC address.',
    'max' => [
        'array' => 'The :attribute não deve ter mais do que :max items.',
        'file' => 'The :attribute não deve ser maior que :max kilobytes.',
        'numeric' => 'The :attribute não deve ser maior que :max.',
        'string' => 'The :attribute não deve ser maior que :max characters.',
    ],
    'mimes' => 'The :attribute deve ter um arquivo do tipo: :values.',
    'mimetypes' => 'The :attribute deve ter um arquivo do tipo: :values.',
    'min' => [
        'array' => 'The :attribute deve ter pelo menos :min items.',
        'file' => 'The :attribute deve ser pelo menos :min kilobytes.',
        'numeric' => 'The :attribute deve ser pelo menos :min.',
        'string' => 'The :attribute deve ser pelo menos :min characters.',
    ],
    'multiple_of' => 'The :attribute deve ter a multiple of :value.',
    'not_in' => 'The selected :attribute é inválido.',
    'not_regex' => 'The :attribute formato é inválido.',
    'numeric' => 'The :attribute deve ter a número.',
    'password' => 'The password está incorreta.',
    'present' => 'The :attribute campo deve ter presente.',
    'prohibited' => 'The :attribute 
campo é proibido.',
    'prohibited_if' => 'The :attribute 
campo é proibido quando :other é :value.',
    'prohibited_unless' => 'The :attribute 
campo é proibido a menos que : está em :values.',
    'prohibits' => 'The :attribute campo proíbe :other 
de estar presente.',
    'regex' => 'The :attribute format é inválido.',
    'required' => 'The :attribute campo é necessário.',
    'required_array_keys' => 'The :attribute 
campo deve conter entradas para: :values.',
    'required_if' => 'The :attribute 
campo é obrigatório quando :other is :value.',
    'required_unless' => 'The :attribute campo é obrigatório a menos que :other is in :values.',
    'required_with' => 'The :attribute 
campo é obrigatório quando :values is present.',
    'required_with_all' =>
    'The :attribute O campo é obrigatório quando :values ​​estão presentes.',
    'required_without' => 'The :attribute campo é obrigatório quando :values ​​não está presente.',
    'required_without_all' => 'The :attribute campo é obrigatório quando nenhum dos :values ​​está presente.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'array' => 'The :attribute must contain :size items.',
        'file' => 'The :attribute deve ter :size kilobytes.',
        'numeric' => 'The :attribute deve ter :size.',
        'string' => 'The :attribute deve ter :size characters.',
    ],
    'starts_with' => 'The :attribute 
deve começar com um dos seguintes: :values.',
    'string' => 'The :attribute deve ter a string.',
    'timezone' => 'The :attribute deve ser um válido timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute falha ao carregar.',
    'url' => 'The :attribute deve ser um válido URL.',
    'uuid' => 'The :attribute deve ser um válido UUID.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
