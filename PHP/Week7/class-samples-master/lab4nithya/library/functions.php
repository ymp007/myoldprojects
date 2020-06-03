<?php

function populateDropdown($options, $select = ""){
    $html_dropdown = "";
     foreach ($options as $code => $name) {
        $selected = $select == $code ? "selected" : "";
        $html_dropdown .= "<option $selected value='$code'>$name</option>";
    }

    return $html_dropdown;
}


function displayNavigation(array $menu, $class = "menu")
{
    $html_menu = "<div class='$class'><ul>";
    foreach ($menu as $name => $link) {
        $html_menu .= "<li><a href='$link'>$name</a></li>";
    }
    $html_menu .= '</ul></div>';
    return $html_menu;
}