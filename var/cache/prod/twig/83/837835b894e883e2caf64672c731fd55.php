<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* home/cguthot.html.twig */
class __TwigTemplate_666d9019058b00b9bfaa0a16f47a0b1e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "home/cguthot.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " CGU Thot";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<h1>Conditions générales d'utilisation</h1>
<p>En vigueur au 20/09/2024</p>

Voici votre texte formaté avec des balises HTML :

```html
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Conditions Générales d'Utilisation - Thot</title>
</head>
<body>

    <h1>Conditions Générales d'Utilisation (CGU)</h1>

    <p>Les présentes conditions générales d'utilisation (dites « CGU ») ont pour objet l'encadrement juridique des modalités de mise à disposition du site et des services et de définir les conditions d’accès et d’utilisation des services par « l'Utilisateur ».</p>

    <p>Les présentes CGU sont accessibles sur le site à la rubrique « CGU ».</p>

    <p>Toute inscription ou utilisation du site implique l'acceptation sans aucune réserve ni restriction des présentes CGU par l’utilisateur. Lors de l'inscription sur le site via le Formulaire d’inscription, chaque utilisateur accepte expressément les présentes CGU en cochant la case précédant le texte suivant : « Je reconnais avoir lu et compris les CGU et je les accepte ».</p>

    <p>En cas de non-acceptation des CGU stipulées dans le présent contrat, l'Utilisateur se doit de renoncer à l'accès des services proposés par le site.</p>

    <p><strong>Thot.simploncertif.fr</strong> se réserve le droit de modifier unilatéralement et à tout moment le contenu des présentes CGU.</p>

    <h2>Article 1 : Les mentions légales</h2>

    <p>L’édition et la direction de la publication du site <strong>Thot.simploncertif.fr</strong> est assurée par <strong>sanaa</strong>.</p>
    <p>Adresse e-mail: <a href=\"mailto:thot.lescoindesscribes@gmail.com\">thot.lescoindesscribes@gmail.com</a>.</p>
    <p>L'hébergeur du site <strong>Thot.simploncertif.fr</strong> est la société <strong>O2switch</strong>.</p>

    <h2>Article 2 : Accès au site</h2>

    <p>Le site <strong>Thot.simploncertif.fr</strong> permet à l'Utilisateur un accès gratuit aux services suivants :</p>
    <ul>
        <li><strong>Consultation de contenus :</strong> Le Site permet à tout utilisateur d’accéder librement à des textes littéraires, articles, poèmes et autres créations écrites, rédigés et partagés par d'autres utilisateurs.</li>
        <li><strong>Publication de contenus :</strong


";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/cguthot.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "home/cguthot.html.twig", "C:\\Users\\ezzsa\\Desktop\\Mise en ligne\\prod\\templates\\home\\cguthot.html.twig");
    }
}
