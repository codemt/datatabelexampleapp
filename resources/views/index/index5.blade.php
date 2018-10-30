<html>
<head>
 <!-- Bootstrap CSS -->
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

</head>
<body>
    <table class="table-border" id="example">
        <thead>
          <tr>

            <th>Name</th>
            <th>Email  </th>
            <th>Phone</th>
        
        </tr>
        </thead>
        
       
      </table>

    
   <!-- jQuery -->
   <script src="//code.jquery.com/jquery.js"></script>
   <!-- DataTables -->
   <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <!-- Bootstrap JavaScript -->
   <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script>


       
      
      
      
            $("#example").dataTable({
      
      
                      processing : false,
                      serverSide : true,
                      ajax : "{{ url('/index5/data') }}",
                      columns: [
                        
                            { data: 'name', name: 'name' },
                            { data: 'email', name: 'email' },
                            { data: 'phone', name: 'phone' },
                            
                    ]
      
      
              });
      
      
      
      
        
          
        </script>
</body>

</html>