
<!DOCTYPE html>
<html>

<head>
  <title>التباعين</title>
  @extends('layouts.header')

<body>
  <!-- <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-brand">
        <a href="#">
          <h1 style="color: black"> أل عباس</h1>
        </a>
      </div>
      <div class="d-flex">
        <button type="button"><i class="fas fa-cogs"></i>&nbsp;&nbsp; الإعدادات</button>   
  <button type="button">
    <i class="fas fa-times-circle"></i>&nbsp;&nbsp;خروج</button>
  </div>
  </div>
  </div>
  </nav> -->
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
        @error('phone')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        @error('identity')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button style="color: white; background-color: #0b7a6a;margin: 10px;" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <a>إضافة تباع جديد
            <i class="fas fa-folder-plus"></i>
        </button>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> إضافة تباع</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form style="text-align: right;" method="POST" action="{{ route('driveboys.store') }}">
                @csrf
                <div class="mb-3">
                  <label style="color: black" class="form-label">إسم التباع</label>
                  <input name="name" type="text" class="form-control">
                </div>
                <div class="mb-3">
                  <label style="color: black" class="form-label">رقم التليفون</label>
                  <input name="phone" type="text" class="form-control">
                </div>
                <div class="mb-3">
                  <label style="color: black" class="form-label"> رقم البطاقة</label>
                  <input name="identity" type="text" class="form-control">
                </div>

                <div class="mb-3">
                  <button style="width: 100%" type="submit" class="btn btn-primary">حفظ</button>

                </div>
              </form>
            </div>

          </div>
        </div>
      </div>

      <!-- <form class="rightsearch suppliersearch">
          <ul>
              <li>
      <div class="input-group">
          <input type="search" id="form1" placeholder="بحث بإسم المستخدم" />
        <button type="button" disabled>
          <i class="fas fa-search"></i>
        </button>
      </div>
                   </li>  
              <li><div class="input-group">
          <input type="search" id="form1" placeholder="بحث  برقم الموبايل" />
        <button type="button" disabled>
          <i class="fas fa-search"></i>
        </button>
      </div>
                   </li> 
                   <li>
                    <div class="input-group">
         <button type="submit">
            بحث <i class="fas fa-search"></i>
         </button>
       </div>
                    </li>
              </ul>
              </form> -->

      <div class="row" style="flex-direction: row-reverse">
        <div class="col-md-3">
          <div class="list-group">
            <a href="index" class="list-group-item list-group-item-action">الرئيسية</a>
            <a href="contractors" class="list-group-item list-group-item-action">المقاولون</a>
            <a href="companies" class="list-group-item list-group-item-action">الشركات</a>
            <a href="places" class="list-group-item list-group-item-action">أماكن التحميل </a>
            <a href="navigations" class="list-group-item list-group-item-action">الملاحات</a>
            <a href="payload" class="list-group-item list-group-item-action">انواع الحمولة</a>
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
                <th scope="col">الرقم القومي</th>
                <th scope="col">التليفون</th>
                <th scope="col">إسم التباع</th>
                <th scope="col">المسلسل</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($driverboys as $driverboy)
             
              <tr>
                <td>
                  <form method="POST" action="{{ route('driveboys.destroy',['id'=>$driverboy->id]) }}">
                    @csrf
                    @method('DELETE')
                     <button type="submit">
                         <i class="fas fa-trash-alt"></i>
                     </button>
                 </form>
                </td>
                <td>
                  <a  class="btn"  href="{{ route('driveboys.edit',['id'=>$driverboy->id]) }}">
                    <button>
                        <i class="fas fa-edit"></i>
                    </button>
                </a>
                </td>

                <td>{{ $driverboy->identity}}</td>
                <td>{{ $driverboy->phone }}</td>
                <td>{{ $driverboy->name}}</td>
                <td>{{ $i++ }}</td>
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