@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    تعديل رسوم دراسية
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">تعديل رسوم دراسية</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">تعديل رسوم دراسية</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@section('PageTitle')
    تعديل رسوم دراسية
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
<div class="card-body">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('Fees.update','test')}}" method="post" autocomplete="off">
        @method('PUT')
        @csrf
        <div class="form-row">
            <div class="form-group col">
                <label for="inputEmail4">أسم الرسوم</label>
                <input type="text" value="{{$fee->title }}" name="title" class="form-control">
                <input type="hidden" value="{{$fee->id}}" name="id" class="form-control">
            </div>

            {{-- <div class="form-group col">
                <label for="inputEmail4">الاسم باللغة الانجليزية</label>
                <input type="text" value="{{$fee->getTranslation('title','en')}}" name="title_en" class="form-control">
            </div> --}}


            <div class="form-group col">
                <label for="inputEmail4">المبلغ</label>
                <input type="number" value="{{$fee->amount}}" name="amount" class="form-control">
            </div>

        </div>


        <div class="form-row">

            <div class="form-group col">
                <label for="inputState">المرحلة الدراسية</label>
                <select class="custom-select mr-sm-2" name="Grade_id">
                    @foreach($Grades as $Grade)
                        <option value="{{ $Grade->id }}" {{$Grade->id == $fee->grade_id ? 'selected' : ""}}>{{ $Grade->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col">
                <label for="inputZip">الصف الدراسي</label>
                <select class="custom-select mr-sm-2" name="Classroom_id">
                    <option value="{{$fee->classroom_id}}">{{$fee->classroom->name_class}}</option>
                </select>
            </div>
            <div class="form-group col">
                <label for="inputZip">السنة الدراسية</label>
                <select class="custom-select mr-sm-2" name="year">
                    @php
                        $current_year = date("Y")
                    @endphp
                    @for($year=$current_year; $year<=$current_year +1 ;$year++)
                        <option value="{{ $year}}" {{$year == $fee->year ? 'selected' : ' '}}>{{ $year }}</option>
                    @endfor
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="inputAddress">ملاحظات</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1"
                        rows="4">{{$fee->description}}</textarea>
        </div>
        <br>

        <button type="submit" class="btn btn-primary">تاكيد</button>

    </form>

</div>
</div>
</div>
</div>
<!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection