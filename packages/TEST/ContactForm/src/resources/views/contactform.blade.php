<!DOCTYPE html>
    <html lang="en">
    <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          <title>Contact Us</title>
    </head>
        <body>
    
          <div style="width: 500px; margin: 0 auto; margin-top: 90px;">
    
          <form action="{{route('contact.store')}}" method="POST">
              @csrf
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name"/>
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email">
              </div>
    
              <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" name="message" rows="3"></textarea>
              </div>
    
              <button type="submit" class="btn btn-primary">Submit</button>
         </form>
        </div>
    </body>
    </html>