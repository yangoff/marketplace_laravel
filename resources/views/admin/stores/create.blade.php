<hi>Criar Loja</hi>
<form action="/admin/stores/store" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        <label for="">Nome Loja</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">Descrição</label>
        <input type="text" name="description">
    </div>
    <div>
        <label for="">Telefone</label>
        <input type="text" name="phone">
    </div>
    <div>
        <label for="">Celular/Whatsapp</label>
        <input type="text" name="mobile_phone">
    </div>
    <div>
        <label for="">Slug</label>
        <input type="text" name="slug">
    </div>
    <div>
        <label for="">Usuário</label>
        <select name="user">
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit">Criar Loja</button>
    </div>

</form>
