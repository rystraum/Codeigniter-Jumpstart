<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title><?php echo $title ?></title>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <?php
        echo link_tag('public/reset.css');
        echo link_tag('public/defaults.css');
        echo link_tag('public/css/1140.css');
        echo link_tag('public/css/ie.css');
        echo link_tag('public/css/styles.css');
    ?>
</head>
<body>
    <div id="container">
        <div id="topbar" class="container">
            <div class="row">
                <div class="twelvecol last">
                    <?php
                        if ($this->tank_auth->is_logged_in()):
                            print "Welcome, " . anchor('user',$this->tank_auth->get_username());
                            print anchor('auth/logout','Logout');
                        else:
                            print anchor('auth/login','Login');
                        endif;
                    ?>
                </div>
            </div>
        </div>
        <div id="header" class="container">
            <div class="row">
                <div class="threecol logo-container">
                    <a href="<?php base_url() ?>">
                        <img src="<?php echo base_url('public/images/logo.png') ?>" alt="logo" id="logo" />
                    </a>
                </div>
                <div class="ninecol last">
                    <ul id="nav">
                        <li><?php echo anchor('','Home') ?></li>
                        <li><?php echo anchor('contact_us','Contact Us') ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="content" class="container">
            <div class="row">
                <div class="twelvecol last">
                    <?php print $contents ?>                
                </div>
            </div>
        </div>
        <div id="footer" class="container">
            <div class="row">
                <div class="twelvecol last">
                
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
</html>
