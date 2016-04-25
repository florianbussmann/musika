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
        <tr>
            <td>#17</td>
            <td>Green Day</td>
            <td>Dookie</td>
            <td>1994</td>
            <td>Punkrock, Pop-Punk, Alternative Rock</td>
        </tr>
        <tr>
            <td>#19</td>
            <td>Green Day</td>
            <td>Dookie</td>
            <td>1994</td>
            <td>Punkrock, Pop-Punk, Alternative Rock</td>
        </tr>
        <tr>
            <td>#27</td>
            <td>Green Day</td>
            <td>Dookie</td>
            <td>1994</td>
            <td>Punkrock, Pop-Punk, Alternative Rock</td>
        </tr>
    </tbody>

    <tfoot>
        <tr>
            <td colspan="5">All rights reserved</td>
        </tr>
    </tfoot>
</table>

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
