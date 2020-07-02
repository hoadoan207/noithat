<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Noi That</title>
    <link rel=icon href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.png" sizes="20x20" type="image/png">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/style.css">

    <script>
        var site_uri = '<?php echo get_template_directory_uri()?>';
    </script>
</head>

<?php wp_head() ?>
<body class="<?php echo add_slug_body_class() ?>">
