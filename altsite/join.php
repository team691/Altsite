<?php include 'includes/overall/header.php'; ?> 

<!--DO_NOT_TOUCH_THE_LINE_ABOVE_ENTER_TEXT_BELOW_THIS_LINE-->

<form method="post" action="php/contactformprocess.php" >

<table width="100%" border="0">

  <tr>

    <td colspan="2" align="center">Join our Team</td>

    </tr>

  <tr>

    <td align="center"><label class="highlighted">Name: </label>

      <input name="txt_name" type="text" dir="ltr" size="32" maxlength="32" /></td>

    <td align="center"><label>Birthday: </label>

      <input name="num_bday" type="text" id="num_bday" size="10" maxlength="10" /></td>

  </tr>

  <tr>

    <td width="50%" align="center"><label>Email: 

      <input name="txt_email" type="text" id="txt_email" size="32" maxlength="32" />

    </label></td>

    <td align="center"><label>Phone (Optional): </label>

      <label for="num_phone"></label>

      <input name="num_phone" type="text" id="num_phone" size="14" maxlength="14" /></td>

  </tr>

  <tr>

    <td width="50%" align="center"><label>School: 

      </label>

      <label for="dp_school"></label>

      <select name="dp_school" id="dp_school">

        <option selected="selected">Select a School</option>

        <option>Acdemy of the Canyons</option>

        <option>Canyon</option>

        <option>Golden Valley</option>

        <option>Hart</option>

        <option>Saugus</option>

        <option>Valencia</option>

        <option>West Ranch</option>

        <option>Other</option>

      </select>

      <label> </label></td>

    <td align="center"><label>Grade: </label>

      <label for="dp_grade"></label>

      <select name="dp_grade" id="dp_grade">

        <option selected="selected">Grade</option>

        <option>Senior</option>

        <option>Junior</option>

        <option>Sophmore</option>

        <option>Freshman</option>

        <option>8th Grade</option>

      </select></td>

  </tr>

  <tr>

    <td width="50%" align="center"><label>Parent Name: </label>

      <label for="txt_parent_name"></label>

      <input type="text" name="txt_parent_name" id="txt_parent_name" /></td>

    <td align="center">Parent Email: 

      <label for="txt_parent_email"></label>

      <input name="txt_parent_email" type="text" id="txt_parent_email" size="32" maxlength="32" /></td>

  </tr>

  <tr>

    <td colspan="2" align="center"><label>Why do you want to join our team? (Optional)</label><br />

    <textarea name="txt_why" cols="100" rows="10" class="highlighted"></textarea></td>

    </tr>
  <tr>
    <td colspan="2" align="center">
    <?php
	 require_once('php/recaptchalib.php');
  $publickey = "6Lct_NUSAAAAAL2ilep4esVG6v5G0cXI71zeSxvm"; // you got this from the signup page
  echo recaptcha_get_html($publickey);
  ?>
  </td>
  </tr>

  <tr>

    <td align="center"><input type="submit" name="bt_submit" id="bt_submit" value="Submit" /></td>

    <td align="center"><input type="reset" name="bt_reset" id="bt_reset" value="Clear" /></td>

  </tr>

</table>

</form>

<!--DO_NOT_TOUCH_THE_LINE_BELOW_ENTER_TEXT_ABOVE_THIS_LINE-->

<?php include 'includes/overall/footer.php'; ?> 