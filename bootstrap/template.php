<?php
declare(strict_types=1);

namespace App;

use Ixocreate\Template\TemplateConfigurator;

/** @var TemplateConfigurator $template */

/**
 * Register default template paths
 */
$template->addDirectory('layout', __DIR__ . '/../templates/layout');
$template->addDirectory('page', __DIR__ . '/../templates/page');
$template->addDirectory('block', __DIR__ . '/../templates/block');
$template->addDirectory('partials', __DIR__ . '/../templates/partials');

$template->addExtensionDirectory('src/App/Template', true);
