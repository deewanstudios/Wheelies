<?php

$this->m_content_builder = '<!-- Shop products Grid View-->';
$this->m_content_builder .= '<div class="cell-md-9 cell-md-push-1">';
$this->m_content_builder .= $this->m_pager;

$this->m_content_builder .= '<!-- Shop Grid View-->';
$this->m_content_builder .= '<div class="range section-66">';

/* echo '<pre>';
var_dump(count($this->m_category_products));
echo '</pre>'; */
// if ($this->m_category_products = !null) {
# code...

foreach ($this->m_category_products as $m_product) {
    $this->m_content_builder .= '<div class="cell-xs-6 cell-sm-6 cell-lg-4 section-bottom-98">';

    $this->m_content_builder .= '<!--Product Grid Item-->';
    $this->m_content_builder .= '<div class="product product-grid product-grid-type-2">';
    // Anchor tag starts here
    $this->m_content_builder .= '<a href="';
    $this->m_content_builder .= $this->m_data['pagination_url'];
    $this->m_content_builder .= strtolower($m_product['gender_cat_name']);
    $this->m_content_builder .= '/';
    if (trim($m_product['bike_cat_name']) == $m_product['bike_cat_name'] && strpos($m_product['bike_cat_name'], ' ') !== false) {
        // code...
        $this->m_content_builder .= str_replace(' ', '-', strtolower($m_product['bike_cat_name']));
    } else {
        // code...
        $this->m_content_builder .= strtolower($m_product['bike_cat_name']);
    }
    $this->m_content_builder .= '/';
    if (trim($m_product['brand_cat_name']) == $m_product['brand_cat_name'] && strpos($m_product['brand_cat_name'], ' ') !== false) {
        // code...
        $this->m_content_builder .= str_replace(' ', '-', strtolower($m_product['brand_cat_name']));
    } else {
        // code...
        $this->m_content_builder .= strtolower($m_product['brand_cat_name']);
    }
    $this->m_content_builder .= '/';
    if (trim($m_product['product_name']) == $m_product['product_name'] && strpos($m_product['product_name'], ' ') !== false) {
        $this->m_content_builder .= str_replace(' ', '-', strtolower($m_product['product_name']));
    } else {
        $this->m_content_builder .= strtolower($m_product['product_name']);
    }

    if (!empty($m_product['product_model'])) {
        $this->m_content_builder .= '-';

        $this->m_content_builder .= str_replace(' ', '-', strtolower($m_product['product_model']));
    }

    $this->m_content_builder .= '">';
    // Anchor opening tag ends here

    $this->m_content_builder .= '</a>';

    $this->m_content_builder .= '<!--Product Image-->';
    $this->m_content_builder .= '<div class="product-image">';
    $this->m_content_builder .= "<img class=\"img-responsive product-image-area\" src=\"{$this->m_image_directory}products-images/{$m_product['image_path']}.jpg\" alt=\"\" width=\"\" height=\"\">";
    $this->m_content_builder .= '</div>';
    $this->m_content_builder .= '<!--Product Image Div Ends Here-->';
    // var_dump($m_product['image_path']);

    // Anchor tag closes here
    $this->m_content_builder .= '<!-- Product Title-->';
    $this->m_content_builder .= '<h5 class="product-title offset-top-20">';
    // Product name anchor tag starts here
    $this->m_content_builder .= '<a href="';
    $this->m_content_builder .= strtolower($m_product['product_cat_name']);
    $this->m_content_builder .= '/';
    $this->m_content_builder .= strtolower($m_product['gender_cat_name']);
    $this->m_content_builder .= '/';
    if (trim($m_product['bike_cat_name']) == $m_product['bike_cat_name'] && strpos($m_product['bike_cat_name'], ' ') !== false) {
        // code...
        $this->m_content_builder .= str_replace(' ', '-', strtolower($m_product['bike_cat_name']));
    } else {
        // code...
        $this->m_content_builder .= strtolower($m_product['bike_cat_name']);
    }
    // $this->m_content_builder .= strtolower($m_product["bike_cat_name"]);
    $this->m_content_builder .= '/';
    if (trim($m_product['brand_cat_name']) == $m_product['brand_cat_name'] && strpos($m_product['brand_cat_name'], ' ') !== false) {
        // code...
        $this->m_content_builder .= str_replace(' ', '-', strtolower($m_product['brand_cat_name']));
    } else {
        // code...
        $this->m_content_builder .= strtolower($m_product['brand_cat_name']);
    }
    $this->m_content_builder .= '/';
    if (trim($m_product['product_name']) == $m_product['product_name'] && strpos($m_product['product_name'], ' ') !== false) {
        $this->m_content_builder .= str_replace(' ', '-', strtolower($m_product['product_name']));
    } else {
        $this->m_content_builder .= strtolower($m_product['product_name']);
    }

    if (!empty($m_product['product_model'])) {
        $this->m_content_builder .= '-';

        $this->m_content_builder .= str_replace(' ', '-', strtolower($m_product['product_model']));
    }

    $this->m_content_builder .= '">';
    // Anchor opening tag ends here

    if (trim($m_product['brand_cat_name']) == $m_product['brand_cat_name'] && strpos($m_product['brand_cat_name'], '-') !== false) {
        // code...
        $split = (explode('-', $m_product['brand_cat_name']));
        $this->m_content_builder .= strtoupper($split[0]);
        $this->m_content_builder .= ' ';
        $this->m_content_builder .= ucwords($split[1]) . ' ' . ucwords($m_product['product_name']) . ' ' . ucwords($m_product['product_model']);
    } else {
        // code...
        $this->m_content_builder .= ucwords(str_replace('-', ' ', $m_product['brand_cat_name'])) . ' ' . ucwords($m_product['product_name']) . ' ' . ucwords($m_product['product_model']);
    }

    $this->m_content_builder .= '</a>';
    // Product name anchor tag ends here
    $this->m_content_builder .= '</h5>';

    $this->m_content_builder .= '<!-- Product Information-->';
    $this->m_content_builder .= '<p class="product-brand text-italic text-dark">';
    $this->m_content_builder .= ucwords("{$m_product['gender_cat_name']} " . "{$m_product['brand_cat_name']} bike");
    $this->m_content_builder .= '</p>';
    $this->m_content_builder .= '<p class="product-brand text-italic text-dark">';
    $this->m_content_builder .= "Model Year: {$m_product['model_year']}";
    $this->m_content_builder .= '</p>';

    $this->m_content_builder .= '<!-- Product price-->';
    $this->m_content_builder .= '<div class="product-price text-bold">';
    $this->m_content_builder .= '<span class="product-price text-bold">';
    $this->m_content_builder .= "£{$m_product['product_price_value']}";
    $this->m_content_builder .= '</span>';
    $this->m_content_builder .= '</div>';
    $this->m_content_builder .= '<!-- Product price div ends-->';
    $this->m_content_builder .= '<!--Insert Hover component here-->';
    $this->m_content_builder .= '<div class="product-block-hover">';
    $this->m_content_builder .= '<!-- Product Add To cart-->';
    $this->m_content_builder .= '<a ';
    $this->m_content_builder .= 'class="btn btn-sm btn-danger btn-view-product btn-icon btn-icon-left product-btn offset-top-20"';
    $this->m_content_builder .= 'href="';
    $this->m_content_builder .= strtolower($m_product['product_cat_name']);
    $this->m_content_builder .= '/';
    $this->m_content_builder .= strtolower($m_product['gender_cat_name']);
    $this->m_content_builder .= '/';
    if (trim($m_product['bike_cat_name']) == $m_product['bike_cat_name'] && strpos($m_product['bike_cat_name'], ' ') !== false) {
        // code...
        $this->m_content_builder .= str_replace(' ', '-', strtolower($m_product['bike_cat_name']));
    } else {
        // code...
        $this->m_content_builder .= strtolower($m_product['bike_cat_name']);
    }
    // $this->m_content_builder .= strtolower($m_product["bike_cat_name"]);
    $this->m_content_builder .= '/';
    if (trim($m_product['brand_cat_name']) == $m_product['brand_cat_name'] && strpos($m_product['brand_cat_name'], ' ') !== false) {
        // code...
        $this->m_content_builder .= str_replace(' ', '-', strtolower($m_product['brand_cat_name']));
    } else {
        // code...
        $this->m_content_builder .= strtolower($m_product['brand_cat_name']);
    }
    $this->m_content_builder .= '/';
    if (trim($m_product['product_name']) == $m_product['product_name'] && strpos($m_product['product_name'], ' ') !== false) {
        $this->m_content_builder .= str_replace(' ', '-', strtolower($m_product['product_name']));
    } else {
        $this->m_content_builder .= strtolower($m_product['product_name']);
    }

    if (!empty($m_product['product_model'])) {
        $this->m_content_builder .= '-';

        $this->m_content_builder .= str_replace(' ', '-', strtolower($m_product['product_model']));
    }
    $this->m_content_builder .= '"';
    $this->m_content_builder .= '>';
    $this->m_content_builder .= '<span class="icon mdi mdi-eye"></span>';
    $this->m_content_builder .= 'View Product';
    $this->m_content_builder .= ' </a>';
    $this->m_content_builder .= '</div>';
    $this->m_content_builder .= '</div>';
    $this->m_content_builder .= '<!--Product Grid Item Ends Here-->';
    $this->m_content_builder .= '</div>';
}
/* } else {
$this->m_content_builder .= "Product is currently out of stock";
} */
/* $this->m_content_builder .= "<!--products grid container-->"; */
$this->m_content_builder .= '</div>';
/*
End of shop grid view
 */
$this->m_content_builder .= $this->m_pager;
$this->m_content_builder .= '</div>';