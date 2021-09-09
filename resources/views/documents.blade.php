
<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Multiples Images</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
 </head>
 <body>
  <div class="container-fluid">
      <br />
    <h3 style="align:center">Multiple Files Store</h3>
    <div style="align:center">
            <a type="button" href="{{route('files.index')}}" class="btn btn-info" id="submit-all">View files</a>
          </div>
    <br />
        
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Select Files</h3>
        </div>
        <div class="panel-body">
          <form id="dropzoneForm" class="dropzone" action="{{ route('files.store') }}">
            @csrf
          </form>
        
        </div>
      </div>
      <br />
      <!-- <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Uploaded Image</h3>
        </div>
        <div class="panel-body" id="uploaded_image">
          
        </div> -->
      </div>
    </div>
 </body>
</html>

<script type="text/javascript">

  Dropzone.options.dropzoneForm = {
    autoProcessQueue : false,
    acceptedFiles : ".ods,.pdf,.png,.jpg,.gif,.bmp,.jpeg",
    parallelUploads=10,
    maxFilesize= 5,
  
  };


</script>