<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Upload-TrendyShoes</title>

    <link rel="stylesheet" href="./upload.css" />

   
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin /><link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap"rel="stylesheet"/>

   
  </head>
  <body>
    <div class="main">
      <!-- header section -->

      <div class="header">
        <div class="brand">
          <h5><a href="./../view/index.php">TrendyShoes-Admin</a></h5>
        </div>
      </div>

      <!-- upload section -->
      <div class="upload">
        <h3>Details about product</h3>
        <form
          action="./../backend/upload.php"
          method="post"
          enctype="multipart/form-data"
        >
          <div class="inp-row">
            <div class="inp-group">
              <div class="inp-label">Product name:</div>
              <input type="text" placeholder="Sneaker" name="pname" required />
            </div>
            <div class="inp-group">
              <div class="inp-label">Price in US Dollar:</div>
              <input type="text" placeholder="$69" name="price" required />
            </div>
          </div>
          <div class="inp-row">
            <div class="inp-group">
              <div class="inp-label">Category:</div>
              <input
                type="text"
                placeholder="Men / Women"
                name="category"
                required
              />
            </div>
            <div class="inp-group">
              <div class="inp-label">Upload an image:</div>
              <input type="file" accept="image/*" name="image[]" required />
            </div>
          </div>

          <div class="submit">
            <button class="submit-btn" type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
