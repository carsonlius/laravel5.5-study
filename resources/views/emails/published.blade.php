@component('mail::message')
# Introduction

{{$user->name}}用户开始使用markdown填写邮件

@component('mail::button', ['url' => 'http://laravel.carsonlius.cn'])
Button Text
@endcomponent

@component('mail::panel')
正常的描述阶段
 
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
