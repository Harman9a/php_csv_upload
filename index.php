<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <div>
      <form method="post" action="functions.php">
        <div>
          <input type="text" name="name" placeholder="Name" value="Harman" />
        </div>
        <div>
          <input
            type="text"
            name="email"
            placeholder="Email"
            value="Harman@gmail.com"
          />
        </div>
        <div>
          <button name="submit" type="submit">Save</button>
        </div>
      </form>
    </div>
    <br />
    <div>
      <div>Upload With CSV</div>
      <br />
      <form method="post" action="functions.php" enctype="multipart/form-data">
        <div>
          <input type="file" name="file" />
        </div>
        <div>
          <button name="fileSubmit" type="submit">Save</button>
        </div>
      </form>
    </div>
  </body>
</html>
