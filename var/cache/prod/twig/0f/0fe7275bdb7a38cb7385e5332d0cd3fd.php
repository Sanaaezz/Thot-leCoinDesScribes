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

/* includes/recherche.html.twig */
class __TwigTemplate_0f8551767390c9c39c0ee2d83877ed61 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\" flex justify-center px-20\">
  <div class=\"flex items-center p-6 space-x-6 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-500\">
    <div class=\"flex  p-4 w-72 space-x-4 rounded-lg\">
      <input id=\"inputTitre\" class=\"bg-gray-100 outline-none\" type=\"text\" placeholder=\"Titre\" />
    </div>
    <div class=\"flex py-3 px-4 rounded-lg text-gray-500 font-semibold cursor-pointer\">
      <select name=\"categorie\" id=\"selectCat\">
        <option value=\"ttCat\">-- Choisir une categorie --</option>
          ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 10
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 10), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nomCategorie", [], "any", false, false, false, 10), "html", null, true);
            yield "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "      </select>
    </div>
    <div class=\"flex py-3 px-4 rounded-lg text-gray-500 font-semibold cursor-pointer\">
      <select name=\"genre\" id=\"selectGenre\">
        <option value=\"ttGenre\">-- Choisir un genre --</option>
          ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["genres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 18
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 18), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["genre"], "nomGenre", [], "any", false, false, false, 18), "html", null, true);
            yield "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['genre'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "      </select>
    </div>
    <div class=\"bg-gray-800 py-3 px-5 text-white font-semibold rounded-lg hover:shadow-lg transition duration-3000 cursor-pointer\">
      <button onclick=rechercheTitre() >Rechercher</button>
    </div>   
  </div>
</div>


<script>
function rechercheTitre() {
 
  let inputTitre = document.getElementById(\"inputTitre\").value;
  let selectCat = document.getElementById('selectCat').value;
  let selectGenre = document.getElementById('selectGenre').value;
console.log(selectCat,selectGenre,inputTitre);

 let listeparR = {
    titre: inputTitre,
    categorie: selectCat,
    genre: selectGenre,
  };

  let params = {
    method: \"POST\",
    headers: {
      \"Content-Type\": \"application/json; charset=utf-8\",
    },
    body: JSON.stringify(listeparR),
  };

  fetch(\"https://sanaa-thot.simploncertif.fr/api/article/recherche\", params)
    .then((res) => res.text())
    .then((data) => {
      if (data!=='[]'){
        resultRech(JSON.parse(data))
      } else {
        let result = document.getElementById('result');
        result.innerHTML = 'Aucun';
      }
    });
}

function resultRech(articles) {
  let result = document.getElementById('result');
 result.innerHTML = '';

  articles.forEach(article => {
    console.log(article);
    if (article.statut_article == true){
        result.innerHTML+=` <div class='shadow-xl m-6'>
                    <h2> ` + article.titre_article +`</h2>
                    <article></article>
                    <p></p>
                    <div>
                    </div>
                    <a href=\"https://sanaa-thot.simploncertif.fr/article/` + article.id + `\">show</a>
                </div>`
    }
  });

  }
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "includes/recherche.html.twig";
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
        return array (  89 => 20,  78 => 18,  74 => 17,  67 => 12,  56 => 10,  52 => 9,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "includes/recherche.html.twig", "C:\\Users\\ezzsa\\Desktop\\Mise en ligne\\prod\\templates\\includes\\recherche.html.twig");
    }
}
