<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Article extends \App\Entity\Article implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'classer' => [parent::class, 'classer', null],
        "\0".parent::class."\0".'commenter' => [parent::class, 'commenter', null],
        "\0".parent::class."\0".'date_article' => [parent::class, 'date_article', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'statut_article' => [parent::class, 'statut_article', null],
        "\0".parent::class."\0".'style' => [parent::class, 'style', null],
        "\0".parent::class."\0".'texte_article' => [parent::class, 'texte_article', null],
        "\0".parent::class."\0".'titre_article' => [parent::class, 'titre_article', null],
        "\0".parent::class."\0".'utilisateur' => [parent::class, 'utilisateur', null],
        'classer' => [parent::class, 'classer', null],
        'commenter' => [parent::class, 'commenter', null],
        'date_article' => [parent::class, 'date_article', null],
        'id' => [parent::class, 'id', null],
        'statut_article' => [parent::class, 'statut_article', null],
        'style' => [parent::class, 'style', null],
        'texte_article' => [parent::class, 'texte_article', null],
        'titre_article' => [parent::class, 'titre_article', null],
        'utilisateur' => [parent::class, 'utilisateur', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
