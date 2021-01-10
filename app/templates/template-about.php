<?php
/**
* Template Name: Template - About
*/

use Timber\Timber;

$context                = Timber::get_context();
$context['post']        = Timber::get_post();
$context['acf_field']   = 'Hi world!!';

addContextVariables($context);

Timber::render('app.twig', $context);
