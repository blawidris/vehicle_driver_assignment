 <tr>
     {{-- <th scope="row">{{$k}}</th> --}}
     <td>{{ $driver->name }}</td>
     <td>{{ $driver->phone }}</td>
     <td>{{ $driver->driver_licensce }}</td>
     <td>
         <div class="d-inline-flex align-items-center gap-3">
             {{-- <button class="btn btn-primary fs-6"><i class="bi bi-eye"></i></button> --}}
             <a href='{{ route('driver.view', ['slug' => Str::slug($driver->name), 'id' => $driver->id]) }}'
                 class="btn btn-warning fs-6"><i class="bi bi-eye"></i></a>
             <a href='{{ route('driver.edit', ['slug' => Str::slug($driver->name), 'id' => $driver->id]) }}' class="btn btn-warning fs-6"><i
                     class="bi bi-pencil"></i></a>
             <button class="btn btn-danger fs-6"><i class="bi bi-x"></i></button>
         </div>
     </td>
 </tr>
