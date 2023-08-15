                <?php
                    // Vervang dit pad met het juiste pad naar je WordPress installatie
                    require_once('/Users/daysix/Local Sites/doove-care-groep/app/public/wp-load.php');
                    // Haal de volledige URL van de huidige pagina op
                    $current_url = $_SERVER['REQUEST_URI'];
                    // Vind de categorie-slug in de URL
                    if (preg_match('/\/categorie-(.*?)\//', $current_url, $matches)) {
                        $category_slug = $matches[1];
                        // Gebruik de categorie-slug om de bijbehorende categorie op te halen
                        $category = get_category_by_slug($category_slug);
                        if ($category) {
                            // Toon de naam van de categorie
                            echo $category->name;
                        } else {
                            echo 'Zorghulpmiddelen';
                        }
                    } else {
                        echo 'Zorghulpmiddelen';
                    }
                    ?>