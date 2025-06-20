<?php

declare(strict_types=1);

return [
    'isin' => 'Le champ :attribute doit être un code ISIN valide.',
    'iban' => 'Le champ :attribute doit être un code IBAN valide.',
    'bic' => 'Le champ :attribute doit être un code BIC valide.',
    'hexadecimalcolor' => 'Le champ :attribute doit être un code couleur hexadécimal valide.',
    'creditcard' => 'Le champ :attribute doit être un numéro de carte de crédit valide.',
    'isbn' => 'Le champ :attribute doit être un numéro ISBN valide.',
    'isrc' => 'Le champ :attribute doit être un code ISRC (International Standard Recording Code) valide.',
    'username' => 'La valeur de :attribute doit être un pseudonyme valide : chaine alphanumérique entre 3' .
        ' et 20 caractères, débutant obligatoirement par une lettre, acceptant les tirets et tirets bas.',
    'htmlclean' => 'La valeur de :attribute ne doit pas contenir de code HTML.',
    'domainname' => ':attribute doit être un nom de domaine valide.',
    'jwt' => 'La valeur :attribute ne correspond pas au format JSON Web Token.',
    'imei' => 'La valeur :attribute doit être une code IMEI valide.',
    'macaddress' => 'La valeur :attribute doit être une adresse MAC valide.',
    'slug' => 'Le champ ::attribute doit respecter le format de paramètre d\'URL optimisé pour le ' .
        'SEO : mots composés de caractères alphanumériques, séparés par des tirets.',
    'semver' => 'La champ :attribute doit être un numéro de version ' .
        'respectant la norme de gestion sémantique de version.',
    'luhn' => 'Le champ :attribute n\'est pas vérifié par l\'algorithme de Luhn.',
    'base64' => 'Le champ :attribute doit être un code Base64 valide.',
    'issn' => 'La valeur :attribute doit être un numéro ISSN valide.',
    'lowercase' => 'Le champ :attribute ne doit pas comporter de lettres majuscules.',
    'uppercase' => 'Le champ :attribute ne doit pas comporter de lettres minuscules.',
    'titlecase' => 'Le champ :attribute doit être formaté en "Title Case" : mots composés de ' .
        'caractères alphanumériques, commençant chacun par une lettre majuscule, séparés par des espaces.',
    'snakecase' => 'Le champ :attribute doit être formaté en "snake_case" : mots composés de ' .
        ' lettres minuscules, séparés par des tirets bas.',
    'kebabcase' => 'Le champ :attribute doit être formaté en "kebab-case" : mots composés de ' .
        ' lettres minuscules, séparés par des tirets.',
    'camelcase' => 'Le champ :attribute doit être formaté en "CamelCase" : mots composés de ' .
        ' lettres minuscules commençant chacun par une lettre majuscule, liés les uns aux autres sans espace.',
    'cidr' => 'Le champ :attribute doit être un format CIDR valide.',
    'datauri' => 'Le :attribute doit être un Data URL valide.',
    'ulid' => 'Le :attribute doit être un ULID valide.',
    'ean' => 'Le :attribute doit être un EAN valide.',
    'gtin' => 'Le :attribute doit être un GTIN valide.',
    'postalcode' => 'La valeur :attribute doit être un code postal valide.',
    'mimetype' => 'La valeur :attribute ne contient pas de type de média Internet valide (type MIME).',
    'austrianinsurancenumber' => 'La valeur :attribute ne contient pas de numéro d\'assurance autrichien valide.',
    'grid' => 'Le :attribute doit être un Global Release Identifier (GRid) valide.',
    'hslcolor' => ':attribute n\'est pas une valeur de couleur HSL valide',
    'hsvcolor' => ':attribute n\'est pas une valeur de couleur HSV valide',
    'latitude' => ':attribute n\'est pas une latitude valide.',
    'longitude' => ':attribute n\'est pas une longitude valide.',
    'latlng' => ':attribute n\'est pas une paire de coordonnées géographiques valables.',
];
