<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Commentaire extends \App\Entity\Commentaire implements \Doctrine\ORM\Proxy\InternalProxy
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
        "\0".parent::class."\0".'article' => [parent::class, 'article', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'texte_commentaire' => [parent::class, 'texte_commentaire', null],
        "\0".parent::class."\0".'titre_commentaire' => [parent::class, 'titre_commentaire', null],
        "\0".parent::class."\0".'utilisateur' => [parent::class, 'utilisateur', null],
        'article' => [parent::class, 'article', null],
        'id' => [parent::class, 'id', null],
        'texte_commentaire' => [parent::class, 'texte_commentaire', null],
        'titre_commentaire' => [parent::class, 'titre_commentaire', null],
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
