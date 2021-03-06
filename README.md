This project is based on Drupal and creates bridge between [ckan](http://ckan.org/) as backend and 
Drupal as frontend.

# How to build the site.
Install the dependencies and start by downloading a fresh copy of Drupal and make sure that it's ready to
begin the installation process (e.g. LAMP stack configured).

## Install drush
This project uses drush make to handle contib modules and libraries (if you are using a Mac you can use
homebrew to install drush.).

```sh
  ~$ pear channel-discover pear.drush.org
  ~$ pear install drush/drush
  ~$ pear upgrade --force Console_Getopt
  ~$ pear upgrade --force pear
  ~$ pear upgrade-all
```

## Install Drupal
Go into your web-root and execute this command to download drupal

```sh
  ~$ drush dl drupal-7.x
  ~$ mv drupal-7.x/* .
  ~$ mv drupal-7.x/.* .
  ~$ rm -r drupal-7.x
```

## Prepare the site

```sh
  ~$ cd DRUPAL/sites
  ~$ git clone git@github.com:aakb/odaa_dk.git odaa.dk
  ~$ mkdir -p odaa.dk/files
  ~$ mkdir -p odaa.dk/private/files
  ~$ mkdir -p odaa.dk/private/temp
  ~$ cp default/default.settings.php odaa.dk/settings.php
  ~$ chown www-data:www-data odaa.dk/files
  ~$ chown -R www-data:www-data odaa.dk/private
  ~$ chmod 777 odaa.dk/settings.php
```

Next edit copy the sites file and add your local alias for the site to it. 
  
```sh
  ~$ cp example.sites.php sites.php  
  ~$ nano -w sites.php
```

Add this line to the file, if your local alias is odaa.local.

```php
  $sites['odaa.local'] = 'odaa.dk';
```

Next go into the odaa.dk folder and run this command.

```sh
  ~$ drush make --no-core --contrib-destination=. odaa.make -y
```

## Install the site
In your browser goto http://odaa.local and run the default installation process. After that sync files and
the database from the production system and your are ready to start coding.
