<?php
/**
 * Created by PhpStorm.
 * User: rothink
 * Date: 17/10/16
 * Time: 23:46
 */
?>
<div class="form-group">
    {!! Form::label('Name','Nome:') !!}
    {!! Form::text('user[name]',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Email','E-mail:') !!}
    {!! Form::text('user[email]',null,['class'=>'form-control']) !!}
</div>
{{--<div class="form-group">--}}
    {{--{!! Form::label('Password','Senha:') !!}--}}
    {{--{!! Form::password('user[password]',null,['class'=>'form-control']) !!}--}}
{{--</div>--}}
<div class="form-group">
    {!! Form::label('Phone','Telefone:') !!}
    {!! Form::text('phone',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Address','Endereço:') !!}
    {!! Form::text('address',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('City','Cidade:') !!}
    {!! Form::text('city',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('State','Estado:') !!}
    {!! Form::text('state',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Zipcode','Código postal:') !!}
    {!! Form::text('zipcode',null,['class'=>'form-control']) !!}
</div>