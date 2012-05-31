<?php

/* pages/classes.twig */
class __TwigTemplate_864c50003e15e7aec754ab5e1eec2ecb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_class' => array($this, 'block_body_class'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "page_layout"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_864c50003e15e7aec754ab5e1eec2ecb_1"] = $this->env->loadTemplate("macros.twig");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Classes | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_body_class($context, array $blocks = array())
    {
        echo "overview";
    }

    // line 9
    public function block_content_header($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>Classes</h1>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    <table>
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "classes"));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 16
            echo "            <tr>
                <td>
                    ";
            // line 18
            if ($this->getAttribute($this->getContext($context, "class"), "interface")) {
                echo "<em>";
            }
            // line 19
            echo "                    ";
            echo $context["__internal_864c50003e15e7aec754ab5e1eec2ecb_1"]->getclass_link($this->getContext($context, "class"), array("target" => "main"), true);
            echo "
                    ";
            // line 20
            if ($this->getAttribute($this->getContext($context, "class"), "interface")) {
                echo "</em>";
            }
            // line 21
            echo "                </td>
                <td>
                    ";
            // line 23
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute($this->getContext($context, "class"), "shortdesc"), $this->getContext($context, "class")), "html", null, true));
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "pages/classes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  72 => 20,  67 => 7,  61 => 5,  55 => 4,  95 => 27,  59 => 15,  43 => 7,  142 => 39,  134 => 36,  127 => 35,  123 => 33,  116 => 32,  112 => 30,  103 => 29,  99 => 27,  93 => 25,  86 => 22,  70 => 18,  64 => 18,  53 => 14,  24 => 3,  41 => 8,  39 => 7,  19 => 2,  377 => 58,  361 => 56,  356 => 55,  353 => 54,  348 => 53,  331 => 52,  329 => 51,  327 => 50,  316 => 49,  301 => 46,  289 => 45,  263 => 40,  259 => 39,  256 => 37,  253 => 35,  251 => 34,  234 => 33,  232 => 32,  220 => 31,  209 => 28,  203 => 27,  197 => 26,  183 => 25,  172 => 22,  166 => 21,  160 => 20,  146 => 19,  133 => 16,  131 => 15,  124 => 13,  117 => 11,  115 => 10,  102 => 9,  51 => 12,  40 => 6,  35 => 6,  32 => 4,  23 => 4,  17 => 1,  108 => 32,  101 => 28,  97 => 26,  88 => 27,  85 => 6,  81 => 23,  77 => 21,  62 => 16,  60 => 16,  56 => 15,  50 => 13,  47 => 11,  44 => 9,  38 => 5,  78 => 23,  74 => 20,  69 => 19,  58 => 13,  54 => 12,  48 => 9,  29 => 5,  92 => 26,  89 => 25,  82 => 8,  79 => 22,  73 => 20,  68 => 19,  66 => 18,  63 => 17,  45 => 10,  42 => 9,  36 => 7,  31 => 5,  20 => 8,  49 => 12,  37 => 6,  33 => 4,  30 => 3,  27 => 6,  26 => 3,);
    }
}
