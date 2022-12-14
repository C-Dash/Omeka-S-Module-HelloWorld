# HelloWorld

A bare-bones Omeka-S module.  Intended as a tutorial and a starter template 
for people who are new to PHP, Laminas and Omeka-S Development.  


## Installation

See general end user documentation for [Installing a module](http://omeka.org/s/docs/user-manual/modules/#installing-modules)

## To Use

Once installed, this module extends all of your omeka-sites with URL routes as specified in `config/module.config.php`.  To see these in action, gpo to a site page and add "helloworld" to your site's URL string in your browser.  for example:

```
http://[server]/omeka-s/s/[siteslug]/helloworld
```

Where [server] is the web server for your Omeka-S installation and [siteslug] is the slug for your site.

If the module is installed correctly, the omeka will invoke the `src/controller/HelloController.php` which will present a page generated by the `views/hello/index.phtml` template.  The index page includes the `view/common/hello-form.phtml` form element.  

Enter a name in the form and push the Greet button.  

When the form is  submitted, the URL is extended with the `helloworld\greet?name=[yourname]` parameter, and a new page is generated using the `views/hello/greet.phtml` template that also includes the hello-form element.  

You can add the `hello-form.phtml` element to any of your site pages pages in your custom theme. 

Continue to hack this module to adjust the controller, routes, partial html pages to do useful things!

## Resources

Explore the [Laminas Modules Tutorial](https://docs.laminas.dev/tutorials/getting-started/modules/) and explore the documentation for the various laminas functions that are included in this module's files.  

The [Omeka-S developer documentation on Modules](https://omeka.org/s/docs/developer/modules/) provides many essential elements for modules.


## Copyright

The HelloWorld module is free to re-use for any purpose according to the MIT license.   
