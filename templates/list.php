<!--

use the alternative syntax for control structures in templates, to emphasize
the templating character of such a file.

http://php.net/manual/de/control-structures.alternative-syntax.php

-->
<table class="album">
    <colgroup>
        <col style="width: 20px;">
        <col>
        <col>
        <col>
        <col style="width: 30%;">
    </colgroup>
    <thead>
        <tr>
            <td>#ID</td>
            <td>Künstler</td>
            <td>Album</td>
            <td>Erscheinungsjahr</td>
            <td>Musikrichtung</td>
        </tr>
    </thead>

    <tbody>
        <?php
        global $dbh;
        
        $arr = Album::getAlbums();
        foreach ($arr as $key => $value) {
            ?>
            <tr>
                <td><?=htmlspecialchars($value->getPlatzierung());?></td>
                <td><?=htmlspecialchars($value->getInterpret());?></td>
                <td><?=htmlspecialchars($value->getName());?></td>
                <td><?=htmlspecialchars($value->getYear());?></td>
                <td><?=htmlspecialchars($value->getGenre());?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>

    <tfoot>
        <tr>
            <td colspan="5">All rights reserved</td>
        </tr>
    </tfoot>
</table>

<form action="index.php" method="post" class="login">
   <label for="new_album">
       Album:
   </label>
   <input id="new_album" type="text" name="new_album" placeholder="Albumtitel">

   <label for="year">
       Year:
   </label>
   <input id="year" type="text" name="year" placeholder="Year">
   
   <label for="interpret">
       Interpret:
   </label>
   <input id="interpret" type="text" name="interpret" placeholder="Interpret">

   <button>Add Album</button>
</form>

<form action="index.php" method="post" class="login">
   <label for="new_user">
       Login:
   </label>
   <input id="new_user" type="text" name="new_user" placeholder="test@example.com">

   <label for="password">
       Passwort:
   </label>
   <input id="password" type="password" name="password" placeholder="Passwort">

   <button>New User</button>
</form>
