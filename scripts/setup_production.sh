echo -e "\nSetting up production server..."
cd ~

echo -e "\nDownloading the wordpress command line interface..."
if ![ -x "$(command -v wp)" ]; then
    curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
    chmod +x wp-cli.phar
    echo "alias wp='~/wp-cli.phar'" >> .bashrc
    source .bashrc
fi

cd ~/public_html
source setup_site.sh

echo -e "\nLinking apache directories..."
ln -fs ~/tellefsenhall ~/public_html/wp-content/themes/tellefsenhall
