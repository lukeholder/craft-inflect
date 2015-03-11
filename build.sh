cwd=$(pwd)
cd plugins/inflect
composer install
cd $cwd
zip -r "craft-inflect.zip" plugins -x "plugins/inflect/composer.json" "plugins/inflect/composer.lock" "*.DS_Store*" 
