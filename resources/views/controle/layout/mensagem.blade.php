@if(Session::has('msg-success'))
<div class="alert alert-success">
    <button class="close" data-dismiss="alert">×</button>
    <strong><i class="icon-ok"></i> Sucesso!</strong> Operação realizada com sucesso.
</div>
@endif
@if(Session::has('msg-error'))
<div class="alert alert-error">
    <button class="close" data-dismiss="alert">×</button>
    <strong><i class="icon-remove"></i> Erro!</strong> Falha ao realizar a operação.
</div>
@endif
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif