{{-- @section('faqCreate') --}}
  <!-- Modal -->
  <div class="modal fade" id="newFAQ" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create New FAQ</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        {{-- <form action="{{route('faq.store')}}" method="POST"> --}}
            <div class="modal-body">
                {{-- <form role="form"> --}}
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Question Title:</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="decription">Answer to Question:</label>
                        <textarea class="form-control" name="description" id="" cols="30" rows="5"></textarea>
                    </div>
                </div>
                {{-- </form> --}}
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </div>
        {{-- </form> --}}
      </div>
    </div>
  </div>
{{-- @endsection --}}