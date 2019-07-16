@if ($errors->any())
<div class="notification is-danger" >
  @foreach ($errors->all() as $error )
    <ul>
      <li>{{$error}}</li>
    </ul>
  @endforeach
</div>
@endif  
