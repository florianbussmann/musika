<!DOCTYPE HTML>
<html>
 <head>
     <title>Musika - <?= $title ?: 'Übersicht' ?></title>
     <meta charset="windows-1252">
     <link rel="stylesheet" href="assets/stylesheets/stylesheet.css">
 </head>
 <body>
     <div class="page">
         <header>
             <h1>Musika - <?= $title ?: 'Übersicht' ?></h1>
         </header>
         <main>
             <?= $content_for_layout ?>
         </main>
     </div>
 </body>
</html>
