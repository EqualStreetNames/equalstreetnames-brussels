<?php

declare(strict_types=1);

return [
    'languages' => ['de', 'en', 'fr', 'nl'],

    'exclude' => [
        'relation' => [],
        'way' => [
            15221322,
            22664846,
            22688085,
            23045734,
            23598098,
            23782172,
            24792435,
            26573618,
            27182188,
            28958217,
            29021413,
            29021418,
            29021421,
            29025014,
            29211792,
            30293155,
            33119697,
            34005236,
            35694074,
            37857242,
            40666367,
            42404365,
            42954006,
            76171051,
            80927283,
            117987876,
            126494256,
            129212001,
            147682495,
            154508000,
            169739343,
            253872698,
            255730203,
            370872623,
            418645572,
            432891657,
            496138369,
            675686923,
            721646443,
            789007643,
        ],
    ],

    'gender' => [
        'relation' => [
            '3066477'  => '?', // Place Van Meyel - Van Meyelplein
            '3256835'  => 'F', // Avenue Hélène - Helenalaan
            '3228251'  => 'F', // Avenue Jeanne - Johannalaan
            '3505178'  => 'F', // Avenue Paule - Paulalaan
            '11048375' => 'F', // Avenue Victoria - Victorialaan
            '3020491'  => 'F', // Drève Soetkin - Soetkindreef
            '2981441'  => 'F', // Rue Decrée - Decréestraat
            '11048377' => 'F', // Rue Marianne - Mariannestraat
            '6005861'  => 'F', // Rue Mercelis - Mercelisstraat
            '3049100'  => 'F', // Rue de Beughem - de Beughemstraat
            '3438961'  => 'F', // Rue de Ciplet - de Cipletstraat
            '3217433'  => 'M', // Avenue Chanoine Roose - Kanunnik Rooselaan
            '3210021'  => 'M', // Avenue Docteur Lemoine - Dokter Lemoinelaan
            '3258838'  => 'M', // Avenue Général de Longueville - Generaal de Longuevillelaan
            '2984376'  => 'M', // Avenue Georges Henri - Georges Henrilaan
            '3110486'  => 'M', // Avenue Hansen-Soulie - Hansen-Soulielaan
            '3495502'  => 'M', // Avenue Père Hilaire - Pater Hilariuslaan
            '3500230'  => 'M', // Avenue Saint-Jean - Sint-Janslaan
        ],
        'way' => [
            '15804085'  => '?', // Avenue Van Bever - Van Beverlaan
            '599481032' => '?', // Avenue Van Bever - Van Beverlaan
            '23104735'  => '?', // Square Van Bever - Van Beversquare
            '23104737'  => '?', // Square Van Bever - Van Beversquare
            '23647145'  => 'F', // Avenue Juliette - Juliettelaan
            '458810331' => 'M', // Avenue des Frères Goemaere - Gebroeders Goemaerelaan
            '35830442'  => 'M', // Avenue des Frères Legrain - Gebroeders Legrainlaan
            '8250579'   => 'M', // Avenue des Frères Legrain - Gebroeders Legrainlaan
        ],
    ],

    'instances' => [
        'Q5'        => true,  // human
        'Q2985549'  => true,  // mononymous person
        'Q20643955' => true,  // human biblical figure

        'Q8436'     => false, // family
        'Q101352'   => false, // family name
        'Q327245'   => false, // team
        'Q3046146'  => false, // married couple
        'Q13417114' => false, // noble family

        'Q532'      => false, // village
        'Q699'      => false, // fairy tale
        'Q2095'     => false, // food
        'Q3950'     => false, // villa
        'Q3957'     => false, // town
        'Q13266'    => false, // cookie
        'Q16521'    => false, // taxon
        'Q16917'    => false, // hospital
        'Q22865'    => false, // independent city of Germany
        'Q22698'    => false, // park
        'Q23413'    => false, // castle
        'Q23691'    => false, // national anthem
        'Q28640'    => false, // profession
        'Q45713'    => false, // titan
        'Q47521'    => false, // stream
        'Q79007'    => false, // street
        'Q81799'    => false, // fast food
        'Q123705'   => false, // neighborhood
        'Q133311'   => false, // tribe
        'Q178342'   => false, // archangel
        'Q176799'   => false, // military unit
        'Q185583'   => false, // candy
        'Q188055'   => false, // siege
        'Q200250'   => false, // metropolis
        'Q205985'   => false, // goddess
        'Q207174'   => false, // personification
        'Q212238'   => false, // civil servant
        'Q273854'   => false, // Gauls
        'Q429795'   => false, // mineral variety
        'Q476682'   => false, // anemoi
        'Q486972'   => false, // human settlement
        'Q493522'   => false, // municipality of Belgium
        'Q507850'   => false, // Marian apparition
        'Q511056'   => false, // solar deity
        'Q355567'   => false, // noble title
        'Q697175'   => false, // launch vehicle
        'Q690175'   => false, // angel in Judaism
        'Q707813'   => false, // Hanseatic city
        'Q727002'   => false, // charter
        'Q879050'   => false, // manor house
        'Q902814'   => false, // border town
        'Q1202402'  => false, // townhouse
        'Q1509831'  => false, // title of Mary
        'Q1549591'  => false, // big city
        'Q1637706'  => false, // city with millions of inhabitants
        'Q1916821'  => false, // water deity
        'Q1998962'  => false, // beer style
        'Q2202509'  => false, // Roman city
        'Q2785216'  => false, // municipality section
        'Q3305213'  => false, // painting
        'Q3658341'  => false, // literary character
        'Q4164871'  => false, // position
        'Q4306757'  => false, // Mukarrabun
        'Q5200157'  => false, // confections
        'Q6857854'  => false, // military road
        'Q7832362'  => false, // traditional story
        'Q10822464' => false, // angel in Christianity
        'Q11688446' => false, // Roman deity
        'Q12737077' => false, // occupation
        'Q14073567' => false, // sibling duo
        'Q14406742' => false, // comic book series
        'Q14752696' => false, // Roman building
        'Q15054484' => false, // Belgian noble family
        'Q15273785' => false, // Belgian municipality with city privileges
        'Q15632617' => false, // fictional human
        'Q16861482' => false, // potée
        'Q18679117' => false, // potato dish
        'Q19594662' => false, // fictional fox
        'Q20902363' => false, // mythical human-animal hybrid
        'Q21070568' => false, // human who may be fictional
        'Q22675015' => false, // type of quantum particle
        'Q22988604' => false, // mythological Greek character
        'Q22989102' => false, // Greek deity
        'Q24284226' => false, // agricultural deity
        'Q24434794' => false, // king in Greek mythology
        'Q25810847' => false, // folkloristic character
        'Q27921916' => false, // anthropomorphic character
        'Q41863069' => false, // war deity
        'Q42109240' => false, // literary theme
        'Q42744322' => false, // urban municipality of Germany
        'Q50386450' => false, // operatic character
        'Q55983715' => false, // polyphyletic common name
        'Q56884562' => false, // animated film series
        'Q85635630' => false, // urban district of North Rhine-Westphalia
    ],
];
