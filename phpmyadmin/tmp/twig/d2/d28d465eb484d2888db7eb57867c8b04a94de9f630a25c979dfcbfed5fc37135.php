<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* display/export/format_dropdown.twig */
class __TwigTemplate_252860644cfa658d035155520498f0f90155d05f731597b08f2602c0445b8691 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"exportoptions\" id=\"format\">
    <h3>";
        // line 2
        echo _gettext("Format:");
        echo "</h3>
    ";
        // line 3
        echo ($context["dropdown"] ?? null);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "display/export/format_dropdown.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "display/export/format_dropdown.twig", "/home/vagrant/code/phpmyadmin/templates/display/export/format_dropdown.twig");
    }
}
