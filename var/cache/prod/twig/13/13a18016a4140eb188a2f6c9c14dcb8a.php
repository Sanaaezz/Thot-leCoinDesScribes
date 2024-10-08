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

/* home/index.html.twig */
class __TwigTemplate_709df68e0be1c2231fc55bb8b4869604 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "THOT";
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
        yield "<main class=\"\">
    <section class =\"flex flex-row\">
        <div class=\" shadow-2xl w-3/6\">
            <img class=\" \" src=\"/images/logo/logogr-removebg.png\" alt=\"logo de Thot\">
        </div>
        <div class=\"relative shadow-2xl w-3/6\">
            <img class=\"w-full h-auto object-cover\" src=\"/images/image/livre.jpg\" alt=\"image de livre\">
                <div class=\"absolute inset-0  flex items-center justify-center p-4\">
                    <h2 class=\" mx-auto text-center  lg:text-xl font-bold italic text-white shadow-2xl shadow-inner\">
                        \"Bienvenue dans cet espace de création et de partage, où chaque mot que vous écrivez compte. Publiez vos poèmes, récits, ou tout autre texte, et laissez-vous inspirer par les œuvres des autres.\"
                    </h2>
                </div>
        </div>
    </section>

    <section class='shadow-2xl m-2 flex flex-row-reverse'>
        <div class='w-1/2 mx-6 flex flex-col justify-between'>
            <div>
                <h2 class='p-4 text-2xl'>texte 1 </h2>
                <article>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque hic debitis, praesentium tempora aperiam distinctio voluptatem asperiores reiciendis quidem nemo sit, recusandae, laudantium deleniti consequuntur rem similique amet nulla excepturi!</article>
            </div>
            <div class=\"flex justify-end \">
                <p class=\"italic pb-6\">par voldemore</p>
            </div>
        </div>
        <div class=\"relative h-80 w-1/2 overflow-hidden\"> 
            <img class='h-full w-full object-cover' src=\"/images/image/rondbois.jpg\" alt=\"image de bois\">
        </div>    
    </section>

    <section class='shadow-2xl m-2 flex flex-row'>
        <div class='w-1/2 mx-6 flex flex-col justify-between'>
            <div>
                <h2 class='p-4 text-2xl'>texte  </h2>
                <article>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque hic debitis, praesentium tempora aperiam distinctio voluptatem asperiores reiciendis quidem nemo sit, recusandae, laudantium deleniti consequuntur rem similique amet nulla excepturi! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores rem nam eaque corrupti consectetur quo eius ut nihil, voluptatibus nobis dicta exercitationem non quaerat! Natus officiis libero ducimus id maiores.</article>
            </div>
            <div class=\"flex justify-end\">
                <p class=\"italic pb-6\">par voldemore</p>
            </div>
        </div>
        <div class=\"relative h-80 w-1/2 overflow-hidden\"> 
            <img class='h-full w-full object-cover' src=\"/images/image/chris-lawton-livre.jpg\" alt=\"image d'une pile de livres\">
        </div>    
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
        return "home/index.html.twig";
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
        return new Source("", "home/index.html.twig", "C:\\Users\\ezzsa\\Desktop\\Mise en ligne\\prod\\templates\\home\\index.html.twig");
    }
}
