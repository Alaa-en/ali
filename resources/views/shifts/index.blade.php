
<!DOCTYPE html>
<html>

<head>
    <title> الورديات </title>
 @extends('layouts.header')

<body>

    <div style="text-align: center; padding: 30px;">
        <h3>شركة ال عباس</h3>
        <h4>للنقل والتجارة والتوريدات</h4>
    </div>
    <div class="showItem">
        <!-- Button trigger modal -->
        <div class="row" style="text-align: right;">
            <div class="col-md-12">
                <button style="color: white; background-color: #0b7a6a;margin: 10px;" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <a>إضافة وردية جديدة
                        <i class="fas fa-folder-plus"></i>
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> إضافة وردية</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form style="text-align: right;" method="POST" action="{{ route('shifts.store') }}">
                                @csrf
                                <div class="mb-3">
                                    <label style="color: black" class="form-label">رقم الوردية </label>
                                    <input name="shiftNumber" type="text" class="form-control">
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

            <div class="row" style="flex-direction: row-reverse">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="index" class="list-group-item list-group-item-action">الرئيسية</a>
                        <a href="contractors" class="list-group-item list-group-item-action">المقاولون</a>
                        <a href="companies" class="list-group-item list-group-item-action">الشركات</a>
                        <a href="places" class="list-group-item list-group-item-action">أماكن التحميل </a>
                        <a href="navigations" class="list-group-item list-group-item-action">الملاحات</a>
                        <a href="payloads" class="list-group-item list-group-item-action">انواع الحمولة</a>
                        <a href="drivers" class="list-group-item list-group-item-action">السواقين</a>
                        <a href="driverboy" class="list-group-item list-group-item-action">التباعين</a>
                        <a href="carheads" class="list-group-item list-group-item-action">أرقام الوش</a>
                        <a href="trailers" class="list-group-item list-group-item-action">أرقام المقطورة</a>
                        <a href="users" class="list-group-item list-group-item-action"> المستخدمين</a>
                        <a href="maintenances" class="list-group-item list-group-item-action"> الصيانة</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">حذف</th>
                                <th scope="col">تعديل</th>
                                <th scope="col">عرض</th>
                                <th scope="col">رقم المقطورة</th>
                                <th scope="col"> رقم الوش</th>
                                <th scope="col">إسم السواق</th>
                                <th scope="col">رقم الوردية</th>
                                <th scope="col">المسلسل</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                           @foreach ($shifts as $shift)
                             <tr>
                                <td>
                                    <form method="POST" action="{{ route('shifts.destroy',['id'=>$shift->id]) }}">
                                      @csrf
                                      @method('DELETE')
                                       <button type="submit">
                                           <i class="fas fa-trash-alt"></i>
                                       </button>
                                   </form>
                                  </td>
                                  <td>
                                    <a href="{{ route('shifts.edit',['id'=>$shift->id] )}}">
                                      <button>
                                        <i class="fas fa-edit"></i>
                                      </button>
                                    </a>
                                  </td>
                                  <td>
                                    <a href="{{ route('shiftAccounts.index',['id'=>$shift->id] )}}">
                                      <button>
                                        <i class="fas fa-edit"></i>
                                      </button>
                                    </a>
                                  </td>


                                <td>{{ $shift->trailer->number }}</td>
                                <td>{{ $shift->carhead->number }}</td>
                                <td>{{ $shift->driver->name }}</td>
                                <td>{{ $shift->shiftNumber }}</td>
                                <td>{{ $count++ }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

   @extends('layouts.footer')
</body>


</html>