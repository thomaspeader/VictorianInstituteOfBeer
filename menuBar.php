<head>
<style type="text/css">
    nav{
        background-color: #333333;
        width: 100%;
        height: 60px;
    }
    nav a:visited{
        color: #999
    }
    nav li{
        position: absolute;
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
    nav details{
        position: absolute;
    }
    nav details > summary{
        z-index: 10;
        cursor:pointer;
        background: #333;
        margin-top:-26px;
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
        display: block;
        text-decoration: none;
        color:#999;
        font-size:13px;
        background: #333;
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
    <li><a href="index.html">about us</a></li>
    <li style= "margin-left: 20%"><a href="">beer club</a></li>
    <li style= "margin-left: 40%"><a href="gallery.html">gallery</a></li>
    <li style= "margin-left: 60%"><a href="contactForm.html">contact Page</a></li>
    <li style= "margin-left: 80%"><details>
    <summary>breweries</summary>
    <a href="#">Subcategory A</a>
    <a href="#">Subcategory B</a>
    <a href="#">Subcategory C</a>
    </details></li>
</ul>
</nav>