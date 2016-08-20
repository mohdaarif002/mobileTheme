<html>
    <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

            <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
       
        <h3>Login Into Database</h3> <br />
             {{Form::open(array('url'=> 'loginAction','method'=>'POST'))}}
               <label for="userId">UserId:</label>

                {{Form::text('userId')}}
               
                 <label for="password">Password:</label>
                 
                {{Form::password('password')}}
              
              <button type="submit" class="btn btn-primary">Submit</button>

          {{Form::close()}}
          
            {{HTML::link('lazy','lazy')}}   
        
     @if(Session::get('check')=='T')
     <script>
         alert('invalid login!!');   
     </script>
     @endif
    </body>
</html>    

