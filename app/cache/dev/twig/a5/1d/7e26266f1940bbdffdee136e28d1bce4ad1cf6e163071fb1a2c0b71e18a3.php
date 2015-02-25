<?php

/* PnvSaisieBundle:Activite:index.html.twig */
class __TwigTemplate_a51d7e26266f1940bbdffdee136e28d1bce4ad1cf6e163071fb1a2c0b71e18a3 extends Twig_Template
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
        echo "<h1>Activite list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Activité</th>
                <th>Maitrise</th>
                <th>Territoire bénef</th>
                <th>Temps passé</th>
                <th>Commentaire</th>
            </tr>
        </thead>
        <tbody>
\t\t";
        // line 18
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")));
        foreach ($context['_seq'] as $context["_key"] => $context["activite_record"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["activite_record"], "idAction", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["activite_record"], "idMaitrise", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["activite_record"], "idTerritoire", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["activite_record"], "idDuree", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["activite_record"], "commentaire", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activite_show", array("activiteId" => $this->getAttribute($context["activite_record"], "idActivite", array()))), "html", null, true);
            echo "\">Afficher</a><td>
\t\t\t\t<td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activite_edit", array("activiteId" => $this->getAttribute($context["activite_record"], "idActivite", array()))), "html", null, true);
            echo "\">Editer</a></td>
\t\t\t\t<td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activite_delete", array("activiteId" => $this->getAttribute($context["activite_record"], "idActivite", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
                
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite_record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

        <ul>
        <li>
\t\t";
        // line 37
        echo "            <a href=\"";
        echo $this->env->getExtension('routing')->getPath("activite_add");
        echo "\">
                Ajouter une activité
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "PnvSaisieBundle:Activite:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 37,  100 => 31,  90 => 27,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  66 => 21,  62 => 20,  59 => 19,  54 => 18,  39 => 4,  36 => 3,  11 => 1,);
    }
}
