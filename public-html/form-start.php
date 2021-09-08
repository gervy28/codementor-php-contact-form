
<form action="./form-submit.php" method="POST">
  <label for="user">User Name</label>
    <input type="text" id="user" name="user" required autofocus>
  <label for="email">Email</label>
    <input type="email" id="email" name="email" required autofocus>
  <label for="query-type">Query Type:</label>
    <select name="query-type" id="query-type" option="">
      <option value="query">Query</option>
      <option value="feedback">Feedback</option>
      <option value="complaint">Complaint</option>
      <option value="other">Other</option>
    </select>
  <label for="message">Message</label>
    <textarea id="message" name="message">
    </textarea>
  <input type="submit">
</form>


<style>
  form {
    width: 500px;
    margin: auto;
    display: flex;
    flex-direction: column;
  }
</style>

