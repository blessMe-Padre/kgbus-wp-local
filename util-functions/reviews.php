<?php
function show_reviews()
{
    $reviews = new WP_Query(
        array(
            'post_type' => 'wpm-testimonial',
            'posts_per_page' => -1
        )
    );

    $review_box = '<ul class="reviews reviews-list justify-items-stretch">';

    foreach ($reviews->posts as $review) {
        $review_meta = get_post_meta($review->ID);

        $short_name = '';
        foreach (explode(' ', $review_meta['client_name'][0]) as $name_element) {
            $short_name .= mb_substr($name_element, 0, 1);
        }

        $review_box .= '<li class="rewiew flex flex-col">';
        $review_box .= '<div>';
        $review_box .= '<div class="head flex justify-between mb-7">';
        $review_box .= '<p class="name">' . $review_meta['client_name'][0] . '</p>';

        $review_box .= '<div class="flex items-center gap-1">';
        if (isset($review_meta['star_rating'][0])) {
            $review_box .= '<div class="grade">' . $review_meta['star_rating'][0] . '</div>';
        }
        $review_box .= '<img src="' . get_template_directory_uri() . '/src/img/star.svg" width="25"
                    height="25" alt="star">';
        $review_box .= '</div>';
        $review_box .= '</div>';
        $review_box .= '<div class="comment">' . $review->post_content . '</div>';
        $review_box .= '</div>';

        $review_box .= '<ul class="gallery flex gap-5">';
        $review_box .= '<li class="photo">';
        $review_box .= '<a href="' . $review_meta['featured_image'][0] . '">';
        $review_box .= '<img src="' . $review_meta['featured_image'][0] . '" height="110" width="110" />';
        $review_box .= '</a>';
        $review_box .= '</li>';

        $review_box .= '</ul>';
    }
    return $review_box;
}

function show_reviews_one()
{
    $reviews = new WP_Query(
        array(
            'post_type' => 'wpm-testimonial',
            'posts_per_page' => -1
        )
    );

    $review_box = '<ul class="reviews swiper-wrapper justify-items-stretch swiper-stretch">';

    foreach ($reviews->posts as $review) {
        $review_meta = get_post_meta($review->ID);
        $reviews_rating = $review_meta['star_rating'][0];

        $short_name = '';
        foreach (explode(' ', $review_meta['client_name'][0]) as $name_element) {
            $short_name .= mb_substr($name_element, 0, 1);
        }

        $review_box .= '<li class="rewiew swiper-slide flex flex-col">';
        $review_box .= '<div>';
        $review_box .= '<div class="head flex justify-between">';
        $review_box .= '<div class="name">' . $review_meta['client_name'][0] . '</div>';
        $review_box .= '<div class="grade">' . $review_meta['star_rating'][0] . '</div>';
        $review_box .= '</div>';

        $review_box .= '<div class="comment">' . $review->post_content . '</div>';
        $review_box .= '</div>';

        $review_box .= '<ul class="gallery flex">';
        $review_box .= '<li class="photo">';
        $review_box .= '<a href="' . $review_meta['featured_image'][0] . '">';
        $review_box .= '<img src="' . $review_meta['featured_image'][0] . '" />';
        $review_box .= '</a>';
        $review_box .= '</li>';
        $review_box .= '</ul>';
        $review_box .= '</li>';
    }

    $review_box .= '</ul>';

    return $review_box;
}

?>