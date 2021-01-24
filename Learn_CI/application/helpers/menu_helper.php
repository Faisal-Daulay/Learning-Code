<?php
    function menu_help ($main_menu, $nama_table, $link, $icon) { 
        
        $CI =& get_instance();
        $main_menu = $CI->db->get_where($nama_table, array('is_main_menu'=>0))->result();
        foreach ($main_menu as $main) {
            $submenu = $CI->db->get_where($nama_table, array('sub_menu'=> $main -> idset_menu));

            if ($submenu->num_rows() > 0) {
            echo "
                <li class='nav-item dropdown'>
                <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                    <i class='$main->icon'></i> $main->nama_menu
                </a>
                <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                    ";
                    
                        foreach ($submenu -> result() as $sub) {
                            echo "
                                <a class='dropdown-item' href='$sub->link'>
                                   <i class='$sub->icon'></i> $sub->nama_menu
                                </a>
                            ";
                        }

                    echo "
                </div>
                </li>
            ";
            } else {
            echo "
                <li class='nav-item'>
                    <a class='nav-link' href='$main->link'>
                        <i class='$main->icon'></i> $main->nama_menu
                    </a>
                </li>
            ";
            }
        }
    }
?>