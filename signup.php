
<style>
* {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: right;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 50%;
  }
}
</style>
<form action="action_page.php" style="border:1px solid #ccc" method="post">
  <div >
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <table >


      
    <tr>
      <td>
        <label for="id"><b>User ID</b></label> 
      </td>

        <td><input type="text" placeholder="Enter User ID" name="id" required><br>
      
      </td>
</tr>
<tr>
      <td>
    <label for="psw"><b>Password</b></label>
    </td>

        <td><input type="password" placeholder="Enter Password" name="password" required><br>

</td>
</tr>

    <tr>
      <td>
    <label for="id"><b>name</b></label>
    </td>

        <td><input type="text" placeholder="Enter User Name" name="name" required><br>
    
</td>
</tr>
    <tr>
      <td>
    <label for="id"><b>phone</b></label>
    </td>

        <td><input type="text" placeholder="Enter User Phone No" name="phone" required><br>
</td>
</tr>

    <tr>
      <td>
    <label for="email"><b>Email</b></label>
    </td>

<td> <input type="text" placeholder="Enter Email" name="email" required><br>
    </td>
</tr>
    <tr>
      <td>
    <label for="id"><b>Address</b></label>
    </td>

        <td><input type="text" placeholder="Enter User address" name="address" required><br>
    </td>
</tr>
   
    <tr>
      <td>
    <label for="id"><b>owner name</b></label>
    </td>

        <td><input type="text" placeholder="Enter owner name" name="ownername" required><br>
    </td>
</tr>
</table>
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    <br>
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
    
    
    <input type="submit" value="submit" >
      
  </div>

</form>