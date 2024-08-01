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

/* @WebProfiler/Collector/time.html.twig */
class __TwigTemplate_f8483f12012f386c7cb67c65126177da extends Template
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
            'panelContent' => [$this, 'block_panelContent'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/time.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        yield "    ";
        $context["has_time_events"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 6)) > 0);
        // line 7
        yield "    ";
        $context["total_time"] = ((($context["has_time_events"] ?? null)) ? (Twig\Extension\CoreExtension::sprintf("%.0f", CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "duration", [], "any", false, false, false, 7))) : ("n/a"));
        // line 8
        yield "    ";
        $context["initialization_time"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 8))) ? (Twig\Extension\CoreExtension::sprintf("%.0f", CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "inittime", [], "any", false, false, false, 8))) : ("n/a"));
        // line 9
        yield "    ";
        $context["status_color"] = (((($context["has_time_events"] ?? null) && (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "duration", [], "any", false, false, false, 9) > 1000))) ? ("yellow") : (""));
        // line 10
        yield "
    ";
        // line 11
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 12
            yield "        ";
            yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/time.svg");
            yield "
        <span class=\"sf-toolbar-value\">";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_time"] ?? null), "html", null, true);
            yield "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        yield "
    ";
        // line 17
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 18
            yield "        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_time"] ?? null), "html", null, true);
            yield " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Initialization time</b>
            <span>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["initialization_time"] ?? null), "html", null, true);
            yield " ms</span>
        </div>
    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        yield "
    ";
        // line 28
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 31
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 32
        yield "    <span class=\"label\">
        <span class=\"icon\">";
        // line 33
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/time.svg");
        yield "</span>
        <strong>Performance</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 38
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 39
        yield "    ";
        $context["has_time_events"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 39)) > 0);
        // line 40
        yield "    <h2>Performance metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.0f", CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "duration", [], "any", false, false, false, 44)), "html", null, true);
        yield " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Total execution time</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.0f", CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "inittime", [], "any", false, false, false, 49)), "html", null, true);
        yield " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Symfony initialization</span>
        </div>

        ";
        // line 53
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, false, false, 53), "memory", [], "any", false, false, false, 53)) {
            // line 54
            yield "            <div class=\"metric\">
                <span class=\"value\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, false, false, 55), "memory", [], "any", false, false, false, 55), "memory", [], "any", false, false, false, 55) / 1024) / 1024)), "html", null, true);
            yield " <span class=\"unit\">MiB</span></span>
                <span class=\"label\">Peak memory usage</span>
            </div>
        ";
        }
        // line 59
        yield "
        ";
        // line 60
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 60)) > 0)) {
            // line 61
            yield "            <div class=\"metric-divider\"></div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 64)), "html", null, true);
            yield "</span>
                <span class=\"label\">Sub-Request";
            // line 65
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 65)) > 1)) ? ("s") : (""));
            yield "</span>
            </div>

            ";
            // line 68
            if (($context["has_time_events"] ?? null)) {
                // line 69
                yield "                ";
                $context["subrequests_time"] = 0;
                // line 70
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 70));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 71
                    yield "                    ";
                    $context["subrequests_time"] = (($context["subrequests_time"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getcollector", ["time"], "method", false, false, false, 71), "events", [], "any", false, false, false, 71), "__section__", [], "any", false, false, false, 71), "duration", [], "any", false, false, false, 71));
                    // line 72
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                yield "            ";
            } else {
                // line 74
                yield "                ";
                $context["subrequests_time"] = "n/a";
                // line 75
                yield "            ";
            }
            // line 76
            yield "
            <div class=\"metric\">
                <span class=\"value\">";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subrequests_time"] ?? null), "html", null, true);
            yield " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Sub-Request";
            // line 79
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 79)) > 1)) ? ("s") : (""));
            yield " time</span>
            </div>
        ";
        }
        // line 82
        yield "    </div>

    <h2>Execution timeline</h2>

    ";
        // line 86
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "isStopwatchInstalled", [], "method", false, false, false, 86)) {
            // line 87
            yield "        <div class=\"empty\">
            <p>The Stopwatch component is not installed. If you want to see timing events, run: <code>composer require symfony/stopwatch</code>.</p>
        </div>
    ";
        } elseif (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,         // line 90
($context["collector"] ?? null), "events", [], "any", false, false, false, 90))) {
            // line 91
            yield "        <div class=\"empty\">
            <p>No timing events have been recorded. Check that symfony/stopwatch is installed and debugging enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 95
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("panelContent", $context, $blocks);
            yield "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 99
    public function block_panelContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panelContent"));

        // line 100
        yield "    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <label for=\"threshold\">Threshold</label>
        <input type=\"number\" name=\"threshold\" id=\"threshold\" value=\"1\" min=\"0\" placeholder=\"1.1\"> ms
        <span class=\"help\">(timeline only displays events with a duration longer than this threshold)</span>
    </form>

    ";
        // line 107
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 107)) {
            // line 108
            yield "        <h3 class=\"dump-inline\">
            Sub-Request ";
            // line 109
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "getcollector", ["request"], "method", false, false, false, 109), "requestattributes", [], "any", false, false, false, 109), "get", ["_controller"], "method", false, false, false, 109));
            yield "
            <small>
                ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 111), "__section__", [], "any", false, false, false, 111), "duration", [], "any", false, false, false, 111), "html", null, true);
            yield " ms
                <a class=\"newline\" href=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 112), "token", [], "any", false, false, false, 112), "panel" => "time"]), "html", null, true);
            yield "\">Return to parent request</a>
            </small>
        </h3>
    ";
        } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 115
