@extends('master.mymaster')
@section('title',$title)
@section('body')


{{--        We are InoCrypt InfoSoft Software Company, well-known Web Development & Mobile App Development Company in Jabalpur(M.P.), India. We develop eye-catching websites, software applications, Android App Development and provides search engine optimization / Digital Marketing services to clients all over the world. We offers affordable Web Design,Mobile Application Development, SEO, Bulk SMS, Hosting, Logo Design, Graphic Design and Software Development Services.--}}

{{--         {{print_r($data)}}--}}

<?php //echo $title ?>
{{$data[0]}}

{{--        @foreach($data as $value)--}}

{{--            <h1>{{$value}}</h1>--}}

{{--            @endforeach--}}




    @endsection