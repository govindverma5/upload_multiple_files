
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
    <h3 style="align:center">Multiple Files Listing</h3>
    <br />
    <a style="float:right" href="{{route('files.create')}}" class="btn btn-primary" data-toggle="tooltip" data-original-title="Add file">
<i class="fas fa-plus"></i> uploaded Image
</a>



      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Uploaded Image</h3>
        </div>
        <div class="panel-body" id="uploaded_image">
          

        <div class="table-responsive py-4">
<table class="table table-flush" id="datatable-basic">
<thead class="thead-light">
<tr>
<th>Sr.No</th>
<th>Files</th>
<th>Action</th>

</tr>
</thead>

<tbody>

@foreach($files as $file)
<tr >
<td>{{$serial_no++}}</td>
<td width="20%" height="15%">
<!-- <img src="{{asset(''.$file->files)}}" height="100" class="img-fluid"> -->
<img src="{{asset('images/'.$file->files)}}" height="100" class="img-fluid"> 
</td>
<td>
  <a><a href="{{ route('files.show', $file->id) }}" class="table-action" data-toggle="tooltip" data-original-title="download_image">
Download
</a>
</td>

</tr>
@endforeach

</tbody>
</table>
</div>
@forelse($files as $files)

@empty
<p class="text-center" style="margin-left:45% ; border:15px solid; border-width:1px; width:300px" > No Result Found
</p>
@endforelse
        </div>
      </div>
    </div>
 </body>
</html>
