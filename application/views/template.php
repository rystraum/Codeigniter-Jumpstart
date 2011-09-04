<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title><?php echo $title ?></title>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <?php
        echo link_tag('public/reset.css');
        echo link_tag('public/defaults.css');
    ?>
</head>
<body>
    <div id="container">
        <div id="topbar">
            <?php
                if ($this->tank_auth->is_logged_in()):
                    print anchor('user',$this->tank_auth->get_username());
                    print anchor('auth/logout','Logout');
                else:
                    print anchor('auth/login','Login');
                endif;
            ?>
        </div>
        <div id="header">
            <img src="<?php echo base_url('public/images/logo.png') ?>" alt="logo" id="logo" />
            <ul id="nav">
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div id="content">
            <?php print $contents ?>
        </div>
        <div id="footer">
        
        </div>
    </div>
</body>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
</html>
