@extends('layouts.master')
@section ('title', 'FormulariosLogin')
@section ('header')
@parent 
<marquee behavior="" direction="">yahacenfaltavacaciones</marquee>
@stop

@section ('navbar')
<H1><center>Formularios</center></H1>
<h3>
@stop

@section ('barralateral')
@parent
@stop


@section ('content')
<form action="{{action('PruebasController@validarlogin')}}"method= "POST">
{{csrf_field()}}
<label for = "user">Usuario</label>
<input type = "text" name = "user"/>
<br>
<label for = "pass">Password</label>
<input type = "password" name = "pass"/>
<br>
<label for = "key">key</label>
<input type = "text" name = "key"/>
<br>
<input type = "submit" value = "submit"/>
</form>
@stop

@section('footer')
Hecho por Jose Luis Alvarez Rios 
@parent
@stop