($context["profile"] ?? null), "children", [], "any", false, false, false, 115)) > 0)) {
            // line 116
            yield "        <h3>
            Main Request <small>";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 117), "__section__", [], "any", false, false, false, 117), "duration", [], "any", false, false, false, 117), "html", null, true);
            yield " ms</small>
        </h3>
    ";
        }
        // line 120
        yield "
    ";
        // line 121
        yield CoreExtension::callMacro($macros["helper"], "macro_display_timeline", [($context["token"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 121), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 121), "__section__", [], "any", false, false, false, 121), "origin", [], "any", false, false, false, 121)], 121, $context, $this->getSourceContext());
        yield "

    ";
        // line 123
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 123))) {
            // line 124
            yield "        <p class=\"help\">Note: sections with a striped background correspond to sub-requests.</p>

        <h3>Sub-requests <small>(";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 126)), "html", null, true);
            yield ")</small></h3>

        ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 128));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 129
                yield "            ";
                $context["events"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getcollector", ["time"], "method", false, false, false, 129), "events", [], "any", false, false, false, 129);
                // line 130
                yield "            <h4>
                <a href=\"";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 131), "panel" => "time"]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getcollector", ["request"], "method", false, false, false, 131), "identifier", [], "any", false, false, false, 131), "html", null, true);
                yield "</a>
                <small>";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "__section__", [], "any", false, false, false, 132), "duration", [], "any", false, false, false, 132), "html", null, true);
                yield " ms</small>
            </h4>

            ";
                // line 135
                yield CoreExtension::callMacro($macros["helper"], "macro_display_timeline", [CoreExtension::getAttribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 135), ($context["events"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 135), "__section__", [], "any", false, false, false, 135), "origin", [], "any", false, false, false, 135)], 135, $context, $this->getSourceContext());
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            yield "    ";
        }
        // line 138
        yield "
<svg id=\"timeline-template\" width=\"0\" height=\"0\">
  <defs>
    <pattern id=\"subrequest\" class=\"timeline-subrequest-pattern\" patternUnits=\"userSpaceOnUse\" width=\"20\" height=\"20\" viewBox=\"0 0 40 40\">
        <path d=\"M0 40L40 0H20L0 20M40 40V20L20 40\"/>
    </pattern>
  </defs>
</svg>
<style type=\"text/css\">
";
        // line 147
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Collector/time.css.twig");
        yield "
