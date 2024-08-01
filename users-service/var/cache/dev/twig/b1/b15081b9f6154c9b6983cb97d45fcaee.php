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

/* @WebProfiler/Collector/translation.html.twig */
class __TwigTemplate_eb3ad4591fbb8875bcdb306c51a36e4c extends Template
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
            'messages' => [$this, 'block_messages'],
            'defined_messages' => [$this, 'block_defined_messages'],
            'fallback_messages' => [$this, 'block_fallback_messages'],
            'missing_messages' => [$this, 'block_missing_messages'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/translation.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/translation.html.twig", 1);
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
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 6))) {
            // line 7
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 8
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/translation.svg");
                yield "
            ";
                // line 9
                $context["status_color"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, false, 9)) ? ("red") : (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, false, 9)) ? ("yellow") : (""))));
                // line 10
                yield "            ";
                $context["error_count"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, false, 10) + CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, false, 10));
                // line 11
                yield "            <span class=\"sf-toolbar-value\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["error_count"] ?? null)) ?: (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countDefines", [], "any", false, false, false, 11))), "html", null, true);
                yield "</span>
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 13
            yield "
        ";
            // line 14
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 15
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Default locale</b>
                <span class=\"sf-toolbar-status\">
                    ";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "locale", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "locale", [], "any", false, false, false, 18), "-")) : ("-")), "html", null, true);
                yield "
                </span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Missing messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 23
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, false, 23)) ? ("red") : (""));
                yield "\">
                    ";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, false, 24), "html", null, true);
                yield "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Fallback messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 30
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, false, 30)) ? ("yellow") : (""));
                yield "\">
                    ";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, false, 31), "html", null, true);
                yield "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Defined messages</b>
                <span class=\"sf-toolbar-status\">";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countDefines", [], "any", false, false, false, 37), "html", null, true);
                yield "</span>
            </div>
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 40
            yield "
        ";
            // line 41
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
            yield "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 45
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 46
        yield "    <span class=\"label label-status-";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, false, 46)) ? ("error") : (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, false, 46)) ? ("warning") : (""))));
        yield " ";
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 46))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 47
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/translation.svg");
        yield "</span>
        <strong>Translation</strong>
        ";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, false, 49) || CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, false, 49))) {
            // line 50
            yield "            ";
            $context["error_count"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, false, 50) + CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, false, 50));
            // line 51
            yield "            <span class=\"count\">
                <span>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error_count"] ?? null), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 55
        yield "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 58
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 59
        yield "    <h2>Translation</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "locale", [], "any", true, true, false, 63)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "locale", [], "any", false, false, false, 63), "-")) : ("-")), "html", null, true);
        yield "</span>
            <span class=\"label\">Default locale</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "fallbackLocales", [], "any", false, false, false, 67), ", "), "-"), "html", null, true);
        yield "</span>
            <span class=\"label\">Fallback locale";
        // line 68
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "fallbackLocales", [], "any", false, false, false, 68)) != 1)) ? ("s") : (""));
        yield "</span>
        </div>
    </div>

    <h2>Messages</h2>

    ";
        // line 74
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 74))) {
            // line 75
            yield "        <div class=\"empty\">
            <p>No translations have been called.</p>
        </div>
    ";
        } else {
            // line 79
            yield "        ";
            yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
            // line 161
            yield "    ";
        }
        // line 162
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 79
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        // line 80
        yield "
        ";
        // line 82
        yield "        ";
        [$context["messages_defined"], $context["messages_missing"], $context["messages_fallback"]] =         [[], [], []];
        // line 83
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [], "any", false, false, false, 83));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 84
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["message"], "state", [], "any", false, false, false, 84) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_DEFINED"))) {
                // line 85
                yield "                ";
                $context["messages_defined"] = Twig\Extension\CoreExtension::merge(($context["messages_defined"] ?? null), [$context["message"]]);
                // line 86
                yield "            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["message"], "state", [], "any", false, false, false, 86) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_MISSING"))) {
                // line 87
                yield "                ";
                $context["messages_missing"] = Twig\Extension\CoreExtension::merge(($context["messages_missing"] ?? null), [$context["message"]]);
                // line 88
                yield "            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["message"], "state", [], "any", false, false, false, 88) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK"))) {
                // line 89
                yield "                ";
                $context["messages_fallback"] = Twig\Extension\CoreExtension::merge(($context["messages_fallback"] ?? null), [$context["message"]]);
                // line 90
                yield "            ";
            }
            // line 91
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "
        <div class=\"sf-tabs\">
            <div class=\"tab ";
        // line 94
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, false, 94) == 0)) ? ("active") : (""));
        yield "\">
                <h3 class=\"tab-title\">Defined <span class=\"badge\">";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countDefines", [], "any", false, false, false, 95), "html", null, true);
        yield "</span></h3>

                <div class=\"tab-content\">
                    <p class=\"help\">
                        These messages are correctly translated into the given locale.
                    </p>

                    ";
        // line 102
        if (Twig\Extension\CoreExtension::testEmpty(($context["messages_defined"] ?? null))) {
            // line 103
            yield "                        <div class=\"empty\">
                            <p>None of the used translation messages are defined for the given locale.</p>
                        </div>
                    ";
        } else {
            // line 107
            yield "                        ";
            yield from $this->unwrap()->yieldBlock('defined_messages', $context, $blocks);
            // line 110
            yield "                    ";
        }
        // line 111
        yield "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Fallback <span class=\"badge ";
        // line 115
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, false, 115)) ? ("status-warning") : (""));
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countFallbacks", [], "any", false, false, false, 115), "html", null, true);
        yield "</span></h3>

                <div class=\"tab-content\">
                    <p class=\"help\">
                        These messages are not available for the given locale
                        but Symfony found them in the fallback locale catalog.
                    </p>

                    ";
        // line 123
        if (Twig\Extension\CoreExtension::testEmpty(($context["messages_fallback"] ?? null))) {
            // line 124
            yield "                        <div class=\"empty\">
                            <p>No fallback translation messages were used.</p>
                        </div>
                    ";
        } else {
            // line 128
            yield "                        ";
            yield from $this->unwrap()->yieldBlock('fallback_messages', $context, $blocks);
            // line 131
            yield "                    ";
        }
        // line 132
        yield "                </div>
            </div>

            <div class=\"tab ";
        // line 135
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, false, 135) > 0)) ? ("active") : (""));
        yield "\">
                <h3 class=\"tab-title\">Missing <span class=\"badge ";
        // line 136
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, false, 136)) ? ("status-error") : (""));
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countMissings", [], "any", false, false, false, 136), "html", null, true);
        yield "</span></h3>

                <div class=\"tab-content\">
                    <p class=\"help\">
                        These messages are not available for the given locale and cannot
                        be found in the fallback locales. Add them to the translation
                        catalogue to avoid Symfony outputting untranslated contents.
                    </p>

                    ";
        // line 145
        if (Twig\Extension\CoreExtension::testEmpty(($context["messages_missing"] ?? null))) {
            // line 146
            yield "                        <div class=\"empty\">
                            <p>There are no messages of this category.</p>
                        </div>
                    ";
        } else {
            // line 150
            yield "                        ";
            yield from $this->unwrap()->yieldBlock('missing_messages', $context, $blocks);
            // line 153
            yield "                    ";
        }
        // line 154
        yield "                </div>
            </div>
        </div>

        <script>Sfjs.createFilters();</script>

        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 107
    public function block_defined_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "defined_messages"));

        // line 108
        yield "                            ";
        yield CoreExtension::callMacro($macros["helper"], "macro_render_table", [($context["messages_defined"] ?? null)], 108, $context, $this->getSourceContext());
        yield "
                        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 128
    public function block_fallback_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fallback_messages"));

        // line 129
        yield "                            ";
        yield CoreExtension::callMacro($macros["helper"], "macro_render_table", [($context["messages_fallback"] ?? null), true], 129, $context, $this->getSourceContext());
        yield "
                        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 150
    public function block_missing_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "missing_messages"));

        // line 151
        yield "                            ";
        yield CoreExtension::callMacro($macros["helper"], "macro_render_table", [($context["messages_missing"] ?? null)], 151, $context, $this->getSourceContext());
        yield "
                        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 165
    public function macro_render_table($__messages__ = null, $__is_fallback__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "messages" => $__messages__,
            "is_fallback" => $__is_fallback__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            // line 166
            yield "    <table data-filters>
        <thead>
            <tr>
                <th data-filter=\"locale\">Locale</th>
                ";
            // line 170
            if (($context["is_fallback"] ?? null)) {
                // line 171
                yield "                    <th>Fallback locale</th>
                ";
            }
            // line 173
            yield "                <th data-filter=\"domain\">Domain</th>
                <th>Times used</th>
                <th>Message ID</th>
                <th>Message Preview</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["messages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 181
                yield "            <tr data-filter-locale=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "locale", [], "any", false, false, false, 181), "html", null, true);
                yield "\" data-filter-domain=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "domain", [], "any", false, false, false, 181), "html", null, true);
                yield "\">
                <td class=\"font-normal text-small nowrap\">";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "locale", [], "any", false, false, false, 182), "html", null, true);
                yield "</td>
                ";
                // line 183
                if (($context["is_fallback"] ?? null)) {
                    // line 184
                    yield "                    <td class=\"font-normal text-small nowrap\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["message"], "fallbackLocale", [], "any", true, true, false, 184)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "fallbackLocale", [], "any", false, false, false, 184), "-")) : ("-")), "html", null, true);
                    yield "</td>
                ";
                }
                // line 186
                yield "                <td class=\"font-normal text-small text-bold nowrap\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "domain", [], "any", false, false, false, 186), "html", null, true);
                yield "</td>
                <td class=\"font-normal text-small nowrap\">";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "count", [], "any", false, false, false, 187), "html", null, true);
                yield "</td>
                <td>
                    <span class=\"nowrap\">";
                // line 189
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 189), "html", null, true);
                yield "</span>

                    ";
                // line 191
                if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["message"], "transChoiceNumber", [], "any", false, false, false, 191))) {
                    // line 192
                    yield "                        <small class=\"newline\">(pluralization is used)</small>
                    ";
                }
                // line 194
                yield "
                    ";
                // line 195
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["message"], "parameters", [], "any", false, false, false, 195)) > 0)) {
                    // line 196
                    yield "                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 196), "html", null, true);
                    yield "\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-";
                    // line 198
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 198), "html", null, true);
                    yield "\" class=\"hidden\">
                            ";
                    // line 199
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "parameters", [], "any", false, false, false, 199));
                    foreach ($context['_seq'] as $context["_key"] => $context["parameters"]) {
                        // line 200
                        yield "                                ";
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["parameters"], 1);
                        yield "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameters'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 202
                    yield "                        </div>
                    ";
                }
                // line 204
                yield "                </td>
                <td class=\"prewrap\">";
                // line 205
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "translation", [], "any", false, false, false, 205), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            yield "        </tbody>
    </table>
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
        return "@WebProfiler/Collector/translation.html.twig";
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
        return array (  616 => 208,  599 => 205,  596 => 204,  592 => 202,  583 => 200,  579 => 199,  575 => 198,  569 => 196,  567 => 195,  564 => 194,  560 => 192,  558 => 191,  553 => 189,  548 => 187,  543 => 186,  537 => 184,  535 => 183,  531 => 182,  524 => 181,  507 => 180,  498 => 173,  494 => 171,  492 => 170,  486 => 166,  470 => 165,  459 => 151,  452 => 150,  441 => 129,  434 => 128,  423 => 108,  416 => 107,  402 => 154,  399 => 153,  396 => 150,  390 => 146,  388 => 145,  374 => 136,  370 => 135,  365 => 132,  362 => 131,  359 => 128,  353 => 124,  351 => 123,  338 => 115,  332 => 111,  329 => 110,  326 => 107,  320 => 103,  318 => 102,  308 => 95,  304 => 94,  300 => 92,  294 => 91,  291 => 90,  288 => 89,  285 => 88,  282 => 87,  279 => 86,  276 => 85,  273 => 84,  268 => 83,  265 => 82,  262 => 80,  255 => 79,  246 => 162,  243 => 161,  240 => 79,  234 => 75,  232 => 74,  223 => 68,  219 => 67,  212 => 63,  206 => 59,  199 => 58,  190 => 55,  184 => 52,  181 => 51,  178 => 50,  176 => 49,  171 => 47,  164 => 46,  157 => 45,  146 => 41,  143 => 40,  136 => 37,  127 => 31,  123 => 30,  114 => 24,  110 => 23,  102 => 18,  97 => 15,  95 => 14,  92 => 13,  85 => 11,  82 => 10,  80 => 9,  75 => 8,  72 => 7,  69 => 6,  62 => 5,  54 => 1,  52 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/translation.html.twig", "C:\\Users\\Arman Saleem\\Desktop\\symfony\\users-service\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\translation.html.twig");
    }
}
