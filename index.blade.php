@extends('master.master')
@section('content')

<div class="container">
<div id="grid" style="width: 1400px;"></div>
<div id="details"></div>
</div>

<script>

  $(document).ready(function() {

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    
    var data = {{ Js::from($users) }};
    
    $("#grid").kendoGrid({
      dataSource: {   
        transport: {
          read: function(e) {
            e.success(data);
          },
          destroy: function(e){
            $.ajax(
              {
                type: 'POST',
                url: '{{ route("kendo.destroy_data") }}',
                dataType: 'json',
                data: e.data,
                success: function (result){
                  e.success(result);
                  console.log(e.data);
                },
                error: function (result){
                  e.error(result);
                }
              });
          },
          update: function(e){
            $.ajax(
              {
                type: 'POST',
                url: '{{ route("kendo.update_data") }}',
                dataType: 'json',
                data: e.data,
                success: function (result){
                  e.success(result);
                  console.log(e.data);
                },
                error: function (result){
                  e.error(result);
                }
              });
          },
        },
        schema: {
          model: {
            id: "id",
            fields: {
              id: { type: "int", editable: false },
              name: { type: "string" },
              email: { type: "string" },
              company: { type: "string" }
            }
          }
        },
        pageSize: 10
      },
      columns:[
                {field: "id", title: "ID", width: "50px"},
                {field: "name", title: "Name", width: "125px"},
                {field: "email", title: "Email", width: "80px"},
                {field: "company", title: "Company", width: "150px"},
                {
                    title: "Action", width: "150px",
                    command: ["destroy","edit"]
                }
      ],
      editable: "inline",
      height: 470,
      pageable: true,
      sortable: true
    });

  });
        
</script>


@endsection