@component('mail::message')


<div><p><strong>Nome:</strong> {{$data['name']}}<p><div>
<div><p><strong>E-mail:</strong> {{$data['email']}}<p><div>

<div><p><strong>Mensagem:</strong><p><div>

<div><p>{{$data['message']}}<p><div>
@endcomponent
