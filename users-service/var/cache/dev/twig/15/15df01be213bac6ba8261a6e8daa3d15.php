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

/* @WebProfiler/Collector/twig.html.twig */
class __TwigTemplate_b71fdc0cf219333517e52929f872a46f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/twig.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        yield "    ";
        $context["time"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "templatecount", [], "any", false, false, false, 4)) ? (Twig\Extension\CoreExtension::sprintf("%0.0f", CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, false, 4))) : ("n/a"));
        // line 5
        yield "    ";
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 6
            yield "        ";
            yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/twig.svg");
            yield "
        <span class=\"sf-toolbar-value\">";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["time"] ?? null), "html", null, true);
            yield "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        yield "
    ";
        // line 11
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 12
            yield "        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["time"] ?? null), "html", null, true);
            yield " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "templatecount", [], "any", false, false, false, 18), "html", null, true);
            yield "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "blockcount", [], "any", false, false, false, 22), "html", null, true);
            yield "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "macrocount", [], "any", false, false, false, 26), "html", null, true);
            yield "</span>
        </div>
    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 29
        yield "
    ";
        // line 30
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 33
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 34
        yield "    <span class=\"label ";
        yield (((0 == CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "templateCount", [], "any", false, false, false, 34))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 35
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/twig.svg");
        yield "</span>
        <strong>Twig</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 40
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 41
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "templatecount", [], "any", false, false, false, 41) == 0)) {
            // line 42
            yield "        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>
    ";
        } else {
            // line 48
            yield "        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.0f", CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, false, 52)), "html", null, true);
            yield " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "templatecount", [], "any", false, false, false, 57), "html", null, true);
            yield "</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "blockcount", [], "any", false, false, false, 62), "html", null, true);
            yield "</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "macrocount", [], "any", false, false, false, 67), "html", null, true);
            yield "</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table id=\"twig-table\">
            <thead>
            <tr>
                <th scope=\"col\">Template Name &amp; Path</th>
                <th class=\"num-col\" scope=\"col\">Render Count</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "templates", [], "any", false, false, false, 86));
            foreach ($context['_seq'] as $context["template"] => $context["count"]) {
                // line 87
                yield "                <tr>";
                // line 88
                $context["file"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "templatePaths", [], "any", false, true, false, 88), $context["template"], [], "array", true, true, false, 88)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "templatePaths", [], "any", false, true, false, 88)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["template"]] ?? null) : null), false)) : (false));
                // line 89
                $context["link"] = ((($context["file"] ?? null)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(($context["file"] ?? null), 1)) : (false));
                // line 90
                yield "<td>
                        <span class=\"sf-icon icon-twig\">";
                // line 91
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/twig.svg");
                yield "</span>
                        ";
                // line 92
                if (($context["link"] ?? null)) {
                    // line 93
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link"] ?? null), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["file"] ?? null), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["template"], "html", null, true);
                    yield "</a>
                            <div>
                                <a class=\"text-muted\" href=\"";
                    // line 95
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link"] ?? null), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["file"] ?? null), "html", null, true);
                    yield "\">
                                    ";
                    // line 96
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileRelative(($context["file"] ?? null)), ($context["file"] ?? null)), "html", null, true);
                    yield "
                                </a>
                            </div>
                        ";
                } else {
                    // line 100
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["template"], "html", null, true);
                    yield "
                        ";
                }
                // line 102
                yield "                    </td>
                    <td class=\"font-normal num-col\">";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
                yield "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            yield "            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            ";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "htmlcallgraph", [], "any", false, false, false, 112), "html", null, true);
            yield "
        </div>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/twig.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  292 => 112,  284 => 106,  275 => 103,  272 => 102,  266 => 100,  259 => 96,  253 => 95,  243 => 93,  241 => 92,  237 => 91,  234 => 90,  232 => 89,  230 => 88,  228 => 87,  224 => 86,  202 => 67,  194 => 62,  186 => 57,  178 => 52,  172 => 48,  164 => 42,  161 => 41,  154 => 40,  142 => 35,  137 => 34,  130 => 33,  120 => 30,  117 => 29,  110 => 26,  103 => 22,  96 => 18,  89 => 14,  85 => 12,  83 => 11,  80 => 10,  73 => 7,  68 => 6,  65 => 5,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/twig.html.twig", "C:\\Users\\Arman Saleem\\Desktop\\symfony\\users-service\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\twig.html.twig");
    }
}
