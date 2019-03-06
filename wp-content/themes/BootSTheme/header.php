<?php wp_head(); ?>
<?php wp_footer(); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php wp_title(' | ',true,'right'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>

<div class = "navbar navbar-inverse navbar-static-top navbar-expand-lg navbar-dark bg-dark mb-3">
    <div class = "container">

        <a href = "#" class = "navbar-brand">Bootstrap WordPress Theme</a>

        <button class = "navbar-toggler" data-toggle = "collapse" data-target = ".navHeaderCollapse">
            <span class = "icon-bar"></span>
            <span class = "icon-bar"></span>
            <span class = "icon-bar"></span>
        </button>

        <div class = "collapse navbar-collapse navHeaderCollapse">

            <ul class = "nav navbar-nav navbar-right ml-auto">

                <li class = "nav-item"><a href = "#" class = "nav-link">Home</a></li>
                <li class = "dropdown">

                    <a href = "#" class = "nav-link dropdown-toggle" data-toggle = "dropdown">Blog <b class = "caret"></b></a>
                    <ul class = "dropdown-menu">
                        <li><a href = "#" class="dropdown-item">Item One</a></li>
                        <li><a href = "#" class="dropdown-item">Item Two</a></li>
                        <li><a href = "#" class="dropdown-item">Item Three</a></li>
                        <li><a href = "#" class="dropdown-item">Item Four</a></li>
                    </ul>

                </li>
                <li class = "nav-item dropdown">

                    <a href = "#" class = "nav-link dropdown-toggle" data-toggle = "dropdown">Social Media <b class = "caret"></b></a>
                    <ul class = "dropdown-menu">
                        <li class="dropdown-item"><a href = "#">Twitter</a></li>
                        <li class="dropdown-item"><a href = "#">Facebook</a></li>
                        <li class="dropdown-item"><a href = "#">Google+</a></li>
                        <li class="dropdown-item"><a href = "#">Instagram</a></li>
                    </ul>

                </li>
                <li class = "nav-item"><a href = "#" class = "nav-link">About</a></li>
                <li class = "nav-item"><a href = "#contact" class = "nav-link" data-toggle="modal">Contact</a></li>

            </ul>

        </div>

    </div>
</div>

<div class = "container">

    <!--<div class = "jumbotron">
        <h2>Post Title</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc arcu erat, congue eget ornare et, luctus eget purus. Etiam et risus metus. Nam sed mi tellus. Mauris molestie massa eu metus tempor, in hendrerit arcu adipiscing.</p>
    </div>

    <div class = "panel panel-default panel-body">
        <div class = "row">
            <div class = "col-md-2">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href = "#">Category One</a></li>
                    <li><a href = "#">Category Two</a></li>
                    <li><a href = "#">Category Three</a></li>
                    <li><a href = "#">Category Four</a></li>
                </ul>
            </div>
            <div class = "col-md-10">
                <a href = "#"><h3>This random post is really awesome!</h3></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc arcu erat, congue eget ornare et, luctus eget purus. Etiam et risus metus. Nam sed mi tellus. Mauris molestie massa eu metus tempor, in hendrerit arcu adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p class = "text-muted">Posted by Ahsan on January 1st 2014</p>
            </div>
        </div>
    </div>-->