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

/* admin/index.html.twig */
class __TwigTemplate_3227d4183da967d9e62bea4ae7b5499e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Tableau de bord";
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
    
<main class=\"\">
<h1>Tableau de bord</h1>
<div class=\" flex \">
  <div x-data=\"{ openTab: 1 }\" class=\"p-8 w-screen\">
    <div class=\" mx-auto \">
      <div class=\"mb-4 flex space-x-10 p-2 bg-white rounded-lg shadow-md\">
        <button x-on:click=\"openTab = 1\" class=\"{ 'bg-stone-800 text-white': openTab === 1 }\" class=\"flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-stone transition-all duration-300\">Textes</button>
        <button x-on:click=\"openTab = 2\" class=\"{ 'bg-stone-800 text-white': openTab === 2 }\" class=\"flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-stone transition-all duration-300\">Utilisateurs</button>
      </div>

      <div x-show=\"openTab === 1\" class=\"transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 border-stone-800\">
        <h2 class=\"text-2xl font-semibold mb-2 text-stone-800\">Liste des textes</h2>
                
        <table class='w-full'>
          <thead>
            <tr>
            <th>Titre</th>
            <th>Date</th>
            <th>Action</th>
            </tr>
          </thead>
          <tbody>
           ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 31
            yield "          <tr>
          <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titreArticle", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
          <td>";
            // line 33
            ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "dateArticle", [], "any", false, false, false, 33)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "dateArticle", [], "any", false, false, false, 33), "Y-m-d "), "html", null, true)) : (yield ""));
            yield "</td>
          <td>";
            // line 34
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "statutArticle", [], "any", false, false, false, 34)) ? ("Visible") : ("En attente"));
            yield "</td>
          <td>
            <a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\">Voir</a>
            ";
            // line 38
            yield "          </td>
          </tr>
              ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            yield "              <tr>
                <td colspan=\"9\">no records found</td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "          </tbody>
        </table>
      </div>

      <div x-show=\"openTab === 2\" class=\"transition-all duration-300 bg-white p-4 rounded-lg shadow-md   border-l-4 border-stone-800\">
        <h2 class=\"text-2xl font-semibold mb-2 text-stone-800\">Liste des utilisateurs</h2>
          <table class=\"table w-full\">
            <thead>
              <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Nom</th>
                <th>Nom de Plume</th>
                <th>actions</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["utilisateurs"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 63
            yield "              <tr>
                <td>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 64), "html", null, true);
            yield "</td>
                <td>";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "email", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
                <td>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "nomUtilisateur", [], "any", false, false, false, 66), "html", null, true);
            yield "</td>
                <td>";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "nomdeplumeUtilisateur", [], "any", false, false, false, 67), "html", null, true);
            yield "</td>
                <td>
                  <a href=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            yield "\">show</a>
                </td>
              </tr>
              ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 73
            yield "              <tr>
                <td colspan=\"9\">no records found</td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "            </tbody>
          </table>
      </div>
    </div>
  </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js\" defer></script>
  
  </main>

  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/index.html.twig";
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
        return array (  199 => 77,  190 => 73,  181 => 69,  176 => 67,  172 => 66,  168 => 65,  164 => 64,  161 => 63,  156 => 62,  137 => 45,  128 => 41,  121 => 38,  117 => 36,  112 => 34,  108 => 33,  104 => 32,  101 => 31,  96 => 30,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/index.html.twig", "C:\\Users\\ezzsa\\Desktop\\Mise en ligne\\prod\\templates\\admin\\index.html.twig");
    }
}
