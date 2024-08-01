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

/* @WebProfiler/Collector/serializer.html.twig */
class __TwigTemplate_f082c5218e4b785f5baebd50166b9c0d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/serializer.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/serializer.html.twig", 1);
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
        yield "    <span class=\"label ";
        yield (( !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, false, 6)) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 7
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Icon/serializer.svg");
        yield "</span>
        <strong>Serializer</strong>
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
        yield "    <h2>Serializer</h2>
    ";
        // line 14
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, false, 14)) {
            // line 15
            yield "        <div class=\"empty\">
            <p>Nothing was handled by the serializer for this request.</p>
        </div>
    ";
        } else {
            // line 19
            yield "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "handledCount", [], "any", false, false, false, 21), "html", null, true);
            yield "</span>
                <span class=\"label\">Handled</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totalTime", [], "any", false, false, false, 26) * 1000)), "html", null, true);
            yield " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Total time</span>
            </div>
        </div>

        <div class=\"sf-tabs\">
            ";
            // line 32
            yield CoreExtension::callMacro($macros["helper"], "macro_render_serialize_tab", [CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 32), true], 32, $context, $this->getSourceContext());
            yield "
            ";
            // line 33
            yield CoreExtension::callMacro($macros["helper"], "macro_render_serialize_tab", [CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 33), false], 33, $context, $this->getSourceContext());
            yield "

            ";
            // line 35
            yield CoreExtension::callMacro($macros["helper"], "macro_render_normalize_tab", [CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 35), true], 35, $context, $this->getSourceContext());
            yield "
            ";
            // line 36
            yield CoreExtension::callMacro($macros["helper"], "macro_render_normalize_tab", [CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 36), false], 36, $context, $this->getSourceContext());
            yield "

            ";
            // line 38
            yield CoreExtension::callMacro($macros["helper"], "macro_render_encode_tab", [CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 38), true], 38, $context, $this->getSourceContext());
            yield "
            ";
            // line 39
            yield CoreExtension::callMacro($macros["helper"], "macro_render_encode_tab", [CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 39), false], 39, $context, $this->getSourceContext());
            yield "
        </div>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 44
    public function macro_render_serialize_tab($__collectorData__ = null, $__serialize__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collectorData" => $__collectorData__,
            "serialize" => $__serialize__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_serialize_tab"));

            // line 45
            yield "    ";
            $context["data"] = ((($context["serialize"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["collectorData"] ?? null), "serialize", [], "any", false, false, false, 45)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["collectorData"] ?? null), "deserialize", [], "any", false, false, false, 45)));
            // line 46
            yield "    ";
            $context["cellPrefix"] = ((($context["serialize"] ?? null)) ? ("serialize") : ("deserialize"));
            // line 47
            yield "
    <div class=\"tab ";
            // line 48
            yield (( !($context["data"] ?? null)) ? ("disabled") : (""));
            yield "\">
        <h3 class=\"tab-title\">";
            // line 49
            yield ((($context["serialize"] ?? null)) ? ("serialize") : ("deserialize"));
            yield " <span class=\"badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["data"] ?? null)), "html", null, true);
            yield "</h3>
        <div class=\"tab-content\">
            ";
            // line 51
            if ( !Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["data"] ?? null))) {
                // line 52
                yield "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 53
                yield ((($context["serialize"] ?? null)) ? ("serialized") : ("deserialized"));
                yield ".</p>
                </div>
            ";
            } else {
                // line 56
                yield "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Encoder</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["data"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 68
                    yield "                            <tr>
                                <td>";
                    // line 69
                    yield CoreExtension::callMacro($macros["helper"], "macro_render_data_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 69), ($context["cellPrefix"] ?? null)], 69, $context, $this->getSourceContext());
                    yield "</td>
                                <td>";
                    // line 70
                    yield CoreExtension::callMacro($macros["helper"], "macro_render_context_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 70), ($context["cellPrefix"] ?? null)], 70, $context, $this->getSourceContext());
                    yield "</td>
                                <td>";
                    // line 71
                    yield CoreExtension::callMacro($macros["helper"], "macro_render_normalizer_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 71), ($context["cellPrefix"] ?? null)], 71, $context, $this->getSourceContext());
                    yield "</td>
                                <td>";
                    // line 72
                    yield CoreExtension::callMacro($macros["helper"], "macro_render_encoder_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 72), ($context["cellPrefix"] ?? null)], 72, $context, $this->getSourceContext());
                    yield "</td>
                                <td>";
                    // line 73
                    yield CoreExtension::callMacro($macros["helper"], "macro_render_time_cell", [$context["item"]], 73, $context, $this->getSourceContext());
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                yield "                    </tbody>
                </table>
            ";
            }
            // line 79
            yield "        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 83
    public function macro_render_normalize_tab($__collectorData__ = null, $__normalize__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collectorData" => $__collectorData__,
            "normalize" => $__normalize__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalize_tab"));

            // line 84
            yield "    ";
            $context["data"] = ((($context["normalize"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["collectorData"] ?? null), "normalize", [], "any", false, false, false, 84)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["collectorData"] ?? null), "denormalize", [], "any", false, false, false, 84)));
            // line 85
            yield "    ";
            $context["cellPrefix"] = ((($context["normalize"] ?? null)) ? ("normalize") : ("denormalize"));
            // line 86
            yield "
    <div class=\"tab ";
            // line 87
            yield (( !($context["data"] ?? null)) ? ("disabled") : (""));
            yield "\">
        <h3 class=\"tab-title\">";
            // line 88
            yield ((($context["normalize"] ?? null)) ? ("normalize") : ("denormalize"));
            yield " <span class=\"badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["data"] ?? null)), "html", null, true);
            yield "</h3>
        <div class=\"tab-content\">
            ";
            // line 90
            if ( !Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["data"] ?? null))) {
                // line 91
                yield "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 92
                yield ((($context["normalize"] ?? null)) ? ("normalized") : ("denormalized"));
                yield ".</p>
                </div>
            ";
            } else {
                // line 95
                yield "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["data"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 106
                    yield "                            <tr>
                                <td>";
                    // line 107
                    yield CoreExtension::callMacro($macros["helper"], "macro_render_data_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 107), ($context["cellPrefix"] ?? null)], 107, $context, $this->getSourceContext());
                    yield "</td>
                                <td>";
                    // line 108
                    yield CoreExtension::callMacro($macros["helper"], "macro_render_context_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 108), ($context["cellPrefix"] ?? null)], 108, $context, $this->getSourceContext());
                    yield "</td>
                                <td>";
                    // line 109
                    yield CoreExtension::callMacro($macros["helper"], "macro_render_normalizer_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 109), ($context["cellPrefix"] ?? null)], 109, $context, $this->getSourceContext());
                    yield "</td>
                                <td>";
                    // line 110
                    yield CoreExtension::callMacro($macros["helper"], "macro_render_time_cell", [$context["item"]], 110, $context, $this->getSourceContext());
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                yield "                    </tbody>
                </table>
            ";
            }
            // line 116
            yield "        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 120
    public function macro_render_encode_tab($__collectorData__ = null, $__encode__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collectorData" => $__collectorData__,
            "encode" => $__encode__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encode_tab"));

            // line 121
            yield "    ";
            $context["data"] = ((($context["encode"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["collectorData"] ?? null), "encode", [], "any", false, false, false, 121)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["collectorData"] ?? null), "decode", [], "any", false, false, false, 121)));
            // line 122
            yield "    ";
            $context["cellPrefix"] = ((($context["encode"] ?? null)) ? ("encode") : ("decode"));
            // line 123
            yield "
    <div class=\"tab ";
            // line 124
            yield (( !($context["data"] ?? null)) ? ("disabled") : (""));
            yield "\">
        <h3 class=\"tab-title\">";
            // line 125
            yield ((($context["encode"] ?? null)) ? ("encode") : ("decode"));
            yield " <span class=\"badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["data"] ?? null)), "html", null, true);
            yield "</h3>
        <div class=\"tab-content\">
            ";
            // line 127
            if ( !Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["data"] ?? null))) {
                // line 128
                yield "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 129
                yield ((($context["encode"] ?? null)) ? ("encoded") : ("decoded"));
                yield ".</p>
                </div>
            ";
            } else {
                // line 132
                yield "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Encoder</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 142
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["data"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 143
                    yield "                            <tr>
                                <td>";
                    // line 144
                    yield CoreExtension::callMacro($macros["helper"], "macro_render_data_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 144), ($context["cellPrefix"] ?? null)], 144, $context, $this->getSourceContext());
                    yield "</td>
                                <td>";
                    // line 145
                    yield CoreExtension::callMacro($macros["helper"], "macro_render_context_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 145), ($context["cellPrefix"] ?? null)], 145, $context, $this->getSourceContext());
                    yield "</td>
                                <td>";
                    // line 146
                    yield CoreExtension::callMacro($macros["helper"], "macro_render_encoder_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 146), ($context["cellPrefix"] ?? null)], 146, $context, $this->getSourceContext());
                    yield "</td>
                                <td>";
                    // line 147
                    yield CoreExtension::callMacro($macros["helper"], "macro_render_time_cell", [$context["item"]], 147, $context, $this->getSourceContext());
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                yield "                    </tbody>
                </table>
            ";
            }
            // line 153
            yield "        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 157
    public function macro_render_data_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_data_cell"));

            // line 158
            yield "    ";
            $context["data_id"] = ((("data-" . ($context["method"] ?? null)) . "-") . ($context["index"] ?? null));
            // line 159
            yield "
    <span class=\"nowrap\">";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "dataType", [], "any", false, false, false, 160), "html", null, true);
            yield "</span>

    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["data_id"] ?? null), "html", null, true);
            yield "\" data-toggle-alt-content=\"Hide contents\">Show contents</a>
        <div id=\"";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["data_id"] ?? null), "html", null, true);
            yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
            // line 165
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "data", [], "any", false, false, false, 165));
            yield "
        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 170
    public function macro_render_context_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_context_cell"));

            // line 171
            yield "    ";
            $context["context_id"] = ((("context-" . ($context["method"] ?? null)) . "-") . ($context["index"] ?? null));
            // line 172
            yield "
    ";
            // line 173
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 173)) {
                // line 174
                yield "        <span class=\"nowrap\">Type: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 174), "html", null, true);
                yield "</span>
        <div class=\"nowrap\">Format: ";
                // line 175
                ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "format", [], "any", false, false, false, 175)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "format", [], "any", false, false, false, 175), "html", null, true)) : (yield "none"));
                yield "</div>
    ";
            } else {
                // line 177
                yield "        <span class=\"nowrap\">Format: ";
                ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "format", [], "any", false, false, false, 177)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "format", [], "any", false, false, false, 177), "html", null, true)) : (yield "none"));
                yield "</span>
    ";
            }
            // line 179
            yield "
    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["context_id"] ?? null), "html", null, true);
            yield "\" data-toggle-alt-content=\"Hide context\">Show context</a>
        <div id=\"";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["context_id"] ?? null), "html", null, true);
            yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
            // line 183
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "context", [], "any", false, false, false, 183));
            yield "
        </div>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 188
    public function macro_render_normalizer_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalizer_cell"));

            // line 189
            yield "    ";
            $context["nested_normalizers_id"] = ((("nested-normalizers-" . ($context["method"] ?? null)) . "-") . ($context["index"] ?? null));
            // line 190
            yield "
    ";
            // line 191
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", true, true, false, 191)) {
                // line 192
                yield "    <span class=\"nowrap\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 192), "file", [], "any", false, false, false, 192), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 192), "line", [], "any", false, false, false, 192)), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 192), "file", [], "any", false, false, false, 192), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 192), "class", [], "any", false, false, false, 192), "html", null, true);
                yield "</a> (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", false, false, false, 192), "time", [], "any", false, false, false, 192) * 1000)), "html", null, true);
                yield " ms)</span>
    ";
            }
            // line 194
            yield "
    ";
            // line 195
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "normalization", [], "any", false, false, false, 195)) > 1)) {
                // line 196
                yield "        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 197
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nested_normalizers_id"] ?? null), "html", null, true);
                yield "\" data-toggle-alt-content=\"Hide nested normalizers\">Show nested normalizers</a>
            <div id=\"";
                // line 198
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nested_normalizers_id"] ?? null), "html", null, true);
                yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    ";
                // line 200
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "normalization", [], "any", false, false, false, 200));
                foreach ($context['_seq'] as $context["_key"] => $context["normalizer"]) {
                    // line 201
                    yield "                        <li><span class=\"nowrap\">x";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "calls", [], "any", false, false, false, 201), "html", null, true);
                    yield " <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "file", [], "any", false, false, false, 201), CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "line", [], "any", false, false, false, 201)), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "file", [], "any", false, false, false, 201), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "class", [], "any", false, false, false, 201), "html", null, true);
                    yield "</a> (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "time", [], "any", false, false, false, 201) * 1000)), "html", null, true);
                    yield " ms)</span></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['normalizer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 203
                yield "                </ul>
            </div>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 209
    public function macro_render_encoder_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encoder_cell"));

            // line 210
            yield "    ";
            $context["nested_encoders_id"] = ((("nested-encoders-" . ($context["method"] ?? null)) . "-") . ($context["index"] ?? null));
            // line 211
            yield "
    ";
            // line 212
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", true, true, false, 212)) {
                // line 213
                yield "    <span class=\"nowrap\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 213), "file", [], "any", false, false, false, 213), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 213), "line", [], "any", false, false, false, 213)), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 213), "file", [], "any", false, false, false, 213), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 213), "class", [], "any", false, false, false, 213), "html", null, true);
                yield "</a> (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", false, false, false, 213), "time", [], "any", false, false, false, 213) * 1000)), "html", null, true);
                yield " ms)</span>
    ";
            }
            // line 215
            yield "
    ";
            // line 216
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "encoding", [], "any", false, false, false, 216)) > 1)) {
                // line 217
                yield "        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 218
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nested_encoders_id"] ?? null), "html", null, true);
                yield "\" data-toggle-alt-content=\"Hide nested encoders\">Show nested encoders</a>
            <div id=\"";
                // line 219
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nested_encoders_id"] ?? null), "html", null, true);
                yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    ";
                // line 221
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "encoding", [], "any", false, false, false, 221));
                foreach ($context['_seq'] as $context["_key"] => $context["encoder"]) {
                    // line 222
                    yield "                        <li><span class=\"nowrap\">x";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "calls", [], "any", false, false, false, 222), "html", null, true);
                    yield " <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "file", [], "any", false, false, false, 222), CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "line", [], "any", false, false, false, 222)), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "file", [], "any", false, false, false, 222), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "class", [], "any", false, false, false, 222), "html", null, true);
                    yield "</a> (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "time", [], "any", false, false, false, 222) * 1000)), "html", null, true);
                    yield " ms)</span></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['encoder'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 224
                yield "                </ul>
            </div>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 230
    public function macro_render_time_cell($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_time_cell"));

            // line 231
            yield "    <span class=\"nowrap\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "time", [], "any", false, false, false, 231) * 1000)), "html", null, true);
            yield " ms</span>
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
        return "@WebProfiler/Collector/serializer.html.twig";
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
        return array (  838 => 231,  823 => 230,  810 => 224,  793 => 222,  789 => 221,  784 => 219,  780 => 218,  777 => 217,  775 => 216,  772 => 215,  760 => 213,  758 => 212,  755 => 211,  752 => 210,  735 => 209,  722 => 203,  705 => 201,  701 => 200,  696 => 198,  692 => 197,  689 => 196,  687 => 195,  684 => 194,  672 => 192,  670 => 191,  667 => 190,  664 => 189,  647 => 188,  634 => 183,  630 => 182,  626 => 181,  622 => 179,  616 => 177,  611 => 175,  606 => 174,  604 => 173,  601 => 172,  598 => 171,  581 => 170,  568 => 165,  564 => 164,  560 => 163,  554 => 160,  551 => 159,  548 => 158,  531 => 157,  520 => 153,  515 => 150,  498 => 147,  494 => 146,  490 => 145,  486 => 144,  483 => 143,  466 => 142,  454 => 132,  448 => 129,  445 => 128,  443 => 127,  436 => 125,  432 => 124,  429 => 123,  426 => 122,  423 => 121,  407 => 120,  396 => 116,  391 => 113,  374 => 110,  370 => 109,  366 => 108,  362 => 107,  359 => 106,  342 => 105,  330 => 95,  324 => 92,  321 => 91,  319 => 90,  312 => 88,  308 => 87,  305 => 86,  302 => 85,  299 => 84,  283 => 83,  272 => 79,  267 => 76,  250 => 73,  246 => 72,  242 => 71,  238 => 70,  234 => 69,  231 => 68,  214 => 67,  201 => 56,  195 => 53,  192 => 52,  190 => 51,  183 => 49,  179 => 48,  176 => 47,  173 => 46,  170 => 45,  154 => 44,  142 => 39,  138 => 38,  133 => 36,  129 => 35,  124 => 33,  120 => 32,  111 => 26,  103 => 21,  99 => 19,  93 => 15,  91 => 14,  88 => 13,  81 => 12,  69 => 7,  64 => 6,  57 => 5,  49 => 1,  47 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/serializer.html.twig", "C:\\Users\\Arman Saleem\\Desktop\\symfony\\users-service\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\serializer.html.twig");
    }
}
