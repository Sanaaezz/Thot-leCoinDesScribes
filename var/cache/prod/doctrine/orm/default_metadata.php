<?php

// This file has been auto-generated by the Symfony Cache Component.

return [[

'App__Entity__Article__CLASSMETADATA__' => 0,
'App__Entity__Commentaire__CLASSMETADATA__' => 1,
'App__Entity__Utilisateur__CLASSMETADATA__' => 2,
'App__Entity__Avatar__CLASSMETADATA__' => 3,
'App__Entity__Categorie__CLASSMETADATA__' => 4,
'App__Entity__Genre__CLASSMETADATA__' => 5,

], [

0 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Mapping\\FieldMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\FieldMapping')),
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone ($p['Doctrine\\ORM\\Mapping\\ManyToOneAssociationMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ManyToOneAssociationMapping')),
            clone ($p['Doctrine\\ORM\\Mapping\\JoinColumnMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\JoinColumnMapping')),
            clone ($p['Doctrine\\ORM\\Mapping\\ManyToManyOwningSideMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ManyToManyOwningSideMapping')),
            clone ($p['Doctrine\\ORM\\Mapping\\JoinTableMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\JoinTableMapping')),
            clone $p['Doctrine\\ORM\\Mapping\\JoinColumnMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\JoinColumnMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\ManyToOneAssociationMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\JoinColumnMapping'],
            clone ($p['Doctrine\\ORM\\Mapping\\OneToManyAssociationMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\OneToManyAssociationMapping')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Article',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\ArticleRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => $o[1],
                        'titre_article' => $o[2],
                        'texte_article' => $o[3],
                        'date_article' => $o[4],
                        'statut_article' => $o[5],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'titre_article' => 'titre_article',
                        'texte_article' => 'texte_article',
                        'date_article' => 'date_article',
                        'statut_article' => 'statut_article',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'titre_article' => 'titre_article',
                        'texte_article' => 'texte_article',
                        'date_article' => 'date_article',
                        'statut_article' => 'statut_article',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'article',
                    ],
                ],
                'associationMappings' => [
                    [
                        'utilisateur' => $o[6],
                        'classer' => $o[8],
                        'style' => $o[12],
                        'commenter' => $o[14],
                    ],
                ],
                'idGenerator' => [
                    $o[15],
                ],
                'name' => [
                    'App\\Entity\\Article',
                    7 => 'utilisateur_id',
                    9 => 'article_categorie',
                    'article_id',
                    'categorie_id',
                    13 => 'style_id',
                ],
                'id' => [
                    1 => true,
                ],
                'type' => [
                    1 => 'integer',
                    'string',
                    'text',
                    'date',
                    'boolean',
                ],
                'fieldName' => [
                    1 => 'id',
                    'titre_article',
                    'texte_article',
                    'date_article',
                    'statut_article',
                ],
                'columnName' => [
                    1 => 'id',
                    'titre_article',
                    'texte_article',
                    'date_article',
                    'statut_article',
                ],
                'length' => [
                    2 => 50,
                ],
                'fetch' => [
                    6 => 2,
                    8 => 2,
                    12 => 2,
                    14 => 2,
                ],
                'sourceEntity' => [
                    6 => 'App\\Entity\\Article',
                    8 => 'App\\Entity\\Article',
                    12 => 'App\\Entity\\Article',
                    14 => 'App\\Entity\\Article',
                ],
                'inversedBy' => [
                    6 => 'ecrire',
                    8 => 'articles',
                    12 => 'articles',
                ],
                'sourceToTargetKeyColumns' => [
                    6 => [
                        'utilisateur_id' => 'id',
                    ],
                    12 => [
                        'style_id' => 'id',
                    ],
                ],
                'targetToSourceKeyColumns' => [
                    6 => [
                        'id' => 'utilisateur_id',
                    ],
                    12 => [
                        'id' => 'style_id',
                    ],
                ],
                'joinColumns' => [
                    6 => [
                        $o[7],
                    ],
                    9 => [
                        $o[10],
                    ],
                    12 => [
                        $o[13],
                    ],
                ],
                'joinColumnFieldNames' => [
                    6 => [
                        'utilisateur_id' => 'utilisateur_id',
                    ],
                    12 => [
                        'style_id' => 'style_id',
                    ],
                ],
                'unique' => [
                    7 => false,
                    13 => false,
                ],
                'nullable' => [
                    7 => false,
                    13 => false,
                ],
                'referencedColumnName' => [
                    7 => 'id',
                    10 => 'id',
                    'id',
                    13 => 'id',
                ],
                'isOnDeleteCascade' => [
                    8 => true,
                ],
                'joinTable' => [
                    8 => $o[9],
                ],
                'joinTableColumns' => [
                    8 => [
                        'article_id',
                        'categorie_id',
                    ],
                ],
                'relationToSourceKeyColumns' => [
                    8 => [
                        'article_id' => 'id',
                    ],
                ],
                'relationToTargetKeyColumns' => [
                    8 => [
                        'categorie_id' => 'id',
                    ],
                ],
                'inverseJoinColumns' => [
                    9 => [
                        $o[11],
                    ],
                ],
                'onDelete' => [
                    10 => 'CASCADE',
                    'CASCADE',
                ],
                'mappedBy' => [
                    14 => 'article',
                ],
            ],
            'Doctrine\\ORM\\Mapping\\AssociationMapping' => [
                'fieldName' => [
                    6 => 'utilisateur',
                    8 => 'classer',
                    12 => 'style',
                    14 => 'commenter',
                ],
                'targetEntity' => [
                    6 => 'App\\Entity\\Utilisateur',
                    8 => 'App\\Entity\\Categorie',
                    12 => 'App\\Entity\\Genre',
                    14 => 'App\\Entity\\Commentaire',
                ],
            ],
        ],
        $o[0],
        []
    );
},
1 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Mapping\\FieldMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\FieldMapping')),
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone ($p['Doctrine\\ORM\\Mapping\\ManyToOneAssociationMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ManyToOneAssociationMapping')),
            clone ($p['Doctrine\\ORM\\Mapping\\JoinColumnMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\JoinColumnMapping')),
            clone $p['Doctrine\\ORM\\Mapping\\ManyToOneAssociationMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\JoinColumnMapping'],
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Commentaire',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\CommentaireRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => $o[1],
                        'titre_commentaire' => $o[2],
                        'texte_commentaire' => $o[3],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'titre_commentaire' => 'titre_commentaire',
                        'texte_commentaire' => 'texte_commentaire',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'titre_commentaire' => 'titre_commentaire',
                        'texte_commentaire' => 'texte_commentaire',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'commentaire',
                    ],
                ],
                'associationMappings' => [
                    [
                        'utilisateur' => $o[4],
                        'article' => $o[6],
                    ],
                ],
                'idGenerator' => [
                    $o[8],
                ],
                'name' => [
                    'App\\Entity\\Commentaire',
                    5 => 'utilisateur_id',
                    7 => 'article_id',
                ],
                'id' => [
                    1 => true,
                ],
                'type' => [
                    1 => 'integer',
                    'string',
                    'string',
                ],
                'fieldName' => [
                    1 => 'id',
                    'titre_commentaire',
                    'texte_commentaire',
                ],
                'columnName' => [
                    1 => 'id',
                    'titre_commentaire',
                    'texte_commentaire',
                ],
                'length' => [
                    2 => 50,
                    255,
                ],
                'fetch' => [
                    4 => 2,
                    6 => 2,
                ],
                'sourceEntity' => [
                    4 => 'App\\Entity\\Commentaire',
                    6 => 'App\\Entity\\Commentaire',
                ],
                'inversedBy' => [
                    4 => 'auteur',
                    6 => 'commenter',
                ],
                'sourceToTargetKeyColumns' => [
                    4 => [
                        'utilisateur_id' => 'id',
                    ],
                    6 => [
                        'article_id' => 'id',
                    ],
                ],
                'targetToSourceKeyColumns' => [
                    4 => [
                        'id' => 'utilisateur_id',
                    ],
                    6 => [
                        'id' => 'article_id',
                    ],
                ],
                'joinColumns' => [
                    4 => [
                        $o[5],
                    ],
                    6 => [
                        $o[7],
                    ],
                ],
                'joinColumnFieldNames' => [
                    4 => [
                        'utilisateur_id' => 'utilisateur_id',
                    ],
                    6 => [
                        'article_id' => 'article_id',
                    ],
                ],
                'referencedColumnName' => [
                    5 => 'id',
                    7 => 'id',
                ],
            ],
            'Doctrine\\ORM\\Mapping\\AssociationMapping' => [
                'fieldName' => [
                    4 => 'utilisateur',
                    6 => 'article',
                ],
                'targetEntity' => [
                    4 => 'App\\Entity\\Utilisateur',
                    6 => 'App\\Entity\\Article',
                ],
            ],
        ],
        $o[0],
        []
    );
},
2 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Mapping\\FieldMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\FieldMapping')),
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone ($p['Doctrine\\ORM\\Mapping\\ManyToOneAssociationMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ManyToOneAssociationMapping')),
            clone ($p['Doctrine\\ORM\\Mapping\\JoinColumnMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\JoinColumnMapping')),
            clone ($p['Doctrine\\ORM\\Mapping\\OneToManyAssociationMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\OneToManyAssociationMapping')),
            clone $p['Doctrine\\ORM\\Mapping\\OneToManyAssociationMapping'],
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Utilisateur',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\UtilisateurRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => $o[1],
                        'email' => $o[2],
                        'roles' => $o[3],
                        'password' => $o[4],
                        'rgpd_utilisateur' => $o[5],
                        'nom_utilisateur' => $o[6],
                        'nomdeplume_utilisateur' => $o[7],
                        'presentation_utilisateur' => $o[8],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'email' => 'email',
                        'roles' => 'roles',
                        'password' => 'password',
                        'rgpd_utilisateur' => 'rgpd_utilisateur',
                        'nom_utilisateur' => 'nom_utilisateur',
                        'nomdeplume_utilisateur' => 'nomdeplume_utilisateur',
                        'presentation_utilisateur' => 'presentation_utilisateur',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'email' => 'email',
                        'roles' => 'roles',
                        'password' => 'password',
                        'rgpd_utilisateur' => 'rgpd_utilisateur',
                        'nom_utilisateur' => 'nom_utilisateur',
                        'nomdeplume_utilisateur' => 'nomdeplume_utilisateur',
                        'presentation_utilisateur' => 'presentation_utilisateur',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'utilisateur',
                        'uniqueConstraints' => [
                            'UNIQ_IDENTIFIER_EMAIL' => [
                                'fields' => [
                                    'email',
                                ],
                            ],
                        ],
                    ],
                ],
                'associationMappings' => [
                    [
                        'avoir' => $o[9],
                        'auteur' => $o[11],
                        'ecrire' => $o[12],
                    ],
                ],
                'idGenerator' => [
                    $o[13],
                ],
                'name' => [
                    'App\\Entity\\Utilisateur',
                    10 => 'avoir_id',
                ],
                'id' => [
                    1 => true,
                ],
                'type' => [
                    1 => 'integer',
                    'string',
                    'json',
                    'string',
                    'datetime',
                    'string',
                    'string',
                    'string',
                ],
                'fieldName' => [
                    1 => 'id',
                    'email',
                    'roles',
                    'password',
                    'rgpd_utilisateur',
                    'nom_utilisateur',
                    'nomdeplume_utilisateur',
                    'presentation_utilisateur',
                ],
                'columnName' => [
                    1 => 'id',
                    'email',
                    'roles',
                    'password',
                    'rgpd_utilisateur',
                    'nom_utilisateur',
                    'nomdeplume_utilisateur',
                    'presentation_utilisateur',
                ],
                'length' => [
                    2 => 180,
                    6 => 50,
                    50,
                    255,
                ],
                'nullable' => [
                    6 => true,
                    8 => true,
                ],
                'fetch' => [
                    9 => 2,
                    11 => 2,
                    2,
                ],
                'sourceEntity' => [
                    9 => 'App\\Entity\\Utilisateur',
                    11 => 'App\\Entity\\Utilisateur',
                    'App\\Entity\\Utilisateur',
                ],
                'inversedBy' => [
                    9 => 'utilisateurs',
                ],
                'sourceToTargetKeyColumns' => [
                    9 => [
                        'avoir_id' => 'id',
                    ],
                ],
                'targetToSourceKeyColumns' => [
                    9 => [
                        'id' => 'avoir_id',
                    ],
                ],
                'joinColumns' => [
                    9 => [
                        $o[10],
                    ],
                ],
                'joinColumnFieldNames' => [
                    9 => [
                        'avoir_id' => 'avoir_id',
                    ],
                ],
                'referencedColumnName' => [
                    10 => 'id',
                ],
                'mappedBy' => [
                    11 => 'utilisateur',
                    'utilisateur',
                ],
                'cascade' => [
                    12 => [
                        'remove',
                    ],
                ],
                'orphanRemoval' => [
                    12 => true,
                ],
            ],
            'Doctrine\\ORM\\Mapping\\AssociationMapping' => [
                'fieldName' => [
                    9 => 'avoir',
                    11 => 'auteur',
                    'ecrire',
                ],
                'targetEntity' => [
                    9 => 'App\\Entity\\Avatar',
                    11 => 'App\\Entity\\Commentaire',
                    'App\\Entity\\Article',
                ],
            ],
        ],
        $o[0],
        []
    );
},
3 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Mapping\\FieldMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\FieldMapping')),
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone ($p['Doctrine\\ORM\\Mapping\\OneToManyAssociationMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\OneToManyAssociationMapping')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Avatar',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\AvatarRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => $o[1],
                        'image_avatar' => $o[2],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'image_avatar' => 'image_avatar',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'image_avatar' => 'image_avatar',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'avatar',
                    ],
                ],
                'associationMappings' => [
                    [
                        'utilisateurs' => $o[3],
                    ],
                ],
                'idGenerator' => [
                    $o[4],
                ],
                'name' => [
                    'App\\Entity\\Avatar',
                ],
                'id' => [
                    1 => true,
                ],
                'type' => [
                    1 => 'integer',
                    'string',
                ],
                'fieldName' => [
                    1 => 'id',
                    'image_avatar',
                ],
                'columnName' => [
                    1 => 'id',
                    'image_avatar',
                ],
                'length' => [
                    2 => 255,
                ],
                'fetch' => [
                    3 => 2,
                ],
                'sourceEntity' => [
                    3 => 'App\\Entity\\Avatar',
                ],
                'mappedBy' => [
                    3 => 'avoir',
                ],
            ],
            'Doctrine\\ORM\\Mapping\\AssociationMapping' => [
                'fieldName' => [
                    3 => 'utilisateurs',
                ],
                'targetEntity' => [
                    3 => 'App\\Entity\\Utilisateur',
                ],
            ],
        ],
        $o[0],
        []
    );
},
4 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Mapping\\FieldMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\FieldMapping')),
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone ($p['Doctrine\\ORM\\Mapping\\ManyToManyInverseSideMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ManyToManyInverseSideMapping')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Categorie',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\CategorieRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => $o[1],
                        'nom_categorie' => $o[2],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'nom_categorie' => 'nom_categorie',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'nom_categorie' => 'nom_categorie',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'categorie',
                    ],
                ],
                'associationMappings' => [
                    [
                        'articles' => $o[3],
                    ],
                ],
                'idGenerator' => [
                    $o[4],
                ],
                'name' => [
                    'App\\Entity\\Categorie',
                ],
                'id' => [
                    1 => true,
                ],
                'type' => [
                    1 => 'integer',
                    'string',
                ],
                'fieldName' => [
                    1 => 'id',
                    'nom_categorie',
                ],
                'columnName' => [
                    1 => 'id',
                    'nom_categorie',
                ],
                'length' => [
                    2 => 50,
                ],
                'nullable' => [
                    2 => true,
                ],
                'fetch' => [
                    3 => 2,
                ],
                'sourceEntity' => [
                    3 => 'App\\Entity\\Categorie',
                ],
                'mappedBy' => [
                    3 => 'classer',
                ],
            ],
            'Doctrine\\ORM\\Mapping\\AssociationMapping' => [
                'fieldName' => [
                    3 => 'articles',
                ],
                'targetEntity' => [
                    3 => 'App\\Entity\\Article',
                ],
            ],
        ],
        $o[0],
        []
    );
},
5 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Mapping\\FieldMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\FieldMapping')),
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone ($p['Doctrine\\ORM\\Mapping\\OneToManyAssociationMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\OneToManyAssociationMapping')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Genre',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\GenreRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => $o[1],
                        'nom_genre' => $o[2],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'nom_genre' => 'nom_genre',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'nom_genre' => 'nom_genre',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'genre',
                    ],
                ],
                'associationMappings' => [
                    [
                        'articles' => $o[3],
                    ],
                ],
                'idGenerator' => [
                    $o[4],
                ],
                'name' => [
                    'App\\Entity\\Genre',
                ],
                'id' => [
                    1 => true,
                ],
                'type' => [
                    1 => 'integer',
                    'string',
                ],
                'fieldName' => [
                    1 => 'id',
                    'nom_genre',
                ],
                'columnName' => [
                    1 => 'id',
                    'nom_genre',
                ],
                'length' => [
                    2 => 50,
                ],
                'cascade' => [
                    3 => [
                        'remove',
                    ],
                ],
                'fetch' => [
                    3 => 2,
                ],
                'orphanRemoval' => [
                    3 => true,
                ],
                'sourceEntity' => [
                    3 => 'App\\Entity\\Genre',
                ],
                'mappedBy' => [
                    3 => 'style',
                ],
            ],
            'Doctrine\\ORM\\Mapping\\AssociationMapping' => [
                'fieldName' => [
                    3 => 'articles',
                ],
                'targetEntity' => [
                    3 => 'App\\Entity\\Article',
                ],
            ],
        ],
        $o[0],
        []
    );
},

]];
