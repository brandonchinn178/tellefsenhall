        </div> <!-- CLOSE div.content -->
        <footer>
            <table><tr>
                <?php
                    $query = new WP_Query(array(
                        'post_type' => 'footer',
                        'orderby' => 'meta_value',
                        'meta_key' => 'column',
                        'order' => 'ASC',
                    ));

                    while ($query->have_posts()) {
                        $query->the_post();
                        $title = get_field('title');
                        $content = get_field('content');
                        echo(
                            "<td>
                                <h2>$title</h2>
                                $content
                            </td>"
                        );
                    }
                ?>
            </tr></table>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