</style>
<script>
";
        // line 150
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Collector/time.js");
        yield "
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 154
    public function macro_dump_request_data($__token__ = null, $__events__ = null, $__origin__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "token" => $__token__,
            "events" => $__events__,
            "origin" => $__origin__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dump_request_data"));

            // line 156
            $macros["__internal_parse_0"] = $this;
            // line 157
            yield "{
    id: \"";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["token"] ?? null), "js", null, true);
            yield "\",
    left: ";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%F", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "__section__", [], "any", false, false, false, 159), "origin", [], "any", false, false, false, 159) - ($context["origin"] ?? null))), "js", null, true);
            yield ",
    end: \"";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%F", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "__section__", [], "any", false, false, false, 160), "endtime", [], "any", false, false, false, 160)), "js", null, true);
            yield "\",
    events: [ ";
            // line 161
            yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_dump_events", [($context["events"] ?? null)], 161, $context, $this->getSourceContext());
            yield " ],
}
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 166
    public function macro_dump_events($__events__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "events" => $__events__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dump_events"));

            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["event"]) {
                // line 169
                if (("__section__" != $context["name"])) {
                    // line 170
                    yield "{
    name: \"";
                    // line 171
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "js", null, true);
                    yield "\",
    category: \"";
                    // line 172
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "category", [], "any", false, false, false, 172), "js", null, true);
                    yield "\",
    origin: ";
                    // line 173
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%F", CoreExtension::getAttribute($this->env, $this->source, $context["event"], "origin", [], "any", false, false, false, 173)), "js", null, true);
                    yield ",
    starttime: ";
                    // line 174
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%F", CoreExtension::getAttribute($this->env, $this->source, $context["event"], "starttime", [], "any", false, false, false, 174)), "js", null, true);
                    yield ",
    endtime: ";
                    // line 175
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%F", CoreExtension::getAttribute($this->env, $this->source, $context["event"], "endtime", [], "any", false, false, false, 175)), "js", null, true);
                    yield ",
    duration: ";
                    // line 176
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%F", CoreExtension::getAttribute($this->env, $this->source, $context["event"], "duration", [], "any", false, false, false, 176)), "js", null, true);
                    yield ",
    memory: ";
                    // line 177
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.1F", ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "memory", [], "any", false, false, false, 177) / 1024) / 1024)), "js", null, true);
                    yield ",
    elements: {},
    periods: [";
                    // line 180
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "periods", [], "any", false, false, false, 180));
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 181
                        yield "{
            start: ";
                        // line 182
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%F", CoreExtension::getAttribute($this->env, $this->source, $context["period"], "starttime", [], "any", false, false, false, 182)), "js", null, true);
                        yield ",
            end: ";
                        // line 183
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%F", CoreExtension::getAttribute($this->env, $this->source, $context["period"], "endtime", [], "any", false, false, false, 183)), "js", null, true);
                        yield ",
            duration: ";
                        // line 184
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%F", CoreExtension::getAttribute($this->env, $this->source, $context["period"], "duration", [], "any", false, false, false, 184)), "js", null, true);
                        yield ",
            elements: {}
        },";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['period'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 188
                    yield "],
},
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 195
    public function macro_display_timeline($__token__ = null, $__events__ = null, $__origin__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "token" => $__token__,
            "events" => $__events__,
            "origin" => $__origin__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "display_timeline"));

            // line 196
            $macros["helper"] = $this;
            // line 197
            yield "    <div class=\"sf-profiler-timeline\">
        <div id=\"legend-";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["token"] ?? null), "html", null, true);
            yield "\" class=\"legends\"></div>
        <svg id=\"timeline-";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["token"] ?? null), "html", null, true);
            yield "\" class=\"timeline-graph\"></svg>
        <script>";
            // line 201
            yield "            window.addEventListener('load', function onLoad() {
                const theme = new Theme();

                new TimelineEngine(
                    theme,
                    new SvgRenderer(document.getElementById('timeline-";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["token"] ?? null), "js", null, true);
            yield "')),
                    new Legend(document.getElementById('legend-";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["token"] ?? null), "js", null, true);
            yield "'), theme),
                    document.getElementById('threshold'),
                    ";
            // line 209
            yield CoreExtension::callMacro($macros["helper"], "macro_dump_request_data", [($context["token"] ?? null), ($context["events"] ?? null), ($context["origin"] ?? null)], 209, $context, $this->getSourceContext());
            yield "
                );
            });
        ";
            // line 212
            yield "</script>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/time.html.twig";
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
        return array (  609 => 212,  603 => 209,  598 => 207,  594 => 206,  587 => 201,  583 => 199,  579 => 198,  576 => 197,  574 => 196,  557 => 195,  541 => 188,  532 => 184,  528 => 183,  524 => 182,  521 => 181,  517 => 180,  512 => 177,  508 => 176,  504 => 175,  500 => 174,  496 => 173,  492 => 172,  488 => 171,  485 => 170,  483 => 169,  479 => 168,  464 => 166,  452 => 161,  448 => 160,  444 => 159,  440 => 158,  437 => 157,  435 => 156,  418 => 154,  407 => 150,  401 => 147,  390 => 138,  387 => 137,  379 => 135,  373 => 132,  367 => 131,  364 => 130,  361 => 129,  357 => 128,  352 => 126,  348 => 124,  346 => 123,  341 => 121,  338 => 120,  332 => 117,  329 => 116,  327 => 115,  321 => 112,  317 => 111,  312 => 109,  309 => 108,  307 => 107,  298 => 100,  291 => 99,  279 => 95,  273 => 91,  271 => 90,  266 => 87,  264 => 86,  258 => 82,  252 => 79,  248 => 78,  244 => 76,  241 => 75,  238 => 74,  235 => 73,  229 => 72,  226 => 71,  221 => 70,  218 => 69,  216 => 68,  210 => 65,  206 => 64,  201 => 61,  199 => 60,  196 => 59,  189 => 55,  186 => 54,  184 => 53,  177 => 49,  169 => 44,  163 => 40,  160 => 39,  153 => 38,  141 => 33,  138 => 32,  131 => 31,  121 => 28,  118 => 27,  111 => 24,  104 => 20,  100 => 18,  98 => 17,  95 => 16,  88 => 13,  83 => 12,  81 => 11,  78 => 10,  75 => 9,  72 => 8,  69 => 7,  66 => 6,  59 => 5,  51 => 1,  49 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/time.html.twig", "C:\\Users\\Arman Saleem\\Desktop\\symfony\\users-service\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\time.html.twig");
    }
}
