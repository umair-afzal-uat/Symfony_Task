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

/* @Debug/Profiler/dump.html.twig */
class __TwigTemplate_5d69b6c21a153cd98e528ce29c215025 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Debug/Profiler/dump.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Debug/Profiler/dump.html.twig", 1);
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "dumpsCount", [], "any", false, false, false, 4)) {
            // line 5
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 6
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@Debug/Profiler/icon.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "dumpsCount", [], "any", false, false, false, 7), "html", null, true);
                yield "</span>
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 9
            yield "
        ";
            // line 10
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 11
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "getDumps", ["html"], "method", false, false, false, 11));
                foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
                    // line 12
                    yield "                <div class=\"sf-toolbar-info-piece\">
                    <span>
                    ";
                    // line 14
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "file", [], "any", false, false, false, 14)) {
                        // line 15
                        yield "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "file", [], "any", false, false, false, 15), CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "line", [], "any", false, false, false, 15));
                        // line 16
                        yield "                        ";
                        if (($context["link"] ?? null)) {
                            // line 17
                            yield "                            <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link"] ?? null), "html", null, true);
                            yield "\" title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "file", [], "any", false, false, false, 17), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "name", [], "any", false, false, false, 17), "html", null, true);
                            yield "</a>
                        ";
                        } else {
                            // line 19
                            yield "                            <abbr title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "file", [], "any", false, false, false, 19), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "name", [], "any", false, false, false, 19), "html", null, true);
                            yield "</abbr>
                        ";
                        }
                        // line 21
                        yield "                    ";
                    } else {
                        // line 22
                        yield "                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "name", [], "any", false, false, false, 22), "html", null, true);
                        yield "
                    ";
                    }
                    // line 24
                    yield "                    </span>
                    <span class=\"sf-toolbar-file-line\">line ";
                    // line 25
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "line", [], "any", false, false, false, 25), "html", null, true);
                    yield "</span>

                    ";
                    // line 27
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "data", [], "any", false, false, false, 27);
                    yield "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                yield "        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 31
            yield "
        ";
            // line 32
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
            yield "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 36
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 37
        yield "    <span class=\"label ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "dumpsCount", [], "any", false, false, false, 37) == 0)) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 38
        yield Twig\Extension\CoreExtension::source($this->env, "@Debug/Profiler/icon.svg");
        yield "</span>
        <strong>Debug</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 43
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 44
        yield "    <h2>Dumped Contents</h2>

    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "getDumps", ["html"], "method", false, false, false, 46));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
            // line 47
            yield "        <div class=\"sf-dump sf-reset\">
            <span class=\"metadata\">In
                ";
            // line 49
            if (CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "line", [], "any", false, false, false, 49)) {
                // line 50
                yield "                    ";
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "file", [], "any", false, false, false, 50), CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "line", [], "any", false, false, false, 50));
                // line 51
                yield "                    ";
                if (($context["link"] ?? null)) {
                    // line 52
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link"] ?? null), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "file", [], "any", false, false, false, 52), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "name", [], "any", false, false, false, 52), "html", null, true);
                    yield "</a>
                    ";
                } else {
                    // line 54
                    yield "                        <abbr title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "file", [], "any", false, false, false, 54), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "name", [], "any", false, false, false, 54), "html", null, true);
                    yield "</abbr>
                    ";
                }
                // line 56
                yield "                ";
            } else {
                // line 57
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "name", [], "any", false, false, false, 57), "html", null, true);
                yield "
                ";
            }
            // line 59
            yield "                line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 59), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "line", [], "any", false, false, false, 59), "html", null, true);
            yield "</a>:
            </span>

            <div class=\"sf-dump-compact hidden\" id=\"sf-trace-";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 62), "html", null, true);
            yield "\">
                <div class=\"trace\">
                    ";
            // line 64
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "fileExcerpt", [], "any", false, false, false, 64)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "fileExcerpt", [], "any", false, false, false, 64)) : ($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->fileExcerpt(CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "file", [], "any", false, false, false, 64), CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "line", [], "any", false, false, false, 64))));
            yield "
                </div>
            </div>

            ";
            // line 68
            yield CoreExtension::getAttribute($this->env, $this->source, $context["dump"], "data", [], "any", false, false, false, 68);
            yield "
        </div>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 71
            yield "        <div class=\"empty\">
            <p>No content was dumped.</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Debug/Profiler/dump.html.twig";
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
        return array (  292 => 71,  276 => 68,  269 => 64,  264 => 62,  255 => 59,  249 => 57,  246 => 56,  238 => 54,  228 => 52,  225 => 51,  222 => 50,  220 => 49,  216 => 47,  198 => 46,  194 => 44,  187 => 43,  175 => 38,  170 => 37,  163 => 36,  152 => 32,  149 => 31,  145 => 30,  136 => 27,  131 => 25,  128 => 24,  122 => 22,  119 => 21,  111 => 19,  101 => 17,  98 => 16,  95 => 15,  93 => 14,  89 => 12,  84 => 11,  82 => 10,  79 => 9,  73 => 7,  68 => 6,  65 => 5,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Debug/Profiler/dump.html.twig", "C:\\Users\\Arman Saleem\\Desktop\\symfony\\users-service\\vendor\\symfony\\debug-bundle\\Resources\\views\\Profiler\\dump.html.twig");
    }
}
