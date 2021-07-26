
<!DOCTYPE html>
<html>

<head>
  <title>حساب وردية</title>
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
          <a>إغلاق الوردية
            <i class="fas fa-folder-minus"></i>
          </a>

        </button>
        <button style="color: white; background-color: #0b7a6a;margin: 10px;" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <a>إضافة نقلة جديدة
            <i class="fas fa-folder-plus"></i>
          </a>

        </button>

        <button style="color: white; background-color: #0b7a6a;margin: 10px;" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <a href="index.html"> الرئيسية
            <i class="fas fa-home"></i>
          </a>
        </button>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> إضافة نقلة جديدة</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div style="text-align: center;padding: 10px;">
                <h6>وردية رقم 8 لعام 2021</h6>
              </div>
              <form method="POST" action="{{ route('shiftAccounts.store') }}">
                @csrf
                <div class="row" style="flex-direction: row-reverse">
                 

                  <div class="col-md-4">
                    <div class="mb-3">
                      <input name="Polica" type="text" class="form-control" placeholder=" بوليصة ش">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <input name="contractorPolica" type="text" class="form-control" placeholder=" بوليصة م">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                        <label style="color: black" class="form-label"> المقاول </label>
                                    <select name="contractor" class="form-control">
                                        @foreach($contractors as $contractor)
                                        <option value="{{$contractor->id}}">{{$contractor->name}}</option>
                                        @endforeach
                                    </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                        <label style="color: black" class="form-label"> مكان التحميل </label>
                        <select name="placeUp" class="form-control">
                            @foreach($places as $place)
                            <option value="{{$place->id}}">{{$place->name}}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                        <label style="color: black" class="form-label"> مكان التعتيق </label>
                        <select name="placeDown" class="form-control">
                            @foreach($places as $place)
                            <option value="{{$place->id}}">{{$place->name}}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                        <label style="color: black" class="form-label"> الملاحة  </label>
                        <select name="navigation" class="form-control">
                            @foreach($navigations as $navigation)
                            <option value="{{$navigation->id}}">{{$navigation->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                        <label style="color: black" class="form-label"> رقم الوردية  </label>
                        <select name="shift" class="form-control">
                           
                            <option value="{{$shifts->id}}">{{$shifts->shiftNumber}}</option>
                           
                        </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                        <label style="color: black" class="form-label"> الحمولة  </label>
                        <select name="payload" class="form-control">
                            @foreach($payloads as $payload)
                            <option value="{{$payload->id}}">{{$payload->name}}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <input name="weight" type="text" class="form-control" placeholder=" الوزن">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <input name="nolon" type="text" class="form-control" placeholder=" النولون">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <input name="value" type="text" class="form-control" placeholder=" القيمه" disabled>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <input name="covenant" type="text" class="form-control" placeholder=" العهدة">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <input name="office" type="text" class="form-control" placeholder="المكتب">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <input name="net" type="text" class="form-control" placeholder=" الصافي" disabled>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <button style="width: 100%" type="submit" class="btn btn-primary">حفظ</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
      </div>
      <div>
        <div class="row" style="text-align: center;padding-bottom: 20px;flex-direction: row-reverse">
          <div class="col-md-3">
            <h6>رقم الوش :
              <span>{{ $carheads->number }}</span>
            </h6>
          </div>
          <div class="col-md-3">
            <h6>رقم المقطورة :
              <span>{{ $trailers->number }}</span>
            </h6>
          </div>
          <div class="col-md-3">
            <h6> اسم العميل :
              <span>{{ $drivers->name }}</span>
            </h6>
          </div>
          <div class="col-md-3">
            <h6> وردية رقم :
              <span> {{ $shifts->shiftNumber }} لعام 2021</span>
            </h6>
          </div>
        </div>
        <table class="table table-borderless">
          <thead>
            <tr>
              <th scope="col">حذف</th>
              <th scope="col">تعديل</th>
              <th scope="col">الحمولة</th>
              <th scope="col">صافي</th>
              <th scope="col">مكتب</th>
              <th scope="col">العهدة</th>
              <th scope="col">القيمة</th>
              <th scope="col">النولون</th>
              <th scope="col">الوزن</th>
              <th scope="col">الملاحة</th>
              <th scope="col">مكان التعتيق</th>
              <th scope="col">مكان التحميل</th>
              <th scope="col">المقاول</th>
              <th scope="col">بوليصة م</th>
              <th scope="col">بوليصة ش</th>
              <th scope="col">التاريخ</th>
              <th scope="col">المسلسل</th>
            </tr>
          </thead>
          <tbody>
           @foreach ($shiftAccounts as $shiftAccount)
               
              
            <tr>
              <td>
                <a href="">
                  <button>
                    <i class="fas fa-trash-alt"></i>
                  </button>
                </a>
              </td>
              <td>
                <a href="">
                  <button>
                    <i class="fas fa-edit"></i>
                  </button>
                </a>
              </td>
              <td> {{ $shiftAccount->payload->name }}</td>
              <td>{{ ($shiftAccount->nolon * $shiftAccount->weight) - ($shiftAccount->covenant + $shiftAccount->Office)}}</td>
              <td>{{ $shiftAccount->Office}}</td>
              <td>{{ $shiftAccount->covenant}}</td>
              <td>{{$shiftAccount->nolon * $shiftAccount->weight}} </td>
              <td>{{ $shiftAccount->nolon}}</td>
              <td>{{ $shiftAccount->weight}}</td>
              <td> {{ $shiftAccount->navigation->name }}</td>
              <td>{{ $shiftAccount->placeup->name }}</td>
              <td>{{ $shiftAccount->placedown->name }}</td>
              <td>{{ $shiftAccount->contractor->name }}</td>
              <td>{{ $shiftAccount->contractorpolicy }}</td>
              <td>{{ $shiftAccount->Billoflading}}</td>
              {{-- <td>{{ \Carbon\Carbon::parse($shiftAccount->from_date)->format('d/m/Y')}} --}}
                <td>{{$shiftAccount->updated_at->toDateString()}}</td>
             {{-- <td>{{ $shiftAccount->updated_at->format('Y-m-d') }}</td> --}}
            </td>
              <td>{{ $count++ }}</td>
            </tr>
            @endforeach
            



            <tr style="background-color: #0b7a6a;color: white">

              <td></td>
              <td></td>
              <td>الاجمالي</td>
              <td>{{ $net }}</td>
              <td>{{ $office }}</td>
              <td>{{ $covenant }}</td>
              <td>{{ $value }}</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="row" style="padding: 30px 0px;text-align: center;">
      <div class="col-lg-4 col-md-6 co-sm-12">
        <h6>الصيانة</h6>
        <table class="table">
          <thead>
            <th>مبلغ الصيانة</th>
            <th>مكان الصيانة</th>
            <th>رقم الصيانة</th>

          </thead>
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-lg-4 col-md-6 co-sm-12">
        <h6>مصروفات نقل</h6>
        <table class="table">
          <thead>
            <th> المبلغ</th>
            <th> البيان</th>
            <th> الحساب</th>

          </thead>
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-lg-4 col-md-6 co-sm-12">
        <h6>الاجمالي</h6>
        <table class="table">
          <thead>
            <th> الصافي</th>
            <th> مديونية</th>
            <th> مصروفات نقل</th>
            <th> حساب الكرت</th>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>


  </div>
 @extends('layouts.footer')
</body>


</html>