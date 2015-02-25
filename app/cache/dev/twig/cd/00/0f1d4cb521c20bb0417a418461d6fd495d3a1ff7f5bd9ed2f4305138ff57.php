<?php

/* PnvSaisieBundle:Activite:show.html.twig */
class __TwigTemplate_cd000f1d4cb521c20bb0417a418461d6fd495d3a1ff7f5bd9ed2f4305138ff57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<h1>Affichage activité</h1>
<tr><td>
";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "idAction", array()), "html", null, true);
        echo " # ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "idMaitrise", array()), "html", null, true);
        echo " # ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "idTerritoire", array()), "html", null, true);
        echo " # ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "idDuree", array()), "html", null, true);
        echo " # ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "commentaire", array()), "html", null, true);
        echo "
</tr></td>
<tr><td>
";
        // line 12
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("activite_index");
        echo "\">Retour à la liste des activités</a>
</tr></td>
";
    }

    public function getTemplateName()
    {
        return "PnvSaisieBundle:Activite:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  44 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
