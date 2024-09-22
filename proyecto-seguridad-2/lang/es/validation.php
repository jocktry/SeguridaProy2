<?php

return [
    'accepted' => 'El :attribute debe ser aceptado.',
    'active_url' => 'El :attribute no es una URL válida.',
    'after' => 'El :attribute debe ser una fecha después de :date.',
    'after_or_equal' => 'El :attribute debe ser una fecha después o igual a :date.',
    'alpha' => 'El :attribute solo puede contener letras.',
    'alpha_dash' => 'El :attribute solo puede contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El :attribute solo puede contener letras y números.',
    'array' => 'El :attribute debe ser un array.',
    'before' => 'El :attribute debe ser una fecha antes de :date.',
    'before_or_equal' => 'El :attribute debe ser una fecha antes o igual a :date.',
    'between' => [
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'file' => 'El :attribute debe estar entre :min y :max kilobytes.',
        'string' => 'El :attribute debe estar entre :min y :max caracteres.',
        'array' => 'El :attribute debe tener entre :min y :max items.',
    ],
    'min' => [
        'numeric' => 'El campo :attribute debe tener al menos :min.',
        'string' => 'El campo :attribute debe tener al menos :min caracteres.',
    ],
    'max' => [
        'array' => 'El campo :attribute no debe tener más de :max valores.',
        'file' => 'El campo :attribute no debe tener más de :max kilobytes.',
        'numeric' => 'El campo :attribute no debe ser mayor que :max.',
        'string' => 'El campo :attribute no debe tener más de :max caracteres.',
    ],
    'password' => [
        'letters' => 'El campo :attribute debe contener al menos una letra.',
        'mixed' => 'El campo :attribute debe contener al menos una letra en mayúscula o minúscula.',
        'numbers' => 'El campo :attribute campo debe contener al menos un número.',
        'symbols' => 'El campo :attribute debe contener al menos un símbolo.'
    ],
    'regex' => 'El formato del campo :attribute no es correcto.',
    'required' => 'El campo :attribute es requerido.',
    'string' => 'El campo :attribute debe ser un string.',
    'unique' => 'El campo :attribute ya existe.',
    'email' => 'El campo :attribute debe tener un email válido',
    'confirmed' => 'El campo :attribute no coincide con la confirmación.',

    'custom' => [
        'nombre' => [
            'regex' => 'Solo letras, no números ni símbolos',
        ],
        'apellido' => [
            'regex' => 'Solo letras, no números ni símbolos',
        ],
        'dni' => [
            'regex' => 'Formato incorrecto, 8 dígitos y una letra al final',
        ],
        'password' => [
            'regex' => 'Contraseña fuerte: longitud de 10, al menos una mayúscula, una minúscula, un número y un carácter especial',
        ],
        'telefono' => [
            'regex' => 'Formato incorrecto, solo números y el símbolo + (para prefijos internacionales)',
        ],
    ],
];
