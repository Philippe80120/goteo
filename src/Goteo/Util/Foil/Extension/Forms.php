<?php
/*
 * This file is part of the Goteo Package.
 *
 * (c) Platoniq y Fundación Goteo <fundacion@goteo.org>
 *
 * For the full copyright and license information, please view the README.md
 * and LICENSE files that was distributed with this source code.
 */

namespace Goteo\Util\Foil\Extension;

use Goteo\Application\App;
use Symfony\Component\HttpFoundation\Request;
use Foil\Contracts\ExtensionInterface;
use Symfony\Component\Form\FormView;

class Forms implements ExtensionInterface
{
    public function setup(array $args = [])
    {


    }

    public function provideFilters()
    {
        return [];
    }

    public function provideFunctions()
    {
        return [
          'form_form' => [$this, 'form'],
          'form_start' => [$this, 'start'],
          'form_end' => [$this, 'end'],
          'form_rest' => [$this, 'rest'],
          'form_row' => [$this, 'row'],
          'form_widget' => [$this, 'widget'],
          'form_label' => [$this, 'label'],

        ];
    }

    public function form(FormView $formView = null, array $variables = array())
    {
        return App::getService('app.forms')->getForm()->form($formView, $variables);
    }

    public function start(FormView $formView = null, array $variables = array()) {
        return App::getService('app.forms')->getForm()->start($formView, $variables);
    }

    public function end(FormView $formView = null, array $variables = array()) {
        return App::getService('app.forms')->getForm()->end($formView, $variables);
    }

    public function rest(FormView $formView = null, array $variables = array()) {
        return App::getService('app.forms')->getForm()->rest($formView, $variables);
    }

    public function row(FormView $formView = null, array $variables = array()) {
        return App::getService('app.forms')->getForm()->row($formView, $variables);
    }

    public function widget(FormView $formView = null, array $variables = array()) {
        return App::getService('app.forms')->getForm()->widget($formView, $variables);
    }

    public function label(FormView $formView = null, array $variables = array()) {
        return App::getService('app.forms')->getForm()->label($formView, $variables);
    }


}
