# MVC & Routing <!-- Exercise title -->

- Team challenge : `solo`
- Duration: `1 day`

You can find the original exercise readme [by clicking here](https://github.com/becodeorg/ANT-Lamarr-5.34/tree/main/3.The-Mountain/Symfony/1.MVC-routing)

# Challenge

Time for a new framework! After weeks of PHP we are getting started with one of its most popular frameworks,
namely, [Symfony](https://symfony.com/) (I will be using Symfony 6 throughout these exercises).

# To get it working, I followed these steps:

#### Install the composer using:

` composer install `

#### Creating a route in YAML that points to a controller function is pretty simple. But there's an even easier way to create routes... and I love it. It's called: 
Annotations.

First, comment-out the YAML route. Basically, remove it entirely. To prove it's not working, refresh the homepage. Yep! It's back to the welcome page.

### To install the annotation basically I run this command:

~~~
 composer require annotations 
~~~

Anyways, now that annotations support is installed, we can re-add our route via annotations. What does that mean? Above your controller function, say /** and hit enter to create a PHPDoc section. Then say @Route and auto-complete the one from the Routing component. Just like before, PhpStorm added the use statement at the top of the class automatically.

run `symfony server:start` to start the built-in dev-serve

What I learned from this exercise
---------

* [x] Have clear understanding about how MVC Works.
* [x] Any styling or html can be done in twig file.
* [x] Difference between YAML and annotation and how these works.
* [x] `php bin/console ` This command lists a bunch of different things you can do with it, including a lot of debugging tools. 
