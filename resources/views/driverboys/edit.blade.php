

<!DOCTYPE html>
<html>

    <head>
        <title>التباعين</title>
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
                           
                            <form class="flex flex-col w-full" method="POST" action="{{ route('driveboys.update',['id'=>$driverboy->id])}}">
                                @method('put')
                     
                                @csrf
                
                                <div class="mb-3">
                                    <label style="color: black" class="form-label">اسم المقاول</label>
                                    <input name="name" value="{{ $driverboy->name}}" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label style="color: black" class="form-label">رقم الهاتف</label>
                                    <input name="phone" value="{{ $driverboy->phone}}" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label style="color: black" class="form-label">رقم الهوية</label>
                                    <input name="identity" value="{{ $driverboy->identity}}" type="text" class="form-control">
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