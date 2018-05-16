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

    'accepted' => ':attribute muss akzeptiert werden.',
    'active_url' => ':attribute ist keine gültige URL.',
    'after' => ':attribute muss ein Datum sein nach :date.',
    'alpha' => ':attribute darf nur Buchstaben enthalten.',
    'alpha_dash' => ':attribute darf nur Buchstaben, Ziffern und Striche enthalten.',
    'alpha_num' => ':attribute darf Buchstaben und Ziffern enthalten.',
    'array' => ':attribute muss ein Array sein',
    'before' => ':attribute muss ein Datum sein vor :date.',
    'between' => [
        'numeric' => ':attribute muss zwischen :min und :max liegen.',
        'file' => ':attribute muss zwischen :min und :max KB liegen.',
        'string' => ':attribute muss zwischen :min und :max Buchstaben enthalten.',
        'array' => ':attribute muss zwischen :min und :max  Elemente enthalten.',
    ],
    'boolean' => ':attribute muss True oder False sein.',
    'confirmed' => 'Der Überprüfungswert für :attribute  stimmt nicht überein.',
    'date' => ':attribute ist kein gültiges Datum.',
    'date_format' => ':attribute entspricht nicht dem Format :format.',
    'different' => ':attribute und :other müssen unterschiedlich sein.',
    'digits' => ':attribute muss :digits Ziffern enthalten.',
    'digits_between' => ':attribute muss zwischen :min und :max Ziffern liegen.',
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'Benutzerdefinierte Meldung',
        ],
    ],
    'dimensions' => ':attribute hat die falschen Abmessungen.',
    'distinct' => ':attribute Wert ist bereits vorhanden.',
    'email' => ':attribute muss eine gültige E-Mail sein.',
    'exists' => ':attribute ist ungültig.',
    'file' => ':attribute muss eine Datei sein.',
    'filled' => ':attribute ist ein Pflichtfeld.',
    'image' => ':attribute muss ein Bild sein.',
    'in' => ':attribute enthält eine ungültige Auswahl.',
    'in_array' => ':attribute existiert nicht in :other.',
    'integer' => ':attribute muss eine Zahl sein.',
    'ip' => ':attribute muss eine IP Adresse sein.',
    'json' => ':attribute muss ein JSON Wert sein.',
    'max' => [
        'numeric' => ':attribute darf nicht größer als :max sein',
        'file' => ':attribute darf nicht größer als :max kilobyte sein.',
        'string' => ':attribute darf nicht mehr als :max Zeichen lang sein.',
        'array' => ':attribute darf nicht mehr als :max Einträge enthalten.',
    ],
    'mimes' => ':attribute muss vom Typ :values sein.',
    'min' => [
        'numeric' => ':attribute muss mindestens :min sein.',
        'file' => ':attribute muss mindestens :min kilobytes sein.',
        'string' => ':attribute muss mindestens :min Zeichen enthalten.',
        'array' => ':attribute muss mindestens :min Einträge enthalten.',
    ],
    'not_in' => 'Die Auswahl :attribute ist ungültig.',
    'numeric' => ':attribute muss eine Zahl sein.',
    'present' => ':attribute ist ein Pflichtfeld.',
    'regex' => ':attribute Format ist ungültig.',
    'required' => ':attribute ist ein Pflichtfeld.',
    'required_if' => ':attribute ist ein Pflichtfeld wenn :other ist :value.',
    'required_unless' => ':attribute ist ein Pflichtfeld wenn :other ist nicht :value.',
    'required_with' => ':attribute ist ein Pflichtfeld wenn :values ausgewählt.',
    'required_with_all' => ':attribute ist ein Pflichtfeld wenn :values ausgewählt.',
    'required_without' => ':attribute ist ein Pflichtfeld wenn :values nicht ausgewählt.',
    'required_without_all' => ':attribute ist ein Pflichtfeld wenn keines von :values ausgewählt.',
    'same' => ':attribute und :other müssen identisch sein.',
    'size' => [
        'numeric' => ':attribute muss :size sein.',
        'file' => ':attribute muss :size kilobyte sein.',
        'string' => ':attribute muss :size Zeichen enthalten.',
        'array' => ':attribute muss :size Einträge enthalten.',
    ],
    'string' => ':attribute muss eine Zeichenfolge sein.',
    'timezone' => ':attribute muss eine gültige Zone sein.',
    'unique' => ':attribute ist bereits in Verwendung.',
    'url' => ':attribute Format ist ungültig.',

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
