@if (session('success'))

<script>
    swal('Sucesso!', '{{session('success')}}', 'success');
  </script>

    <!--<span style="color: rgb(57, 107, 7)"> {{session('success')}}</span><hr>-->

@endif
