<?php

$m_centered_section = "<!--Page Content Wrapper Begins-->";
$m_centered_section .= "<section class=\"section-34 section-sm-34\">";
$m_centered_section .= "<div class=\"shell\">";

foreach ($sections as $m_section_view) {

    foreach ($m_section_view as $section_content) {
        $m_centered_section .= $section_content;
    }
}

$m_centered_section .= "</div>";
$m_centered_section .= "</section>";
$m_centered_section .= "<!--Page Content Wrapper Ends-->";
