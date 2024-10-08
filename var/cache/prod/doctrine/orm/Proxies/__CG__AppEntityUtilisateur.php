<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Utilisateur extends \App\Entity\Utilisateur implements \Doctrine\ORM\Proxy\InternalProxy
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
        "\0".parent::class."\0".'auteur' => [parent::class, 'auteur', null],
        "\0".parent::class."\0".'avoir' => [parent::class, 'avoir', null],
        "\0".parent::class."\0".'ecrire' => [parent::class, 'ecrire', null],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'nom_utilisateur' => [parent::class, 'nom_utilisateur', null],
        "\0".parent::class."\0".'nomdeplume_utilisateur' => [parent::class, 'nomdeplume_utilisateur', null],
        "\0".parent::class."\0".'password' => [parent::class, 'password', null],
        "\0".parent::class."\0".'presentation_utilisateur' => [parent::class, 'presentation_utilisateur', null],
        "\0".parent::class."\0".'rgpd_utilisateur' => [parent::class, 'rgpd_utilisateur', null],
        "\0".parent::class."\0".'roles' => [parent::class, 'roles', null],
        'auteur' => [parent::class, 'auteur', null],
        'avoir' => [parent::class, 'avoir', null],
        'ecrire' => [parent::class, 'ecrire', null],
        'email' => [parent::class, 'email', null],
        'id' => [parent::class, 'id', null],
        'nom_utilisateur' => [parent::class, 'nom_utilisateur', null],
        'nomdeplume_utilisateur' => [parent::class, 'nomdeplume_utilisateur', null],
        'password' => [parent::class, 'password', null],
        'presentation_utilisateur' => [parent::class, 'presentation_utilisateur', null],
        'rgpd_utilisateur' => [parent::class, 'rgpd_utilisateur', null],
        'roles' => [parent::class, 'roles', null],
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
