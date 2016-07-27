<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Nászútválasztó</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <link rel="icon" href="static/logo.png" type="image/x-icon">
  </head>
  <body>
    <div id="app"></div>
    <script src="static/build.js"></script>
    <script>
      (function(){
        var header = document.getElementById('footer').children[0];
        console.log(document.getElementById('footer'), header);
        header.addEventListener('click', function(e) {
          e.target.classList.toggle('hidden');
        })
      }());
    </script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-76479716-3', 'auto');
      ga('send', 'pageview');
    
    </script>
  </body>
</html>
