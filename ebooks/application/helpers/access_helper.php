<?php
    
    function isLogin(){
        $CI =& get_instance();
        $sessionUser = $CI->session->userdata('user');
        if($sessionUser === 1){
            return true;
        }else{
            return false;
        }
    }

    function flashMessage(){
        $ci =& get_instance();
        if( $ci->session->flashdata('success') ){
            echo "<div class='alert alert-success alert-dismissable'>";
            echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
            echo $ci->session->flashdata('success');
            echo "</div>";
        }
        if( $ci->session->flashdata('info') ){
            echo "<div class='alert alert-info alert-dismissable'>";
            echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
            echo $ci->session->flashdata('info');
            echo "</div>";
        }
        if( $ci->session->flashdata('warning') ){
            echo "<div class='alert alert-warning alert-dismissable'>";
            echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
            echo $ci->session->flashdata('warning');
            echo "</div>";
        }
        if( $ci->session->flashdata('error') ){
            echo "<div class='alert alert-danger alert-dismissable'>";
            echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
            echo $ci->session->flashdata('error');
            echo "</div>";
        }
    }
?>