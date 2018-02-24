## Installation

```bash
# install virtualbox/vagrant (using homebrew-cask)
brew cask install virtualbox vagrant

# init Homestead
./init.sh

# add vbox
vagrant box add laravel/homestead

# add ssh rsa keys (if not exist)
ssh-keygen -t rsa -C "write some words here"

```

```bash
vagrant ssh

cd ./code

php composer.phar install
cp .env.example .env
php artisan key:generate
```
