


@extends('welcome')
@section('content')
<center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-danger fw-bold fs-4 rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
 Add Record
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">CURD</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action='insertData' method="POST" enctype="multipart/form-data">
          @csrf
            <div class='mb-2'>
                <input type='text' placeholder='Enter Product Name' class='form-control' name='pname' id=''>
            </div>
            <div class='mb-2'>
                <input type='text' placeholder='Enter Product Detail' class='form-control' name='pdescription' id=''>
            </div>
            <button type='submit' class="btn btn-outline-danger fw-bold fs-4 rounded-pill">Add Record</button>
 
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</center>
@endsection