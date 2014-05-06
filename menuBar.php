<head>
<style type="text/css">
    nav{
        background-color: #333333;
        height: 100px;
    }
    nav li{
        display: inline-block;
        padding: 20px;
        border: #999 2px dashed
        white-space: nowrap;
        width: 15%;
        min-width: 150px;


    }
   nav a{
        padding: 12px 24px;
        color:#999;
        background: #333;
        -webkit-transition: background 0.3s linear 0s, color 0.3s linear 0s;
        -moz-transition: background 0.3s linear 0s, color 0.3s linear 0s;
        -ms-transition: background 0.3s linear 0s, color 0.3s linear 0s;
        -o-transition: background 0.3s linear 0s, color 0.3s linear 0s;
        transition: background 0.3s linear 0s, color 0.3s linear 0s;
    }
    nav a:hover{
        background: #C41230;
        color:#FFF;
    }
    nav details > summary{
        cursor:pointer;
        background: #333;
        margin:6px;
        padding:8px;
        color:#999;
        -webkit-transition: background 0.3s linear 0s, color 0.3s linear 0s;
        -moz-transition: background 0.3s linear 0s, color 0.3s linear 0s;
        -ms-transition: background 0.3s linear 0s, color 0.3s linear 0s;
        -o-transition: background 0.3s linear 0s, color 0.3s linear 0s;
        transition: background 0.3s linear 0s, color 0.3s linear 0s;
    }
    nav details > summary:hover{
        background: #C41230;
    }
    nav details > summary::-webkit-details-marker{
        /*display: none;*/
    }
    nav details > a{
        display:block;
        text-decoration: none;
        color:#999;
        font-size:13px;
        margin:3px 6px 3px 18px;
        padding: 4px;
        background: #333;
        z-index: 10;
    }
    nav details > a:hover{
        background: #C41230;
        font-weight: bold;
    }
    nav details > a:before{
        content: "- ";
    }
</style>
</head>
<nav>
<ul>
    <li><a href="">about us</a></li>
    <li><a href="">beer club</a></li>
    <li><a href="gallery.html">gallery</a></li>
    <li><a href="contactForm.html">contact Page</a></li>
    <li></li>
</ul>
<details>
    <summary>breweries</summary>
    <a href="#">Subcategory A</a>
    <a href="#">Subcategory B</a>
    <a href="#">Subcategory C</a>
</details>
</nav>