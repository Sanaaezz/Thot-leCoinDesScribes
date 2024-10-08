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

/* article/show.html.twig */
class __TwigTemplate_096a5d4a7bcb29e15f2f9c5442c21d43 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Article";
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
        yield "
<header class=\"h-24 relative w-screen flex\">
    <img class=\"w-full object-cover\" src=\"/images/image/entetearticle.jpg\" alt=\"image d'un livre ouvert\">
    <div class=\"absolute inset-0 flex items-center justify-center\">
        <img class=\"w-1/4 h-auto \" src=\"/images/logo/logolignenoir.png\" alt=\"logo de Thot\">
    </div>
</header>

<main>
    <section class=' mx-10 flex flex-col justify-between'>
        <div class='shadow-2xl shadow-inner m-6'>
            <h2 class=\"text-center p-8  font-semibold text-3xl\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "titreArticle", [], "any", false, false, false, 17), "html", null, true);
        yield "</h2>
            <article class='my-6'>";
        // line 18
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "texteArticle", [], "any", false, false, false, 18);
        yield "</article>
            <p class\"font-semibold italic\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "utilisateur", [], "any", false, false, false, 19), "nomUtilisateur", [], "any", false, false, false, 19), "html", null, true);
        yield "</p>
            <p class='flex justify-end'>";
        // line 20
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "dateArticle", [], "any", false, false, false, 20)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "dateArticle", [], "any", false, false, false, 20), "d F Y"), "html", null, true)) : (yield ""));
        yield "</p>
        </div>
    </section>
    
    <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
        yield "\">Retour vers la page de recherche </a>

    ";
        // line 26
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 26)) {
            // line 27
            yield "    <div>
        <a href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\">edit</a>
    </div>
    ";
        }
        // line 31
        yield " 
    ";
        // line 32
        if ("ROLE_ADMIN") {
            // line 33
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "article/_delete_form.html.twig");
            yield "
        <a href=\"";
            // line 34
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
            yield "\">Retour au tableau de bord </a>
        <p>";
            // line 35
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "statutArticle", [], "any", false, false, false, 35)) ? ("Visible") : ("En attente"));
            yield "</p>
    ";
        }
        // line 37
        yield "    
</main>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "article/show.html.twig";
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
        return array (  137 => 37,  132 => 35,  128 => 34,  123 => 33,  121 => 32,  118 => 31,  112 => 28,  109 => 27,  107 => 26,  102 => 24,  95 => 20,  91 => 19,  87 => 18,  83 => 17,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "article/show.html.twig", "C:\\Users\\ezzsa\\Desktop\\Mise en ligne\\prod\\templates\\article\\show.html.twig");
    }
}
