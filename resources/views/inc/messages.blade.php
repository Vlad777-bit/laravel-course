@if(session()->has('success'))
    <x-alert type="success" :message="session()->get('success')" icon="fa-check" />
@endif

@if(session()->has('error'))
    <x-alert type="danger" :message="session()->get('error')" icon="fa-times-circle" />
@endif

@if($errors->any())
    @foreach($errors->all() as $error)
        <x-alert type="danger" :message="$error" icon="fa-times-circle" />
    @endforeach
@endif
