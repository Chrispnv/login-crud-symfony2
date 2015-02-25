<?php

/* PnvSaisieBundle:Activite:add.html.twig */
class __TwigTemplate_5443ed27e4b4760af5d9e664fe4bc9db97767c16d37e94797f8be8a744b0bfdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if ($this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "idActivite", array())) {
            echo "Edit activite";
        } else {
            echo "Add activite";
        }
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<form action=\"";
        if ($this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "idActivite", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activite_edit", array("activiteId" => $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "idActivite", array()))), "html", null, true);
        } else {
            echo $this->env->getExtension('routing')->getPath("activite_add");
        }
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    <h1>";
        // line 8
        if ($this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "idActivite", array())) {
            echo "Edit activite";
        } else {
            echo "Add activite";
        }
        echo "</h1>
    <div>
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idAction", array()), 'errors');
        echo "
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idAction", array()), 'label');
        echo "
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idAction", array()), 'widget');
        echo "
    </div>
\t<div>
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idMaitrise", array()), 'errors');
        echo "
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idMaitrise", array()), 'label');
        echo "
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idMaitrise", array()), 'widget');
        echo "
    </div>
\t<div>
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idTerritoire", array()), 'errors');
        echo "
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idTerritoire", array()), 'label');
        echo "
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idTerritoire", array()), 'widget');
        echo "
    </div>
\t<div>
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCommune", array()), 'errors');
        echo "
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCommune", array()), 'label');
        echo "
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCommune", array()), 'widget');
        echo "
    </div>
\t<div>
    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idDuree", array()), 'errors');
        echo "
    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idDuree", array()), 'label');
        echo "
    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idDuree", array()), 'widget');
        echo "
    </div>
    <div>
    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'label');
        echo "
    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget');
        echo "
    </div>
    
    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <input type=\"submit\" id=\"submit\" value=\"";
        // line 41
        if ($this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "idActivite", array())) {
            echo "Update";
        } else {
            echo "Add";
        }
        echo "\" name=\"submit\" />
</form>
<tr><td>
<a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("activite_index");
        echo "\">Retour à la liste des activités</a>
</tr></td>

";
    }

    public function getTemplateName()
    {
        return "PnvSaisieBundle:Activite:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 44,  158 => 41,  154 => 40,  148 => 37,  144 => 36,  140 => 35,  134 => 32,  130 => 31,  126 => 30,  120 => 27,  116 => 26,  112 => 25,  106 => 22,  102 => 21,  98 => 20,  92 => 17,  88 => 16,  84 => 15,  78 => 12,  74 => 11,  70 => 10,  61 => 8,  50 => 7,  47 => 5,  37 => 3,  11 => 2,);
    }
}
