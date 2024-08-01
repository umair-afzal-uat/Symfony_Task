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

/* @WebProfiler/Collector/cache.html.twig */
class __TwigTemplate_67ec654d1a69e27dcedd16fdff5ed2ad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/cache.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/cache.html.twig", 1);
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
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 4), "calls", [], "any", false, false, false, 4) > 0)) {
            // line 5
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 6
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/cache.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 7), "calls", [], "any", false, false, false, 7), "html", null, true);
                yield "</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">in</span>
                <span class=\"sf-toolbar-value\">";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 10), "time", [], "any", false, false, false, 10) * 1000)), "html", null, true);
                yield "</span>
                <span class=\"sf-toolbar-label\">ms</span>
            </span>
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 14
            yield "        ";
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 15
                yield "        <div class=\"sf-toolbar-info-piece\">
            <b>Cache Calls</b>
            <span>";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 17), "calls", [], "any", false, false, false, 17), "html", null, true);
                yield "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 21), "time", [], "any", false, false, false, 21) * 1000)), "html", null, true);
                yield " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache hits</b>
            <span>";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 25), "hits", [], "any", false, false, false, 25), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 25), "reads", [], "any", false, false, false, 25), "html", null, true);
                if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 25), "hit_read_ratio", [], "any", false, false, false, 25))) {
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 25), "hit_read_ratio", [], "any", false, false, false, 25), "html", null, true);
                    yield "%)";
                }
                yield "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache writes</b>
            <span>";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 29), "writes", [], "any", false, false, false, 29), "html", null, true);
                yield "</span>
        </div>
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 32
            yield "
        ";
            // line 33
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
            yield "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 37
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 38
        yield "    <span class=\"label ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 38), "calls", [], "any", false, false, false, 38) == 0)) ? ("disabled") : (""));
        yield "\">
    <span class=\"icon\">
        ";
        // line 40
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/cache.svg");
        yield "
    </span>
    <strong>Cache</strong>
