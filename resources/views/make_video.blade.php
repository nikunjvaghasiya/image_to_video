<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ImagetoVideo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        p{
            text-align: center;
            margin-top: 10px;
            font-size: 30px;
        }
    </style>
</head>
<body>
    <p><strong>Image to Video Converter</strong>  </p>
    
    <b>Select Image : </b>
    <input type="file" name="image[]" id="image" multiple>

    {{-- <button id="btn_id" href={{ url('gene_video') }} >Generate Video</button> --}}
    <a href="{{ url('gene_video') }}">Generate Video</a>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- <script>
        $("#btn_id").load(function(){
            $('#image').attr('src', this.src);
            this.src = sites[Math.floor(Math.random() * sites.length)]. logo_url + '?cache=' + new Date().getTime();
        }).trigger('load');
    </script> --}}

</body>
</html>