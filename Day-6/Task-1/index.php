<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Registration</title>
    <style>
      body{
        width: 400px;
        margin: auto;
        font-family: roboto;
      }
      table, td, th {
        border: 1px solid #ddd;
        text-align: left;
      }

      table {
        margin-top: 40px;
        border-collapse: collapse;
        width: 100%;
      }

      th, td {
        padding: 15px;
      }
      tr input{
        width: 100%;
      }
      .gender td{
        border: 0;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h1>Student Registration</h1>
    <form action="perform/insert.php" method="post">
      <table>
        <tbody>
          <tr>
            <td>Name</td>
            <td colspan="3"><input type='text' name='name' placeholder="What's your name?" required></td>
          </tr>

          <tr>
            <td>Email</td>
            <td colspan="3"><input type='email' name='email' placeholder="What's your email?" required></td>
          </tr>

          <tr>
            <td>Mobile No</td>
            <td colspan="3"><input type='number' name='mobile' placeholder="What's your mobile no?" required></td>
          </tr>

          <tr>
            <td>Password</td>
            <td colspan="3"><input type='password' name='password' placeholder="Type your password..." required></td>
          </tr>

          <tr>
            <td>Date of Birth</td>
            <td colspan="3"><input type='date' name='dob' required></td>
          </tr>

          <tr class="gender">
            <td>Male</td>
            <td><input type='radio' name='gender' value='male' required></td>
            <td>Female</td>
            <td><input type='radio' name='gender' value='female' required></td>
          </tr>

          <tr>
            <td>Area</td>
            <td colspan="3"><select name="area">
              <option value="surat">Surat</option>
            </select></td>
          </tr>

          <tr>
            <td>Address</td>
            <td colspan="3">
              <textarea name="address"></textarea>
            </td>
          </tr>

          <tr>
            <td>Pincode</td>
            <td colspan="3"><input type='number' name='pincode' minLength=4 required></td>
          </tr>

          <tr>
            <td>Bloodgroup</td>
            <td colspan="3"><input type='text' name='bloodgroup' placeholder="What's your blood group?" required></td>
          </tr>

          <tr>
            <td colspan="4"><input type='submit' name='submit' value='Submit'></td>
          </tr>

        </tbody>
      </table>
    </form>
  </body>
</html>
