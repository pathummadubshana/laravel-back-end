<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Owner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
</head>
<body>
<div class=" d-inline-flex">
    //customer add form
    <div class="mb-3">
        <form action="">
            @csrf
            <div class="form-group">
              <label for="formGroupExampleInput">Name</label>
              <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Example input">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">email</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" name="email" placeholder="Another input">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">contact</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="contact" placeholder="Another input">
              </div>
          </form>

    </div>

    //item

    <div class="mb-3">
        <form>
            @csrf
            <div class="form-group">
              <label for="formGroupExampleInput">Name</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">qty</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">type</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
              </div>
          </form>

    </div>

</div>
</body>
</html>
