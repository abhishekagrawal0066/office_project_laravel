@extends('collage.admin.master')
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">List /</span> Category List</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
        <div class="add-button p-2">
            <a href="#" class="card-header">Category List</a>
            <a href="{{ url('collage/admin/category/add') }}" class="add_category btn btn-primary float-end">Add</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table" id="example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Category</th>
                        <th>Create Date</th>
                        <td>Update Date</td>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($categorys as $row)
                   
                      <tr>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $row->id }}</strong></td>
                          <td>{{ $row->name }}</td>
                          <td>{{ $row->created_at }}</td>
                          <td>{{ $row->updated_at }}</td>
                          <td><span class="badge bg-label-primary me-1">  </span></td>
                          <td>
                              <div class="dropdown">
                                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                      <i class="bx bx-dots-vertical-rounded"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                      <a class="dropdown-item" href="{{route('updated',$row->id)}}"><i class="bx bx-edit-alt me-1"></i>
                                          Edit</a>
                                      <a class="dropdown-item deleteRecord" data-toggle="modal" data-confirm="Confirm delete?" id="smallButton" data-target="#smallModal" data-attr="{{route('category.destroy',$row->id)}}" title="Delete Category Record"><i class="bx bx-trash me-1"></i>
                                          Delete</a>
                                  </div>
                              </div>
                          </td>
                      </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
       $(document).on('click', '#smallButton', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            if(confirm("Are you sure delete this category") == true){
                $.ajax({
                    url :href,
                    type : 'get',
                    success: function(result) {
                        
                    }
                })
            }
            
            // event.preventDefault();
            // let href = $(this).attr('data-attr');
            // $("#example").dataTables().ajax.reload();
            // $('#example').dataTable().reload();
            // $('#example').DataTable().ajax.reload();
            // $('#example').DataTable().ajax.reload(originalJsonData,true)
        });
    </script>
@endsection
