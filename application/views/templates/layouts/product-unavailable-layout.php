<?php
$this->m_content_builder = '<div id="out-of-stock" class="text-center">';
$this->m_content_builder .= '<h2 class="text-between">Temporarily out of stock</h2>';
$this->m_content_builder .= '<div class="font-size-1-point-250em">';
$this->m_content_builder .= 'Dear customer,</br> we are so sorry to inform you that our, </br>';
$this->m_content_builder .= '<span class="text-danger text-bold">';
$this->m_content_builder .= strtoupper($this->m_tags[0]);
$this->m_content_builder .= '</span>';
$this->m_content_builder .= ' bikes are temporarily out of stock.</br>';
$this->m_content_builder .= 'New stock expected by mid June 2020';
$this->m_content_builder .= '</div>';
$this->m_content_builder .= '</div>';

// Hello world!!