</span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 46
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 47
        yield "    <h2>Cache</h2>

    ";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 49), "calls", [], "any", false, false, false, 49) == 0)) {
            // line 50
            yield "        <div class=\"empty\">
            <p>No cache calls were made.</p>
        </div>
    ";
        } else {
            // line 54
            yield "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 56), "calls", [], "any", false, false, false, 56), "html", null, true);
            yield "</span>
                <span class=\"label\">Total calls</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 60), "time", [], "any", false, false, false, 60) * 1000)), "html", null, true);
            yield " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Total time</span>
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 65), "reads", [], "any", false, false, false, 65), "html", null, true);
            yield "</span>
                <span class=\"label\">Total reads</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 69), "writes", [], "any", false, false, false, 69), "html", null, true);
            yield "</span>
                <span class=\"label\">Total writes</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 73), "deletes", [], "any", false, false, false, 73), "html", null, true);
            yield "</span>
                <span class=\"label\">Total deletes</span>
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 78), "hits", [], "any", false, false, false, 78), "html", null, true);
            yield "</span>
                <span class=\"label\">Total hits</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, false, false, 82), "misses", [], "any", false, false, false, 82), "html", null, true);
            yield "</span>
                <span class=\"label\">Total misses</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">
                    ";
            // line 87
            (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, true, false, 87), "hit_read_ratio", [], "any", true, true, false, 87) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, true, false, 87), "hit_read_ratio", [], "any", false, false, false, 87)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, true, false, 87), "hit_read_ratio", [], "any", false, false, false, 87), "html", null, true)) : (yield 0));
            yield " <span class=\"unit\">%</span>
                </span>
                <span class=\"label\">Hits/reads</span>
            </div>
        </div>

        <h2>Pools</h2>
        <div class=\"sf-tabs\">
            ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "calls", [], "any", false, false, false, 95));
            foreach ($context['_seq'] as $context["name"] => $context["calls"]) {
                // line 96
                yield "                <div class=\"tab ";
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["calls"]) == 0)) ? ("disabled") : (""));
                yield "\">
                    <h3 class=\"tab-title\">";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield " <span class=\"badge\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "statistics", [], "any", false, false, false, 97)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["name"]] ?? null) : null), "calls", [], "any", false, false, false, 97), "html", null, true);
                yield "</span></h3>

                    <div class=\"tab-content\">
                        ";
                // line 100
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["calls"]) == 0)) {
                    // line 101
                    yield "                            <div class=\"empty\">
                                <p>No calls were made for ";
                    // line 102
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                    yield " pool.</p>
                            </div>
                        ";
                } else {
                    // line 105
                    yield "                            <h4>Metrics</h4>
                            <div class=\"metrics\">
                                ";
                    // line 107
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "statistics", [], "any", false, false, false, 107)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["name"]] ?? null) : null));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        // line 108
                        yield "                                    <div class=\"metric\">
                                        <span class=\"value\">
                                            ";
                        // line 110
                        if (($context["key"] == "time")) {
                            // line 111
                            yield "                                                ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (1000 * $context["value"])), "html", null, true);
                            yield " <span class=\"unit\">ms</span>
                                            ";
                        } elseif ((                        // line 112
$context["key"] == "hit_read_ratio")) {
                            // line 113
                            yield "                                                ";
                            (((array_key_exists("value", $context) &&  !(null === $context["value"]))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true)) : (yield 0));
                            yield " <span class=\"unit\">%</span>
                                            ";
                        } else {
                            // line 115
                            yield "                                                ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                            yield "
                                            ";
                        }
                        // line 117
                        yield "                                        </span>
                                        <span class=\"label\">";
                        // line 118
                        ((($context["key"] == "hit_read_ratio")) ? (yield "Hits/reads") : (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["key"]), "html", null, true)));
                        yield "</span>
                                    </div>
                                    ";
                        // line 120
                        if ((($context["key"] == "time") || ($context["key"] == "deletes"))) {
                            // line 121
                            yield "                                        <div class=\"metric-divider\"></div>
                                    ";
                        }
                        // line 123
                        yield "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 124
                    yield "                            </div>

                            <h4>Calls</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Time</th>
                                        <th>Call</th>
                                        <th>Hit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
                    // line 137
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["calls"]);
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
                    foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
                        // line 138
                        yield "                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                        // line 139
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 139), "html", null, true);
                        yield "</td>
                                        <td class=\"nowrap\">";
                        // line 140
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", ((CoreExtension::getAttribute($this->env, $this->source, $context["call"], "end", [], "any", false, false, false, 140) - CoreExtension::getAttribute($this->env, $this->source, $context["call"], "start", [], "any", false, false, false, 140)) * 1000)), "html", null, true);
                        yield " ms</td>
                                        <td class=\"nowrap\">";
                        // line 141
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["call"], "name", [], "any", false, false, false, 141), "html", null, true);
                        yield "()</td>
                                        <td>";
                        // line 142
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["call"], "value", [], "any", false, false, false, 142), "result", [], "any", false, false, false, 142), 2);
                        yield "</td>
                                    </tr>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    yield "                                </tbody>
                            </table>
                        ";
                }
                // line 148
                yield "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['calls'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            yield "        </div>
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
        return "@WebProfiler/Collector/cache.html.twig";
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
        return array (  413 => 151,  405 => 148,  400 => 145,  383 => 142,  379 => 141,  375 => 140,  371 => 139,  368 => 138,  351 => 137,  336 => 124,  330 => 123,  326 => 121,  324 => 120,  319 => 118,  316 => 117,  310 => 115,  304 => 113,  302 => 112,  297 => 111,  295 => 110,  291 => 108,  287 => 107,  283 => 105,  277 => 102,  274 => 101,  272 => 100,  264 => 97,  259 => 96,  255 => 95,  244 => 87,  236 => 82,  229 => 78,  221 => 73,  214 => 69,  207 => 65,  199 => 60,  192 => 56,  188 => 54,  182 => 50,  180 => 49,  176 => 47,  169 => 46,  156 => 40,  150 => 38,  143 => 37,  132 => 33,  129 => 32,  122 => 29,  108 => 25,  101 => 21,  94 => 17,  90 => 15,  87 => 14,  79 => 10,  73 => 7,  68 => 6,  65 => 5,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/cache.html.twig", "C:\\Users\\Arman Saleem\\Desktop\\symfony\\users-service\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\cache.html.twig");
    }
}
