

<!DOCTYPE html>
<html>

    <head>
        <title>المستخدمين</title>
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
                           
                            <form class="flex flex-col w-full" method="POST" action="{{ route('users.update',['id'=>$user->id])}}">
                                @method('put')
                     
                                @csrf
                
                                <div class="mb-3">
                                    <label style="color: black" class="form-label">إسم المستخدم</label>
                                    <input name="name" value="{{$user->name}}" type="text" class="form-control">
                                  </div>
                                  <div class="mb-3">
                                    <label style="color: black" class="form-label">البريد الالكتروني </label>
                                    <input name="email" value="{{$user->email}}" type="email" class="form-control">
                                  </div>
                                  <div class="mb-3">
                                    <label style="color: black" class="form-label">رقم التليفون</label>
                                    <input name="phone" value="{{$user->phone}}" type="text" class="form-control">
                                  </div>
                                  <div class="mb-3">
                                      <label style="color: black" class="form-label"> العنوان</label>
                                      <input name="adress" value="{{$user->adress}}" type="text" class="form-control">
                                  </div>
                                  <div class="mb-3">
                                  <label style="color: black" class="form-label"> الرقم السري</label>
                                  <input name="password" value="{{$user->password}}" type="text" class="form-control">
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