echo -e "\nSetting up site..."
# activate theme
wp theme activate tellefsenhall

wp post delete $(wp post list --post_type=page,post --field=ID)

# menus
wp menu create "Site Menu"
wp menu location assign "Site Menu" primary

# pages
function addpage() {
    wp post create --post_type=page --post_title=$1 --post_status=publish --porcelain
}
function addpage_menu() {
    wp menu item add-post "Site Menu" $(addpage $1)
}

wp option update show_on_front page
wp option update page_on_front $(addpage "Home")

addpage_menu "Tour"
addpage_menu "History"
addpage_menu "Join"
addpage_menu "Contact"

# acf plugin
wp plugin install advanced-custom-fields --activate
