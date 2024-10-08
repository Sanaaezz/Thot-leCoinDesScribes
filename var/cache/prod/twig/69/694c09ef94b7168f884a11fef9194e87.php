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

/* article/index.html.twig */
class __TwigTemplate_d655ebd39a299598cf4ea1fb392d1ddf extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Article index";
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
    <header class=\"flex flex-nowrap \">
        <div class=\"w-3/6\">
            <img class=\"\" src=\"images/logo/logogr-removebg.png\" alt=\"logo de Thot\">
        </div>
        <div class=\"w-3/6\">
                

                
                
            <img class=\"\" src=\"images/image/livrebibli.jpg\" alt=\"image d'un livre au milieu d'une bibliotheque\">
        </div>
    </header>
   
   
    <main class=' w-full'>
        <h1 class='text-4xl mx-auto'>Le Coin Lecture</h1>

            ";
        // line 24
        yield from         $this->loadTemplate("includes/recherche.html.twig", "article/index.html.twig", 24)->unwrap()->yield($context);
        // line 25
        yield "
        <section id=\"result\" >
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 28
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "statutArticle", [], "any", false, false, false, 28)) {
                // line 29
                yield "                    <div class='shadow-xl m-6'>
                        <h2>";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titreArticle", [], "any", false, false, false, 30), "html", null, true);
                yield "</h2>
                        <article>";
                // line 31
                yield Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "texteArticle", [], "any", false, false, false, 31), 0, 200);
                yield "</article>
                        <p>";
                // line 32
                ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "dateArticle", [], "any", false, false, false, 32)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "dateArticle", [], "any", false, false, false, 32), "d F Y"), "html", null, true)) : (yield ""));
                yield "</p>
                        <div>
                            <a href=\"";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                yield "\">show</a>
                        </div>
                    </div>
                ";
            }
            // line 38
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield " 
        </section>
  

    </main>


";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "article/index.html.twig";
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
        return array (  126 => 38,  119 => 34,  114 => 32,  110 => 31,  106 => 30,  103 => 29,  100 => 28,  96 => 27,  92 => 25,  90 => 24,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "article/index.html.twig", "C:\\Users\\ezzsa\\Desktop\\Mise en ligne\\prod\\templates\\article\\index.html.twig");
    }
}
