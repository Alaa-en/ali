

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
        <!-- Button trigger modal -->
        <div class="row" style="text-align: right;">
            
           
            <div >
               
                        
                        <div >
                           
                            <form class="flex flex-col w-full" method="POST" action="{{ route('maintenances.update',['id'=>$maintenance->id])}}">
                                @method('put')
                     
                                @csrf
                
                                <div class="mb-3">
                                    <label style="color: black" class="form-label"> رقم الوردية</label>
                                    <select name="maintenance" class="form-control">
                                        @foreach($shifts as $shift)
                                        <option value="{{$shift->id}}" >{{$shift->shiftNumber}}</option>
                                        @endforeach
                                    </select>
                                  </div>
                                  <div class="mb-3">
                                    <label style="color: black" class="form-label">مكان الصيانة </label>
                                    <input name="place" value="{{ $maintenance->maintenancePlace }}" type="text" class="form-control">
                                  </div>
                                  <div class="mb-3">
                                    <label style="color: black" class="form-label"> المبلغ</label>
                                    <input name="price" value="{{ $maintenance->amount }}"  type="text" class="form-control">
                                  </div>
                                  <div class="mb-3">
                                    <label style="color: black" class="form-label"> التاريخ</label>
                                    <input name="date" value="{{ $maintenance->date }}"  type="date" class="form-control">
                                  </div>
                                  <div class="mb-3">
                                    <label style="color: black" class="form-label"> البيان</label>
                                    <textarea name="notes" class="form-control" style="height: 100px">{{ $maintenance->statement}} </textarea>
                                  </div>
                  
                                  <div class="mb-3">
                                    <button style="width: 100%" type="submit" class="btn btn-primary">حفظ</button>
                  
                                  </div>
                            </form>
                        </div>

                 
            </div>

    </div>

</body>

@extends('layouts.footer');
</html>