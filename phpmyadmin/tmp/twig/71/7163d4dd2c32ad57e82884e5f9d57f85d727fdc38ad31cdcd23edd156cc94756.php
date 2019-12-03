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

/* table/structure/add_column.twig */
class __TwigTemplate_e57d9e3ff203e92abeefaa2032fff5058a3a35e2baef932ca87bf000c205f7a7 extends \Twig\Template
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
        echo "<form method=\"post\" action=\"tbl_addfield.php\" id=\"addColumns\" name=\"addColumns\">
    ";
        // line 2
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
    ";
        // line 3
        if (PhpMyAdmin\Util::showIcons("ActionLinksMode")) {
            // line 4
            echo "        ";
            echo PhpMyAdmin\Util::getImage("b_insrow", _gettext("Add column"));
            echo "&nbsp;
    ";
        }
        // line 6
        echo "    ";
        $context["num_fields"] = ('' === $tmp = "<input type=\"number\" name=\"num_fields\" value=\"1\" onfocus=\"this.select()\" min=\"1\" required />") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        echo sprintf(_gettext("Add %s column(s)"), ($context["num_fields"] ?? null));
        echo "
    <input type=\"hidden\" name=\"field_where\" value=\"after\"/>&nbsp;
    ";
        // line 12
        echo "    <select name=\"after_field\">
        <option value=\"first\" data-pos=\"first\">
            ";
        // line 14
        echo _gettext("at beginning of table");
        // line 15
        echo "        </option>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns_list"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["one_column_name"]) {
            // line 17
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["one_column_name"], "html", null, true);
            echo "\"";
            // line 18
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "revindex0", [], "any", false, false, false, 18) == 0)) ? (" selected=\"selected\"") : (""));
            echo ">
                ";
            // line 19
            echo twig_escape_filter($this->env, sprintf(_gettext("after %s"), $context["one_column_name"]), "html", null, true);
            echo "
            </option>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['one_column_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </select>
    <input type=\"submit\" value=\"";
        // line 23
        echo _gettext("Go");
        echo "\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "table/structure/add_column.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 23,  112 => 22,  95 => 19,  91 => 18,  87 => 17,  70 => 16,  67 => 15,  65 => 14,  61 => 12,  55 => 9,  52 => 6,  46 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/structure/add_column.twig", "/home/vagrant/code/phpmyadmin/templates/table/structure/add_column.twig");
    }
}
