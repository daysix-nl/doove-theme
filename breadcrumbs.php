<?php
/* 

    Breadcrumbs ( included in functions.php! )
    Useage: <?php the_breadcrumb() ?>
*/
function the_breadcrumb()
{

    $sep = ' > ';

    if (!is_front_page()) {

        echo '<div class="breadcrumbs flex gap-1 text-lightGray leading-20 md:leading-14 lg:leading-18 xl:leading-22">';
        echo '<a href="';
        echo get_option('home');
       
        echo '">';
        //bloginfo('name');
        echo "Home";
        echo '</a>' . $sep;

        if (is_category() || is_single()) {
            the_category('title_li=');
        } elseif (is_archive() || is_single()) {
            if (is_day()) {
                printf(__('%s', 'text_domain'), get_the_date());
            } elseif (is_month()) {
                printf(__('%s', 'text_domain'), get_the_date(_x('F Y', 'monthly archives date format', 'text_domain')));
            } elseif (is_year()) {
                printf(__('%s', 'text_domain'), get_the_date(_x('Y', 'yearly archives date format', 'text_domain')));
            } else {
                _e('Blog Archives', 'text_domain');
            }
        }

        if (is_single()) {
            echo $sep;
            echo "<span>";
            the_title();
            echo "</span>";
        }

        if (is_page()) {
            echo "<span>";
            the_title();
            echo "</span>";
        }

        if (is_home()) {
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ($page_for_posts_id) {
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                echo "<span>";
                the_title();
                echo "</span>";
                rewind_posts();
            }
        }

        echo '</div>';
    }
}