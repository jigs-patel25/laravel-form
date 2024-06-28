<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <div class="container">
        <div class="row">
            <form action="{{url('/upload')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">FILE</label><br>
                    <input type="file" name="upload_file"
                     id="" class="form-control" placeholder="" aria-describedby="helpId" />

                </div>
                <div>
                    <button name="submit" name="submit" >upload</button>
                </div>
            </form>

            </div>
        </div>

</body>
</html>
