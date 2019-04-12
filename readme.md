# Autoloading, namespaces & package managers

### Description
This repository demonstrates how to painlessly use 3rd party libraries. How to autoload them 
together with your own custom classes and how to avoid class names conflicts.

### What does this repo really do
1. Generate random name and country and store it to array
2. Send this array to template engine
3. Let template engine generate and display html

### Used libraries and tools
- Composer: Dependency manager [link](https://getcomposer.org/)
- Twig: Template engine [link](https://twig.symfony.com/)
- Faker: Generates fake data for you [link](https://github.com/fzaninotto/Faker)
- Bulma: CSS Framework [link](https://bulma.io/)
- Unsplash: Random images [link](https://source.unsplash.com/)
- Local dev: [Xampp](https://www.apachefriends.org/index.html) (windows), [Mamp](https://www.mamp.info/en/) (os x), [Docker](https://www.docker.com/) (universal)
## Dependency Management
A Dependency is an external standalone program module (library) that can be as small as a single file 
or as large as a collection of files and folders organized into packages that performs a specific task.

Dependency managers are software modules that coordinate the integration of external libraries or 
packages into larger application stack.

Dependency managers use configuration files to determine:
1. What dependency to get
2. What version of the dependency in particular and
3. Which repository to get them from.

## Autoloading with Composer
Composer is the most awesome tool for any PHP developer that made managing dependencies for any 
application packages hassle-free. And we're going to use it for eliminate that annoying `require` 
statements at the top of each file. Well except this one line

`require_once __DIR__ . '/vendor/autoload.php';` <- check index.php file

Composer autoloading configuration (2 options):

#### 1. composer.json classmap
```
{
  "autoload": {
    "classmap": ["src/", "lib/", "Something.php"]
  }
}
```
Classmap autoloading does not require you to have almost any certain file or directory structure, it will recursively 
go through .php and .inc files in specified directories and files and sniff for classes in them

#### 2. composer.json PSR-4
```
{
  "autoload": {
      "psr-4": {
          "SwitchMedia\\Kea\\": "src/"
      }
  }
}
```
PSR-4 standard requires of you a strict filesystem structure based on namespaces.

## Namespaces
Assume that you are creating an open-source PHP library to send emails and you share that with the developer 
community. Your library has a class named Email. Then, a developer downloads your library. But, if he already 
had a class called Email, Name Collision occurs. You will need to rename those classes or use a smarter solution: Namespaces.

It's easy let's have a look at how it works in this app. [commence practical showcase here]

- PSR-4 autoloading specifications [here](https://www.php-fig.org/psr/psr-4/)
- More about namespaces here -> [developer.hyvor.com](https://developer.hyvor.com/tutorials/php/oop-namespaces?revised)

#### Gotchas
- Turn on error reporting (warnings too)
- run `composer dump-autoload` after any autoload config change
- don't use `Switch` as a namespace, it's reserved word

# How to run this app
1. Clone this repo
2. Make sure docker is installed
2. Run `docker-compose up` from the root folder