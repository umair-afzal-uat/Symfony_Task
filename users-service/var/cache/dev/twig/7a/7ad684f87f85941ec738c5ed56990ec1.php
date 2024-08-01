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

/* @WebProfiler/Collector/events.html.twig */
class __TwigTemplate_7d61798483dfb5fe518c85ea38fc36d9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/events.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        yield "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/event.svg");
        yield "</span>
    <strong>Events</strong>
</span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 12
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        yield "    <h2>Event Dispatcher</h2>

    ";
        // line 15
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "calledlisteners", [], "any", false, false, false, 15))) {
            // line 16
            yield "        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 20
            yield "        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "calledlisteners", [], "any", false, false, false, 22)), "html", null, true);
            yield "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 25
            yield CoreExtension::callMacro($macros["helper"], "macro_render_table", [CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "calledlisteners", [], "any", false, false, false, 25)], 25, $context, $this->getSourceContext());
            yield "
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "notcalledlisteners", [], "any", false, false, false, 30)), "html", null, true);
            yield "</span></h3>
                <div class=\"tab-content\">
                    ";
            // line 32
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "notcalledlisteners", [], "any", false, false, false, 32))) {
                // line 33
                yield "                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    ";
            } else {
                // line 44
                yield "                        ";
                yield CoreExtension::callMacro($macros["helper"], "macro_render_table", [CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "notcalledlisteners", [], "any", false, false, false, 44)], 44, $context, $this->getSourceContext());
                yield "
                    ";
            }
            // line 46
            yield "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Orphaned Events <span class=\"badge\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "orphanedEvents", [], "any", false, false, false, 50)), "html", null, true);
            yield "</span></h3>
                <div class=\"tab-content\">
                    ";
            // line 52
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "orphanedEvents", [], "any", false, false, false, 52))) {
                // line 53
                yield "                        <div class=\"empty\">
                            <p>
                                <strong>There are no orphaned events</strong>.
                            </p>
                            <p>
                                All dispatched events were handled or an error occurred
                                when trying to collect orphaned events (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    ";
            } else {
                // line 64
                yield "                        <table>
                            <thead>
                                <tr>
                                    <th>Event</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "orphanedEvents", [], "any", false, false, false, 71));
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 72
                    yield "                                    <tr>
                                        <td class=\"font-normal\">";
                    // line 73
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["event"], "html", null, true);
                    yield "</td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                yield "                            </tbody>
                        </table>
                    ";
            }
            // line 79
            yield "                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 85
    public function macro_render_table($__listeners__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "listeners" => $__listeners__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            // line 86
            yield "    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        ";
            // line 94
            $context["previous_event"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["listeners"] ?? null)), "event", [], "any", false, false, false, 94);
            // line 95
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["listeners"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 96
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 96) || (CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "event", [], "any", false, false, false, 96) != ($context["previous_event"] ?? null)))) {
                    // line 97
                    yield "                ";
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 97)) {
                        // line 98
                        yield "                    </tbody>
                ";
                    }
                    // line 100
                    yield "
                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">";
                    // line 103
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "event", [], "any", false, false, false, 103), "html", null, true);
                    yield "</th>
                    </tr>

                ";
                    // line 106
                    $context["previous_event"] = CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "event", [], "any", false, false, false, 106);
                    // line 107
                    yield "            ";
                }
                // line 108
                yield "
            <tr>
                <td class=\"text-right nowrap\">";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "priority", [], "any", true, true, false, 110)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "priority", [], "any", false, false, false, 110), "-")) : ("-")), "html", null, true);
                yield "</td>
                <td class=\"font-normal\">";
                // line 111
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "stub", [], "any", false, false, false, 111));
                yield "</td>
            </tr>

            ";
                // line 114
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 114)) {
                    // line 115
                    yield "                </tbody>
            ";
                }
                // line 117
                yield "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            yield "    </table>
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
        return "@WebProfiler/Collector/events.html.twig";
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
        return array (  315 => 118,  301 => 117,  297 => 115,  295 => 114,  289 => 111,  285 => 110,  281 => 108,  278 => 107,  276 => 106,  270 => 103,  265 => 100,  261 => 98,  258 => 97,  255 => 96,  237 => 95,  235 => 94,  225 => 86,  210 => 85,  198 => 79,  193 => 76,  184 => 73,  181 => 72,  177 => 71,  168 => 64,  155 => 53,  153 => 52,  148 => 50,  142 => 46,  136 => 44,  123 => 33,  121 => 32,  116 => 30,  108 => 25,  102 => 22,  98 => 20,  92 => 16,  90 => 15,  86 => 13,  79 => 12,  67 => 7,  64 => 6,  57 => 5,  49 => 1,  47 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/events.html.twig", "C:\\Users\\Arman Saleem\\Desktop\\symfony\\users-service\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\events.html.twig");
    }
}
