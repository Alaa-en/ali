

<!DOCTYPE html>
<html>

    <head>
        <title>انواع الحمولة</title>
        @extends('layouts.header')   
  
<body>

    <div style="text-align: center; padding: 30px;">
        <h3>شركة ال عباس</h3>
        <h4>للنقل والتجارة والتوريدات</h4>
    </div>
    <div class="container">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> إضافة وردية</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form style="text-align: right;" method="POST" action="{{ route('shifts.update',['id'=> $shift->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label style="color: black" class="form-label">رقم الوردية </label>
                            <input name="shiftNumber" value="{{ $shift->shiftNumber }}"  type="text" class="form-control">
                        </div>
                        <div class="mb-3">

                            <label style="color: black" class="form-label"> اسم السواق </label>
                            <select name="driver" class="form-control">
                                @foreach($drivers as $driver)
                                <option value="{{$driver->id}}">{{$driver->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label style="color: black" class="form-label"> رقم الوش </label>
                            <select name="carhead" class="form-control">
                                @foreach($carheads as $carhead)
                                <option value="{{$carhead->id}}">{{$carhead->number}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label style="color: black" class="form-label"> رقم المقطورة </label>
                            <select name="trailer" class="form-control">
                                @foreach($trailers as $trailer)
                                <option value="{{$trailer->id}}">{{$trailer->number}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <button style="width: 100%" type="submit" class="btn btn-primary">حفظ</button>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
        
    </div>

</body>

@extends('layouts.footer');
</html>