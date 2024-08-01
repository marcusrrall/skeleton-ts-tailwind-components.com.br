<?php require_once 'includes/helpers/meta.php'; ?>
<?php
require_once get_template_directory() . '/includes/components/header.php';
require_once get_template_directory() . '/includes/components/footer.php';
require_once get_template_directory() . '/includes/helpers/templates.php';

use Components\Header;
use Components\Footer;
use Helpers\Template;

Template::renderComponent(Header::class, ['title' => 'Meu Tema']);
Template::renderComponent(Footer::class, ['year' => '2024']);
?>

<?php require_once 'includes/helpers/footer.php'; ?>