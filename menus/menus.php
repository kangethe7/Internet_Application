<?php
class menus{
    public function main_menu(){
        ?>
        <head>
        <link rel="stylesheet" href="css/style.css">
        </head>
        <div class="topnav">
            <a href="">Home</a>
            <a href="">About Us</a>
            <a href="">Contact Us</a>
            <a href="">Services</a>
            <?php $this->main_right_menu();?>

        </div>
        <?php
    }
    public function main_right_menu(){
        ?>
        <div class = "topnav-right">
            <a href="">Sign Up</a>
            <a href="">Sign In</a>
        </div>
        <?php
    }

}