# WordPress from Scratch Instructions

### Local Setup
  - download and use Local Application to create your site locally
  - this will set up your database for you (MySQL is used, make sure it's installed)
  - make sure PHP latest version is installed --> use homebrew
  - input other info --> site domain/name, sign in to the account you create w/ Local
  - this should install all the files like `app` `conf` and `logs` and `app/wp-content`, `app/wp-includes`, and `app/wp-adim`

### Initial Wordpress Clean-Up
  - got to the WP Admin page and:
  - delete themes from the files
  - delete the pages, plugins, posts, patterns,etc
  - change time zone
  - change permalink to post name
  - delete tagline
  - change homepage to static page (called home or something like that)
  - create "Home" page
  - optional to change editor to the "Classic Editor" instead of "Gutenberg"

### Creating the files
  - create your theme directory in the wp-content/themes directory
  - index.php (the first file that WP reads)
  - functions.php ( runs all the methods that WP uses)
  - header.php (code for header)
  - footer.php (code for footer)
  - front-page.php (code for just the front page)
  - page.php (code every other page other than the front page)
  - 404.php (code for the error message on a 404 status)
  - archive.php (archive of all the blog posts created)
  - search.php (code for the search)
  - single.php (code for single blog posts)
  - style.css (holds the theme name/author/version)

### Input the Bootstrap Files
  - download the compiled CSS and JS from bootstrap site
  - transfer the CSS and JS files into the theme directory

### Link up Header and Footers to Main Template
  - at this point you should be able to select your theme in the WP Admin area
  - try to keep the header and footer as separate entities
  - start on the front-page.php
  - to connect the header to the front-page use the `get_header` function
  - `<?php get_header();?>`
  - and similarly with the footer : `<?php get_footer();?>`

### Add WP CSS/JS to the Header and Footer
  - go to `header.php` and add an HTML:5 scaffold
  - cut the bottom `</body></html>` and paste it in the `footer.php` file
  - at this point you can check in the webpage the html included and this stuff should show up
  - `<?php wp_head();?>` and `<php wp_footer();?>` inside the html and in the respective files --> this automatically injects WP's CSS and JS that it needs for the header and footer.
  - The Admin Bar should be appearing now on the website

### Load CSS in functions.php file
  - go to `functions.php` file and add 
  ```
  <?php 
  
    function load_css()
    {
      wp_register_style('bootstrap', get_template_directory_uri() . 'css/boostrap.min.css', array(), false, 'all') ;  

      wp_enqueue_style('bootstrap')
    }
    
    add_action('wp_enqueue_scripts, 'load_css');

  ?>
  ```
  #### 1st
  - make sure you have the CSS and JS files from Bootstrap
  #### 2nd
  - create a function `load_css`
  - put `wp_register_style()` inside `load_css`
  - add all the arguments:
  - `boostrap` names the stylesheet
  - `get_template_directory_uri` tells PHP to get the template from a diretory
  - the `.` is to tell php to run
  - then of course we list the diretory location(from downloaded bootstrap files)
  - `array()` represents any dependencies
  - `false` represents the version number
  - `all` represents the media for cool websites
  #### 3rd
  - enqueue it by entering `wp_enqueue_style('bootstrap');`
  #### 4th
  - add `add_action` outside of the function to make it actually call the action
  - at this point

### Load JS in functions.php file
  - pretty similar
  ```
  function() load_js
  {
    wp_register_script('bootstrap', get_template_directory_uri() . 'js/boostrap.min.js', jquery, )

    wp_enqueue_script('bootstrap')
  }

  add_action('wp_enqueue_scripts, 'load_js');

  ```
  - different method `wp_register_script`
  - same get_template method
  - JS version of a similar looking file
  - the `false` is the version
  - the true `false` is "in footer?" option, do you want this in your footer? Yes
  - Now, the `bootstrap.min.css` and `bootstrap.min.js` should end up in the html of the website if you "view page source"

### Enqueue JQuery
  - go to `load_js` function in `functions.php` and add `wp_enqueue_script('jquery')` at the top of the function
  - should be able to find jquery in the html of the site as well
  - helps with plugins of older or newer version still work --> compatibility


### Display Content
  - (this will allow us to write content in the WP Admin "Edit Page" and have it display on the respective page)
  - go to our `front-page.php` template file
  - add container:

```
<div class="container">

  <h1> <?php   the_title();?> </h1>

</div>
```
  - should look like this now:
```
<?php get_header();?>

  <div class="container">

    <h1> <?php the_title();?> </h1>

  </div>

<?php get_footer();?>
```
  - now we will put in a "section" or a "template part".(This strategy provides a way to split your theme into smaller, reusable template parts and include them in other templates and makes your template file itself, cleaner --> using the `get_template_part()` function)
  - create a new directory in the theme directory called `includes`
  - within `includes` create a file called `section-content.php` (to separate logic and make it nice)
  - this file will link to the WP Admin "Edit Page" page, and depending on what page we are on, it will display the content we type in using the WP Admin. (We will add logic to the `includes/section-content.php` file to search for posts for that page from the *database* and display them)
  - now call that new file from the `front-page.php` by using `<?php get_template_part('includes/section', 'content');?>` (inside the "container" div)
  - `page.php` should look like this now:
```
<?php get_header();?>

  <div class="container">

    <h1> <?php the_title();?> </h1>

    <?php get_template_part('includes/section', 'content');?>

  </div>

<?php get_footer();?>
```
  - go the your `section-content.php` file and add this code:
```
<?php if(have_posts()): while(have_posts() ): the_post();?>
```
  - basically says: if we have posts for the specific page that we're on, while we have the posts there, show us the posts
  - we need to add a function to tell PHP to show us the content `<?php the_content();?>`
  - then we need to close it with `<?php endwhile; else: endif;?>` at the bottom
  - we can now use the "Edit Page" page on the WP Admin site to add content
  
### Create the `page.php` Template
  - add new page from WP Admin site like "About Us"
  - add content in the "Edit Page" section
  - it doesn't show up....why??
  - gotta add some code in the `page.php` file since the `front-page.php` file only connects with the front page
  - copy the code from the `front-page.php` and paste in the  `page.php` file
  - this will give us the same functionality using the WP Admin "Edit Page"

### Creating a different template (other than `page.php` or `front-page.php`)
- what if you wanted a different template for a specific type of page (ex. Contact Us page --> might have a map or something unique)
#### Creating the new template file
  - create a new file `template-contactus.php` in the theme directory. This is our new template
  - now we need to tell WP it is a template, so add:
```
  <?php

    /* 
    Template Name: Contact Us
    */

  ?>
```
  - in the WP Admin in the "Edit Page" tab, you can select what template to use in a dropdown on the right. Go select the new template "Contact Us" for the Contact Us page
  - now that it is recognized as a template, we can add code.
  - side-note: `page.php` and `template-contactus.php` are the same type of file, a template. So we can use the same logic in them both and change just a few things to make it unique to the template, soo...
  - copy the code from the `page.php` file and put it at the bottom of the `template-contactus.php` file. `template-contactus.php` should look like this now (very similar to the `page.php` file):

```
<?php

  /* 
  Template Name: Contact Us
  */

?>


<?php get_header();?>

  <div class="container">

    <h1> <?php the_title();?> </h1>

    <?php get_template_part('includes/section', 'content');?>

  </div>

<?php get_footer();?>
```
#### Adding Bootstrap Columns for Our Custom Template
  - this will create two different sections in our template using bootstrap 
  - in our template file, which happens to be `template-contactus.php` we're going to insert some bootstrap *columns* into a *row*
  - should look like this:
```
<div class="row">
  <div class="col-lg-6"> 

    // you can put some text here or a form or a map
  
  </div>

  <div class="col-lg-6"> 
  
    // put the get_template method that allows us to post the content
    // from the WP Admin page on to our page

    <?php get_template_part('includes/section', 'content');?>

  </div>
</div>
```
  - refresh the Contact Us page and you should now see two separate sections on the page

#### Creating A "Secondary" Header
  - go to theme directory and create `header-secondary.php`
  - go to `front-page.php` and insert "secondary" as an argument into the `get_header()` method
  - copy the first/primary header for time's sake and add other things you'd want
  - you can do this with footer too (ex. `footer-secondary.php` file)


## Navigation Menus (real coding I guess)

### Create a New Stylesheet and Enqueue it in `functions.php`
  - create file in theme directory `css` and create a file called `main.css`
  - this will store our stylesheet info (instead of clogging up the main one `style.css` in the theme directory) 
  - Now we need to *enqueue* the stylesheet in our `functions.php` file
  - So, inside the `load_css()` function, we can copy the code `wp_enqueue_style('bootstrap)` and change some of the arguments to match our `main.css` file we want to *enqueue*
  - (make sure the custom stylesheets are after the bootstrap stylesheets so that yours override the bootstrap ones otherwise it will be the other way around and your custome css won't take effect)
  - should look like this:
```
  <?php 
  
    function load_css()
    {
      wp_register_style('bootstrap', get_template_directory_uri() . 'css/boostrap.min.css', array(), false, 'all') ;  
      wp_enqueue_style('bootstrap')

      // new stuff below

      wp_register_style('main', get_template_directory_uri() . 'css/main.css', array(), false, 'all') ;  
      wp_enqueue_style('main')
    }
    
    add_action('wp_enqueue_scripts, 'load_css');

  ?>
```
  - should see that `main.css` is in the html on the website and that it is *after* the `bootstrap.min.css`


### Header Navigation Bar
  - go to `header.php` and insert some tags
```
<header>

</header>

```
  - go to our newly created `css/main.css` file and style the header
```
header {
    background: #111;
    width:100%;
    height:100px;
}
```
  - you should see a black bar(that is 100px) on the front-page and page template pages
  - An extra step here: create a page wrap on the front-page template
```
<section class"page-wrap">

  <div class="container">
    // code code code
  </div>

</section>
```
  - then we can style the class `page-wrap` in our `css/main.css` file
```
.page-wrap {
  padding:2rem 0;
}
```
### Now Create the Navigation Menus
  - go to dashboard, there should be a "Menus" option in "Appearances", BUT there isn't. (since we are starting from scratch)
  - so, we need to tell WP to add it
  - go to our `functions.php` and add `add_theme_support('menus')` to the bottom of the file
  - now you should see "Menus" in "Appearances"
  - on the dashboard, create a new menu (ex. "Top Bar") and add the pages we to be displayed/link in our newly created menu 
#### Create Navigation Menu Location
  - go to `functions.php` and add `register_nav_menus()` like this:
```
register_nav_menus(

  array(
    'top-menu' => "Top Menu Location"
    'mobile-menu' => "Mobile Menu Location"
  )

)
```
  - `'top-menu'` is the ID of the menu
  - `'Top Menu Location'` is the display name on the dashboard
  - now that we have those menus, we need to assign the location to our specific part of our website
  - go to `header.php` and inside the header tags we made earlier write
  - (also added a bootstrap container in there as well)
```
<header>
  <div class="container">
    <?php 
      wp_nav_menu(

        array(
          'theme_location' => 'top-menu',
        )

      );
    ?>
  </div>
</header>
```
  - so now we've created this *location* in our `header.php` file that will display the "Top Bar" menu (from the dashboard) assigned to the "top-menu" location we registered in `functions.php` then called in `header.php`
  - now our menu *location* should come up on the dashboard and as long as "Top Menu Location" is selected for our actual Menu we created (Top Bar), the Top Bar Menu should display in the header
  ### #*as a side note*: 
    - you can assign the location directly to the "Top Bar" menu we created on the dashboard, just replace `'theme_location' => 'top-menu'` with this:
```
 array(
        'menu' => 'Top Bar'
      )

```
  - It is better practice to create a location and then assign the Menu to that location instead
  - *we have just registered the navbar `top-menu` in `functions.php`, created the location for the navbar using the function `wp_nav_menu` in `header.php` , then created a Menu on the dashboard and assigned the pages-link we wanted then and assigned the `top-menu`/`Top Menu Location` location to it. 

#### Create Menu Class and Styles
  - add a menu class in the array() in our `header.php` file
```
<header>
  <div class="container">
    <?php 
      wp_nav_menu(

        array(
          'theme_location' => 'top-menu',
          'menu-class' => 'top-bar'
        )

      );
    ?>
  </div>
</header>
```
  - go to `main.css` and add a `header .top-bar` class:
```
header .top-bar {
  list-style-type:none; // will remove bullet points
  margin:0;
  padding:0;
  display:flex; // makes the links side-by-side
}
```
  - we can also add specifics for the list options (li) and the anchor tag(a) in another tag like so:

```
header .top-bar li a {
  padding:0.25 1rem; //.25 at the top 1 on the sides
  color:#fff; // white color to links
}
```
- if you don't want the first option or last option to have the padding add this other style class:

```
header .top-bar li:first-child a {
  padding-left:0;
}

header .top-bar li:last-child a {
  padding-right:0;
}
```
  - so, at this point you should have four header class styles

  - Now we might want to center the link on the in the menu/navbar
  - so, we need to target the right html class which, this time, is the `container` class
  - Add header .container {}
```
  header .container {
    display:flex;
    justify-content:center; // will align horizontally 
    align-items: center;  // will align vertically
    height:100%;
  }
```
  - now the links should be centered and should work, linking each page
  

  #### Bit of clean-up additions
    - add the `page-wrap` class like it is in the `front-page.php` to the `page.php` and the `template-contactus.php` files

### Sub-menu creation
  - create another page called something like "Our Team" (from the dashboard), publish
  - go to the "Top Bar" menu we created and add the "Our Team" page to the menu
  - you can indent the page my moving it over with the cursor to the right just a little bit
  - it will now show up underneath the higher level menu items, but want it to be hidden and accessed through a drop down menu, soo..
  - go to the `main.css` file and add 
```
  header .top-bar li .sub-menu {
    display:none; // makes it so the "Our Team" doesn't show
  }
```
   - WP automatically add classes and has auto-added a class to the list item that has "Our Team" included inside of it (in this case "About" or "Contact Us" for example) with the name `list-item-has-children`
   - we can grab that class and create styling using that
```
  header .top-bar .menu-item-has-children:hover .sub-menu{
    display:block; // with the hover option it will only display when user hover cursor
  }
```

  