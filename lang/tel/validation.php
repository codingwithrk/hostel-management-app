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

    'accepted' => ':attribute ఫీల్డ్‌ను అంగీకరించాలి.',
    'accepted_if' => ':other :value అయితే :attribute ఫీల్డ్‌ను అంగీకరించాలి.',
    'active_url' => ':attribute ఫీల్డ్‌లో సరైన URL ఉండాలి.',
    'after' => ':attribute ఫీల్డ్‌లో తేదీ :date తర్వాత ఉండాలి.',
    'after_or_equal' => ':attribute ఫీల్డ్‌లో తేదీ :date తర్వాత లేదా సమానంగా ఉండాలి.',
    'alpha' => ':attribute ఫీల్డ్‌లో కేవలం అక్షరాలు మాత్రమే ఉండాలి.',
    'alpha_dash' => ':attribute ఫీల్డ్‌లో అక్షరాలు, సంఖ్యలు, డాష్‌లు మరియు అండర్‌స్కోర్‌లు మాత్రమే ఉండాలి.',
    'alpha_num' => ':attribute ఫీల్డ్‌లో కేవలం అక్షరాలు మరియు సంఖ్యలు మాత్రమే ఉండాలి.',
    'any_of' => ':attribute ఫీల్డ్‌లో తప్పు విలువ ఉంది.',
    'array' => ':attribute ఫీల్డ్‌లో అర్రే ఉండాలి.',
    'ascii' => ':attribute ఫీల్డ్‌లో కేవలం సింగిల్-బైట్ అక్షరాలు మరియు చిహ్నాలు మాత్రమే ఉండాలి.',
    'before' => ':attribute ఫీల్డ్‌లో తేదీ :date ముందు ఉండాలి.',
    'before_or_equal' => ':attribute ఫీల్డ్‌లో తేదీ :date ముందు లేదా సమానంగా ఉండాలి.',
    'between' => [
        'array' => ':attribute ఫీల్డ్‌లో :min మరియు :max అంశాలు ఉండాలి.',
        'file' => ':attribute ఫీల్డ్‌లో :min మరియు :max కిలోబైట్లు ఉండాలి.',
        'numeric' => ':attribute ఫీల్డ్‌లో :min మరియు :max మధ్య సంఖ్య ఉండాలి.',
        'string' => ':attribute ఫీల్డ్‌లో :min మరియు :max అక్షరాలు ఉండాలి.',
    ],
    'boolean' => ':attribute ఫీల్డ్‌లో నిజం లేదా అబద్ధం ఉండాలి.',
    'can' => ':attribute ఫీల్డ్‌లో అనధికారిక విలువ ఉంది.',
    'confirmed' => ':attribute ఫీల్డ్ కన్ఫర్మేషన్ సరిపోలడం లేదు.',
    'contains' => ':attribute ఫీల్డ్‌లో అవసరమైన విలువ లేదు.',
    'current_password' => 'పాస్వర్డ్ తప్పు.',
    'date' => ':attribute ఫీల్డ్‌లో సరైన తేదీ ఉండాలి.',
    'date_equals' => ':attribute ఫీల్డ్‌లో తేదీ :date సమానం ఉండాలి.',
    'date_format' => ':attribute ఫీల్డ్‌లో తేదీ :format ఫార్మాట్‌తో సరిపోవాలి.',
    'decimal' => ':attribute ఫీల్డ్‌లో :decimal దశాంశ స్థానాలు ఉండాలి.',
    'declined' => ':attribute ఫీల్డ్‌ను తిరస్కరించాలి.',
    'declined_if' => ':other :value అయితే :attribute ఫీల్డ్‌ను తిరస్కరించాలి.',
    'different' => ':attribute మరియు :other వేర్వేరు ఉండాలి.',
    'digits' => ':attribute ఫీల్డ్‌లో :digits అంకెలు ఉండాలి.',
    'digits_between' => ':attribute ఫీల్డ్‌లో :min మరియు :max అంకెలు ఉండాలి.',
    'dimensions' => ':attribute ఫీల్డ్‌లో చిత్ర పరిమాణాలు తప్పు ఉన్నాయి.',
    'distinct' => ':attribute ఫీల్డ్‌లో డూప్లికేట్ విలువ ఉంది.',
    'doesnt_end_with' => ':attribute ఫీల్డ్‌లో ఈ క్రింది వాటితో ముగియకూడదు: :values.',
    'doesnt_start_with' => ':attribute ఫీల్డ్‌లో ఈ క్రింది వాటితో ప్రారంభించకూడదు: :values.',
    'email' => ':attribute ఫీల్డ్‌లో సరైన ఇమెయిల్ చిరునామా ఉండాలి.',
    'ends_with' => ':attribute ఫీల్డ్‌లో ఈ క్రింది వాటితో ముగియాలి: :values.',
    'enum' => 'ఎంచుకున్న :attribute తప్పు.',
    'exists' => 'ఎంచుకున్న :attribute తప్పు.',
    'extensions' => ':attribute ఫీల్డ్‌లో ఈ క్రింది విస్తరణలలో ఒకటి ఉండాలి: :values.',
    'file' => ':attribute ఫీల్డ్‌లో ఫైల్ ఉండాలి.',
    'filled' => ':attribute ఫీల్డ్‌లో విలువ ఉండాలి.',
    'gt' => [
        'array' => ':attribute ఫీల్డ్‌లో :value కంటే ఎక్కువ అంశాలు ఉండాలి.',
        'file' => ':attribute ఫీల్డ్‌లో :value కంటే ఎక్కువ కిలోబైట్లు ఉండాలి.',
        'numeric' => ':attribute ఫీల్డ్‌లో :value కంటే ఎక్కువ సంఖ్య ఉండాలి.',
        'string' => ':attribute ఫీల్డ్‌లో :value కంటే ఎక్కువ అక్షరాలు ఉండాలి.',
    ],
    'gte' => [
        'array' => ':attribute ఫీల్డ్‌లో :value లేదా ఎక్కువ అంశాలు ఉండాలి.',
        'file' => ':attribute ఫీల్డ్‌లో :value కంటే ఎక్కువ లేదా సమానంగా కిలోబైట్లు ఉండాలి.',
        'numeric' => ':attribute ఫీల్డ్‌లో :value కంటే ఎక్కువ లేదా సమానంగా సంఖ్య ఉండాలి.',
        'string' => ':attribute ఫీల్డ్‌లో :value కంటే ఎక్కువ లేదా సమానంగా అక్షరాలు ఉండాలి.',
    ],
    'hex_color' => ':attribute ఫీల్డ్‌లో సరైన హెక్సాడెసిమల్ రంగు ఉండాలి.',
    'image' => ':attribute ఫీల్డ్‌లో చిత్రం ఉండాలి.',
    'in' => 'ఎంచుకున్న :attribute తప్పు.',
    'in_array' => ':attribute ఫీల్డ్ :other లో ఉండాలి.',
    'in_array_keys' => ':attribute ఫీల్డ్‌లో ఈ క్రింది కీలు ఉండాలి: :values.',
    'integer' => ':attribute ఫీల్డ్‌లో పూర్తి సంఖ్య ఉండాలి.',
    'ip' => ':attribute ఫీల్డ్‌లో సరైన IP చిరునామా ఉండాలి.',
    'ipv4' => ':attribute ఫీల్డ్‌లో సరైన IPv4 చిరునామా ఉండాలి.',
    'ipv6' => ':attribute ఫీల్డ్‌లో సరైన IPv6 చిరునామా ఉండాలి.',
    'json' => ':attribute ఫీల్డ్‌లో సరైన JSON స్ట్రింగ్ ఉండాలి.',
    'list' => ':attribute ఫీల్డ్‌లో జాబితా ఉండాలి.',
    'lowercase' => ':attribute ఫీల్డ్‌లో చిన్న అక్షరాలు ఉండాలి.',
    'lt' => [
        'array' => ':attribute ఫీల్డ్‌లో :value కంటే తక్కువ అంశాలు ఉండాలి.',
        'file' => ':attribute ఫీల్డ్‌లో :value కంటే తక్కువ కిలోబైట్లు ఉండాలి.',
        'numeric' => ':attribute ఫీల్డ్‌లో :value కంటే తక్కువ సంఖ్య ఉండాలి.',
        'string' => ':attribute ఫీల్డ్‌లో :value కంటే తక్కువ అక్షరాలు ఉండాలి.',
    ],
    'lte' => [
        'array' => ':attribute ఫీల్డ్‌లో :value కంటే ఎక్కువ లేదా సమానంగా అంశాలు ఉండాలి.',
        'file' => ':attribute ఫీల్డ్‌లో :value కంటే ఎక్కువ లేదా సమానంగా కిలోబైట్లు ఉండాలి.',
        'numeric' => ':attribute ఫీల్డ్‌లో :value కంటే ఎక్కువ లేదా సమానంగా సంఖ్య ఉండాలి.',
        'string' => ':attribute ఫీల్డ్‌లో :value కంటే ఎక్కువ లేదా సమానంగా అక్షరాలు ఉండాలి.',
    ],
    'mac_address' => ':attribute ఫీల్డ్‌లో సరైన MAC చిరునామా ఉండాలి.',
    'max' => [
        'array' => ':attribute ఫీల్డ్‌లో :max కంటే ఎక్కువ అంశాలు ఉండకూడదు.',
        'file' => ':attribute ఫీల్డ్‌లో :max కంటే ఎక్కువ కిలోబైట్లు ఉండకూడదు.',
        'numeric' => ':attribute ఫీల్డ్‌లో :max కంటే ఎక్కువ సంఖ్య ఉండకూడదు.',
        'string' => ':attribute ఫీల్డ్‌లో :max కంటే ఎక్కువ అక్షరాలు ఉండకూడదు.',
    ],
    'max_digits' => ':attribute ఫీల్డ్‌లో :max కంటే ఎక్కువ అంకెలు ఉండకూడదు.',
    'mimes' => ':attribute ఫీల్డ్‌లో ఈ క్రింది రకాల ఫైల్‌లలో ఒకటి ఉండాలి: :values.',
    'mimetypes' => ':attribute ఫీల్డ్‌లో ఈ క్రింది రకాల ఫైల్‌లలో ఒకటి ఉండాలి: :values.',
    'min' => [
        'array' => ':attribute ఫీల్డ్‌లో కనీసం :min అంశాలు ఉండాలి.',
        'file' => ':attribute ఫీల్డ్‌లో కనీసం :min కిలోబైట్లు ఉండాలి.',
        'numeric' => ':attribute ఫీల్డ్‌లో కనీసం :min సంఖ్య ఉండాలి.',
        'string' => ':attribute ఫీల్డ్‌లో కనీసం :min అక్షరాలు ఉండాలి.',
    ],
    'min_digits' => ':attribute ఫీల్డ్‌లో కనీసం :min అంకెలు ఉండాలి.',
    'missing' => ':attribute ఫీల్డ్ లేదు.',
    'missing_if' => ':other :value అయితే :attribute ఫీల్డ్ లేదు.',
    'missing_unless' => ':other :value కాకుండా ఉంటే :attribute ఫీల్డ్ లేదు.',
    'missing_with' => ':values ఉన్నప్పుడు :attribute ఫీల్డ్ లేదు.',
    'missing_with_all' => ':values ఉన్నప్పుడు :attribute ఫీల్డ్ లేదు.',
    'multiple_of' => ':attribute ఫీల్డ్ :value యొక్క బహుళకం ఉండాలి.',
    'not_in' => 'ఎంచుకున్న :attribute తప్పు.',
    'not_regex' => ':attribute ఫీల్డ్ ఫార్మాట్ తప్పు.',
    'numeric' => ':attribute ఫీల్డ్‌లో సంఖ్య ఉండాలి.',
    'password' => [
        'letters' => ':attribute ఫీల్డ్‌లో కనీసం ఒక అక్షరం ఉండాలి.',
        'mixed' => ':attribute ఫీల్డ్‌లో కనీసం ఒక పెద్ద అక్షరం మరియు ఒక చిన్న అక్షరం ఉండాలి.',
        'numbers' => ':attribute ఫీల్డ్‌లో కనీసం ఒక సంఖ్య ఉండాలి.',
        'symbols' => ':attribute ఫీల్డ్‌లో కనీసం ఒక చిహ్నం ఉండాలి.',
        'uncompromised' => 'ఇవ్వబడిన :attribute డేటా లీక్‌లో కనిపించింది. దయచేసి వేరే :attribute ఎంచుకోండి.',
    ],
    'present' => ':attribute ఫీల్డ్ ప్రస్తుతమై ఉండాలి.',
    'present_if' => ':other :value అయితే :attribute ఫీల్డ్ ప్రస్తుతమై ఉండాలి.',
    'present_unless' => ':other :value కాకుండా ఉంటే :attribute ఫీల్డ్ ప్రస్తుతమై ఉండాలి.',
    'present_with' => ':values ఉన్నప్పుడు :attribute ఫీల్డ్ ప్రస్తుతమై ఉండాలి.',
    'present_with_all' => ':values ఉన్నప్పుడు :attribute ఫీల్డ్ ప్రస్తుతమై ఉండాలి.',
    'prohibited' => ':attribute ఫీల్డ్ నిషేధించబడింది.',
    'prohibited_if' => ':other :value అయితే :attribute ఫీల్డ్ నిషేధించబడింది.',
    'prohibited_if_accepted' => ':other అంగీకరించబడితే :attribute ఫీల్డ్ నిషేధించబడింది.',
    'prohibited_if_declined' => ':other తిరస్కరించబడితే :attribute ఫీల్డ్ నిషేధించబడింది.',
    'prohibited_unless' => ':other :values లో లేకపోతే :attribute ఫీల్డ్ నిషేధించబడింది.',
    'prohibits' => ':attribute ఫీల్డ్ :other ను ఉండనీయదు.',
    'regex' => ':attribute ఫీల్డ్ ఫార్మాట్ చెల్లదు.',
    'required' => ':attribute ఫీల్డ్ అవసరం.',
    'required_array_keys' => ':attribute ఫీల్డ్ లో ఈ క్రింది ఎంట్రీలు ఉండాలి: :values.',
    'required_if' => ':other :value అయితే :attribute ఫీల్డ్ అవసరం.',
    'required_if_accepted' => ':other అంగీకరించబడితే :attribute ఫీల్డ్ అవసరం.',
    'required_if_declined' => ':other తిరస్కరించబడితే :attribute ఫీల్డ్ అవసరం.',
    'required_unless' => ':other :values లో లేకపోతే :attribute ఫీల్డ్ అవసరం.',
    'required_with' => ':values ఉన్నప్పుడు :attribute ఫీల్డ్ అవసరం.',
    'required_with_all' => ':values అన్ని ఉన్నప్పుడు :attribute ఫీల్డ్ అవసరం.',
    'required_without' => ':values లేకపోతే :attribute ఫీల్డ్ అవసరం.',
    'required_without_all' => ':values ఏదీ లేకపోతే :attribute ఫీల్డ్ అవసరం.',
    'same' => ':attribute మరియు :other ఒకేలా ఉండాలి.',
    'size' => [
        'array' => ':attribute ఫీల్డ్ లో :size అంశాలు ఉండాలి.',
        'file' => ':attribute ఫైలుకు :size కిలోబైట్లు ఉండాలి.',
        'numeric' => ':attribute విలువ :size ఉండాలి.',
        'string' => ':attribute ఫీల్డ్ లో :size అక్షరాలు ఉండాలి.',
    ],
    'starts_with' => ':attribute ఫీల్డ్ ఈ క్రిందివాటిలో ఒకదానితో ప్రారంభమవాలి: :values.',
    'string' => ':attribute ఫీల్డ్ స్ట్రింగ్ కావాలి.',
    'timezone' => ':attribute ఫీల్డ్ చెల్లుబాటు అయ్యే టైమ్ జోన్ కావాలి.',
    'unique' => ':attribute ఇప్పటికే ఉపయోగించబడింది.',
    'uploaded' => ':attribute అప్‌లోడ్ కాలేదు.',
    'uppercase' => ':attribute ఫీల్డ్ పెద్ద అక్షరాలలో ఉండాలి.',
    'url' => ':attribute ఫీల్డ్ సరైన URL కావాలి.',
    'ulid' => ':attribute ఫీల్డ్ సరైన ULID కావాలి.',
    'uuid' => ':attribute ఫీల్డ్ సరైన UUID కావాలి.',

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
