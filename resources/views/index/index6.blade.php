<html>
<head>
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <table   class="table-border" id="example">
        <thead>
          <tr>

            <th>Name</th>
            <th>Email  </th>
            <th>Phone</th>
        
        </tr>
        </thead>
        
       
      </table>

    
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  <script>


  $(function() { 



      $("#example").dataTable({


            "bServerSide": true,
            "sAjaxSource": "{{ route('admin.studentdata' )}}",
            "aoColumns": [{
                
                        "mData":"name",
                        "sTitle": "Site name"
            },{
                    "mData": "url",
                "mRender": function ( url, type, full )  {
                    return  '<a href="'+url+'">' + url + '</a>';
                }
             },{
                "mData": "editor.name"
             },{
                  "mData": "editor.phone"
              },{
                 "mData":"editor",
                "mRender": function(data){
                 return data.email.join("<br>");
    }
  }]
});
    
  </script>
</body>
</html>