<!DOCTYPE html>
<html>
  <head>
    <title>Software Tech</title>
    <link rel="stylesheet" type="text/css" href="css/submit_details.css" />
  </head>
  <body>
    <img src="images/03.jpg" alt="background" /> 
    <div class="body">
      <header>
        <h1>Software Tech</h1>
      </header>

      <main>
      <a href="index.html" >Back</a>
        <div class="form">
          <h2>Enter Login Details</h2>
          <form action="login_process.php" method="POST">
            
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" required />
            </div>
            <div class="form-group" >
              <label for="password">Password</label>
              <input type="password" id="password" name="password" required />
            </div>
            
              <div class="button">
                <input type="submit" name = "submit" class="submit" id="submit" />
              </div>
              
            </div>
          </form>
        </div>
      </main>
    </div>
  </body>
</html>
