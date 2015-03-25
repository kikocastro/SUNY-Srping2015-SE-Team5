Bootstrap Carousel
==================

An extension to display a Bootstrap Carousel based on a Bolt Contenttype record.

    {{ carousel('carousel_name') }}

Set up
------

1. Contenttype  
   Create a Contenttype similar to the one shown below.  The only compulsorary 
   thing is that the Contenttype **must** have a field of `type: imagelist`.
```
carousel:
    name: Carousel
    singular_name: Carousel
    fields:
        title:
            type: text
            class: large
            required: true
        slug:
            type: slug
            uses: title
        images:
            type: imagelist
    show_on_dashboard: false
    default_status: published
    searchable: false
    viewless: true
```
   The contenttype (`carousel`) and images field (`images`) names are configurable, 
   as you will point to them in the configuration file.  
2. Record   
   Create a new 'Carousel' record in the backend, give is a descriptive title and 
   populate the images field.  
3. Configuration file  
   In the extension's configuration file you want to define the slider you will 
   call in your template, e.g.
```
    myslider:
        content: carousel/1
```
   The `content:` parameter uses the `{% setcontent %}` style of record definition
   and lookup.  In the above example it will return the record with contenttype 
   `slider` and the record ID of 1.  
4. Template file  
    In the location you want to display the slider in your template, add:  
```
    {{ carousel('mycarousel') }}
```
