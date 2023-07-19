<!DOCTYPE html>
<html>
  <head>
    <title>Software Tech</title>
    <link rel="stylesheet" href="css/submit_details.css">
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
          <h2>Enter details for AI project</h2>
          <form action="code.php" method="POST">
            <div class="form-group" >
              <label for="name">Name</label>
              <input type="text" id="name" name="name" required />
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" required />
            </div>
            <div class="form-group" >
              <label for="phone">Contact Number</label>
              <input type="tel" id="phone" name="phone" required />
            </div>
            <div class="form-group" >
              <label for="project_name">Project Name</label>
              <input type="text" id="project_name" name="project_name" required />
            </div>
            <div class="form-group" >
            <label for="description">Project Description</label>
              <input type="text" id="description" name="description" required />
            </div>
            <div class="form-group" >
              <label for="date">Deadline</label>
              <input type="date" id="date" name="date" required />
            </div>
            
            
              <div class="button">
                <input type="submit" name = "submit_btn" class="submit" id="submit" />
              </div>
              
            </div>
          </form>
        </div>
      </main>
    </div>
  </body>
</html>
