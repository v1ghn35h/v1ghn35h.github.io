
<?php
echo "Hello World!";
?>

<div align="center">

  <h1>Harloozz!!</h1>
  <table border="1">
    <tr>
      <th colspan="2">
        Biography
      </th>
    </tr>
    <tr>
      <td>My Photo:)</td>
      <td>
        <img src="img/photo_2022-08-16_16-31-35.jpg" width="600" height="400"/>
      </td>
    </tr>
    <tr>
      <td>
        About myself!
      </td>
      <td>
        <p>
          Helloz! I'm Vighnesh, currently a Y2 IS student <br>
          My hobby is playing sports 🏃🏻 and I'm currently in Ultimate Frisbee. <br>
          Here's a pic of me getting rekted hahah 😂 <br>
        </p>
        <img src="img/photo_2022-08-17_02-43-52.jpg"width="600" height="400"/>
      </td>
    </tr>

  </table>
</div>

<br><br>

<table border="1">
  <form>
    <tr>
      <td>
        Name Field: 
      </td>
      <td>
        <input type='text' name='name'/>
      </td>
    </tr>  

    <tr>
      <td>
        Relationship status:
      </td>
      <td>
        <input type='radio' name='relationship' value='single'/> Single
        <input type='radio' name='relationship' value='taken'/> Taken
      </td>
    </tr>

    <tr>
      <td>
        Favorite fruit:
      </td>
      <td>
        <input type="checkbox" name="fruits[]" value="banana"/>Banana
        <input type="checkbox" name="fruits[]" value="apple"/>Apple
        <input type="checkbox" name="fruits[]" value="pear"/>Pear
      </td>
    </tr>

    <tr>
      <td>
        <input type="submit"/>
      </td>
    </tr>
  </form>
</table>