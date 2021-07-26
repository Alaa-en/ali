

<!DOCTYPE html>
<html>

    <head>
        <title>الشركات</title>
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
                @error('name')
                      <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button style="color: white; background-color: #0b7a6a;margin: 10px;" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <a>إضافة شركة جديد
                        <i class="fas fa-folder-plus"></i>
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> إضافة شركة</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
             
                            <form class="flex flex-col w-full" method="POST" action="{{ route('companies.store') }}">
                       
                                @csrf
                
                                <div class="mb-3">
                                    <label style="color: black" class="form-label">إسم الشركة</label>
                                    <input name="name" type="text" class="form-control">
                                   
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
                        <a href="driveboys" class="list-group-item list-group-item-action">التباعين</a>
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
                                <th scope="col">إسم الشركة</th>
                                <th scope="col">المسلسل</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($companies as $company )
                        
                            <tr>
                              
                                <td>
                                    <form method="POST" action="{{ route('companies.destroy',['id'=>$company->id]) }}">
                                       @csrf
                                       @method('DELETE')
                                        <button type="submit">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <a  class="btn"  href="{{ route('companies.edit',['id'=>$company->id]) }}">
                                        <button>
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </a>
                                </td>


                                <td>{{ $company->name }}</td>
                                <td>{{ $i++ }}</td>
                            </tr>
                                  
                            @endforeach  

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

@extends('layouts.footer');
</html>