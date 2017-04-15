echo -e "\nSetting up site..."
# activate theme
wp theme activate tellefsenhall

wp post delete $(wp post list --post_type=page,post --field=ID)

# menus
wp menu create my-menu
wp menu location assign my-menu primary

# pages
function addpage() {
    wp menu item add-post my-menu $(
        wp post create --post_type=page --post_title=$1 --post_status=publish --porcelain
    )
}
addpage "Tour"
addpage "History"
addpage "Join"
addpage "Contact"

# acf plugin
wp plugin install advanced-custom-fields --activate
